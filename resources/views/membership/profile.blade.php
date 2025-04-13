<!doctype html>
<html lang="en" class="dark">
  <head><script src="/livereload.js?mindelay=10&amp;v=2&amp;port=1313&amp;path=livereload" data-no-instant defer></script>
    <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="Member Area Alumni IKASAKMA/ IKASMAKMA" />
<meta name="author" content="Themesberg" />
<meta name="generator" content="Hugo 0.142.0" />

<title>Profile Alumni - IKASMAKMA</title>

<link rel="canonical" href="/profile" />



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
<link rel="stylesheet" href="{{ asset('app.css') }}" />

<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}" />
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}" />
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}" />
<link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}" />
<link rel="manifest" href="{{ asset('site.webmanifest') }}" />
<link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#5bbad5" />
<meta name="msapplication-TileColor" content="#ffffff" />
<meta name="theme-color" content="#ffffff" />

<!-- Twitter -->
<meta
  name="twitter:card"
  content="summary"
/>
<meta name="twitter:site" content="@" />
<meta name="twitter:creator" content="@" />
<meta name="twitter:title" content="Profile Alumni - IKASMAKMA" />
<meta
  name="twitter:description"
  content="Member Area Alumni IKASAKMA/ IKASMAKMA"
/>
<meta
  name="twitter:image"
  content="{{ asset('application-ui/demo/images/og-image.jpg') }}"
/>

<!-- Facebook -->
<meta property="og:url" content="ikasmak/profile/" />
<meta property="og:title" content="Profile Alumni - IKASMAKMA" />
<meta
  property="og:description"
  content="Member Area Alumni IKASAKMA/ IKASMAKMA"
/>
<meta
  property="og:type"
  content="article"
/>
<meta
  property="og:image"
  content="{{ asset('application-ui/demo/images/og-image.jpg') }}"
/>
<meta property="og:image:type" content="image/png" />



<!-- Start of Selection -->
<script>
  // Hapus pengaturan tema gelap
    document.documentElement.classList.remove("dark");
</script>
<!-- End of Selection -->

  </head>
  
    <body class="bg-gray-50 dark:bg-gray-900 antialiased">
      

      
  <nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">IKASMAK</span>
  </a>
  <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img class="w-8 h-8 rounded-full" src="{{ asset('storage/' . $user->foto) }}" alt="{{ $user->nama_lengkap }} photo">
      </button>
      
      <div class="z-50 my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600 hidden" id="user-dropdown" aria-hidden="true" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(798px, 58px, 0px);">
        <div class="px-4 py-3">
          <span class="block text-sm text-gray-900 dark:text-white">{{ $user->nama_lengkap }}</span>
          <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ $user->email }}</span>
        </div>
        <ul class="py-2" aria-labelledby="user-menu-button">
          <li>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</button>
            </form>
          </li>
        </ul>
      </div>
      <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"></path>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
      </li>
      <li>
        <a href="/membership/alumni" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700")">Alumni</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" onclick="alert('Menu ini bisa diakses user setelah verifikasi Admin IKASMAK. Hubungi Admin angkatan atau admin IKASMAK')">Event</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" onclick="alert('Menu ini bisa diakses user setelah verifikasi Admin IKASMAK. Hubungi Admin angkatan atau admin IKASMAK')">Lowongan Kerja</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" onclick="alert('Menu ini bisa diakses user setelah verifikasi Admin IKASMAK. Hubungi Admin angkatan atau admin IKASMAK')">Blog</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
  <div class="flex pt-0 overflow-hidden bg-gray-50 dark:bg-gray-900">
    <div id="main-content" class="relative min-h-screen w-full bg-gray-50 antialiased dark:bg-gray-900">

      <main>
        
<div class="container mx-auto max-w-screen-xl">
    <div class="px-4 pt-4">
    </div>
    <div class="gap-4 p-4 xl:grid xl:grid-cols-2">
    <div class="col-span-2 mb-4 rounded-lg bg-white p-4 shadow dark:bg-gray-800 xl:mb-0">
        <div class="sm:hidden">
        <label for="tabs" class="sr-only">Menu</label>
        <select
            id="tabs"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
        >
            <option>My Profile</option>
            <option>Riwayat Iuran</option>
            <option>My Event</option>
            <option>My Store</option>
            <option>Privacy & Keamanan Akun</option>
        </select>
        </div>
        <ul class="hidden text-center text-sm font-medium text-gray-500 dark:text-gray-400 sm:flex sm:space-x-4">
        <li>
            <a href="#" class="active inline-block rounded-lg bg-primary-700 px-4 py-3 text-white dark:bg-primary-600" aria-current="page">My Profile</a>
        </li>
        <li>
            <a href="#" class="inline-block rounded-lg px-4 py-3 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-800 dark:hover:text-white" onclick="alert('Menu dapat diakses setelah verifikasi Admin')">Riwayat Iuran</a>
        </li>
        <li>
            <a href="#" class="inline-block rounded-lg px-4 py-3 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-800 dark:hover:text-white" onclick="alert('Menu dapat diakses setelah verifikasi Admin')">My Event</a>
        </li>
        <li>
            <a href="#" class="inline-block rounded-lg px-4 py-3 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-800 dark:hover:text-white" onclick="alert('Menu dapat diakses setelah verifikasi Admin')">My Store</a>
        </li>
        <li>
            <a href="#" class="inline-block rounded-lg px-4 py-3 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-800 dark:hover:text-white">Privacy & Keamanan Akun</a>
        </li>
        </ul>
    </div>
    
    <div class="col-span-2 flex items-center p-4 mb-4 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-100 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800" role="alert">
        <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div>
          <span class="font-medium">Akun ini belum di-verifikasi Admin.</span> Hubungi Admin atau pengurus IKA untuk verifikasi akun.
        </div>
    </div>

    @if (session('success'))
    <div class="col-span-2 flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-100 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
        <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Success</span>
        <div>
            <span class="font-medium">Berhasil!</span> {{ session('success') }}
        </div>
    </div>
    @endif

    @if (session('error'))
    <div class="col-span-2 flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-100 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
        <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Error</span>
        <div>
            <span class="font-medium">Error!</span> {{ session('error') }}
        </div>
    </div>
    @endif

    <div class="mb-4 rounded-lg bg-white p-4 shadow dark:bg-gray-800 sm:p-6 xl:mb-0">
        <h2 class="flex items-center text-xl font-bold text-gray-900 dark:text-white">
        Foto Profile<button data-popover-target="popover-image-description" type="button" class="ms-1 text-gray-400 hover:text-gray-900 dark:hover:text-white">
            <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path
                fill-rule="evenodd"
                d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
                clip-rule="evenodd"
            />
            </svg>

            <span class="sr-only">Show information</span>
        </button>
        </h2>
        <div
        id="popover-image-description"
        role="tooltip"
        class="tooltip invisible absolute z-10 inline-block w-72 rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-600"
        >
        Foto profil dapat diubah di sini, unggah foto baru dari komputer.
        <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <div class="mt-4 flex w-full items-center border-b border-gray-200 pb-4 dark:border-gray-700 sm:mt-6 sm:pb-6">
        <img class="mb-4 h-24 w-24 rounded-lg sm:mb-0 sm:mr-4" src="{{ asset('storage/' . $user->foto) }}" alt="{{ $user->nama_lengkap }} avatar" />
        <div class="w-full space-y-2">
            <!-- <span class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">Alumni+</span> -->
            <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-red-900 dark:text-red-300">Not Verified</span>
            <!-- <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-green-900 dark:text-green-300">Verified</span>
            <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-gray-700 dark:text-blue-400 border border-blue-400">Pengurus IKA</span> -->
            <h4 class="text-2xl font-bold text-gray-900 dark:text-white">{{ $user->nama_lengkap }}</h4>
            <span class="text-xl font-normal text-gray-500 dark:text-gray-400">{{ $user->nama_panggilan }}</span>
        </div>
        </div>
        <button
        id="profilePictureButton"
        data-modal-target="profilePictureModal"
        data-modal-toggle="profilePictureModal"
        type="button"
        class="mt-4 inline-flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 sm:mt-6 sm:w-auto"
        >
        <svg class="-ms-0.5 me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path
            fill-rule="evenodd"
            d="M5 8a4 4 0 1 1 7.8 1.3l-2.5 2.5A4 4 0 0 1 5 8Zm4 5H7a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h2.2a3 3 0 0 1-.1-1.6l.6-3.4a3 3 0 0 1 .9-1.5L9 13Zm9-5a3 3 0 0 0-2 .9l-6 6a1 1 0 0 0-.3.5L9 18.8a1 1 0 0 0 1.2 1.2l3.4-.7c.2 0 .3-.1.5-.3l6-6a3 3 0 0 0-2-5Z"
            clip-rule="evenodd"
            />
        </svg>
        Edit Foto
        </button>
    </div>
    <div class="mb-4 rounded-lg bg-white p-4 shadow dark:bg-gray-800 sm:p-6 xl:mb-0">
        <form action="#">
        <div class="grid gap-4 border-b border-gray-200 pb-4 dark:border-gray-700 sm:grid-cols-2 sm:pb-6">
            <div class="col-span-2">
            <label for="angkatan" class="mb-2 flex items-center text-sm font-medium text-gray-900 dark:text-white"
                >Angkatan<button data-popover-target="popover-timezone-description" type="button" class="ms-1 text-gray-400 hover:text-gray-900 dark:hover:text-white">
                <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path
                    fill-rule="evenodd"
                    d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
                    clip-rule="evenodd"
                    />
                </svg>
                <span class="sr-only">Show information</span>
                </button></label
            >
            <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="Angkatan {{ $user->angkatan }}" disabled readonly>
            <div
                id="popover-timezone-description"
                role="tooltip"
                class="tooltip invisible absolute z-10 inline-block w-72 rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-600"
            >
                Hubungi Admin jika ingin mengubah angkatan dan tahun masuk-keluar.
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            </div>
            <div>
            <label for="tahun-masuk" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Tahun Masuk</label>
            <input type="text" id="disabled-input-tahun-masuk" aria-label="disabled input tahun masuk" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $user->tahun_masuk }}" disabled readonly>
            </div>
            <div>
            <label for="tahunLulus" class="mb-2 flex items-center text-sm font-medium text-gray-900 dark:text-white">Tahun Lulus</label>
            <input type="text" id="disabled-input-tahun-lulus" aria-label="disabled input tahun lulus" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $user->tahun_lulus }}" disabled readonly>
            </div>
        </div>

        </form>
    </div>
    <div class="col-span-2 mb-4 rounded-lg bg-white p-4 shadow dark:bg-gray-800 sm:p-6 xl:mb-0">
        <h2 class="mb-4 md:mb-6 text-xl font-bold text-gray-900 dark:text-white border-b border-gray-200 dark:border-gray-700 pb-4">
        Informasi Pribadi<button data-popover-target="popover-info-description" type="button" class="ms-1 text-gray-400 hover:text-gray-900 dark:hover:text-white">
            <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path
                fill-rule="evenodd"
                d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
                clip-rule="evenodd"
            />
            </svg>

            <span class="sr-only">Show information</span>
        </button>
        
        </h2>
        <div
        id="popover-info-description"
        role="tooltip"
        class="tooltip invisible absolute z-10 inline-block w-72 rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-600"
        >
        This information is presented on your public profile, please specify carefully what you want to display.
        <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <div class="mb-4 mt-4 grid gap-4 border-b border-gray-200 pb-4 dark:border-gray-700 sm:mb-6 sm:mt-6 sm:grid-cols-2 sm:gap-24 sm:pb-6">
        <!-- Column -->
        <div>
            <dl>
            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Nama Lengkap</dt>
            <dd class="mb-4 text-gray-500 dark:text-gray-400 sm:mb-5">{{ $user->nama_lengkap }}</dd>
            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Nama Panggilan</dt>
            <dd class="mb-4 text-gray-500 dark:text-gray-400 sm:mb-5">{{ $user->nama_panggilan }}</dd>
            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Usia</dt>
            <dd class="mb-4 text-gray-500 dark:text-gray-400 sm:mb-5">{{ \Carbon\Carbon::parse($user->tanggal_lahir)->age }} Tahun</dd>
            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Lokasi</dt>
            <dd class="mb-4 flex items-center text-gray-900 dark:text-white sm:mb-5">
                <svg class="mr-1.5 h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M12 2a8 8 0 0 1 6.6 12.6l-.1.1-.6.7-5.1 6.2a1 1 0 0 1-1.6 0L6 15.3l-.3-.4-.2-.2v-.2A8 8 0 0 1 11.8 2Zm3 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" clip-rule="evenodd" />
                </svg>
                <span class="text-gray-500 dark:text-gray-400">{{ $user->kota_rumah }}, {{ $user->provinsi_rumah }}, Indonesia</span>
            </dd>
            </dl>
        </div>
        <!-- Column -->
        <dl>
            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Email</dt>
            <dd class="mb-4 text-gray-500 dark:text-gray-400 sm:mb-5">{{ $user->email }}</dd>
            
            @if($user->tempat_lahir || $user->tanggal_lahir)
            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Tempat & Tanggal Lahir</dt>
            <dd class="mb-4 text-gray-500 dark:text-gray-400 sm:mb-5">
                {{ $user->tempat_lahir ?? '-' }}
                @if($user->tanggal_lahir)
                , {{ \Carbon\Carbon::parse($user->tanggal_lahir)->format('d F Y') }}
                @endif
            </dd>
            @endif
            
            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Alamat Rumah</dt>
            <dd class="mb-4 text-gray-500 dark:text-gray-400 sm:mb-5">{{ $user->alamat_rumah ?? 'Belum diisi' }}</dd>
            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">No. HP/ WA</dt>
            <dd class="mb-4 text-gray-500 dark:text-gray-400 sm:mb-5">{{ $user->whatsapp ?? 'Belum diisi' }}</dd>
            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Social Media</dt>
            <dd class="mb-4 inline-flex items-center space-x-1 sm:mb-5">
                @if($user->facebook)
                <a href="{{ $user->facebook }}" target="_blank" data-tooltip-target="tooltip-facebook" class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                    fill-rule="evenodd"
                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                    clip-rule="evenodd"
                    />
                </svg>
                <span class="sr-only">Facebook</span>
                </a>
                <div id="tooltip-facebook" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                Facebook profile
                <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                @endif
                
                @if($user->instagram)
                <a href="{{ $user->instagram }}" target="_blank" data-tooltip-target="tooltip-instagram" class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                    fill-rule="evenodd"
                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                    clip-rule="evenodd"
                    />
                </svg>
                <span class="sr-only">Instagram</span>
                </a>
                <div
                id="tooltip-instagram"
                role="tooltip"
                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                >
                Instagram profile
                <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                @endif
                
                @if($user->linkedin)
                <a href="{{ $user->linkedin }}" target="_blank" data-tooltip-target="tooltip-github" class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="h-5 w-5" fill="#000000" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512" xml:space="preserve" stroke="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M41.4,508.1H-8.5V348.4h49.9 V508.1z M15.1,328.4h-0.4c-18.1,0-29.8-12.2-29.8-27.7c0-15.8,12.1-27.7,30.5-27.7c18.4,0,29.7,11.9,30.1,27.7 C45.6,316.1,33.9,328.4,15.1,328.4z M241,508.1h-56.6v-82.6c0-21.6-8.8-36.4-28.3-36.4c-14.9,0-23.2,10-27,19.6 c-1.4,3.4-1.2,8.2-1.2,13.1v86.3H71.8c0,0,0.7-146.4,0-159.7h56.1v25.1c3.3-11,21.2-26.6,49.8-26.6c35.5,0,63.3,23,63.3,72.4V508.1z "></path>
                    </g>
                </svg>
                <span class="sr-only">LinkedIn</span>
                </a>
                <div id="tooltip-github" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                LinkedIn profile
                <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                @endif
                
                @if(!$user->facebook && !$user->instagram && !$user->linkedin)
                <span class="text-gray-500 dark:text-gray-400">Belum ada data sosial media</span>
                @endif
            </dd>
        </dl>
        </div>
        <button
        id="editPribadiButton"
        data-modal-target="updatePribadiModal"
        data-modal-toggle="updatePribadiModal"
        class="inline-flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 sm:w-auto"
        type="button"
        >
        <svg class="-ms-0.5 me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path
            fill-rule="evenodd"
            d="M5 8a4 4 0 1 1 7.8 1.3l-2.5 2.5A4 4 0 0 1 5 8Zm4 5H7a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h2.2a3 3 0 0 1-.1-1.6l.6-3.4a3 3 0 0 1 .9-1.5L9 13Zm9-5a3 3 0 0 0-2 .9l-6 6a1 1 0 0 0-.3.5L9 18.8a1 1 0 0 0 1.2 1.2l3.4-.7c.2 0 .3-.1.5-.3l6-6a3 3 0 0 0-2-5Z"
            clip-rule="evenodd"
            />
        </svg>
        Edit
        </button>
    </div>

    <!-- Informasi Profesional -->

    <div class="col-span-2 mb-4 rounded-lg bg-white p-4 shadow dark:bg-gray-800 sm:p-6 xl:mb-0">
        <h2 class="mb-4 md:mb-6 text-xl font-bold text-gray-900 dark:text-white border-b border-gray-200 dark:border-gray-700 pb-4">
        Informasi Profesional<button data-popover-target="popover-info-description" type="button" class="ms-1 text-gray-400 hover:text-gray-900 dark:hover:text-white">
            <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path
                fill-rule="evenodd"
                d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
                clip-rule="evenodd"
            />
            </svg>

            <span class="sr-only">Show information</span>
        </button>
        </h2>
        <div
        id="popover-info-description"
        role="tooltip"
        class="tooltip invisible absolute z-10 inline-block w-72 rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-600"
        >
        This information is presented on your public profile, please specify carefully what you want to display.
        <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <div class="mb-4 mt-4 grid gap-4 border-b border-gray-200 pb-4 dark:border-gray-700 sm:mb-6 sm:mt-6 sm:grid-cols-2 sm:gap-24 sm:pb-6">
        <!-- Column -->
        <div>
            <dl>
            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Pekerjaan/ Profesi Saat Ini</dt>
            <dd class="mb-4 text-gray-500 dark:text-gray-400 sm:mb-5">{{ $user->pekerjaan ?? 'Belum diisi' }}</dd>
            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Instansi/ Perusahaan</dt>
            <dd class="mb-4 text-gray-500 dark:text-gray-400 sm:mb-5">{{ $user->perusahaan ?? 'Belum diisi' }}</dd>
            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Alamat Kantor</dt>
            <dd class="mb-4 text-gray-500 dark:text-gray-400 sm:mb-5">{{ $user->alamat_kantor ?? 'Belum diisi' }}</dd>
            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Lokasi Kerja</dt>
            <dd class="mb-4 flex items-center text-gray-900 dark:text-gray-400 sm:mb-5">
                <svg class="mr-1.5 h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M12 2a8 8 0 0 1 6.6 12.6l-.1.1-.6.7-5.1 6.2a1 1 0 0 1-1.6 0L6 15.3l-.3-.4-.2-.2v-.2A8 8 0 0 1 11.8 2Zm3 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" clip-rule="evenodd" />
                </svg>
                <span class="text-gray-500 dark:text-gray-400">
                    @if($user->kota_kantor || $user->provinsi_kantor)
                        {{ $user->kota_kantor ?? '' }}{{ ($user->kota_kantor && $user->provinsi_kantor) ? ', ' : '' }}{{ $user->provinsi_kantor ?? '' }}
                    @else
                        Belum diisi
                    @endif
                </span>
            </dd>
            </dl>
        </div>
        <!-- Column -->
        <dl>
            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Bisnis/ Usaha</dt>
            <dd class="mb-4 text-gray-500 dark:text-gray-400 sm:mb-5">{{ $user->nama_usaha ?? 'Belum diisi' }}</dd>
            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Bidang Usaha</dt>
            <dd class="mb-4 text-gray-500 dark:text-gray-400 sm:mb-5">{{ $user->bidang_usaha ?? 'Belum diisi' }}</dd>
            </dd>
        </dl>
        </div>
        <button
        id="editProfesiButton"
        data-modal-target="updateProfesiModal"
        data-modal-toggle="updateProfesiModal"
        class="inline-flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 sm:w-auto"
        type="button"
        >
        <svg class="-ms-0.5 me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path
            fill-rule="evenodd"
            d="M5 8a4 4 0 1 1 7.8 1.3l-2.5 2.5A4 4 0 0 1 5 8Zm4 5H7a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h2.2a3 3 0 0 1-.1-1.6l.6-3.4a3 3 0 0 1 .9-1.5L9 13Zm9-5a3 3 0 0 0-2 .9l-6 6a1 1 0 0 0-.3.5L9 18.8a1 1 0 0 0 1.2 1.2l3.4-.7c.2 0 .3-.1.5-.3l6-6a3 3 0 0 0-2-5Z"
            clip-rule="evenodd"
            />
        </svg>
        Edit
        </button>
    </div>

    <!-- Riwayat Pekerjaan -->  

    <div class="mb-4 rounded-lg bg-white p-4 shadow dark:bg-gray-800 sm:p-6 xl:mb-0">
        <h2 class="mb-4 md:mb-6 text-xl font-bold text-gray-900 dark:text-white border-b border-gray-200 dark:border-gray-700 pb-4">
        Riwayat Pekerjaan<button data-popover-target="popover-info-description" type="button" class="ms-1 text-gray-400 hover:text-gray-900 dark:hover:text-white">
            <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path
                fill-rule="evenodd"
                d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
                clip-rule="evenodd"
            />
            </svg>

            <span class="sr-only">Show information</span>
        </button>
        </h2>
        <div
        id="popover-info-description"
        role="tooltip"
        class="tooltip invisible absolute z-10 inline-block w-72 rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-600"
        >
        This information is presented on your public profile, please specify carefully what you want to display.
        <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <div class="mb-4 mt-4 border-b border-gray-200 pb-4 dark:border-gray-700 sm:mb-6 sm:mt-6 sm:grid-cols-2 sm:gap-24 sm:pb-6">
        <!-- Column -->
        <div>

            <ol class="relative border-s border-gray-200 dark:border-gray-700">                  
                @forelse($workExperiences ?? $user->workExperiences as $workExperience)
                <li class="mb-10 ms-4 {{ $loop->last ? '' : 'mb-10' }}">
                    <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                    <div class="inline-flex items-center">
                        <span class="me-2 flex items-center rounded {{ $workExperience->is_current ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300' : 'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300' }} px-2.5 py-0.5 text-sm font-medium">
                            <svg class="me-1 h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                fill-rule="evenodd"
                                d="M5 5c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1a2 2 0 0 1 2 2v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V7c0-1.1.9-2 2-2ZM3 19v-7c0-.6.4-1 1-1h16c.6 0 1 .4 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6-6c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1ZM7 17a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Z"
                                clip-rule="evenodd"
                            />
                            </svg>
                            {{ $workExperience->start_year }} - {{ $workExperience->is_current ? 'Sekarang' : $workExperience->end_year }}
                        </span>
                        </div>                    
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $workExperience->position }}</h3>
                    <p class="{{ $loop->last ? '' : 'mb-4' }} text-base font-normal text-gray-500 dark:text-gray-400">{{ $workExperience->company_name }}</p>
                </li>
                @empty
                <li class="ms-4">
                    <p class="text-gray-500 dark:text-gray-400">Belum ada riwayat pekerjaan. Klik tombol "Edit" untuk menambahkan.</p>
                </li>
                @endforelse
            </ol>
            
            @if(isset($workExperiences) && $workExperiences->hasPages())
            <div class="mt-4 flex justify-center">
                <nav>
                    <ul class="inline-flex -space-x-px text-sm">
                        @if($workExperiences->onFirstPage())
                            <li>
                                <span class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                                    <svg class="w-3.5 h-3.5 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                                    </svg>
                                    Sebelumnya
                                </span>
                            </li>
                        @else
                            <li>
                                <a href="{{ $workExperiences->previousPageUrl() }}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <svg class="w-3.5 h-3.5 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                                    </svg>
                                    Sebelumnya
                                </a>
                            </li>
                        @endif
                        
                        @foreach($workExperiences->getUrlRange(1, $workExperiences->lastPage()) as $page => $url)
                            <li>
                                <a href="{{ $url }}" class="flex items-center justify-center px-3 h-8 leading-tight {{ $page == $workExperiences->currentPage() ? 'text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white' : 'text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white' }}">
                                    {{ $page }}
                                </a>
                            </li>
                        @endforeach
                        
                        @if($workExperiences->hasMorePages())
                            <li>
                                <a href="{{ $workExperiences->nextPageUrl() }}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    Berikutnya
                                    <svg class="w-3.5 h-3.5 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </a>
                            </li>
                        @else
                            <li>
                                <span class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                                    Berikutnya
                                    <svg class="w-3.5 h-3.5 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </span>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
            @endif
            
        </div>
        <!-- Column -->
 
        </div>
        <button
        id="updateUserButton"
        data-modal-target="updatePekerjaanModal"
        data-modal-toggle="updatePekerjaanModal"
        class="inline-flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 sm:w-auto"
        type="button"
        >
        <svg class="-ms-0.5 me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path
            fill-rule="evenodd"
            d="M5 8a4 4 0 1 1 7.8 1.3l-2.5 2.5A4 4 0 0 1 5 8Zm4 5H7a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h2.2a3 3 0 0 1-.1-1.6l.6-3.4a3 3 0 0 1 .9-1.5L9 13Zm9-5a3 3 0 0 0-2 .9l-6 6a1 1 0 0 0-.3.5L9 18.8a1 1 0 0 0 1.2 1.2l3.4-.7c.2 0 .3-.1.5-.3l6-6a3 3 0 0 0-2-5Z"
            clip-rule="evenodd"
            />
        </svg>
        Edit
        </button>
    </div>

    <!-- Riwayat Pendidikan -->

    <div class="rounded-lg bg-white p-4 shadow dark:bg-gray-800 sm:p-6">
        <h2 class="mb-4 md:mb-6 text-xl font-bold text-gray-900 dark:text-white border-b border-gray-200 dark:border-gray-700 pb-4">
        Riwayat Pendidikan<button data-popover-target="popover-education-description" type="button" class="ms-1 text-gray-400 hover:text-gray-900 dark:hover:text-white">
            <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path
                fill-rule="evenodd"
                d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
                clip-rule="evenodd"
            />
            </svg>
            <span class="sr-only">Show information</span>
        </button>
        </h2>
        <div
        id="popover-education-description"
        role="tooltip"
        class="tooltip invisible absolute z-10 inline-block w-72 rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-600"
        >
        This information is presented on your public profile, please specify carefully what you want to display.
        <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <div class="mb-4 mt-4 border-b border-gray-200 pb-4 dark:border-gray-700 sm:mb-6 sm:mt-6 sm:pb-6 md:grid-cols-2 md:gap-24">
        <ul>
            <li class="border-b border-gray-200 pb-4 dark:border-gray-700">
            <div class="items-center space-y-3 sm:flex sm:space-x-4 sm:space-y-0">
                <div class="flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-lg bg-gray-100 text-sm font-bold uppercase text-gray-900 dark:bg-gray-700 dark:text-white">SU</div>
                <div class="min-w-0 flex-1">
                <p class="truncate text-base font-semibold text-gray-900 dark:text-white">Stanford University</p>
                <p class="truncate text-sm font-normal text-gray-500 dark:text-gray-400">Computer Science and Engineering</p>
                </div>
                <div class="inline-flex items-center">
                <span class="me-2 flex items-center rounded bg-gray-100 px-2.5 py-0.5 text-sm font-medium text-gray-800 dark:bg-gray-700 dark:text-gray-300">
                    <svg class="me-1 h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        fill-rule="evenodd"
                        d="M5 5c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1a2 2 0 0 1 2 2v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V7c0-1.1.9-2 2-2ZM3 19v-7c0-.6.4-1 1-1h16c.6 0 1 .4 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6-6c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1ZM7 17a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Z"
                        clip-rule="evenodd"
                    />
                    </svg>
                    2009 - 2014
                </span>
                </div>
            </div>
            </li>
            <li class="border-gray-200 py-4 dark:border-gray-700 md:border-b">
            <div class="items-center space-y-3 sm:flex sm:space-x-4 sm:space-y-0">
                <div class="flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-lg bg-gray-100 text-sm font-bold uppercase text-gray-900 dark:bg-gray-700 dark:text-white">TJ</div>
                <div class="min-w-0 flex-1">
                <p class="truncate text-base font-semibold text-gray-900 dark:text-white">Thomas Jeff High School</p>
                <p class="truncate text-sm font-normal text-gray-500 dark:text-gray-400">Secondary School Certificate</p>
                </div>
                <div class="inline-flex items-center">
                <span class="me-2 flex items-center rounded bg-gray-100 px-2.5 py-0.5 text-sm font-medium text-gray-800 dark:bg-gray-700 dark:text-gray-300">
                    <svg class="me-1 h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        fill-rule="evenodd"
                        d="M5 5c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1a2 2 0 0 1 2 2v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V7c0-1.1.9-2 2-2ZM3 19v-7c0-.6.4-1 1-1h16c.6 0 1 .4 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6-6c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1ZM7 17a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Z"
                        clip-rule="evenodd"
                    />
                    </svg>
                    2005 - 2009
                </span>
                </div>
            </div>
            </li>
        </ul>
        </div>
        <button
        id="updateUserButton"
        data-modal-target="updatePendidikanModal"
        data-modal-toggle="updatePendidikanModal"
        class="inline-flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 sm:w-auto"
        type="button"
        >
        <svg class="-ms-0.5 me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path
            fill-rule="evenodd"
            d="M5 8a4 4 0 1 1 7.8 1.3l-2.5 2.5A4 4 0 0 1 5 8Zm4 5H7a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h2.2a3 3 0 0 1-.1-1.6l.6-3.4a3 3 0 0 1 .9-1.5L9 13Zm9-5a3 3 0 0 0-2 .9l-6 6a1 1 0 0 0-.3.5L9 18.8a1 1 0 0 0 1.2 1.2l3.4-.7c.2 0 .3-.1.5-.3l6-6a3 3 0 0 0-2-5Z"
            clip-rule="evenodd"
            />
        </svg>
        Edit
        </button>
    </div>
    </div>

    
    <!-- Edit avatar aka Foto Profile modal -->
    <div id="profilePictureModal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
    <div class="relative max-h-full w-full max-w-2xl p-4">
        <!-- Modal content -->
        <div class="relative rounded-lg bg-white p-4 shadow dark:bg-gray-800 sm:p-5">
        <!-- Modal header -->
        <div class="mb-4 flex items-center justify-between rounded-t sm:mb-5">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Update Foto Profile</h3>
            <button
            type="button"
            class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-toggle="profilePictureModal"
            >
            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
            </svg>

            <span class="sr-only">Close modal</span>
            </button>
        </div>
        <!-- Modal content -->
        <form action="{{ route('profile.update-photo') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4 sm:mb-5">
            <label class="sr-only" for="foto">Upload Avatar</label>
            <div class="w-full items-center sm:flex">
                <img class="mb-4 h-24 w-24 rounded-lg sm:mb-0 sm:mr-4" src="{{ asset('storage/' . $user->foto) }}" alt="{{ $user->nama_lengkap }} avatar" />
                <div class="w-full">
                <input
                    class="w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
                    aria-describedby="file_input_help"
                    id="foto"
                    name="foto"
                    type="file"
                    accept="image/png,image/jpeg,image/jpg"
                    required
                />
                <p class="mb-3 mt-1 text-xs font-normal text-gray-500 dark:text-gray-300" id="file_input_help">PNG & JPG ONLY (MAX. 2MB).</p>
                <div class="flex items-center space-x-2.5">
                    <button
                    type="submit"
                    class="inline-flex items-center rounded-lg bg-primary-700 px-3 py-2 text-xs font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                    >
                    <svg class="-ms-0.5 me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path
                        fill-rule="evenodd"
                        d="M12 3a1 1 0 0 1 .78.375l4 5a1 1 0 1 1-1.56 1.25L13 6.85V14a1 1 0 1 1-2 0V6.85L8.78 9.626a1 1 0 1 1-1.56-1.25l4-5A1 1 0 0 1 12 3ZM9 14v-1H5a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-4v1a3 3 0 1 1-6 0Zm8 2a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H17Z"
                        clip-rule="evenodd"
                        />
                    </svg>
                    Upload & Simpan
                    </button>
                </div>
                </div>
            </div>
            </div>
        </form>
        </div>
    </div>
    </div>

    <!-- Modal Edit Data Personal -->
    <div id="updatePribadiModal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden flex h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
        <div class="relative max-h-full w-full max-w-2xl p-4">
            <!-- Modal content -->
            <form action="{{ route('profile.update') }}" method="POST" class="relative rounded-lg bg-white shadow dark:bg-gray-800">
                @csrf
                @method('PUT')
                <!-- Modal header -->
                <div class="flex items-center justify-between rounded-t px-4 py-4 sm:px-5">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Edit Informasi Pribadi</h3>
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
                            <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <input id="datepicker-format" name="tanggal_lahir" datepicker datepicker-min-date="06/04/1985" datepicker-max-date="05/05/2025" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih tanggal lahir" value="{{ $user->tanggal_lahir ?? '' }}">
                            </div>
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
                        <!-- <div class="sm:col-span-2">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $user->email }}" required>
                        </div> -->
                        <div>
                            <label for="facebook" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Facebook</label>
                            <input type="text" name="facebook" id="facebook" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $user->facebook ?? '' }}" placeholder="https://facebook.com/username">
                        </div>
                        <div>
                            <label for="instagram" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Instagram</label>
                            <input type="text" name="instagram" id="instagram" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $user->instagram ?? '' }}" placeholder="https://instagram.com/username">
                        </div>
                        <div>
                            <label for="linkedin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">LinkedIn</label>
                            <input type="text" name="linkedin" id="linkedin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $user->linkedin ?? '' }}" placeholder="https://linkedin.com/in/username">
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
    </div>

    <!-- Riwayat Pekerjaan Section -->
    <div id="updatePekerjaanModal" data-modal-backdrop="static" class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full">
        <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                    <h3 class="text-xl font-semibold dark:text-white">
                        Kelola Riwayat Pekerjaan
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white" data-modal-toggle="updatePekerjaanModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="p-4 bg-white rounded-lg dark:bg-gray-800 sm:p-6">
                    <div class="items-center justify-between lg:flex">
                        <div class="mb-4 lg:mb-0">
                            <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Riwayat Pekerjaan</h3>
                            <span class="text-base font-normal text-gray-500 dark:text-gray-400">Riwayat pekerjaan Anda dari waktu ke waktu</span>
                        </div>
                        <button
                            data-modal-target="tambahPekerjaanModal"
                            data-modal-toggle="tambahPekerjaanModal"
                            class="inline-flex items-center rounded-lg bg-primary-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                            type="button"
                        >
                            <svg class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                            </svg>
                            Tambah Pekerjaan
                        </button>
                    </div>

                    <div class="overflow-x-auto">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden shadow">
                                @if($user->workExperiences->isEmpty())
                                    <div class="p-5 text-center">
                                        <p class="text-gray-500 dark:text-gray-400">Belum ada riwayat pekerjaan. Klik tombol "Tambah Pekerjaan" untuk menambahkan.</p>
                                    </div>
                                @else
                                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                                        <thead class="bg-gray-100 dark:bg-gray-700">
                                            <tr>
                                                <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                    Perusahaan & Posisi
                                                </th>
                                                <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                    Periode
                                                </th>
                                                <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                    Lokasi
                                                </th>
                                                <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                            @foreach($user->workExperiences as $workExperience)
                                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    <div>{{ $workExperience->company_name }}</div>
                                                    <div class="font-normal text-gray-500">{{ $workExperience->position }}</div>
                                                    @if($workExperience->is_current)
                                                        <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">
                                                            Saat Ini
                                                        </span>
                                                    @endif
                                                </td>
                                                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $workExperience->start_year }} - {{ $workExperience->is_current ? 'Sekarang' : $workExperience->end_year }}
                                                </td>
                                                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $workExperience->kota }}, {{ $workExperience->provinsi }}
                                                </td>
                                                <td class="p-4 space-x-2 whitespace-nowrap">
                                                    <button 
                                                        type="button" 
                                                        data-modal-target="editPekerjaanModal{{ $workExperience->id }}"
                                                        data-modal-toggle="editPekerjaanModal{{ $workExperience->id }}"
                                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                                    >
                                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        Edit
                                                    </button>
                                                    <form action="{{ route('work-experiences.destroy', $workExperience->id) }}" method="POST" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900" onclick="return confirm('Apakah Anda yakin ingin menghapus riwayat pekerjaan ini?')">
                                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            Hapus
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>

                                            <!-- Edit Pekerjaan Modal for each work experience -->
                                            <div data-modal-backdrop="static" class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full" id="editPekerjaanModal{{ $workExperience->id }}">
                                                <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                                                        <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                                                            <h3 class="text-xl font-semibold dark:text-white">
                                                                Edit Riwayat Pekerjaan
                                                            </h3>
                                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white" data-modal-toggle="editPekerjaanModal{{ $workExperience->id }}">
                                <!-- Edit Pekerjaan Modal for each work experience -->
                                <div data-modal-backdrop="static" class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full" id="editPekerjaanModal{{ $workExperience->id }}">
                                    <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                                            <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                                                <h3 class="text-xl font-semibold dark:text-white">
                                                    Edit Riwayat Pekerjaan
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white" data-modal-toggle="editPekerjaanModal{{ $workExperience->id }}">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                </button>
                                            </div>
                                            <form action="{{ route('work-experiences.update', $workExperience->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="p-6 space-y-6">
                                                    <div class="grid grid-cols-6 gap-6">
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Posisi/Jabatan</label>
                                                            <input type="text" name="position" id="position" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $workExperience->position }}" required>
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="company_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Perusahaan</label>
                                                            <input type="text" name="company_name" id="company_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $workExperience->company_name }}" required>
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="start_year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Mulai</label>
                                                            <input type="number" name="start_year" id="start_year" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $workExperience->start_year }}" required min="1950" max="{{ date('Y') }}">
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="end_year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Selesai</label>
                                                            <input type="number" name="end_year" id="end_year" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $workExperience->end_year }}" min="1950" max="{{ date('Y') }}" {{ $workExperience->is_current ? 'disabled' : '' }}>
                                                        </div>
                                                        <div class="col-span-6">
                                                            <div class="flex items-center">
                                                                <input id="is_current" name="is_current" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" {{ $workExperience->is_current ? 'checked' : '' }} onchange="toggleEndYear(this)">
                                                                <label for="is_current" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Masih bekerja di sini</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-span-6">
                                                            <label for="alamat_kantor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Kantor</label>
                                                            <textarea name="alamat_kantor" id="alamat_kantor" rows="3" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">{{ $workExperience->alamat_kantor }}</textarea>
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="kota" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota</label>
                                                            <input type="text" name="kota" id="kota" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $workExperience->kota }}">
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="provinsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>
                                                            <input type="text" name="provinsi" id="provinsi" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $workExperience->provinsi }}">
                                                        </div>
                                                        <div class="col-span-6">
                                                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Pekerjaan/Tanggung Jawab</label>
                                                            <textarea name="description" id="description" rows="4" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">{{ $workExperience->description }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                                                    <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Simpan</button>
                                                    <button type="button" class="ml-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600" data-modal-toggle="editPekerjaanModal{{ $workExperience->id }}">Batal</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Tambah Pekerjaan Modal -->
    <div data-modal-backdrop="static" class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full" id="tambahPekerjaanModal">
        <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                    <h3 class="text-xl font-semibold dark:text-white">
                        Tambah Riwayat Pekerjaan
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white" data-modal-toggle="tambahPekerjaanModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <form action="{{ route('work-experiences.store') }}" method="POST">
                    @csrf
                    <div class="p-6 space-y-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Posisi/Jabatan</label>
                                <input type="text" name="position" id="position" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Jabatan/Posisi" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="company_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Perusahaan</label>
                                <input type="text" name="company_name" id="company_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Perusahaan" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="start_year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Mulai</label>
                                <input type="number" name="start_year" id="start_year" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="2010" required min="1950" max="{{ date('Y') }}">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="end_year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Selesai</label>
                                <input type="number" name="end_year" id="end_year_new" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="2020" min="1950" max="{{ date('Y') }}">
                            </div>
                            <div class="col-span-6">
                                <div class="flex items-center">
                                    <input id="is_current_new" name="is_current" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" onchange="toggleEndYearNew(this)">
                                    <label for="is_current_new" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Masih bekerja di sini</label>
                                </div>
                            </div>
                            <div class="col-span-6">
                                <label for="alamat_kantor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Kantor</label>
                                <textarea name="alamat_kantor" id="alamat_kantor" rows="3" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Alamat lengkap kantor"></textarea>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="kota" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota</label>
                                <input type="text" name="kota" id="kota" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Kota">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="provinsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>
                                <input type="text" name="provinsi" id="provinsi" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Provinsi">
                            </div>
                            <div class="col-span-6">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Pekerjaan/Tanggung Jawab</label>
                                <textarea name="description" id="description" rows="4" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Deskripsi tugas dan tanggung jawab"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                        <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Simpan</button>
                        <button type="button" class="ml-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600" data-modal-toggle="tambahPekerjaanModal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Script untuk menangani field end_year saat checkbox is_current dicentang -->
    <script>
    function toggleEndYear(checkbox) {
        const endYearInput = checkbox.closest('form').querySelector('input[name="end_year"]');
        if (checkbox.checked) {
            endYearInput.disabled = true;
            endYearInput.value = '';
        } else {
            endYearInput.disabled = false;
        }
    }

    function toggleEndYearNew(checkbox) {
        const endYearInput = document.getElementById('end_year_new');
        if (checkbox.checked) {
            endYearInput.disabled = true;
            endYearInput.value = '';
        } else {
            endYearInput.disabled = false;
        }
    }
    </script>

    <!-- Riwayat Pendidikan Section -->
    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6 mb-4">
        <div class="items-center justify-between lg:flex">
            <div class="mb-4 lg:mb-0">
                <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Riwayat Pendidikan</h3>
                <span class="text-base font-normal text-gray-500 dark:text-gray-400">Riwayat pendidikan formal Anda</span>
            </div>
            <button
                data-modal-target="tambahPendidikanModal"
                data-modal-toggle="tambahPendidikanModal"
                class="inline-flex items-center rounded-lg bg-primary-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                type="button"
            >
                <svg class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                </svg>
                Tambah Pendidikan
            </button>
        </div>

        <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow">
                    @if($user->educations->isEmpty())
                        <div class="p-5 text-center">
                            <p class="text-gray-500 dark:text-gray-400">Belum ada riwayat pendidikan. Klik tombol "Tambah Pendidikan" untuk menambahkan.</p>
                        </div>
                    @else
                        <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Institusi & Jurusan
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Jenjang
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Periode
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                @foreach($user->educations as $education)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <div>{{ $education->institution_name }} ({{ $education->institution_code }})</div>
                                        <div class="font-normal text-gray-500">{{ $education->major }}</div>
                                    </td>
                                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $education->level }}
                                    </td>
                                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $education->start_year }} - {{ $education->end_year }}
                                    </td>
                                    <td class="p-4 space-x-2 whitespace-nowrap">
                                        <button 
                                            type="button" 
                                            data-modal-target="editPendidikanModal{{ $education->id }}"
                                            data-modal-toggle="editPendidikanModal{{ $education->id }}"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                        >
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                                            </svg>
                                            Edit
                                        </button>
                                        <form action="{{ route('educations.destroy', $education->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900" onclick="return confirm('Apakah Anda yakin ingin menghapus riwayat pendidikan ini?')">
                                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                                </svg>
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- Edit Pendidikan Modal for each education -->
                                <div data-modal-backdrop="static" class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full" id="editPendidikanModal{{ $education->id }}">
                                    <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                                            <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                                                <h3 class="text-xl font-semibold dark:text-white">
                                                    Edit Riwayat Pendidikan
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white" data-modal-toggle="editPendidikanModal{{ $education->id }}">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                </button>
                                            </div>
                                            <form action="{{ route('educations.update', $education->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="p-6 space-y-6">
                                                    <div class="grid grid-cols-6 gap-6">
                                                        <div class="col-span-6 sm:col-span-4">
                                                            <label for="institution_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Institusi</label>
                                                            <input type="text" name="institution_name" id="institution_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $education->institution_name }}" required>
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-2">
                                                            <label for="institution_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Institusi</label>
                                                            <input type="text" name="institution_code" id="institution_code" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $education->institution_code }}" maxlength="3" required>
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="level" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenjang</label>
                                                            <select name="level" id="level" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                                                                <option value="SD" {{ $education->level == 'SD' ? 'selected' : '' }}>SD</option>
                                                                <option value="SMP" {{ $education->level == 'SMP' ? 'selected' : '' }}>SMP</option>
                                                                <option value="SMA/SMK" {{ $education->level == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK</option>
                                                                <option value="D1" {{ $education->level == 'D1' ? 'selected' : '' }}>D1</option>
                                                                <option value="D2" {{ $education->level == 'D2' ? 'selected' : '' }}>D2</option>
                                                                <option value="D3" {{ $education->level == 'D3' ? 'selected' : '' }}>D3</option>
                                                                <option value="D4" {{ $education->level == 'D4' ? 'selected' : '' }}>D4</option>
                                                                <option value="S1" {{ $education->level == 'S1' ? 'selected' : '' }}>S1</option>
                                                                <option value="S2" {{ $education->level == 'S2' ? 'selected' : '' }}>S2</option>
                                                                <option value="S3" {{ $education->level == 'S3' ? 'selected' : '' }}>S3</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="major" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan/Program Studi</label>
                                                            <input type="text" name="major" id="major" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $education->major }}">
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="start_year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Mulai</label>
                                                            <input type="number" name="start_year" id="start_year" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $education->start_year }}" required min="1950" max="{{ date('Y') }}">
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="end_year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Selesai</label>
                                                            <input type="number" name="end_year" id="end_year" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $education->end_year }}" required min="1950" max="{{ date('Y') + 10 }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                                                    <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Simpan</button>
                                                    <button type="button" class="ml-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600" data-modal-toggle="editPendidikanModal{{ $education->id }}">Batal</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Tambah Pendidikan Modal -->
    <div data-modal-backdrop="static" class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full" id="tambahPendidikanModal">
        <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                    <h3 class="text-xl font-semibold dark:text-white">
                        Tambah Riwayat Pendidikan
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white" data-modal-toggle="tambahPendidikanModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <form action="{{ route('educations.store') }}" method="POST">
                    @csrf
                    <div class="p-6 space-y-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="institution_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Institusi</label>
                                <input type="text" name="institution_name" id="institution_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama institusi pendidikan" required>
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label for="institution_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Institusi</label>
                                <input type="text" name="institution_code" id="institution_code" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Mis: ITB, UI, UGM" maxlength="3" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="level" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenjang</label>
                                <select name="level" id="level" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                                    <option value="">Pilih Jenjang</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA/SMK">SMA/SMK</option>
                                    <option value="D1">D1</option>
                                    <option value="D2">D2</option>
                                    <option value="D3">D3</option>
                                    <option value="D4">D4</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="major" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan/Program Studi</label>
                                <input type="text" name="major" id="major" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Jurusan/Program Studi">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="start_year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Mulai</label>
                                <input type="number" name="start_year" id="start_year" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="2010" required min="1950" max="{{ date('Y') }}">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="end_year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Selesai</label>
                                <input type="number" name="end_year" id="end_year" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="2014" required min="1950" max="{{ date('Y') + 10 }}">
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                        <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Simpan</button>
                        <button type="button" class="ml-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600" data-modal-toggle="tambahPendidikanModal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Update Profesi Modal -->
    <div data-modal-backdrop="static" class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full" id="updateProfesiModal">
        <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                    <h3 class="text-xl font-semibold dark:text-white">
                        Edit Informasi Profesional
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white" data-modal-toggle="updateProfesiModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <form action="{{ route('profile.update') }}" method="POST" id="formProfesi">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="form_source" value="profesi_form">
                    <div class="p-6 space-y-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6">
                                <label for="pekerjaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan/Profesi Saat Ini</label>
                                <input type="text" name="pekerjaan" id="pekerjaan" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $user->pekerjaan }}">
                            </div>
                            <div class="col-span-6">
                                <label for="perusahaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Instansi/Perusahaan</label>
                                <input type="text" name="perusahaan" id="perusahaan" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $user->perusahaan }}">
                            </div>
                            <div class="col-span-6">
                                <label for="alamat_kantor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Kantor</label>
                                <textarea name="alamat_kantor" id="alamat_kantor" rows="3" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">{{ $user->alamat_kantor }}</textarea>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="provinsi_kantor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi Kantor</label>
                                <select name="provinsi_kantor" id="provinsi_kantor" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="">Pilih Provinsi</option>
                                    <!-- Daftar Provinsi -->
                                    <option value="Aceh" {{ $user->provinsi_kantor == 'Aceh' ? 'selected' : '' }}>Aceh</option>
                                    <option value="Sumatera Utara" {{ $user->provinsi_kantor == 'Sumatera Utara' ? 'selected' : '' }}>Sumatera Utara</option>
                                    <option value="Sumatera Barat" {{ $user->provinsi_kantor == 'Sumatera Barat' ? 'selected' : '' }}>Sumatera Barat</option>
                                    <option value="Riau" {{ $user->provinsi_kantor == 'Riau' ? 'selected' : '' }}>Riau</option>
                                    <option value="Jambi" {{ $user->provinsi_kantor == 'Jambi' ? 'selected' : '' }}>Jambi</option>
                                    <option value="Sumatera Selatan" {{ $user->provinsi_kantor == 'Sumatera Selatan' ? 'selected' : '' }}>Sumatera Selatan</option>
                                    <option value="Bengkulu" {{ $user->provinsi_kantor == 'Bengkulu' ? 'selected' : '' }}>Bengkulu</option>
                                    <option value="Lampung" {{ $user->provinsi_kantor == 'Lampung' ? 'selected' : '' }}>Lampung</option>
                                    <option value="Kepulauan Bangka Belitung" {{ $user->provinsi_kantor == 'Kepulauan Bangka Belitung' ? 'selected' : '' }}>Kepulauan Bangka Belitung</option>
                                    <option value="Kepulauan Riau" {{ $user->provinsi_kantor == 'Kepulauan Riau' ? 'selected' : '' }}>Kepulauan Riau</option>
                                    <option value="DKI Jakarta" {{ $user->provinsi_kantor == 'DKI Jakarta' ? 'selected' : '' }}>DKI Jakarta</option>
                                    <option value="Jawa Barat" {{ $user->provinsi_kantor == 'Jawa Barat' ? 'selected' : '' }}>Jawa Barat</option>
                                    <option value="Jawa Tengah" {{ $user->provinsi_kantor == 'Jawa Tengah' ? 'selected' : '' }}>Jawa Tengah</option>
                                    <option value="DI Yogyakarta" {{ $user->provinsi_kantor == 'DI Yogyakarta' ? 'selected' : '' }}>DI Yogyakarta</option>
                                    <option value="Jawa Timur" {{ $user->provinsi_kantor == 'Jawa Timur' ? 'selected' : '' }}>Jawa Timur</option>
                                    <option value="Banten" {{ $user->provinsi_kantor == 'Banten' ? 'selected' : '' }}>Banten</option>
                                    <option value="Bali" {{ $user->provinsi_kantor == 'Bali' ? 'selected' : '' }}>Bali</option>
                                    <option value="Nusa Tenggara Barat" {{ $user->provinsi_kantor == 'Nusa Tenggara Barat' ? 'selected' : '' }}>Nusa Tenggara Barat</option>
                                    <option value="Nusa Tenggara Timur" {{ $user->provinsi_kantor == 'Nusa Tenggara Timur' ? 'selected' : '' }}>Nusa Tenggara Timur</option>
                                    <option value="Kalimantan Barat" {{ $user->provinsi_kantor == 'Kalimantan Barat' ? 'selected' : '' }}>Kalimantan Barat</option>
                                    <option value="Kalimantan Tengah" {{ $user->provinsi_kantor == 'Kalimantan Tengah' ? 'selected' : '' }}>Kalimantan Tengah</option>
                                    <option value="Kalimantan Selatan" {{ $user->provinsi_kantor == 'Kalimantan Selatan' ? 'selected' : '' }}>Kalimantan Selatan</option>
                                    <option value="Kalimantan Timur" {{ $user->provinsi_kantor == 'Kalimantan Timur' ? 'selected' : '' }}>Kalimantan Timur</option>
                                    <option value="Kalimantan Utara" {{ $user->provinsi_kantor == 'Kalimantan Utara' ? 'selected' : '' }}>Kalimantan Utara</option>
                                    <option value="Sulawesi Utara" {{ $user->provinsi_kantor == 'Sulawesi Utara' ? 'selected' : '' }}>Sulawesi Utara</option>
                                    <option value="Sulawesi Tengah" {{ $user->provinsi_kantor == 'Sulawesi Tengah' ? 'selected' : '' }}>Sulawesi Tengah</option>
                                    <option value="Sulawesi Selatan" {{ $user->provinsi_kantor == 'Sulawesi Selatan' ? 'selected' : '' }}>Sulawesi Selatan</option>
                                    <option value="Sulawesi Tenggara" {{ $user->provinsi_kantor == 'Sulawesi Tenggara' ? 'selected' : '' }}>Sulawesi Tenggara</option>
                                    <option value="Gorontalo" {{ $user->provinsi_kantor == 'Gorontalo' ? 'selected' : '' }}>Gorontalo</option>
                                    <option value="Sulawesi Barat" {{ $user->provinsi_kantor == 'Sulawesi Barat' ? 'selected' : '' }}>Sulawesi Barat</option>
                                    <option value="Maluku" {{ $user->provinsi_kantor == 'Maluku' ? 'selected' : '' }}>Maluku</option>
                                    <option value="Maluku Utara" {{ $user->provinsi_kantor == 'Maluku Utara' ? 'selected' : '' }}>Maluku Utara</option>
                                    <option value="Papua" {{ $user->provinsi_kantor == 'Papua' ? 'selected' : '' }}>Papua</option>
                                    <option value="Papua Barat" {{ $user->provinsi_kantor == 'Papua Barat' ? 'selected' : '' }}>Papua Barat</option>
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="kota_kantor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota/Kabupaten Kantor</label>
                                <input type="text" name="kota_kantor" id="kota_kantor" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $user->kota_kantor }}">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="nama_usaha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bisnis/Usaha</label>
                                <input type="text" name="nama_usaha" id="nama_usaha" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $user->nama_usaha }}">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="bidang_usaha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bidang Usaha</label>
                                <input type="text" name="bidang_usaha" id="bidang_usaha" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $user->bidang_usaha }}">
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                        <button type="submit" id="simpanProfesiButton" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Simpan</button>
                        <button type="button" class="ml-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600" data-modal-toggle="updateProfesiModal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
                </div>
                
            
      </main>
      <footer class="bg-white rounded-lg shadow sm:flex sm:items-center sm:justify-between p-4 sm:p-6 xl:p-8 dark:bg-gray-800 antialiased">
    <p class="mb-4 text-sm text-center text-gray-500 dark:text-gray-400 sm:mb-0">
        &copy; 2025 <a href="https://ikasmak.or.id/" class="hover:underline" target="_blank">IKASAKMASMAKMA.or.id</a>. All rights reserved.
    </p>
    <div class="flex justify-center items-center space-x-1">
      <a href="#" data-tooltip-target="tooltip-facebook" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
              <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
          </svg>
          <span class="sr-only">Facebook</span>
      </a>
      <div id="tooltip-facebook" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
          Like us on Facebook
          <div class="tooltip-arrow" data-popper-arrow></div>
      </div>
      <a href="#" data-tooltip-target="tooltip-twitter" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path fill="currentColor" d="M12.186 8.672 18.743.947h-2.927l-5.005 5.9-4.44-5.9H0l7.434 9.876-6.986 8.23h2.927l5.434-6.4 4.82 6.4H20L12.186 8.672Zm-2.267 2.671L8.544 9.515 3.2 2.42h2.2l4.312 5.719 1.375 1.828 5.731 7.613h-2.2l-4.699-6.237Z"/>
          </svg>
          <span class="sr-only">Twitter</span>
      </a>
      <div id="tooltip-twitter" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
          Follow us on Twitter
          <div class="tooltip-arrow" data-popper-arrow></div>
      </div>
      <a href="#" data-tooltip-target="tooltip-github" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
          </svg>
          <span class="sr-only">Instagram</span>
      </a>
      <div id="tooltip-instagram" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
          Follow us on Instagram
          <div class="tooltip-arrow" data-popper-arrow></div>
      </div>
  </div>
  </footer>
    </div>
  </div>

      <script src="{{ asset('app.bundle.js')}}"></script>
    </footer>
    <script>
        // Inisialisasi modal
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('updatePribadiModal');
            const openButton = document.getElementById('editPribadiButton');
            const closeButtons = document.querySelectorAll('[data-modal-toggle="updatePribadiModal"]');

            // Fungsi untuk membuka modal
            function openModal() {
                if (modal) {
                    modal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                }
            }

            // Fungsi untuk menutup modal
            function closeModal() {
                if (modal) {
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }
            }

            // Event listener untuk tombol buka
            if (openButton) {
                openButton.addEventListener('click', openModal);
            }

            // Event listener untuk tombol tutup
            closeButtons.forEach(button => {
                button.addEventListener('click', closeModal);
            });

            // Event listener untuk klik di luar modal
            window.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeModal();
                }
            });

            // Event listener untuk tombol ESC
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                    closeModal();
                }
            });
            
            // Inisialisasi modal Informasi Profesional
            const profesiModal = document.getElementById('updateProfesiModal');
            const openProfesiButton = document.getElementById('editProfesiButton');
            const closeProfesiButtons = document.querySelectorAll('[data-modal-toggle="updateProfesiModal"]');

            // Fungsi untuk membuka modal Profesi
            function openProfesiModal() {
                if (profesiModal) {
                    profesiModal.classList.remove('hidden');
                    profesiModal.classList.add('flex');
                    document.body.style.overflow = 'hidden';
                }
            }

            // Fungsi untuk menutup modal Profesi
            function closeProfesiModal() {
                if (profesiModal) {
                    profesiModal.classList.add('hidden');
                    profesiModal.classList.remove('flex');
                    document.body.style.overflow = 'auto';
                }
            }

            // Event listener untuk tombol buka Profesi
            if (openProfesiButton) {
                openProfesiButton.addEventListener('click', openProfesiModal);
                console.log('Tombol edit profesi ditemukan:', openProfesiButton);
            } else {
                console.error('Tombol edit profesi tidak ditemukan');
            }

            // Event listener untuk tombol tutup Profesi
            closeProfesiButtons.forEach(button => {
                button.addEventListener('click', closeProfesiModal);
            });

            // Event listener untuk klik di luar modal Profesi
            window.addEventListener('click', function(e) {
                if (e.target === profesiModal) {
                    closeProfesiModal();
                }
            });

            // Event listener untuk tombol ESC pada modal Profesi
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && !profesiModal.classList.contains('hidden')) {
                    closeProfesiModal();
                }
            });
            
            // Tambahkan event listener untuk form profesi
            const formProfesi = document.getElementById('formProfesi');
            if (formProfesi) {
                formProfesi.addEventListener('submit', function(e) {
                    // Log data form untuk debugging
                    const formData = new FormData(formProfesi);
                    console.log('Form Profesi disubmit, data yang dikirim:');
                    for (let pair of formData.entries()) {
                        console.log(pair[0] + ': ' + pair[1]);
                    }
                });
                console.log('Event listener form profesi terpasang');
            } else {
                console.error('Form profesi tidak ditemukan');
            }
            
            // Pastikan datepicker berfungsi dan mengembalikan format yang benar
            const datepickerEl = document.getElementById('datepicker-format');
            if (datepickerEl) {
                // Memastikan format tanggal yang dihasilkan sesuai dengan yang diharapkan Laravel (YYYY-MM-DD)
                datepickerEl.addEventListener('changeDate', function(e) {
                    console.log('Tanggal dipilih:', datepickerEl.value);
                });
                
                // Tambahkan validasi saat form personal disubmit
                const formPersonal = document.querySelector('#updatePribadiModal form');
                if (formPersonal) {
                    formPersonal.addEventListener('submit', function(e) {
                        // Log semua data form untuk debugging
                        const formData = new FormData(formPersonal);
                        console.log('Form Personal disubmit, data yang dikirim:');
                        for (let pair of formData.entries()) {
                            console.log(pair[0] + ': ' + pair[1]);
                        }
                        
                        // Pastikan format tanggal sesuai dengan yang diharapkan
                        const tanggalLahir = formData.get('tanggal_lahir');
                        if (tanggalLahir) {
                            console.log('Tanggal lahir yang dikirim:', tanggalLahir);
                        } else {
                            console.warn('Tanggal lahir tidak ada dalam form data');
                        }
                    });
                }
            } else {
                console.error('Datepicker tidak ditemukan');
            }
        });
    </script>
    <script src="{{ asset('js/indonesia-area.js') }}"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Untuk alamat rumah
        const provinsiRumahSelect = document.getElementById('provinsi_rumah');
        const kotaRumahSelect = document.getElementById('kota_rumah');
        
        // Cek ketersediaan data indonesia
        if (typeof indonesiaArea === 'undefined') {
            console.error('Error: Data wilayah Indonesia tidak ditemukan. Pastikan file indonesia-area.js dimuat dengan benar.');
        }

        // Function untuk update opsi kota rumah
        function updateKotaRumahOptions(provinsi) {
            // Simpan nilai kota yang dipilih sebelumnya
            const selectedKota = "{{ $user->kota_rumah }}";
            
            // Kosongkan pilihan kota
            kotaRumahSelect.innerHTML = '<option value="">Pilih Kota/Kabupaten</option>';
            
            // Jika ada provinsi yang dipilih
            if (provinsi && indonesiaArea[provinsi]) {
                // Tambahkan opsi kota berdasarkan provinsi
                indonesiaArea[provinsi].forEach(kota => {
                    const option = document.createElement('option');
                    option.value = kota;
                    option.textContent = kota;
                    
                    // Pilih kota yang sesuai dengan yang tersimpan di database
                    if (kota === selectedKota) {
                        option.selected = true;
                    }
                    
                    kotaRumahSelect.appendChild(option);
                });
            }
        }

        // Event listener untuk perubahan provinsi rumah
        provinsiRumahSelect.addEventListener('change', function() {
            updateKotaRumahOptions(this.value);
        });

        // Inisialisasi daftar kota saat pertama kali halaman dimuat
        if (provinsiRumahSelect.value) {
            updateKotaRumahOptions(provinsiRumahSelect.value);
        }

        // Tambahkan event listener untuk saat modal dibuka
        const modalToggleButtons = document.querySelectorAll('[data-modal-toggle="updatePribadiModal"]');
        modalToggleButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Isi ulang dropdown kota berdasarkan provinsi yang dipilih
                setTimeout(() => {
                    if (provinsiRumahSelect.value) {
                        updateKotaRumahOptions(provinsiRumahSelect.value);
                    }
                }, 300); // Delay sedikit untuk memastikan modal sudah terbuka
            });
        });
    });
    </script>

    <!-- Script untuk memastikan semua modal berfungsi -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Pastikan Flowbite modal terinisialisasi dengan benar
            if (typeof initFlowbite === 'function') {
                initFlowbite();
            }

            // Event listener untuk tombol Edit Pekerjaan
            document.querySelectorAll('[data-modal-target^="editPekerjaanModal"]').forEach(function(button) {
                button.addEventListener('click', function() {
                    const modalId = this.getAttribute('data-modal-target');
                    const modal = document.getElementById(modalId);
                    if (modal) {
                        // Tampilkan modal
                        modal.classList.remove('hidden');
                        modal.classList.add('flex');
                    }
                });
            });

            // Event listener untuk tombol Edit Pendidikan
            document.querySelectorAll('[data-modal-target^="editPendidikanModal"]').forEach(function(button) {
                button.addEventListener('click', function() {
                    const modalId = this.getAttribute('data-modal-target');
                    const modal = document.getElementById(modalId);
                    if (modal) {
                        // Tampilkan modal
                        modal.classList.remove('hidden');
                        modal.classList.add('flex');
                    }
                });
            });

            // Event listener untuk tombol close pada modal
            document.querySelectorAll('[data-modal-toggle]').forEach(function(button) {
                button.addEventListener('click', function() {
                    const modalId = this.getAttribute('data-modal-toggle');
                    const modal = document.getElementById(modalId);
                    if (modal) {
                        // Toggle visibility
                        if (modal.classList.contains('hidden')) {
                            modal.classList.remove('hidden');
                            modal.classList.add('flex');
                        } else {
                            modal.classList.add('hidden');
                            modal.classList.remove('flex');
                        }
                    }
                });
            });
        });
    </script>
    
    <!-- Aktivasi khusus untuk modal Profesi -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil elemen tombol dan modal
            const profesiButtons = document.querySelectorAll('[data-modal-target="updateProfesiModal"]');
            const profesiModal = document.getElementById('updateProfesiModal');
            
            if (!profesiModal) {
                console.error('Modal updateProfesiModal tidak ditemukan!');
                return;
            }
            
            // Fungsi untuk membuka modal
            function openProfesiModal() {
                profesiModal.classList.remove('hidden');
                profesiModal.classList.add('flex');
                console.log('Modal Profesi dibuka');
            }
            
            // Fungsi untuk menutup modal
            function closeProfesiModal() {
                profesiModal.classList.add('hidden');
                profesiModal.classList.remove('flex');
                console.log('Modal Profesi ditutup');
            }
            
            // Tambahkan listener untuk membuka modal
            profesiButtons.forEach(button => {
                button.addEventListener('click', openProfesiModal);
                console.log('Listener ditambahkan ke tombol Profesi');
            });
            
            // Tambahkan listener untuk tombol tutup
            const closeButtons = document.querySelectorAll('[data-modal-toggle="updateProfesiModal"]');
            closeButtons.forEach(button => {
                button.addEventListener('click', closeProfesiModal);
            });
            
            // Pastikan form di dalam modal berfungsi normal
            const profesiForm = profesiModal.querySelector('form');
            if (profesiForm) {
                console.log('Form Profesi ditemukan');
                // Hapus event listener lama jika ada
                const newProfesiForm = profesiForm.cloneNode(true);
                profesiForm.parentNode.replaceChild(newProfesiForm, profesiForm);
            }
        });
    </script>
    
    
    <!-- Fix untuk modal updateProfesiModal -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Reset modal dan form
            const updateProfesiModal = document.getElementById('updateProfesiModal');
            if (updateProfesiModal) {
                // Hapus modal dari DOM dan tambahkan kembali untuk menghapus event handler yang mengganggu
                const parent = updateProfesiModal.parentNode;
                const modalCopy = updateProfesiModal.cloneNode(true);
                parent.removeChild(updateProfesiModal);
                parent.appendChild(modalCopy);
                
                // Sekarang tambahkan event listener yang bersih
                const newButtons = document.querySelectorAll('[data-modal-target="updateProfesiModal"]');
                newButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        modalCopy.classList.remove('hidden');
                        modalCopy.classList.add('flex');
                    });
                });
                
                // Tambahkan event listener untuk tombol close
                const closeButtons = modalCopy.querySelectorAll('[data-modal-toggle="updateProfesiModal"]');
                closeButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        modalCopy.classList.add('hidden');
                        modalCopy.classList.remove('flex');
                    });
                });
            }
        });
    </script>
    <!-- Script BARU untuk menangani modal Informasi Profesional -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Pastikan tidak ada konflik dengan script sebelumnya
            
            // 1. Dapatkan elemen modal dan tombol
            const profesiModal = document.getElementById('updateProfesiModal');
            const openButtons = document.querySelectorAll('[data-modal-target="updateProfesiModal"]');
            const closeButtons = document.querySelectorAll('[data-modal-toggle="updateProfesiModal"]');
            
            if (!profesiModal) {
                console.error('Modal updateProfesiModal tidak ditemukan');
                return;
            }
            
            // 2. Buat fungsi untuk membuka modal
            function openProfesiModal() {
                profesiModal.classList.remove('hidden');
                profesiModal.classList.add('flex');
                console.log('Modal Profesi terbuka');
            }
            
            // 3. Buat fungsi untuk menutup modal
            function closeProfesiModal() {
                profesiModal.classList.add('hidden');
                profesiModal.classList.remove('flex');
                console.log('Modal Profesi tertutup');
            }
            
            // 4. Pasang event listener pada tombol buka
            openButtons.forEach(button => {
                button.addEventListener('click', openProfesiModal);
            });
            
            // 5. Pasang event listener pada tombol tutup
            closeButtons.forEach(button => {
                button.addEventListener('click', closeProfesiModal);
            });
            
            // 6. Pastikan form bisa disubmit
            const form = profesiModal.querySelector('form');
            if (form) {
                // Hapus event listener yang mungkin mencegah submit
                const clonedForm = form.cloneNode(true);
                form.parentNode.replaceChild(clonedForm, form);
                
                // Tambahkan debugging
                console.log('Form ditemukan dan siap untuk disubmit:', clonedForm.action);
                
                // Pasang submit handler baru yang hanya untuk logging
                clonedForm.addEventListener('submit', function() {
                    console.log('Form sedang dikirim...');
                    // Modal akan ditutup otomatis setelah form terkirim
                });
                
                // Pastikan method dan token CSRF ada
                if (!clonedForm.querySelector('input[name="_token"]')) {
                    const csrfToken = document.querySelector('meta[name="csrf-token"]');
                    if (csrfToken) {
                        const tokenInput = document.createElement('input');
                        tokenInput.setAttribute('type', 'hidden');
                        tokenInput.setAttribute('name', '_token');
                        tokenInput.setAttribute('value', csrfToken.getAttribute('content'));
                        clonedForm.appendChild(tokenInput);
                    }
                }
                
                if (!clonedForm.querySelector('input[name="_method"]')) {
                    const methodInput = document.createElement('input');
                    methodInput.setAttribute('type', 'hidden');
                    methodInput.setAttribute('name', '_method');
                    methodInput.setAttribute('value', 'PUT');
                    clonedForm.appendChild(methodInput);
                }
            }
        });
    </script>
</body>
</html>
