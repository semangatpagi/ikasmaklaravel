<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Menampilkan halaman profil dengan pagination untuk riwayat pekerjaan
     */
    public function show()
    {
        $user = auth()->user();
        
        // Load work experiences dengan pagination, maksimal 3 per halaman
        $workExperiences = $user->workExperiences()->orderBy('is_current', 'desc')
                                ->orderBy('end_year', 'desc')
                                ->orderBy('start_year', 'desc')
                                ->paginate(3, ['*'], 'work_page');
        
        return view('membership.profile', compact('user', 'workExperiences'));
    }

    /**
     * Update foto profil user
     */
    public function updatePhoto(Request $request)
    {
        // Validasi input
        $request->validate([
            'foto' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        $user = auth()->user();

        try {
            // Hapus foto lama jika ada
            if ($user->foto && Storage::disk('public')->exists($user->foto)) {
                Storage::disk('public')->delete($user->foto);
            }

            // Upload foto baru
            $foto = $request->file('foto');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $path = $foto->storeAs('fotos', $filename, 'public');
            
            // Update record user
            $user->foto = 'fotos/' . $filename;
            $user->save();

            // Log aktivitas
            \Log::info('User photo updated', [
                'user_id' => $user->id,
                'photo_path' => $user->foto
            ]);

            return redirect()->route('profile')->with('success', 'Foto profil berhasil diperbarui');
        } catch (\Exception $e) {
            \Log::error('Error updating user photo', [
                'user_id' => $user->id,
                'error' => $e->getMessage()
            ]);
            
            return redirect()->route('profile')->with('error', 'Gagal memperbarui foto profil. Silakan coba lagi.');
        }
    }

    /**
     * Update data profil pribadi user
     */
    public function update(Request $request)
    {
        // Debug: Log request data
        \Log::info('Profile update request data:', $request->all());
        
        $user = auth()->user();
        
        // Tentukan jenis form yang dikirim
        $formSource = $request->input('form_source', 'personal_form');
        
        try {
            if ($formSource === 'profesi_form') {
                // Validasi khusus form profesi
                $request->validate([
                    'pekerjaan' => ['nullable', 'string', 'max:255'],
                    'perusahaan' => ['nullable', 'string', 'max:255'],
                    'alamat_kantor' => ['nullable', 'string'],
                    'provinsi_kantor' => ['nullable', 'string'],
                    'kota_kantor' => ['nullable', 'string'],
                    'nama_usaha' => ['nullable', 'string', 'max:255'],
                    'bidang_usaha' => ['nullable', 'string', 'max:255'],
                ]);
                
                // Update hanya field terkait profesi
                $user->fill($request->only([
                    'pekerjaan', 'perusahaan', 'alamat_kantor',
                    'provinsi_kantor', 'kota_kantor', 'nama_usaha', 'bidang_usaha'
                ]));
                $user->save();
                
                // Log aktivitas
                \Log::info('User professional info updated', [
                    'user_id' => $user->id
                ]);
                
                return redirect()->route('profile')->with('success', 'Informasi profesional berhasil diperbarui');
            } else {
                // Validasi form informasi pribadi
                $request->validate([
                    'nama_lengkap' => ['required', 'string', 'max:255'],
                    'nama_panggilan' => ['required', 'string', 'max:50'],
                    'tempat_lahir' => ['nullable', 'string', 'max:100'],
                    'tanggal_lahir' => ['nullable', 'date'],
                    'alamat_rumah' => ['required', 'string'],
                    'provinsi_rumah' => ['required', 'string'],
                    'kota_rumah' => ['required', 'string'],
                    'whatsapp' => ['required', 'string', 'max:20'],
                    'facebook' => ['nullable', 'string', 'max:255'],
                    'instagram' => ['nullable', 'string', 'max:255'],
                    'linkedin' => ['nullable', 'string', 'max:255'],
                ]);
                
                // Update hanya field terkait informasi pribadi
                $user->fill($request->only([
                    'nama_lengkap', 'nama_panggilan', 'tempat_lahir', 'tanggal_lahir',
                    'alamat_rumah', 'provinsi_rumah', 'kota_rumah', 'whatsapp',
                    'facebook', 'instagram', 'linkedin'
                ]));
                $user->save();
                
                // Log aktivitas
                \Log::info('User personal info updated', [
                    'user_id' => $user->id
                ]);
                
                return redirect()->route('profile')->with('success', 'Informasi pribadi berhasil diperbarui');
            }
        } catch (\Exception $e) {
            \Log::error('Error updating user profile', [
                'user_id' => $user->id,
                'error' => $e->getMessage(),
                'form_type' => $formSource
            ]);
            
            return redirect()->route('profile')->with('error', 'Gagal memperbarui informasi. Silakan coba lagi.');
        }
    }
} 