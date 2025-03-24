<x-layouts.app :title="__('Detail Pembayaran')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl p-4">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Detail Pembayaran</h1>
            <a href="{{ route('membership.history') }}" class="inline-flex items-center rounded-md bg-gray-600 px-4 py-2 text-sm font-semibold text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 dark:bg-gray-500 dark:hover:bg-gray-600">
                Kembali
            </a>
        </div>

        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <!-- Informasi Pembayaran -->
            <div class="overflow-hidden rounded-lg border border-gray-200 bg-white shadow-md dark:border-gray-700 dark:bg-gray-800">
                <div class="border-b border-gray-200 bg-gray-50 px-4 py-3 dark:border-gray-700 dark:bg-gray-700">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">Informasi Pembayaran</h3>
                </div>
                <div class="p-4">
                    <dl class="grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-2">
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">ID Pembayaran</dt>
                            <dd class="mt-1 text-sm text-gray-900 dark:text-white">#{{ $payment->id }}</dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Tanggal Pembayaran</dt>
                            <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $payment->created_at->format('d/m/Y H:i') }}</dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Nominal</dt>
                            <dd class="mt-1 text-sm text-gray-900 dark:text-white">Rp {{ number_format($payment->amount, 0, ',', '.') }}</dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Status</dt>
                            <dd class="mt-1 text-sm">
                                @if ($payment->status === 'pending')
                                    <span class="inline-flex rounded-full bg-yellow-100 px-2 text-xs font-semibold leading-5 text-yellow-800 dark:bg-yellow-800 dark:text-yellow-100">
                                        Menunggu Verifikasi
                                    </span>
                                @elseif ($payment->status === 'verified')
                                    <span class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800 dark:bg-green-800 dark:text-green-100">
                                        Terverifikasi
                                    </span>
                                @elseif ($payment->status === 'rejected')
                                    <span class="inline-flex rounded-full bg-red-100 px-2 text-xs font-semibold leading-5 text-red-800 dark:bg-red-800 dark:text-red-100">
                                        Ditolak
                                    </span>
                                @endif
                            </dd>
                        </div>
                        <div class="sm:col-span-2">
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Periode Keanggotaan</dt>
                            <dd class="mt-1 text-sm text-gray-900 dark:text-white">
                                {{ $payment->created_at->format('d/m/Y') }} - {{ $payment->expiry_date->format('d/m/Y') }}
                                ({{ $payment->created_at->diffInDays($payment->expiry_date) }} hari)
                            </dd>
                        </div>
                        
                        @if ($payment->verified_at)
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Diverifikasi Pada</dt>
                                <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $payment->verified_at->format('d/m/Y H:i') }}</dd>
                            </div>
                            @if ($payment->verifier)
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Diverifikasi Oleh</dt>
                                    <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $payment->verifier->nama_lengkap }}</dd>
                                </div>
                            @endif
                        @endif
                        
                        @if ($payment->notes)
                            <div class="sm:col-span-2">
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Catatan</dt>
                                <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $payment->notes }}</dd>
                            </div>
                        @endif
                    </dl>
                    
                    @if ($payment->status === 'pending')
                        <div class="mt-6">
                            <form action="{{ route('membership.cancel', $payment) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:bg-red-700 dark:hover:bg-red-600" onclick="return confirm('Anda yakin ingin membatalkan pembayaran ini?')">
                                    <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                    Batalkan Pembayaran
                                </button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Bukti Pembayaran -->
            <div class="overflow-hidden rounded-lg border border-gray-200 bg-white shadow-md dark:border-gray-700 dark:bg-gray-800">
                <div class="border-b border-gray-200 bg-gray-50 px-4 py-3 dark:border-gray-700 dark:bg-gray-700">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">Bukti Pembayaran</h3>
                </div>
                <div class="flex items-center justify-center p-4">
                    @if ($payment->payment_proof)
                        <div class="max-w-full overflow-hidden rounded-lg">
                            <a href="{{ Storage::url($payment->payment_proof) }}" target="_blank" class="inline-block">
                                <img src="{{ Storage::url($payment->payment_proof) }}" alt="Bukti Pembayaran" class="max-h-96 w-auto">
                            </a>
                            <div class="mt-2 text-center">
                                <a href="{{ Storage::url($payment->payment_proof) }}" target="_blank" class="text-sm font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300">
                                    Lihat Gambar Penuh
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Tidak ada bukti pembayaran</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        @if ($payment->status === 'verified')
            <div class="rounded-lg border border-green-200 bg-green-50 p-4 dark:border-green-800 dark:bg-green-900/30">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-green-800 dark:text-green-200">
                            Pembayaran ini telah diverifikasi. Anda telah menjadi Member+ hingga {{ $payment->expiry_date->format('d/m/Y') }}.
                        </p>
                    </div>
                </div>
            </div>
        @elseif ($payment->status === 'rejected')
            <div class="rounded-lg border border-red-200 bg-red-50 p-4 dark:border-red-800 dark:bg-red-900/30">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-red-800 dark:text-red-200">
                            Pembayaran ini telah ditolak. Silakan hubungi admin untuk informasi lebih lanjut atau upload bukti pembayaran baru.
                        </p>
                    </div>
                </div>
            </div>
        @else
            <div class="rounded-lg border border-yellow-200 bg-yellow-50 p-4 dark:border-yellow-800 dark:bg-yellow-900/30">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-yellow-800 dark:text-yellow-200">
                            Pembayaran Anda sedang menunggu verifikasi dari admin. Proses verifikasi biasanya memakan waktu 1-2 hari kerja.
                        </p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</x-layouts.app> 