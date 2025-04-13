<!-- Modal Edit Data Personal -->
<div id="updatePribadiModal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
    <div class="relative max-h-full w-full max-w-2xl p-4">
        <!-- Modal content -->
        <form action="{{ route('profile.update') }}" method="POST" class="relative rounded-lg bg-white shadow dark:bg-gray-800">
            @csrf
            @method('PUT')
            <!-- Modal header -->
            <div class="flex items-center justify-between rounded-t px-4 py-4 sm:px-5">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Edit Data Personal</h3>
                <button
                type="button"
                class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-toggle="updatePribadiModal"
                >
                <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                    fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                    />
                </svg>
                <span class="sr-only">Close modal</span>
                </button>
            </div>

            <!-- Modal body -->
            <div class="p-4 sm:p-5">
                <!-- Inputs -->
                <div class="grid gap-4 mb-4 md:gap-6 md:grid-cols-2 sm:mb-8">
                    <div>
                        <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $user->nama_lengkap }}" required>
                    </div>
                    <div>
                        <label for="nama_panggilan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Panggilan</label>
                        <input type="text" name="nama_panggilan" id="nama_panggilan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $user->nama_panggilan }}" required>
                    </div>
                    <div>
                        <label for="tempat_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $user->tempat_lahir ?? '' }}">
                    </div>
                    <div>
                        <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $user->tanggal_lahir ?? '' }}">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="alamat_rumah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Rumah</label>
                        <textarea name="alamat_rumah" id="alamat_rumah" rows="3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>{{ $user->alamat_rumah }}</textarea>
                    </div>
                    <div>
                        <label for="provinsi_rumah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>
                        <select id="provinsi_rumah" name="provinsi_rumah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                            <option value="">Pilih Provinsi</option>
                            <option value="ACEH" {{ $user->provinsi_rumah == 'ACEH' ? 'selected' : '' }}>Aceh</option>
                            <option value="BALI" {{ $user->provinsi_rumah == 'BALI' ? 'selected' : '' }}>Bali</option>
                            <option value="BANTEN" {{ $user->provinsi_rumah == 'BANTEN' ? 'selected' : '' }}>Banten</option>
                            <option value="BENGKULU" {{ $user->provinsi_rumah == 'BENGKULU' ? 'selected' : '' }}>Bengkulu</option>
                            <option value="DI YOGYAKARTA" {{ $user->provinsi_rumah == 'DI YOGYAKARTA' ? 'selected' : '' }}>DI Yogyakarta</option>
                            <option value="DKI JAKARTA" {{ $user->provinsi_rumah == 'DKI JAKARTA' ? 'selected' : '' }}>DKI Jakarta</option>
                            <option value="GORONTALO" {{ $user->provinsi_rumah == 'GORONTALO' ? 'selected' : '' }}>Gorontalo</option>
                            <option value="JAMBI" {{ $user->provinsi_rumah == 'JAMBI' ? 'selected' : '' }}>Jambi</option>
                            <option value="JAWA BARAT" {{ $user->provinsi_rumah == 'JAWA BARAT' ? 'selected' : '' }}>Jawa Barat</option>
                            <option value="JAWA TENGAH" {{ $user->provinsi_rumah == 'JAWA TENGAH' ? 'selected' : '' }}>Jawa Tengah</option>
                            <option value="JAWA TIMUR" {{ $user->provinsi_rumah == 'JAWA TIMUR' ? 'selected' : '' }}>Jawa Timur</option>
                            <option value="KALIMANTAN BARAT" {{ $user->provinsi_rumah == 'KALIMANTAN BARAT' ? 'selected' : '' }}>Kalimantan Barat</option>
                            <option value="KALIMANTAN SELATAN" {{ $user->provinsi_rumah == 'KALIMANTAN SELATAN' ? 'selected' : '' }}>Kalimantan Selatan</option>
                            <option value="KALIMANTAN TENGAH" {{ $user->provinsi_rumah == 'KALIMANTAN TENGAH' ? 'selected' : '' }}>Kalimantan Tengah</option>
                            <option value="KALIMANTAN TIMUR" {{ $user->provinsi_rumah == 'KALIMANTAN TIMUR' ? 'selected' : '' }}>Kalimantan Timur</option>
                            <option value="KALIMANTAN UTARA" {{ $user->provinsi_rumah == 'KALIMANTAN UTARA' ? 'selected' : '' }}>Kalimantan Utara</option>
                            <option value="KEPULAUAN BANGKA BELITUNG" {{ $user->provinsi_rumah == 'KEPULAUAN BANGKA BELITUNG' ? 'selected' : '' }}>Kepulauan Bangka Belitung</option>
                            <option value="KEPULAUAN RIAU" {{ $user->provinsi_rumah == 'KEPULAUAN RIAU' ? 'selected' : '' }}>Kepulauan Riau</option>
                            <option value="LAMPUNG" {{ $user->provinsi_rumah == 'LAMPUNG' ? 'selected' : '' }}>Lampung</option>
                            <option value="MALUKU" {{ $user->provinsi_rumah == 'MALUKU' ? 'selected' : '' }}>Maluku</option>
                            <option value="MALUKU UTARA" {{ $user->provinsi_rumah == 'MALUKU UTARA' ? 'selected' : '' }}>Maluku Utara</option>
                            <option value="NUSA TENGGARA BARAT" {{ $user->provinsi_rumah == 'NUSA TENGGARA BARAT' ? 'selected' : '' }}>Nusa Tenggara Barat</option>
                            <option value="NUSA TENGGARA TIMUR" {{ $user->provinsi_rumah == 'NUSA TENGGARA TIMUR' ? 'selected' : '' }}>Nusa Tenggara Timur</option>
                            <option value="PAPUA" {{ $user->provinsi_rumah == 'PAPUA' ? 'selected' : '' }}>Papua</option>
                            <option value="PAPUA BARAT" {{ $user->provinsi_rumah == 'PAPUA BARAT' ? 'selected' : '' }}>Papua Barat</option>
                            <option value="RIAU" {{ $user->provinsi_rumah == 'RIAU' ? 'selected' : '' }}>Riau</option>
                            <option value="SULAWESI BARAT" {{ $user->provinsi_rumah == 'SULAWESI BARAT' ? 'selected' : '' }}>Sulawesi Barat</option>
                            <option value="SULAWESI SELATAN" {{ $user->provinsi_rumah == 'SULAWESI SELATAN' ? 'selected' : '' }}>Sulawesi Selatan</option>
                            <option value="SULAWESI TENGAH" {{ $user->provinsi_rumah == 'SULAWESI TENGAH' ? 'selected' : '' }}>Sulawesi Tengah</option>
                            <option value="SULAWESI TENGGARA" {{ $user->provinsi_rumah == 'SULAWESI TENGGARA' ? 'selected' : '' }}>Sulawesi Tenggara</option>
                            <option value="SULAWESI UTARA" {{ $user->provinsi_rumah == 'SULAWESI UTARA' ? 'selected' : '' }}>Sulawesi Utara</option>
                            <option value="SUMATERA BARAT" {{ $user->provinsi_rumah == 'SUMATERA BARAT' ? 'selected' : '' }}>Sumatera Barat</option>
                            <option value="SUMATERA SELATAN" {{ $user->provinsi_rumah == 'SUMATERA SELATAN' ? 'selected' : '' }}>Sumatera Selatan</option>
                            <option value="SUMATERA UTARA" {{ $user->provinsi_rumah == 'SUMATERA UTARA' ? 'selected' : '' }}>Sumatera Utara</option>
                        </select>
                    </div>
                    <div>
                        <label for="kota_rumah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota/Kabupaten</label>
                        <select id="kota_rumah" name="kota_rumah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                            <option value="">Pilih Kota/Kabupaten</option>
                            <!-- Kota akan diisi oleh JavaScript -->
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="whatsapp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. HP/WA</label>
                        <input type="text" name="whatsapp" id="whatsapp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $user->whatsapp }}" required>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="flex items-center space-x-4 px-4 py-4 sm:px-5 border-t border-gray-200 dark:border-gray-700">
                <button type="submit" class="rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Simpan Perubahan
                </button>
                <button type="button" class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:border-gray-500 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-600" data-modal-toggle="updatePribadiModal">
                    Batal
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Script untuk mengelola pilihan kota berdasarkan provinsi di modal edit -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle provinsi dan kota di modal edit personal
    const provinsiModalSelect = document.getElementById('provinsi_rumah');
    const kotaModalSelect = document.getElementById('kota_rumah');
    
    if (provinsiModalSelect && kotaModalSelect) {
        // Cek ketersediaan data indonesia
        if (typeof indonesiaArea === 'undefined') {
            // Load data indonesia dari file js
            const script = document.createElement('script');
            script.src = "{{ asset('js/indonesia-area.js') }}";
            document.body.appendChild(script);
            
            script.onload = function() {
                initProvinsiKota();
            };
        } else {
            initProvinsiKota();
        }
        
        // Fungsi untuk menginisialisasi provinsi dan kota
        function initProvinsiKota() {
            // Fungsi untuk mengisi opsi kota berdasarkan provinsi
            function updateKotaModalOptions(provinsi) {
                // Kosongkan pilihan kota
                kotaModalSelect.innerHTML = '<option value="">Pilih Kota/Kabupaten</option>';
                
                // Jika ada provinsi yang dipilih dan data indonesia tersedia
                if (provinsi && indonesiaArea && indonesiaArea[provinsi]) {
                    // Tambahkan opsi kota berdasarkan provinsi
                    indonesiaArea[provinsi].forEach(kota => {
                        const option = document.createElement('option');
                        option.value = kota;
                        option.textContent = kota;
                        kotaModalSelect.appendChild(option);
                    });
                    
                    // Set nilai kota yang tersimpan jika ada
                    const savedKota = "{{ $user->kota_rumah ?? '' }}";
                    if (savedKota) {
                        setTimeout(() => {
                            kotaModalSelect.value = savedKota;
                        }, 100);
                    }
                }
            }
            
            // Event listener untuk perubahan provinsi
            provinsiModalSelect.addEventListener('change', function() {
                updateKotaModalOptions(this.value);
            });
            
            // Set nilai awal provinsi saat modal dibuka
            const savedProvinsi = "{{ $user->provinsi_rumah ?? '' }}";
            if (savedProvinsi) {
                document.querySelectorAll('[data-modal-toggle="updatePribadiModal"]').forEach(button => {
                    button.addEventListener('click', function() {
                        setTimeout(() => {
                            updateKotaModalOptions(savedProvinsi);
                        }, 100);
                    });
                });
            }
        }
    }
});
</script> 