<!doctype html>
<html lang="en" class="dark">
  <head><script src="/livereload.js?mindelay=10&amp;v=2&amp;port=1313&amp;path=livereload" data-no-instant defer></script>
    <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="Official Website Ikatan Alumni Sekolah Menengah Analisis Kimia Makassar" />
<meta name="author" content="Themesberg" />
<meta name="generator" content="Hugo 0.142.0" />

<title>Registrasi Alumni - IKASMAK</title>

<link rel="canonical" href="ikasmak/registrasi/" />



<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
  rel="stylesheet"
/>

<link
  rel="stylesheet"
  href="https://www.unpkg.com/flowbite-datepicker@1.3.2/dist/css/datepicker.min.css"
/>
<link rel="stylesheet" href="app.css" />

<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
<link rel="icon" type="image/png" href="favicon.ico" />
<link rel="manifest" href="site.webmanifest" />
<link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5" />
<meta name="msapplication-TileColor" content="#ffffff" />
<meta name="theme-color" content="#ffffff" />

<!-- Twitter -->
<meta
  name="twitter:card"
  content="summary"
/>
<meta name="twitter:site" content="@" />
<meta name="twitter:creator" content="@" />
<meta name="twitter:title" content="Registrasi Alumni - IKASMAK" />
<meta
  name="twitter:description"
  content="Official Website Ikatan Alumni Sekolah Menengah Analisis Kimia Makassar"
/>
<meta
  name="twitter:image"
  content="application-ui/demo/images/og-image.jpg"
/>

<!-- Facebook -->
<meta property="og:url" content="ikasmak/registrasi/" />
<meta property="og:title" content="Registrasi Alumni - IKASMAK" />
<meta
  property="og:description"
  content="Official Website Ikatan Alumni Sekolah Menengah Analisis Kimia Makassar"
/>
<meta
  property="og:type"
  content="article"
/>
<meta
  property="og:image"
  content="application-ui/demo/images/og-image.jpg"
/>
<meta property="og:image:type" content="image/png" />



<script>
  document.documentElement.classList.remove("dark");
</script>

  </head>
  
    <body class="bg-gray-50 dark:bg-gray-900 antialiased">
      

      
  
  <main class="bg-gray-50 dark:bg-gray-900">
    
<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h1 class="mb-8 text-3xl font-bold text-center text-blue-700">Pendaftaran Alumni IKASMAK</h1>
      <form id="registrationForm" action="{{ route('register') }}" method="POST" enctype="multipart/form-data" class="space-y-6" novalidate>
          @csrf
          
          <!-- Card Section 1: Informasi Personal -->
          <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
              <h2 class="mb-4 text-xl font-semibold leading-none text-blue-700 dark:text-white">Informasi Personal</h2>
              
              <!-- Error Messages
              <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                  <ul class="list-disc list-inside">
                  </ul>
              </div> -->

              <div class="grid gap-4 mb-4 md:gap-6 md:grid-cols-2 sm:mb-8">
                <div class="sm:col-span-2">
                  <label for="angkatan" class="inline-flex items-center mb-2 text-sm font-medium text-gray-900 dark:text-white">Angkatan SAKMA/ SMAK</label>
                  <select id="angkatan" name="angkatan" class="bg-blue-100 border border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required>
                      <option value="">Pilih Angkatan</option>
                  </select>
                </div>
                <div>
                  <label for="tahun_masuk" class="inline-flex items-center mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Masuk</label>
                  <input type="text" id="tahun_masuk" name="tahun_masuk" class="bg-blue-100 border border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" readonly pattern="\d{4}" title="Format tahun harus 4 digit angka">
                </div>
                <div>
                  <label for="tahun_lulus" class="inline-flex items-center mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Kelulusan</label>
                  <select id="tahun_lulus" name="tahun_lulus" class="bg-blue-100 border border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required>
                      <option value="">Tahun Lulus</option>
                  </select>
                </div>
                <div class="sm:col-span-2">
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                  <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="name@email.com" required>
                  <p class="mt-1 text-xs font-normal text-gray-500 dark:text-gray-300" id="file_input_help">Pastikan menggunakan email aktif karena akan digunakan sebagai username untuk login.</p>
                </div>
                <div>
                  <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                  <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="•••••••••" required="">
                </div>                        
                <div>
                  <label for="password-confirm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Password</label>
                  <input type="password" name="password_confirmation" id="password-confirm" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="•••••••••" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Nama Lengkap" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="nama_panggilan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Panggilan</label>
                    <input type="text" name="nama_panggilan" id="nama_panggilan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Panggilan" required="">
                </div>
                <div class="sm:col-span-2">
                  <label for="alamat_rumah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Lengkap</label>
                  <textarea rows="4" name="alamat_rumah" id="alamat_rumah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Alamat Lengkap" required=""></textarea>
                </div>

                <div>
                    <label for="provinsi_rumah" class="inline-flex items-center mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>
                    <select id="provinsi_rumah" name="provinsi_rumah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
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
                </div>
                <div>
                    <label for="kota_rumah" class="inline-flex items-center mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota/Kabupaten</label>
                    <select id="kota_rumah" name="kota_rumah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                        <option value="">Pilih Kota/Kabupaten</option>
                    </select>
                </div>
                <div class="sm:col-span-2">
                  <label for="whatsapp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor HP/ WA</label>
                  <input type="text" name="whatsapp" id="whatsapp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nomor HP/ WA" required="">
                </div>
              </div>
          </div>

          <!-- Card Section 2: Informasi Profesi -->
          <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
              <h2 class="mb-4 text-xl font-semibold leading-none text-blue-700 dark:text-white">Informasi Profesi</h2>
              <div class="grid gap-4 mb-4 md:gap-6 md:grid-cols-2 sm:mb-8">
                <div class="sm:col-span-2">
                    <label for="pekerjaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan/ Profesi Saat Ini</label>
                    <input type="text" name="pekerjaan" id="pekerjaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="cth. ASN, Analis Kimia, Programmer, Dosen, dll." required="">
                </div>
                <div class="sm:col-span-2">
                    <label for="perusahaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Instansi/ Perusahaan/Tempat Bekerja</label>
                    <input type="text" name="perusahaan" id="perusahaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="cth. PT. XXX YYY ZZZ, Bank Mandiri, dll." required="">
                </div>
                <div class="sm:col-span-2">
                  <label for="alamat_kantor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Kantor</label>
                  <textarea rows="4" name="alamat_kantor" id="alamat_kantor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan Alamat Kantor" required=""></textarea>
                </div>

                <div>
                    <label for="provinsi_kantor" class="inline-flex items-center mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>
                    <select id="provinsi_kantor" name="provinsi_kantor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required>
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
                </div>
                <div>
                    <label for="kota_kantor" class="inline-flex items-center mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota/Kabupaten</label>
                    <select id="kota_kantor" name="kota_kantor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required>
                        <option value="">Pilih Kota/Kabupaten</option>
                    </select>
                </div>
                <div class="sm:col-span-2">
                  <label for="nama_usaha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Usaha (jika ada)</label>
                  <input type="text" name="nama_usaha" id="nama_usaha" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="cth. PT. XXX YYY ZZZ, Kebab Andi, dll.">
                </div>
                <div class="sm:col-span-2">
                  <label for="bidang_usaha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bidang Usaha</label>
                  <input type="text" name="bidang_usaha" id="bidang_usaha" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="cth. F&B, Laundry, Konsultan dll.">
                </div>
                <div class="sm:col-span-2">
                  <label for="saran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Saran untuk IKASAKMA/ IKASMAK</label>
                  <textarea rows="4" name="saran" id="saran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan Saran"></textarea>
                </div>
                <div class="sm:col-span-2">
                  <div class="flex items-center justify-center w-full">
                      <label for="foto" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                          <div class="flex flex-col items-center justify-center pt-5 pb-6">
                              <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                              </svg>
                              <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Klik untuk Upload Foto</span> atau drag and drop</p>
                              <p class="text-xs text-gray-500">PNG atau JPG (MAX. 800x400px)</p>
                          </div>
                          <input id="foto" name="foto" type="file" class="hidden" />
                      </label>
                  </div>
              </div>
          </div>

          <!-- Submit Button -->
          <button id="submit-button" type="submit" class="w-full items-center px-5 py-2.5 text-lg font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
              Daftar
          </button>
          <!-- Modal -->
          <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow-sm">
                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="popup-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500">Apakah Data Anda Sudah Benar?</h3>
                        <button id="confirmSubmit" type="button" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Ya, Sudah Benar
                        </button>
                        <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-100">
                            Cek Lagi
                        </button>
                    </div>
                </div>
            </div>
          </div>
      </form>
  </div>
</section>


<script src="{{ asset('js/indonesia-area.js') }}"></script>
<script src="{{ asset('js/angkatan-handler.js') }}"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Untuk alamat rumah
    const provinsiRumahSelect = document.getElementById('provinsi_rumah');
    const kotaRumahSelect = document.getElementById('kota_rumah');

    // Untuk alamat kantor
    const provinsiKantorSelect = document.getElementById('provinsi_kantor');
    const kotaKantorSelect = document.getElementById('kota_kantor');

    // Cek ketersediaan data indonesia
    if (typeof indonesiaArea === 'undefined') {
        console.error('Error: Data wilayah Indonesia tidak ditemukan. Pastikan file indonesia-area.js dimuat dengan benar.');
        // Fallback data sederhana jika data tidak ada
        window.indonesiaArea = {
            "SULAWESI SELATAN": ["MAKASSAR", "GOWA", "MAROS"],
            "DKI JAKARTA": ["JAKARTA PUSAT", "JAKARTA TIMUR", "JAKARTA BARAT"]
        };
    }

    // Function untuk update opsi kota rumah
    function updateKotaRumahOptions(provinsi) {
        // Kosongkan pilihan kota
        kotaRumahSelect.innerHTML = '<option value="">Pilih Kota/Kabupaten</option>';
        
        // Jika ada provinsi yang dipilih
        if (provinsi && indonesiaArea[provinsi]) {
            // Tambahkan opsi kota berdasarkan provinsi
            indonesiaArea[provinsi].forEach(kota => {
                const option = document.createElement('option');
                option.value = kota;
                option.textContent = kota;
                kotaRumahSelect.appendChild(option);
            });
        }
    }

    // Function untuk update opsi kota kantor
    function updateKotaKantorOptions(provinsi) {
        // Kosongkan pilihan kota
        kotaKantorSelect.innerHTML = '<option value="">Pilih Kota/Kabupaten</option>';
        
        // Jika ada provinsi yang dipilih
        if (provinsi && indonesiaArea[provinsi]) {
            // Tambahkan opsi kota berdasarkan provinsi
            indonesiaArea[provinsi].forEach(kota => {
                const option = document.createElement('option');
                option.value = kota;
                option.textContent = kota;
                kotaKantorSelect.appendChild(option);
            });
        }
    }

    // Event listener untuk perubahan provinsi rumah
    provinsiRumahSelect.addEventListener('change', function() {
        updateKotaRumahOptions(this.value);
    });

    // Event listener untuk perubahan provinsi kantor
    provinsiKantorSelect.addEventListener('change', function() {
        updateKotaKantorOptions(this.value);
    });

    // Modifikasi fungsi validateInput untuk menangani validasi email
    function validateInput(input) {
        const errorClass = 'bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500';
        const successClass = 'bg-green-50 border-green-500 text-gray-900 dark:text-green-900 placeholder-green-700 dark:placeholder-green-500 focus:ring-green-500 focus:border-green-500 dark:border-green-500';
        const normalClass = 'bg-gray-50 border-gray-300 text-gray-900 focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500';
        
        // Cari elemen error message yang berdekatan
        const errorMessage = input.parentElement.querySelector('.error-message');
        
        let isEmpty = false;
        let isValid = true;
        
        // Cek apakah input kosong berdasarkan tipe elemen
        if (input.tagName.toLowerCase() === 'select') {
            isEmpty = !input.value || input.value === '';
        } else {
            isEmpty = !input.value.trim();
        }

        // Validasi khusus untuk email
        if (input.type === 'email' && !isEmpty) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            isValid = emailRegex.test(input.value.trim());
        }

        if ((input.hasAttribute('required') && isEmpty) || (input.type === 'email' && !isEmpty && !isValid)) {
            // Hapus kelas normal dan success
            input.classList.remove(...normalClass.split(' '));
            input.classList.remove(...successClass.split(' '));
            // Tambah kelas error
            input.classList.add(...errorClass.split(' '));
            
            // Tampilkan pesan error
            if (!errorMessage) {
                const message = document.createElement('p');
                message.className = 'error-message mt-2 text-sm text-red-600 dark:text-red-500';
                if (input.type === 'email' && !isEmpty && !isValid) {
                    message.innerHTML = 'Format email tidak valid';
                } else if (input.tagName.toLowerCase() === 'select') {
                    // Periksa ID input
                    if (input.id === 'tahun_lulus') return;
                    message.innerHTML = 'Pilihan wajib diisi';
                } else {
                    message.innerHTML = 'Wajib diisi';
                }
                input.parentElement.appendChild(message);
            }
            return false;
        } else if (!isEmpty && isValid) {
            // Hapus kelas normal dan error
            input.classList.remove(...normalClass.split(' '));
            input.classList.remove(...errorClass.split(' '));
            // Tambah kelas success
            input.classList.add(...successClass.split(' '));
            
            // Hapus pesan error jika ada
            if (errorMessage) {
                errorMessage.remove();
            }
            return true;
        } else {
            // Kembalikan ke tampilan normal
            input.classList.remove(...successClass.split(' '));
            input.classList.remove(...errorClass.split(' '));
            input.classList.add(...normalClass.split(' '));
            
            // Hapus pesan error jika ada
            if (errorMessage) {
                errorMessage.remove();
            }
            return !input.hasAttribute('required');
        }
    }

    // Tambahkan event listener untuk semua input required
    const requiredInputs = document.querySelectorAll('input[required], select[required], textarea[required]');
    requiredInputs.forEach(input => {
        // Validasi saat input berubah
        input.addEventListener('input', () => validateInput(input));
        input.addEventListener('blur', () => validateInput(input));
    });

    // Modifikasi event handler form submission
    const form = document.getElementById('registrationForm');
    const modal = document.getElementById('popup-modal');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        let isValid = true;
        
        // Validasi semua input required
        requiredInputs.forEach(input => {
            if (!validateInput(input)) {
                isValid = false;
            }
        });

        if (isValid) {
            // Tampilkan modal konfirmasi
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        } else {
            // Scroll ke elemen error pertama
            const firstError = document.querySelector('.error-message');
            if (firstError) {
                firstError.parentElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
    });
    
    // Handle confirmation button click
    const confirmButton = document.getElementById('confirmSubmit');
    confirmButton.addEventListener('click', function() {
        // Submit form langsung tanpa validasi lagi
        form.removeEventListener('submit', function(e) {
            e.preventDefault();
        });
        form.submit();
    });
    
    // Handle modal close buttons
    const closeButtons = document.querySelectorAll('[data-modal-hide="popup-modal"]');
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        });
    });

    // Tampilkan nilai yang sudah diisi sebelumnya (old values dari Laravel)
    @if(old('provinsi_rumah'))
        provinsiRumahSelect.value = "{{ old('provinsi_rumah') }}";
        updateKotaRumahOptions("{{ old('provinsi_rumah') }}");
        setTimeout(() => {
            kotaRumahSelect.value = "{{ old('kota_rumah') }}";
        }, 100);
    @endif
    
    @if(old('provinsi_kantor'))
        provinsiKantorSelect.value = "{{ old('provinsi_kantor') }}";
        updateKotaKantorOptions("{{ old('provinsi_kantor') }}");
        setTimeout(() => {
            kotaKantorSelect.value = "{{ old('kota_kantor') }}";
        }, 100);
    @endif

    // Memastikan data angkatan diload
    if (typeof populateAngkatan === 'function') {
        populateAngkatan();
    } else {
        console.error('Error: Fungsi populateAngkatan tidak ditemukan. Pastikan file angkatan-handler.js dimuat dengan benar.');
    }

    // Di dalam script existing
    const passwordInput = document.getElementById('password');
    const confirmInput = document.getElementById('password-confirm');

    confirmInput.addEventListener('input', function() {
        if (passwordInput.value !== this.value) {
            this.setCustomValidity('Password tidak sama');
        } else {
            this.setCustomValidity('');
        }
    });
});
</script>


  </main>
  

      <script src="app.bundle.js"></script>

    </body>
  
</html>
