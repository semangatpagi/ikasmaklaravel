<!doctype html>
<html lang="en">
  <head><script src="/livereload.js?mindelay=10&amp;v=2&amp;port=1313&amp;path=livereload" data-no-instant defer></script>
    <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="Official Website Ikatan Alumni Sekolah Menengah Analisis Kimia Makassar" />
<meta name="author" content="Themesberg" />
<meta name="generator" content="Hugo 0.142.0" />

<title>Login - IKASMAK</title>

<link rel="canonical" href="/login" />

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
<meta name="twitter:title" content="Login - IKASMAK" />
<meta
  name="twitter:description"
  content="Official Website Ikatan Alumni Sekolah Menengah Analisis Kimia Makassar"
/>
<meta
  name="twitter:image"
  content="application-ui/demo/images/og-image.jpg"
/>

<!-- Facebook -->
<meta property="og:url" content="ikasmak/login/" />
<meta property="og:title" content="Login - IKASMAK" />
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
  // Menghilangkan mode dark
  document.documentElement.classList.remove("dark");
</script>

  </head>
  
    <body class="bg-gray-50 antialiased">
  
  <main class="bg-gray-50">
    
<section class="bg-[url('https://alumni.ikasakmasmakma.or.id/public/bg-login.jpg')] bg-no-repeat bg-cover bg-center bg-gray-700 bg-blend-multiply bg-opacity-60">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-white">
            <img class="w-8 h-8 mr-2" src="logoikasmak.png" alt="logo">
            IKASMAK MAKASSAR    
        </a>
        <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 lg:space-y-8 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-center text-gray-900 md:text-2xl">
                    Member Area
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="name@company.com" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                              <input id="remember" name="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300">
                            </div>
                            <div class="ml-3 text-sm">
                              <label for="remember" class="text-gray-500">Ingat Saya</label>
                            </div>
                        </div>
                        <a href="{{ route('password.request') }}" class="text-sm font-medium text-primary-600 hover:underline">Lupa Password?</a>
                    </div>
                    <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Masuk</button>
                    <p class="text-sm font-light text-center text-gray-500">
                          <a href="{{ route('register') }}" class="font-medium text-primary-600 hover:underline">Belum Punya Akun? Daftar Sekarang</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
  </section>
  </main>
  
      <script src="app.bundle.js"></script>

    </body>
  
</html>
