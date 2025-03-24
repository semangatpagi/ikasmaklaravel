<x-layouts.app :title="__('Menunggu Verifikasi Admin')">
    <div class="flex h-full w-full flex-1 flex-col items-center justify-center gap-4 rounded-xl p-8">
        <div class="max-w-lg text-center">
            <svg class="mx-auto h-24 w-24 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
            </svg>
            
            <h2 class="mt-4 text-2xl font-bold text-gray-900 dark:text-white">Menunggu Verifikasi Admin</h2>
            
            <p class="mt-4 text-gray-600 dark:text-gray-400">
                Akun Anda telah berhasil terdaftar dan email Anda telah diverifikasi. 
                Saat ini, akun Anda sedang menunggu verifikasi dari admin ikatan alumni.
            </p>
            
            <p class="mt-4 text-gray-600 dark:text-gray-400">
                Proses verifikasi biasanya memakan waktu 1-2 hari kerja. Setelah akun Anda diverifikasi, 
                Anda akan dapat mengakses semua fitur anggota.
            </p>
            
            <p class="mt-6 text-sm text-gray-500 dark:text-gray-500">
                Jika Anda memiliki pertanyaan, silakan hubungi admin di 
                <a href="mailto:admin@ikasmak.org" class="text-blue-600 hover:underline dark:text-blue-400">admin@ikasmak.org</a>
            </p>
            
            <div class="mt-8">
                <a href="{{ route('dashboard') }}" class="inline-flex items-center rounded-md bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:bg-blue-500 dark:hover:bg-blue-600">
                    Kembali ke Dashboard
                </a>
            </div>
        </div>
    </div>
</x-layouts.app> 