<div class="flex flex-col">
    <h1 class="text-xl font-bold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white mb-6">
        Login Member Area
    </h1>

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="login" class="space-y-4 md:space-y-6">
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input 
                wire:model="email" 
                type="email" 
                id="email" 
                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" 
                placeholder="name@example.com" 
                required
                autofocus
                autocomplete="email"
            >
            @error('email') <span class="mt-1 text-sm text-red-500">{{ $message }}</span> @enderror
        </div>
        
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input 
                wire:model="password" 
                type="password" 
                id="password" 
                placeholder="••••••••" 
                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" 
                required
                autocomplete="current-password"
            >
            @error('password') <span class="mt-1 text-sm text-red-500">{{ $message }}</span> @enderror
        </div>
        
        <div class="flex items-center justify-between">
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input 
                        wire:model="remember" 
                        id="remember" 
                        type="checkbox" 
                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                    >
                </div>
                <div class="ml-3 text-sm">
                    <label for="remember" class="text-gray-500 dark:text-gray-300">Ingat saya</label>
                </div>
            </div>
            
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" wire:navigate class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">
                    Lupa password?
                </a>
            @endif
        </div>
        
        <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
            Login
        </button>
        
        @if (Route::has('register'))
            <p class="text-sm font-light text-center text-gray-500 dark:text-gray-300">
                <a href="{{ route('register') }}" wire:navigate class="font-medium text-primary-600 hover:underline dark:text-primary-500">
                    Belum punya akun?
                </a>
            </p>
        @endif
    </form>
</div>



