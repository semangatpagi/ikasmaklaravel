<?php

namespace App\Http\Controllers\Membership;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumniController extends Controller
{
    /**
     * Display the alumni list with filtering capabilities.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Mendapatkan parameter pencarian dari request
        $search = $request->input('search');
        $angkatan = $request->input('angkatan');
        $kota = $request->input('kota');

        // Query dasar untuk alumni
        $alumniQuery = User::query();

        // Filter berdasarkan pencarian nama
        if ($search) {
            $alumniQuery->where(function($query) use ($search) {
                $query->where('nama_lengkap', 'like', "%{$search}%")
                      ->orWhere('nama_panggilan', 'like', "%{$search}%");
            });
        }

        // Filter berdasarkan angkatan
        if ($angkatan) {
            $alumniQuery->where('angkatan', $angkatan);
        }

        // Filter berdasarkan kota
        if ($kota) {
            $alumniQuery->where('kota_rumah', $kota);
        }

        // Ambil data alumni dengan pagination
        $alumni = $alumniQuery->paginate(20)->withQueryString();

        // Dapatkan list angkatan untuk dropdown
        $angkatan_list = User::select('angkatan')
                            ->whereNotNull('angkatan')
                            ->distinct()
                            ->orderBy('angkatan')
                            ->pluck('angkatan')
                            ->toArray();

        // Dapatkan list kota untuk dropdown
        $kota_list = User::select('kota_rumah')
                        ->whereNotNull('kota_rumah')
                        ->distinct()
                        ->orderBy('kota_rumah', 'asc')
                        ->pluck('kota_rumah')
                        ->toArray();

        // Return view dengan data yang diperlukan
        return view('membership.alumni', compact('alumni', 'angkatan_list', 'kota_list'));
    }
} 