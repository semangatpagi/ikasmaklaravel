<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="bg-gray-50 dark:bg-gray-900 antialiased">
        <main class="bg-gray-50 dark:bg-gray-900">
            <section class="bg-[url('https://flowbite.s3.amazonaws.com/blocks/marketing-ui/authentication/background.jpg')] bg-no-repeat bg-cover bg-center bg-gray-700 bg-blend-multiply bg-opacity-60">
                <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen">
                    <a href="{{ route('home') }}" class="flex items-center mb-6 text-2xl font-semibold text-white">
                        <img class="w-8 h-8 mr-2" src="{{ asset('images/logoikasmak.png') }}" alt="logo">
                        IKASMAK MAKASSAR    
                    </a>
                    <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800">
                        <div class="p-6 space-y-4 md:space-y-6 lg:space-y-8 sm:p-8">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </section>
        </main>
        @fluxScripts
    </body>
</html>
