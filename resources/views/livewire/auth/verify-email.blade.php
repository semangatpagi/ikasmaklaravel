<div class="mt-4 flex flex-col gap-6">
    <flux:text class="text-center">
        {{ __('Silahkan verifikasi akun anda dengan klik link yang telah kami kirim ke email.') }}
    </flux:text>

    @if (session('status') == 'verification-link-sent')
        <flux:text class="text-center font-medium !dark:text-green-400 !text-green-600">
            {{ __('Link verifikasi baru telah dikirim ke email Anda. Silahkan cek inbox atau spam email Anda.') }}
        </flux:text>
    @endif

    <div class="flex flex-col items-center justify-between space-y-3">
        <flux:button wire:click="sendVerification" variant="primary" class="w-full">
            {{ __('Kirim Ulang Verifikasi Email') }}
        </flux:button>

        <flux:link class="text-sm cursor-pointer" wire:click="logout">
            {{ __('Log out') }}
        </flux:link>
    </div>
</div>
