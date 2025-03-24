<div class="flex flex-col">
    <h1 class="text-xl font-bold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white mb-6">
        Pendaftaran Alumni IKASMAK
    </h1>

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="register" class="space-y-4 md:space-y-6">
        <!-- Informasi Personal -->
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4">
            <h2 class="mb-4 text-xl font-semibold leading-none text-blue-700 dark:text-white">Informasi Personal</h2>
            
            <div class="grid gap-4 md:gap-6 md:grid-cols-2">
                <!-- Angkatan -->
                <div class="sm:col-span-2">
                    <label for="angkatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Angkatan SAKMA/SMAK</label>
                    <input 
                        wire:model="angkatan"
                        type="text"
                        id="angkatan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Contoh: 18"
                        required
                    >
                    @error('angkatan') <span class="mt-1 text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <!-- Tahun Masuk -->
                <div>
                    <label for="tahun_masuk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Masuk</label>
                    <input 
                        wire:model="tahun_masuk"
                        type="text"
                        id="tahun_masuk"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Contoh: 2000"
                        pattern="\d{4}"
                        required
                    >
                    @error('tahun_masuk') <span class="mt-1 text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <!-- Tahun Lulus -->
                <div>
                    <label for="tahun_lulus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Lulus</label>
                    <input 
                        wire:model="tahun_lulus"
                        type="text"
                        id="tahun_lulus"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Contoh: 2003"
                        pattern="\d{4}"
                        required
                    >
                    @error('tahun_lulus') <span class="mt-1 text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <!-- Name/Nama Lengkap -->
                <div class="sm:col-span-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                    <input 
                        wire:model="name"
                        type="text"
                        id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Nama lengkap Anda"
                        required
                    >
                    @error('name') <span class="mt-1 text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <!-- Nama Panggilan -->
                <div class="sm:col-span-2">
                    <label for="nama_panggilan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Panggilan</label>
                    <input 
                        wire:model="nama_panggilan"
                        type="text"
                        id="nama_panggilan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Nama panggilan Anda"
                    >
                    @error('nama_panggilan') <span class="mt-1 text-sm text-red-500">{{ $message }}</span> @enderror
                </div>
                
                <!-- Email Address -->
                <div class="sm:col-span-2">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input 
                        wire:model="email"
                        type="email"
                        id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        placeholder="name@example.com"
                        required
                    >
                    <p class="mt-1 text-xs font-normal text-gray-500 dark:text-gray-300">Pastikan menggunakan email aktif karena akan digunakan sebagai username untuk login.</p>
                    @error('email') <span class="mt-1 text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input 
                        wire:model="password"
                        type="password"
                        id="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        placeholder="••••••••"
                        required
                    >
                    @error('password') <span class="mt-1 text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Password</label>
                    <input 
                        wire:model="password_confirmation"
                        type="password"
                        id="password_confirmation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        placeholder="••••••••"
                        required
                    >
                </div>

                <!-- Alamat Rumah -->
                <div class="sm:col-span-2">
                    <label for="alamat_rumah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Lengkap</label>
                    <textarea wire:model="alamat_rumah" rows="4" id="alamat_rumah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Alamat Lengkap"></textarea>
                    @error('alamat_rumah') <span class="mt-1 text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <!-- Provinsi -->
                <div>
                    <label for="provinsi_rumah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>
                    <select wire:model="provinsi_rumah" id="provinsi_rumah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="">Pilih Provinsi</option>
                        <option value="ACEH">Aceh</option>
                        <option value="BALI">Bali</option>
                        <option value="BANTEN">Banten</option>
                        <option value="BENGKULU">Bengkulu</option>
                        <option value="DI YOGYAKARTA">DI Yogyakarta</option>
                        <option value="DKI JAKARTA">DKI Jakarta</option>
                        <option value="GORONTALO">Gorontalo</option>
                        <option value="JAMBI">Jambi</option>
                        <option value="JAWA BARAT">Jawa Barat</option>
                        <option value="JAWA TENGAH">Jawa Tengah</option>
                        <option value="JAWA TIMUR">Jawa Timur</option>
                        <option value="KALIMANTAN BARAT">Kalimantan Barat</option>
                        <option value="KALIMANTAN SELATAN">Kalimantan Selatan</option>
                        <option value="KALIMANTAN TENGAH">Kalimantan Tengah</option>
                        <option value="KALIMANTAN TIMUR">Kalimantan Timur</option>
                        <option value="KALIMANTAN UTARA">Kalimantan Utara</option>
                        <option value="KEPULAUAN BANGKA BELITUNG">Kepulauan Bangka Belitung</option>
                        <option value="KEPULAUAN RIAU">Kepulauan Riau</option>
                        <option value="LAMPUNG">Lampung</option>
                        <option value="MALUKU">Maluku</option>
                        <option value="MALUKU UTARA">Maluku Utara</option>
                        <option value="NUSA TENGGARA BARAT">Nusa Tenggara Barat</option>
                        <option value="NUSA TENGGARA TIMUR">Nusa Tenggara Timur</option>
                        <option value="PAPUA">Papua</option>
                        <option value="PAPUA BARAT">Papua Barat</option>
                        <option value="RIAU">Riau</option>
                        <option value="SULAWESI BARAT">Sulawesi Barat</option>
                        <option value="SULAWESI SELATAN">Sulawesi Selatan</option>
                        <option value="SULAWESI TENGAH">Sulawesi Tengah</option>
                        <option value="SULAWESI TENGGARA">Sulawesi Tenggara</option>
                        <option value="SULAWESI UTARA">Sulawesi Utara</option>
                        <option value="SUMATERA BARAT">Sumatera Barat</option>
                        <option value="SUMATERA SELATAN">Sumatera Selatan</option>
                        <option value="SUMATERA UTARA">Sumatera Utara</option>
                    </select>
                    @error('provinsi_rumah') <span class="mt-1 text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <!-- Kota -->
                <div>
                    <label for="kota_rumah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota/Kabupaten</label>
                    <select wire:model="kota_rumah" id="kota_rumah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="">Pilih Kota/Kabupaten</option>
                    </select>
                    @error('kota_rumah') <span class="mt-1 text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <!-- No WhatsApp -->
                <div class="sm:col-span-2">
                    <label for="whatsapp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor HP/WhatsApp</label>
                    <input 
                        wire:model="whatsapp"
                        type="text"
                        id="whatsapp"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        placeholder="08xxxxxxxxxx"
                        required
                    >
                    @error('whatsapp') <span class="mt-1 text-sm text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <!-- Informasi Profesi -->
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4">
            <h2 class="mb-4 text-xl font-semibold leading-none text-blue-700 dark:text-white">Informasi Profesi</h2>
            
            <div class="grid gap-4 md:gap-6 md:grid-cols-2">
                <!-- Pekerjaan -->
                <div class="sm:col-span-2">
                    <label for="pekerjaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan/Profesi Saat Ini</label>
                    <input 
                        wire:model="pekerjaan"
                        type="text"
                        id="pekerjaan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        placeholder="cth. ASN, Analis Kimia, Programmer, Dosen, dll."
                    >
                    @error('pekerjaan') <span class="mt-1 text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <!-- Perusahaan -->
                <div class="sm:col-span-2">
                    <label for="perusahaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Instansi/Perusahaan/Tempat Bekerja</label>
                    <input 
                        wire:model="perusahaan"
                        type="text"
                        id="perusahaan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        placeholder="cth. PT. XXX YYY ZZZ, Bank Mandiri, dll."
                    >
                    @error('perusahaan') <span class="mt-1 text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <!-- Alamat Kantor -->
                <div class="sm:col-span-2">
                    <label for="alamat_kantor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Kantor</label>
                    <textarea wire:model="alamat_kantor" rows="4" id="alamat_kantor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan Alamat Kantor"></textarea>
                    @error('alamat_kantor') <span class="mt-1 text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <!-- Provinsi Kantor -->
                <div>
                    <label for="provinsi_kantor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>
                    <select wire:model="provinsi_kantor" id="provinsi_kantor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="">Pilih Provinsi</option>
                        <option value="ACEH">Aceh</option>
                        <option value="BALI">Bali</option>
                        <option value="BANTEN">Banten</option>
                        <option value="BENGKULU">Bengkulu</option>
                        <option value="DI YOGYAKARTA">DI Yogyakarta</option>
                        <option value="DKI JAKARTA">DKI Jakarta</option>
                        <option value="GORONTALO">Gorontalo</option>
                        <option value="JAMBI">Jambi</option>
                        <option value="JAWA BARAT">Jawa Barat</option>
                        <option value="JAWA TENGAH">Jawa Tengah</option>
                        <option value="JAWA TIMUR">Jawa Timur</option>
                        <option value="KALIMANTAN BARAT">Kalimantan Barat</option>
                        <option value="KALIMANTAN SELATAN">Kalimantan Selatan</option>
                        <option value="KALIMANTAN TENGAH">Kalimantan Tengah</option>
                        <option value="KALIMANTAN TIMUR">Kalimantan Timur</option>
                        <option value="KALIMANTAN UTARA">Kalimantan Utara</option>
                        <option value="KEPULAUAN BANGKA BELITUNG">Kepulauan Bangka Belitung</option>
                        <option value="KEPULAUAN RIAU">Kepulauan Riau</option>
                        <option value="LAMPUNG">Lampung</option>
                        <option value="MALUKU">Maluku</option>
                        <option value="MALUKU UTARA">Maluku Utara</option>
                        <option value="NUSA TENGGARA BARAT">Nusa Tenggara Barat</option>
                        <option value="NUSA TENGGARA TIMUR">Nusa Tenggara Timur</option>
                        <option value="PAPUA">Papua</option>
                        <option value="PAPUA BARAT">Papua Barat</option>
                        <option value="RIAU">Riau</option>
                        <option value="SULAWESI BARAT">Sulawesi Barat</option>
                        <option value="SULAWESI SELATAN">Sulawesi Selatan</option>
                        <option value="SULAWESI TENGAH">Sulawesi Tengah</option>
                        <option value="SULAWESI TENGGARA">Sulawesi Tenggara</option>
                        <option value="SULAWESI UTARA">Sulawesi Utara</option>
                        <option value="SUMATERA BARAT">Sumatera Barat</option>
                        <option value="SUMATERA SELATAN">Sumatera Selatan</option>
                        <option value="SUMATERA UTARA">Sumatera Utara</option>
                    </select>
                    @error('provinsi_kantor') <span class="mt-1 text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <!-- Kota Kantor -->
                <div>
                    <label for="kota_kantor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota/Kabupaten</label>
                    <select wire:model="kota_kantor" id="kota_kantor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="">Pilih Kota/Kabupaten</option>
                    </select>
                    @error('kota_kantor') <span class="mt-1 text-sm text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
            Daftar
        </button>
    
        <p class="text-sm font-light text-center text-gray-500 dark:text-gray-300">
            <a href="{{ route('login') }}" wire:navigate class="font-medium text-primary-600 hover:underline dark:text-primary-500">
                Sudah punya akun?
            </a>
        </p>
    </form>
</div>
