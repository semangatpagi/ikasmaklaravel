<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    /**
     * Menyimpan riwayat pendidikan baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'school_name' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'field_of_study' => 'required|string|max:255',
            'start_year' => 'required|integer|min:1950|max:' . date('Y'),
            'end_year' => 'nullable|integer|min:1950|max:' . (date('Y') + 10),
            'is_current' => 'sometimes|boolean',
            'alamat_sekolah' => 'nullable|string',
            'kota' => 'nullable|string|max:255',
            'provinsi' => 'nullable|string|max:255',
            'description' => 'nullable|string'
        ]);

        $user = Auth::user();
        $isCurrent = $request->has('is_current') && $request->is_current;

        // Jika ini pendidikan saat ini, update semua pendidikan lain menjadi bukan saat ini
        if ($isCurrent) {
            $user->educations()->where('is_current', true)->update(['is_current' => false]);
            
            // Update informasi pendidikan di tabel users
            $user->update([
                'sekolah' => $request->school_name,
                'jurusan' => $request->field_of_study,
                'gelar' => $request->degree
            ]);
        }

        // Buat riwayat pendidikan baru
        try {
            $education = new Education([
                'school_name' => $request->school_name,
                'degree' => $request->degree,
                'field_of_study' => $request->field_of_study,
                'start_year' => $request->start_year,
                'end_year' => $isCurrent ? null : $request->end_year,
                'is_current' => $isCurrent,
                'alamat_sekolah' => $request->alamat_sekolah,
                'kota' => $request->kota,
                'provinsi' => $request->provinsi,
                'description' => $request->description
            ]);

            $user->educations()->save($education);

            return redirect()->route('profile')->with('success', 'Riwayat pendidikan berhasil ditambahkan');
        } catch (\Exception $e) {
            Log::error('Error adding education', [
                'user_id' => $user->id, 
                'error' => $e->getMessage()
            ]);
            
            return redirect()->route('profile')->with('error', 'Gagal menambahkan riwayat pendidikan. Silakan coba lagi.');
        }
    }

    /**
     * Memperbarui riwayat pendidikan
     */
    public function update(Request $request, Education $education)
    {
        // Otorisasi: Hanya pemilik yang dapat mengubah
        if ($education->user_id !== Auth::id()) {
            return redirect()->route('profile')->with('error', 'Anda tidak memiliki izin untuk mengubah data ini');
        }

        $request->validate([
            'school_name' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'field_of_study' => 'required|string|max:255',
            'start_year' => 'required|integer|min:1950|max:' . date('Y'),
            'end_year' => 'nullable|integer|min:1950|max:' . (date('Y') + 10),
            'is_current' => 'sometimes|boolean',
            'alamat_sekolah' => 'nullable|string',
            'kota' => 'nullable|string|max:255',
            'provinsi' => 'nullable|string|max:255',
            'description' => 'nullable|string'
        ]);

        $user = Auth::user();
        $isCurrent = $request->has('is_current') && $request->is_current;
        $wasCurrent = $education->is_current;
        
        // Jika beralih dari bukan current ke current, update pendidikan lain
        if ($isCurrent && !$wasCurrent) {
            $user->educations()->where('id', '!=', $education->id)
                 ->where('is_current', true)
                 ->update(['is_current' => false]);
        }

        // Jika ini adalah pendidikan saat ini, update informasi di tabel users
        if ($isCurrent) {
            $user->update([
                'sekolah' => $request->school_name,
                'jurusan' => $request->field_of_study,
                'gelar' => $request->degree
            ]);
        }
        // Jika ini ADALAH pendidikan yang tadinya current, tapi sekarang bukan
        else if (!$isCurrent && $wasCurrent) {
            // Cari pendidikan terbaru yang is_current = true
            $latestCurrentEducation = $user->educations()
                                     ->where('id', '!=', $education->id)
                                     ->where('is_current', true)
                                     ->first();
            
            if ($latestCurrentEducation) {
                $user->update([
                    'sekolah' => $latestCurrentEducation->school_name,
                    'jurusan' => $latestCurrentEducation->field_of_study,
                    'gelar' => $latestCurrentEducation->degree
                ]);
            }
        }

        // Update riwayat pendidikan
        try {
            $education->update([
                'school_name' => $request->school_name,
                'degree' => $request->degree,
                'field_of_study' => $request->field_of_study,
                'start_year' => $request->start_year,
                'end_year' => $isCurrent ? null : $request->end_year,
                'is_current' => $isCurrent,
                'alamat_sekolah' => $request->alamat_sekolah,
                'kota' => $request->kota,
                'provinsi' => $request->provinsi,
                'description' => $request->description
            ]);

            return redirect()->route('profile')->with('success', 'Riwayat pendidikan berhasil diperbarui');
        } catch (\Exception $e) {
            Log::error('Error updating education', [
                'user_id' => $user->id, 
                'education_id' => $education->id,
                'error' => $e->getMessage()
            ]);
            
            return redirect()->route('profile')->with('error', 'Gagal memperbarui riwayat pendidikan. Silakan coba lagi.');
        }
    }

    /**
     * Menghapus riwayat pendidikan
     */
    public function destroy(Education $education)
    {
        // Otorisasi: Hanya pemilik yang dapat menghapus
        if ($education->user_id !== Auth::id()) {
            return redirect()->route('profile')->with('error', 'Anda tidak memiliki izin untuk menghapus data ini');
        }

        $wasCurrent = $education->is_current;
        $user = Auth::user();

        try {
            $education->delete();

            // Jika yang dihapus adalah pendidikan saat ini, update dengan pendidikan terbaru yang is_current = true
            if ($wasCurrent) {
                $latestCurrentEducation = $user->educations()
                                         ->where('is_current', true)
                                         ->first();
                
                if ($latestCurrentEducation) {
                    $user->update([
                        'sekolah' => $latestCurrentEducation->school_name,
                        'jurusan' => $latestCurrentEducation->field_of_study,
                        'gelar' => $latestCurrentEducation->degree
                    ]);
                }
            }

            return redirect()->route('profile')->with('success', 'Riwayat pendidikan berhasil dihapus');
        } catch (\Exception $e) {
            Log::error('Error deleting education', [
                'user_id' => $user->id, 
                'education_id' => $education->id,
                'error' => $e->getMessage()
            ]);
            
            return redirect()->route('profile')->with('error', 'Gagal menghapus riwayat pendidikan. Silakan coba lagi.');
        }
    }
}
