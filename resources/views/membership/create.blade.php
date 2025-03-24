<x-layouts.app :title="__('Upload Bukti Pembayaran')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl p-4">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Upload Bukti Pembayaran</h1>
            <a href="{{ route('membership.upgrade') }}" class="inline-flex items-center rounded-md bg-gray-600 px-4 py-2 text-sm font-semibold text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 dark:bg-gray-500 dark:hover:bg-gray-600">
                Kembali
            </a>
        </div>

        <div class="mx-auto max-w-2xl">
            <div class="overflow-hidden rounded-lg border border-gray-200 bg-white shadow-md dark:border-gray-700 dark:bg-gray-800">
                <div class="border-b border-gray-200 bg-gray-50 px-4 py-3 dark:border-gray-700 dark:bg-gray-700">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">Form Upload Bukti Pembayaran</h3>
                </div>
                <div class="p-6">
                    <div class="mb-6 rounded-lg bg-yellow-50 p-4 dark:bg-yellow-900/30">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-yellow-700 dark:text-yellow-300">
                                    Pastikan bukti pembayaran berisi informasi lengkap termasuk nama pengirim, tanggal, dan nominal.
                                </p>
                            </div>
                        </div>
                    </div>

                    <form action="{{ route('membership.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf

                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label for="payment_proof" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Bukti Pembayaran</label>
                                <div class="mt-2 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pb-6 pt-5 dark:border-gray-600">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="flex text-sm text-gray-600 dark:text-gray-400">
                                            <label for="payment_proof" class="relative cursor-pointer rounded-md bg-white font-medium text-blue-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500 focus-within:ring-offset-2 hover:text-blue-500 dark:bg-gray-800 dark:text-blue-400 dark:hover:text-blue-300">
                                                <span>Upload bukti pembayaran</span>
                                                <input id="payment_proof" name="payment_proof" type="file" class="sr-only" accept="image/*" required>
                                            </label>
                                            <p class="pl-1">atau drag and drop</p>
                                        </div>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">
                                            PNG, JPG, GIF sampai 2MB
                                        </p>
                                    </div>
                                </div>
                                @error('payment_proof')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="rounded-lg bg-gray-50 p-4 dark:bg-gray-700">
                                <div class="text-sm text-gray-700 dark:text-gray-300">
                                    <p class="mb-2 font-medium">Informasi Pembayaran:</p>
                                    <ul class="ml-4 list-disc space-y-1">
                                        <li>Bank: Bank Mandiri</li>
                                        <li>Nomor Rekening: 1234567890</li>
                                        <li>Atas Nama: Ikatan Alumni SMAK</li>
                                        <li>Nominal: Rp 150.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-end space-x-3">
                            <a href="{{ route('membership.upgrade') }}" class="rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:ring-offset-gray-800">
                                Batal
                            </a>
                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-purple-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 dark:bg-purple-700 dark:hover:bg-purple-600 dark:focus:ring-purple-500 dark:focus:ring-offset-gray-800">
                                Kirim Bukti Pembayaran
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Preview image before upload
        const input = document.getElementById('payment_proof');
        const uploadContainer = input.parentElement.parentElement.parentElement;
        
        input.addEventListener('change', function(e) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    // Remove existing preview if any
                    const existingPreview = uploadContainer.querySelector('.preview-image');
                    if (existingPreview) {
                        existingPreview.remove();
                    }
                    
                    // Create preview image
                    const preview = document.createElement('div');
                    preview.className = 'preview-image mt-4';
                    preview.innerHTML = `
                        <p class="mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Preview:</p>
                        <img src="${e.target.result}" alt="Preview" class="max-h-48 rounded border border-gray-200 dark:border-gray-600">
                        <button type="button" class="mt-2 text-sm text-red-600 hover:text-red-500 dark:text-red-400 dark:hover:text-red-300" id="remove-preview">
                            Hapus gambar
                        </button>
                    `;
                    
                    uploadContainer.appendChild(preview);
                    
                    // Add remove preview functionality
                    document.getElementById('remove-preview').addEventListener('click', function() {
                        input.value = '';
                        preview.remove();
                    });
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        });
    </script>
</x-layouts.app> 