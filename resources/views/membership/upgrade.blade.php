<x-layouts.app :title="__('Upgrade Keanggotaan')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl p-4">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Upgrade ke Member+</h1>
            <a href="{{ route('dashboard') }}" class="inline-flex items-center rounded-md bg-gray-600 px-4 py-2 text-sm font-semibold text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 dark:bg-gray-500 dark:hover:bg-gray-600">
                Kembali ke Dashboard
            </a>
        </div>

        @if (session('success'))
            <div class="mb-4 rounded-md bg-green-50 p-4 dark:bg-green-900/30">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-green-800 dark:text-green-200">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        @endif

        @if (session('error'))
            <div class="mb-4 rounded-md bg-red-50 p-4 dark:bg-red-900/30">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-red-800 dark:text-red-200">{{ session('error') }}</p>
                    </div>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <!-- Informasi Keanggotaan -->
            <div class="overflow-hidden rounded-lg border border-gray-200 bg-white shadow-md dark:border-gray-700 dark:bg-gray-800">
                <div class="border-b border-gray-200 bg-gray-50 px-4 py-3 dark:border-gray-700 dark:bg-gray-700">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">Keanggotaan Premium</h3>
                </div>
                <div class="p-4">
                    <div class="mb-6 flex justify-center">
                        <div class="rounded-full bg-purple-100 p-3 text-purple-600 dark:bg-purple-900 dark:text-purple-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                    </div>

                    <h4 class="mb-4 text-center text-xl font-bold text-gray-900 dark:text-white">Manfaat Member+</h4>

                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-base text-gray-700 dark:text-gray-300">Akses ke program mentorship eksklusif dari alumni senior</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-base text-gray-700 dark:text-gray-300">Konten eksklusif berupa webinar, tutorial, dan materi pengembangan diri</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-base text-gray-700 dark:text-gray-300">Prioritas dalam kegiatan networking dan acara khusus ikatan alumni</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-base text-gray-700 dark:text-gray-300">Diskon khusus untuk merchandise dan kegiatan berbayar</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-base text-gray-700 dark:text-gray-300">Jejaring profesional yang lebih luas dengan akses ke direktori lengkap alumni</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 rounded-lg bg-blue-50 p-4 dark:bg-blue-900/30">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-blue-700 dark:text-blue-300">
                                    Biaya keanggotaan Member+ adalah <strong>Rp 150.000/tahun</strong>. Semua dana akan digunakan untuk kegiatan pengembangan Ikatan Alumni.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Pembayaran -->
            <div class="overflow-hidden rounded-lg border border-gray-200 bg-white shadow-md dark:border-gray-700 dark:bg-gray-800">
                <div class="border-b border-gray-200 bg-gray-50 px-4 py-3 dark:border-gray-700 dark:bg-gray-700">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">Pembayaran Keanggotaan</h3>
                </div>
                <div class="p-4">
                    <div class="mb-6 rounded-lg bg-yellow-50 p-4 dark:bg-yellow-900/30">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-yellow-700 dark:text-yellow-300">
                                    Silakan transfer biaya keanggotaan ke rekening berikut dan upload bukti pembayaran Anda.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6 rounded-lg border border-gray-200 p-4 dark:border-gray-700">
                        <h4 class="mb-2 text-lg font-medium text-gray-900 dark:text-white">Informasi Rekening</h4>
                        <dl class="space-y-2">
                            <div class="grid grid-cols-1 gap-1 sm:grid-cols-2">
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Bank:</dt>
                                <dd class="text-sm text-gray-900 dark:text-white">Bank Mandiri</dd>
                            </div>
                            <div class="grid grid-cols-1 gap-1 sm:grid-cols-2">
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Nomor Rekening:</dt>
                                <dd class="text-sm text-gray-900 dark:text-white">1234567890</dd>
                            </div>
                            <div class="grid grid-cols-1 gap-1 sm:grid-cols-2">
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Atas Nama:</dt>
                                <dd class="text-sm text-gray-900 dark:text-white">Ikatan Alumni SMAK</dd>
                            </div>
                            <div class="grid grid-cols-1 gap-1 sm:grid-cols-2">
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Nominal:</dt>
                                <dd class="text-sm font-semibold text-gray-900 dark:text-white">Rp 150.000</dd>
                            </div>
                        </dl>
                    </div>

                    <div class="mb-6">
                        <a href="{{ route('membership.create') }}" class="inline-flex w-full items-center justify-center rounded-md bg-purple-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 dark:bg-purple-700 dark:hover:bg-purple-600">
                            <svg class="-ml-0.5 mr-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                            </svg>
                            Upload Bukti Pembayaran
                        </a>
                    </div>

                    <div class="text-center">
                        <a href="{{ route('membership.history') }}" class="text-sm font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300">
                            Lihat Riwayat Pembayaran Anda
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app> 