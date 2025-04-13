<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class WorkExperienceController extends Controller
{
    /**
     * Menyimpan riwayat pekerjaan baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'position' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'start_year' => 'required|integer|min:1950|max:' . date('Y'),
            'end_year' => 'nullable|integer|min:1950|max:' . date('Y'),
            'is_current' => 'sometimes|boolean',
            'alamat_kantor' => 'nullable|string',
            'kota' => 'nullable|string|max:255',
            'provinsi' => 'nullable|string|max:255',
            'description' => 'nullable|string'
        ]);

        $user = Auth::user();
        $isCurrent = $request->has('is_current') && $request->is_current;

        // Jika ini pekerjaan saat ini, update semua pekerjaan lain menjadi bukan saat ini
        if ($isCurrent) {
            $user->workExperiences()->where('is_current', true)->update(['is_current' => false]);
            
            // Update informasi pekerjaan di tabel users
            $user->update([
                'pekerjaan' => $request->position,
                'perusahaan' => $request->company_name,
                'alamat_kantor' => $request->alamat_kantor,
                'kota_kantor' => $request->kota,
                'provinsi_kantor' => $request->provinsi
            ]);
        }

        // Buat riwayat pekerjaan baru
        try {
            $experience = new WorkExperience([
                'position' => $request->position,
                'company_name' => $request->company_name,
                'start_year' => $request->start_year,
                'end_year' => $isCurrent ? null : $request->end_year,
                'is_current' => $isCurrent,
                'alamat_kantor' => $request->alamat_kantor,
                'kota' => $request->kota,
                'provinsi' => $request->provinsi,
                'description' => $request->description
            ]);

            $user->workExperiences()->save($experience);

            return redirect()->route('profile')->with('success', 'Riwayat pekerjaan berhasil ditambahkan');
        } catch (\Exception $e) {
            Log::error('Error adding work experience', [
                'user_id' => $user->id, 
                'error' => $e->getMessage()
            ]);
            
            return redirect()->route('profile')->with('error', 'Gagal menambahkan riwayat pekerjaan. Silakan coba lagi.');
        }
    }

    /**
     * Memperbarui riwayat pekerjaan
     */
    public function update(Request $request, WorkExperience $workExperience)
    {
        // Otorisasi: Hanya pemilik yang dapat mengubah
        if ($workExperience->user_id !== Auth::id()) {
            return redirect()->route('profile')->with('error', 'Anda tidak memiliki izin untuk mengubah data ini');
        }

        $request->validate([
            'position' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'start_year' => 'required|integer|min:1950|max:' . date('Y'),
            'end_year' => 'nullable|integer|min:1950|max:' . date('Y'),
            'is_current' => 'sometimes|boolean',
            'alamat_kantor' => 'nullable|string',
            'kota' => 'nullable|string|max:255',
            'provinsi' => 'nullable|string|max:255',
            'description' => 'nullable|string'
        ]);

        $user = Auth::user();
        $isCurrent = $request->has('is_current') && $request->is_current;
        $wasCurrent = $workExperience->is_current;
        
        // Jika beralih dari bukan current ke current, update pekerjaan lain
        if ($isCurrent && !$wasCurrent) {
            $user->workExperiences()->where('id', '!=', $workExperience->id)
                 ->where('is_current', true)
                 ->update(['is_current' => false]);
        }

        // Jika ini adalah pekerjaan saat ini, update informasi di tabel users
        if ($isCurrent) {
            $user->update([
                'pekerjaan' => $request->position,
                'perusahaan' => $request->company_name,
                'alamat_kantor' => $request->alamat_kantor,
                'kota_kantor' => $request->kota,
                'provinsi_kantor' => $request->provinsi
            ]);
        }
        // Jika ini ADALAH pekerjaan yang tadinya current, tapi sekarang bukan
        else if (!$isCurrent && $wasCurrent) {
            // Kosongkan atau reset informasi pekerjaan di users table
            // atau mengupdate dengan pekerjaan terbaru yang is_current = true
            $latestCurrentJob = $user->workExperiences()
                                     ->where('id', '!=', $workExperience->id)
                                     ->where('is_current', true)
                                     ->first();
            
            if ($latestCurrentJob) {
                $user->update([
                    'pekerjaan' => $latestCurrentJob->position,
                    'perusahaan' => $latestCurrentJob->company_name,
                    'alamat_kantor' => $latestCurrentJob->alamat_kantor,
                    'kota_kantor' => $latestCurrentJob->kota,
                    'provinsi_kantor' => $latestCurrentJob->provinsi
                ]);
            }
        }

        // Update riwayat pekerjaan
        try {
            $workExperience->update([
                'position' => $request->position,
                'company_name' => $request->company_name,
                'start_year' => $request->start_year,
                'end_year' => $isCurrent ? null : $request->end_year,
                'is_current' => $isCurrent,
                'alamat_kantor' => $request->alamat_kantor,
                'kota' => $request->kota,
                'provinsi' => $request->provinsi,
                'description' => $request->description
            ]);

            return redirect()->route('profile')->with('success', 'Riwayat pekerjaan berhasil diperbarui');
        } catch (\Exception $e) {
            Log::error('Error updating work experience', [
                'user_id' => $user->id, 
                'experience_id' => $workExperience->id,
                'error' => $e->getMessage()
            ]);
            
            return redirect()->route('profile')->with('error', 'Gagal memperbarui riwayat pekerjaan. Silakan coba lagi.');
        }
    }

    /**
     * Menghapus riwayat pekerjaan
     */
    public function destroy(WorkExperience $workExperience)
    {
        // Otorisasi: Hanya pemilik yang dapat menghapus
        if ($workExperience->user_id !== Auth::id()) {
            return redirect()->route('profile')->with('error', 'Anda tidak memiliki izin untuk menghapus data ini');
        }

        $wasCurrent = $workExperience->is_current;
        $user = Auth::user();

        try {
            $workExperience->delete();

            // Jika yang dihapus adalah pekerjaan saat ini, update dengan pekerjaan terbaru yang is_current = true
            if ($wasCurrent) {
                $latestCurrentJob = $user->workExperiences()
                                         ->where('is_current', true)
                                         ->first();
                
                if ($latestCurrentJob) {
                    $user->update([
                        'pekerjaan' => $latestCurrentJob->position,
                        'perusahaan' => $latestCurrentJob->company_name,
                        'alamat_kantor' => $latestCurrentJob->alamat_kantor,
                        'kota_kantor' => $latestCurrentJob->kota,
                        'provinsi_kantor' => $latestCurrentJob->provinsi
                    ]);
                }
            }

            return redirect()->route('profile')->with('success', 'Riwayat pekerjaan berhasil dihapus');
        } catch (\Exception $e) {
            Log::error('Error deleting work experience', [
                'user_id' => $user->id, 
                'experience_id' => $workExperience->id,
                'error' => $e->getMessage()
            ]);
            
            return redirect()->route('profile')->with('error', 'Gagal menghapus riwayat pekerjaan. Silakan coba lagi.');
        }
    }
}
