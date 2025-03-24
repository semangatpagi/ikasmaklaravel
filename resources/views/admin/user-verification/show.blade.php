<x-layouts.app :title="__('Detail Pengguna')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl p-4">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Detail Pengguna</h1>
            <div>
                <a href="{{ url()->previous() }}" class="inline-flex items-center rounded-md bg-gray-600 px-4 py-2 text-sm font-semibold text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 dark:bg-gray-500 dark:hover:bg-gray-600">
                    Kembali
                </a>
            </div>
        </div>

        @if (session('success'))
            <div class="mb-4 rounded-md bg-green-50 p-4 dark:bg-green-900/30">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-green-800 dark:text-green-200">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        @endif

        @if (session('error'))
            <div class="mb-4 rounded-md bg-red-50 p-4 dark:bg-red-900/30">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-red-800 dark:text-red-200">{{ session('error') }}</p>
                    </div>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <!-- Data Pribadi -->
            <div class="overflow-hidden rounded-lg border border-gray-200 bg-white shadow-md dark:border-gray-700 dark:bg-gray-800">
                <div class="border-b border-gray-200 bg-gray-50 px-4 py-3 dark:border-gray-700 dark:bg-gray-700">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">Data Pribadi</h3>
                </div>
                <div class="p-4">
                    <div class="mb-4 flex items-center justify-center">
                        @if ($user->foto)
                            <img src="{{ Storage::url($user->foto) }}" alt="{{ $user->nama_lengkap }}" class="h-32 w-32 rounded-full object-cover">
                        @else
                            <div class="flex h-32 w-32 items-center justify-center rounded-full bg-blue-100 text-blue-600 dark:bg-blue-900 dark:text-blue-300">
                                <span class="text-2xl font-bold">{{ $user->initials() }}</span>
                            </div>
                        @endif
                    </div>

                    <div class="mt-6 space-y-4">
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Lengkap</label>
                                <div class="mt-1 text-gray-900 dark:text-white">{{ $user->nama_lengkap }}</div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Panggilan</label>
                                <div class="mt-1 text-gray-900 dark:text-white">{{ $user->nama_panggilan ?? '-' }}</div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                                <div class="mt-1 text-gray-900 dark:text-white">{{ $user->email }}</div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">WhatsApp</label>
                                <div class="mt-1 text-gray-900 dark:text-white">{{ $user->whatsapp ?? '-' }}</div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Angkatan</label>
                                <div class="mt-1 text-gray-900 dark:text-white">{{ $user->angkatan ?? '-' }}</div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Tahun Masuk</label>
                                <div class="mt-1 text-gray-900 dark:text-white">{{ $user->tahun_masuk ?? '-' }}</div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Tahun Lulus</label>
                                <div class="mt-1 text-gray-900 dark:text-white">{{ $user->tahun_lulus ?? '-' }}</div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Alamat Rumah</label>
                            <div class="mt-1 text-gray-900 dark:text-white">{{ $user->alamat_rumah ?? '-' }}</div>
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Provinsi</label>
                                <div class="mt-1 text-gray-900 dark:text-white">{{ $user->provinsi_rumah ?? '-' }}</div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Kota</label>
                                <div class="mt-1 text-gray-900 dark:text-white">{{ $user->kota_rumah ?? '-' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data Profesional -->
            <div class="overflow-hidden rounded-lg border border-gray-200 bg-white shadow-md dark:border-gray-700 dark:bg-gray-800">
                <div class="border-b border-gray-200 bg-gray-50 px-4 py-3 dark:border-gray-700 dark:bg-gray-700">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">Data Profesional</h3>
                </div>
                <div class="p-4">
                    <div class="space-y-4">
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Pekerjaan</label>
                                <div class="mt-1 text-gray-900 dark:text-white">{{ $user->pekerjaan ?? '-' }}</div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Perusahaan</label>
                                <div class="mt-1 text-gray-900 dark:text-white">{{ $user->perusahaan ?? '-' }}</div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Alamat Kantor</label>
                            <div class="mt-1 text-gray-900 dark:text-white">{{ $user->alamat_kantor ?? '-' }}</div>
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Provinsi</label>
                                <div class="mt-1 text-gray-900 dark:text-white">{{ $user->provinsi_kantor ?? '-' }}</div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Kota</label>
                                <div class="mt-1 text-gray-900 dark:text-white">{{ $user->kota_kantor ?? '-' }}</div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Usaha</label>
                                <div class="mt-1 text-gray-900 dark:text-white">{{ $user->nama_usaha ?? '-' }}</div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Bidang Usaha</label>
                                <div class="mt-1 text-gray-900 dark:text-white">{{ $user->bidang_usaha ?? '-' }}</div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Saran</label>
                            <div class="mt-1 text-gray-900 dark:text-white">{{ $user->saran ?? '-' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Status dan Aksi -->
        <div class="overflow-hidden rounded-lg border border-gray-200 bg-white shadow-md dark:border-gray-700 dark:bg-gray-800">
            <div class="border-b border-gray-200 bg-gray-50 px-4 py-3 dark:border-gray-700 dark:bg-gray-700">
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">Status dan Aksi</h3>
            </div>
            <div class="p-4">
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Status Email</label>
                            <div class="mt-1">
                                @if ($user->email_verified_at)
                                    <span class="inline-flex items-center rounded-full bg-green-100 px-3 py-0.5 text-sm font-medium text-green-800 dark:bg-green-800 dark:text-green-100">
                                        <svg class="-ml-1 mr-1.5 h-2 w-2 text-green-600 dark:text-green-400" fill="currentColor" viewBox="0 0 8 8">
                                            <circle cx="4" cy="4" r="3" />
                                        </svg>
                                        Terverifikasi ({{ $user->email_verified_at->format('d/m/Y H:i') }})
                                    </span>
                                @else
                                    <span class="inline-flex items-center rounded-full bg-yellow-100 px-3 py-0.5 text-sm font-medium text-yellow-800 dark:bg-yellow-800 dark:text-yellow-100">
                                        <svg class="-ml-1 mr-1.5 h-2 w-2 text-yellow-600 dark:text-yellow-400" fill="currentColor" viewBox="0 0 8 8">
                                            <circle cx="4" cy="4" r="3" />
                                        </svg>
                                        Belum Terverifikasi
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Status Admin</label>
                            <div class="mt-1">
                                @if ($user->admin_verified_at)
                                    <span class="inline-flex items-center rounded-full bg-green-100 px-3 py-0.5 text-sm font-medium text-green-800 dark:bg-green-800 dark:text-green-100">
                                        <svg class="-ml-1 mr-1.5 h-2 w-2 text-green-600 dark:text-green-400" fill="currentColor" viewBox="0 0 8 8">
                                            <circle cx="4" cy="4" r="3" />
                                        </svg>
                                        Terverifikasi ({{ $user->admin_verified_at->format('d/m/Y H:i') }})
                                    </span>
                                @else
                                    <span class="inline-flex items-center rounded-full bg-yellow-100 px-3 py-0.5 text-sm font-medium text-yellow-800 dark:bg-yellow-800 dark:text-yellow-100">
                                        <svg class="-ml-1 mr-1.5 h-2 w-2 text-yellow-600 dark:text-yellow-400" fill="currentColor" viewBox="0 0 8 8">
                                            <circle cx="4" cy="4" r="3" />
                                        </svg>
                                        Menunggu Verifikasi
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Role</label>
                            <div class="mt-1">
                                <span class="inline-flex items-center rounded-full bg-blue-100 px-3 py-0.5 text-sm font-medium text-blue-800 dark:bg-blue-800 dark:text-blue-100">
                                    {{ ucfirst(str_replace('_', ' ', $user->role)) }}
                                </span>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Status Keanggotaan</label>
                            <div class="mt-1">
                                @if ($user->role === 'member_plus')
                                    @if ($user->membership_expiry && $user->membership_expiry->isPast())
                                        <span class="inline-flex items-center rounded-full bg-red-100 px-3 py-0.5 text-sm font-medium text-red-800 dark:bg-red-800 dark:text-red-100">
                                            Member+ (Kedaluwarsa: {{ $user->membership_expiry->format('d/m/Y') }})
                                        </span>
                                    @else
                                        <span class="inline-flex items-center rounded-full bg-purple-100 px-3 py-0.5 text-sm font-medium text-purple-800 dark:bg-purple-800 dark:text-purple-100">
                                            Member+ (Berlaku hingga: {{ $user->membership_expiry ? $user->membership_expiry->format('d/m/Y') : 'Selamanya' }})
                                        </span>
                                    @endif
                                @elseif ($user->role === 'member')
                                    <span class="inline-flex items-center rounded-full bg-indigo-100 px-3 py-0.5 text-sm font-medium text-indigo-800 dark:bg-indigo-800 dark:text-indigo-100">
                                        Member Biasa
                                    </span>
                                @else
                                    <span class="inline-flex items-center rounded-full bg-gray-100 px-3 py-0.5 text-sm font-medium text-gray-800 dark:bg-gray-700 dark:text-gray-300">
                                        Belum Menjadi Member
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4">
                        @if (!$user->admin_verified_at)
                            <div class="flex flex-col space-y-2">
                                <form action="{{ route('admin.user-verification.approve', $user) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="inline-flex w-full items-center justify-center rounded-md bg-green-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 dark:bg-green-700 dark:hover:bg-green-600">
                                        <svg class="-ml-0.5 mr-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Verifikasi Pengguna
                                    </button>
                                </form>
                                <button type="button" class="inline-flex w-full items-center justify-center rounded-md bg-red-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:bg-red-700 dark:hover:bg-red-600" onclick="document.getElementById('reject-modal').classList.remove('hidden')">
                                    <svg class="-ml-0.5 mr-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                    Tolak Verifikasi
                                </button>
                            </div>
                        @else
                            <div>
                                <form action="{{ route('admin.user-verification.set-role', $user) }}" method="POST" class="space-y-4">
                                    @csrf
                                    <div>
                                        <label for="role" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Ubah Role</label>
                                        <select id="role" name="role" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm">
                                            <option value="member" {{ $user->role === 'member' ? 'selected' : '' }}>Member</option>
                                            <option value="member_plus" {{ $user->role === 'member_plus' ? 'selected' : '' }}>Member+</option>
                                            <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                                            <option value="super_admin" {{ $user->role === 'super_admin' ? 'selected' : '' }}>Super Admin</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="inline-flex w-full items-center justify-center rounded-md bg-blue-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:bg-blue-700 dark:hover:bg-blue-600">
                                        Simpan Perubahan
                                    </button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tolak Verifikasi -->
    <div id="reject-modal" class="fixed inset-0 z-10 hidden overflow-y-auto">
        <div class="flex min-h-screen items-end justify-center px-4 pb-20 pt-4 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75 dark:bg-gray-900"></div>
            </div>
            <span class="hidden sm:inline-block sm:h-screen sm:align-middle" aria-hidden="true">&#8203;</span>
            <div class="inline-block transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left align-bottom shadow-xl transition-all dark:bg-gray-800 sm:my-8 sm:w-full sm:max-w-lg sm:p-6 sm:align-middle">
                <div>
                    <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-red-100 dark:bg-red-900">
                        <svg class="h-6 w-6 text-red-600 dark:text-red-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-5">
                        <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-white">Tolak Verifikasi Pengguna</h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                Anda yakin ingin menolak verifikasi pengguna ini? Penolakan akan diberitahukan kepada pengguna.
                            </p>
                        </div>
                    </div>
                </div>
                <form action="{{ route('admin.user-verification.reject', $user) }}" method="POST" class="mt-5 sm:mt-6">
                    @csrf
                    <div>
                        <label for="reason" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Alasan Penolakan</label>
                        <textarea id="reason" name="reason" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm" required></textarea>
                    </div>
                    <div class="mt-5 sm:mt-6 sm:grid sm:grid-flow-row-dense sm:grid-cols-2 sm:gap-3">
                        <button type="submit" class="inline-flex w-full justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:bg-red-700 dark:hover:bg-red-600 sm:col-start-2 sm:text-sm">
                            Tolak Verifikasi
                        </button>
                        <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 sm:col-start-1 sm:mt-0 sm:text-sm" onclick="document.getElementById('reject-modal').classList.add('hidden')">
                            Batal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app> 