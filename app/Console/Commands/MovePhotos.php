<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class MovePhotos extends Command
{
    protected $signature = 'photos:move';
    protected $description = 'Move photos from private/public/fotos to public/fotos';

    public function handle()
    {
        $this->info('Starting to move photos...');
        
        // Path lengkap di filesystem
        $sourcePath = storage_path('app/private/public/fotos');
        $destinationPath = storage_path('app/public/fotos');
        
        // Cek jika direktori sumber ada
        if (!is_dir($sourcePath)) {
            $this->error("Source directory ($sourcePath) does not exist!");
            return 1;
        }

        // Pastikan direktori tujuan ada
        if (!is_dir($destinationPath)) {
            mkdir($destinationPath, 0755, true);
            $this->info("Created destination directory ($destinationPath)");
        }

        // Ambil semua file dari direktori sumber
        $files = scandir($sourcePath);
        $files = array_filter($files, function($file) {
            return !in_array($file, ['.', '..']);
        });
        
        $this->info('Found ' . count($files) . ' files to move');

        // Pindahkan setiap file
        $moved = 0;
        foreach ($files as $filename) {
            $sourceFile = $sourcePath . '/' . $filename;
            $destFile = $destinationPath . '/' . $filename;
            
            if (copy($sourceFile, $destFile)) {
                $moved++;
                $this->info("Moved: $filename");
                
                // Update database
                $this->updateDatabase($filename);
            } else {
                $this->error("Failed to move: $filename");
            }
        }

        $this->info("Successfully moved $moved out of " . count($files) . " files");
        
        // Update database untuk semua user yang masih memiliki path foto yang salah
        $this->updateAllUserPhotoPaths();
        
        return 0;
    }

    protected function updateDatabase($filename)
    {
        try {
            // Cari user dengan path foto yang sama
            $user = User::where('foto', 'like', '%' . $filename)->first();
            if ($user) {
                $oldPath = $user->foto;
                $user->foto = 'fotos/' . $filename;
                $user->save();
                $this->info("Updated database path for user: {$user->id} from {$oldPath} to fotos/{$filename}");
            }
        } catch (\Exception $e) {
            $this->error("Error updating database for file {$filename}: " . $e->getMessage());
        }
    }
    
    protected function updateAllUserPhotoPaths()
    {
        $this->info("Checking all users for incorrect photo paths...");
        
        try {
            // Cari semua user dengan path foto yang mengandung 'private'
            $users = User::where('foto', 'like', '%private%')->get();
            
            foreach ($users as $user) {
                $oldPath = $user->foto;
                // Ambil hanya filename dari path lengkap
                $parts = explode('/', $oldPath);
                $filename = end($parts);
                
                $user->foto = 'fotos/' . $filename;
                $user->save();
                
                $this->info("Updated user {$user->id} photo path from {$oldPath} to {$user->foto}");
            }
            
            $this->info("Updated " . count($users) . " user photo paths");
        } catch (\Exception $e) {
            $this->error("Error updating user photo paths: " . $e->getMessage());
        }
    }
} 