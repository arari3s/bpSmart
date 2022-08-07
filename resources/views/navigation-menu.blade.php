<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard.index') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard.index') }}" :active="request()->routeIs('dashboard.index')">
                        {{ __('Dashboard') }}
                    </x-jet-nav-link>

                    {{-- ADMIN --}}
                    @if (Auth::user()->roles == 'ADMIN')
                        {{-- user --}}
                        <x-jet-nav-link href="{{ route('dashboard.user.index') }}" :active="request()->routeIs('dashboard.user.index') || request()->routeIs('dashboard.user.*')">
                            {{ __('User') }}
                        </x-jet-nav-link>

                        {{-- kelas --}}
                        <x-jet-nav-link href="{{ route('dashboard.classroom.index') }}" :active="request()->routeIs('dashboard.classroom.index') ||
                            request()->routeIs('dashboard.classroom.*')">
                            {{ __('Kelas') }}
                        </x-jet-nav-link>

                        {{-- siswa --}}
                        <x-jet-nav-link href="{{ route('dashboard.student.index') }}" :active="request()->routeIs('dashboard.student.index') ||
                            request()->routeIs('dashboard.student.*')">
                            {{ __('Siswa') }}
                        </x-jet-nav-link>

                        {{-- payment --}}
                        <x-jet-nav-link href="{{ route('dashboard.payment.index') }}" :active="request()->routeIs('dashboard.payment.index') ||
                            request()->routeIs('dashboard.payment.*')">
                            {{ __('Pembayaran') }}
                        </x-jet-nav-link>

                        {{-- Pemasukan dan Pengeluaran --}}
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <!-- Settings Dropdown -->
                            <div class="relative">
                                <x-jet-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{ __('Pemasukan dan Pengeluaran') }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </x-slot>

                                    <x-slot name="content">
                                        <!-- SPP -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('SPP') }}
                                        </div>

                                        <x-jet-dropdown-link href="{{ route('dashboard.sppincome.index') }}">
                                            {{ __('Pemasukan SPP') }}
                                        </x-jet-dropdown-link>

                                        <div class="border-t border-gray-100"></div>

                                        <x-jet-dropdown-link href="{{ route('dashboard.thirdincome.index') }}">
                                            {{ __('Pihak ke Tiga') }}
                                        </x-jet-dropdown-link>

                                        <div class="border-t border-gray-100"></div>

                                        <x-jet-dropdown-link href="{{ route('dashboard.sppexpenditure.index') }}">
                                            {{ __('Pengeluaran SPP') }}
                                        </x-jet-dropdown-link>

                                        <!-- Sarana -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Sarana') }}
                                        </div>

                                        <x-jet-dropdown-link href="{{ route('dashboard.saranaincome.index') }}">
                                            {{ __('Pemasukan Sarana') }}
                                        </x-jet-dropdown-link>

                                        <div class="border-t border-gray-100"></div>

                                        <x-jet-dropdown-link href="{{ route('dashboard.saranaincomethird.index') }}">
                                            {{ __('Pihak ke Tiga') }}
                                        </x-jet-dropdown-link>

                                        <div class="border-t border-gray-100"></div>

                                        <x-jet-dropdown-link href="{{ route('dashboard.saranaexpenditure.index') }}">
                                            {{ __('Pengeluaran Sarana') }}
                                        </x-jet-dropdown-link>

                                        <!-- Daftar Ulang -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Daftar Ulang') }}
                                        </div>

                                        <x-jet-dropdown-link href="{{ route('dashboard.duincome.index') }}">
                                            {{ __('Pemasukan DU') }}
                                        </x-jet-dropdown-link>

                                        <div class="border-t border-gray-100"></div>

                                        <x-jet-dropdown-link href="{{ route('dashboard.duexpenditure.index') }}">
                                            {{ __('Pengeluaran DU') }}
                                        </x-jet-dropdown-link>

                                        <!-- Tabungan Ujian -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Tabungan Ujian') }}
                                        </div>

                                        <x-jet-dropdown-link href="{{ route('dashboard.tabunganincome.index') }}">
                                            {{ __('Pemasukan Tabungan') }}
                                        </x-jet-dropdown-link>

                                        <div class="border-t border-gray-100"></div>

                                        <x-jet-dropdown-link href="{{ route('dashboard.tabunganexpenditure.index') }}">
                                            {{ __('Pengeluaran Tabungan') }}
                                        </x-jet-dropdown-link>

                                        <!-- Kunjungan Industri -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Kunjungan Industri') }}
                                        </div>

                                        <x-jet-dropdown-link href="{{ route('dashboard.kiincome.index') }}">
                                            {{ __('Pemasukan KI') }}
                                        </x-jet-dropdown-link>

                                        <div class="border-t border-gray-100"></div>

                                        <x-jet-dropdown-link href="{{ route('dashboard.kiexpenditure.index') }}">
                                            {{ __('Pengeluaran KI') }}
                                        </x-jet-dropdown-link>

                                        {{-- <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Laporan') }}
                                        </div>

                                        <x-jet-dropdown-link href="{{ route('dashboard.sppincomereport') }}">
                                            {{ __('Pemasukan') }}
                                        </x-jet-dropdown-link>

                                        <x-jet-dropdown-link href="{{ route('dashboard.sppexpenditurereport') }}">
                                            {{ __('Pengeluaran') }}
                                        </x-jet-dropdown-link> --}}
                                    </x-slot>
                                </x-jet-dropdown>
                            </div>
                        </div>
                    @elseif (Auth::user()->roles == 'BENDAHARA_SPP')
                        {{-- pemasukan --}}
                        <x-jet-nav-link href="{{ route('dashboard.sppincome.index') }}" :active="request()->routeIs('dashboard.sppincome.index') ||
                            request()->routeIs('dashboard.sppincome.*')">
                            {{ __('Pemasukan SPP') }}
                        </x-jet-nav-link>
                        {{-- pemasukan --}}
                        <x-jet-nav-link href="{{ route('dashboard.thirdincome.index') }}" :active="request()->routeIs('dashboard.thirdincome.index') ||
                            request()->routeIs('dashboard.thirdincome.*')">
                            {{ __('Pemasukan Pihak ke Tiga') }}
                        </x-jet-nav-link>
                        {{-- pengeluaran --}}
                        <x-jet-nav-link href="{{ route('dashboard.sppexpenditure.index') }}" :active="request()->routeIs('dashboard.sppexpenditure.index') ||
                            request()->routeIs('dashboard.sppexpenditure.*')">
                            {{ __('Pengeluaran SPP') }}
                        </x-jet-nav-link>

                        {{-- report --}}
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <!-- Settings Dropdown -->
                            <div class="relative">
                                <x-jet-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{ __('Laporan') }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </x-slot>

                                    <x-slot name="content">
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Laporan') }}
                                        </div>

                                        <x-jet-dropdown-link href="{{ route('dashboard.sppincomereport') }}">
                                            {{ __('Pemasukan') }}
                                        </x-jet-dropdown-link>

                                        <x-jet-dropdown-link href="{{ route('dashboard.sppexpenditurereport') }}">
                                            {{ __('Pengeluaran') }}
                                        </x-jet-dropdown-link>
                                    </x-slot>
                                </x-jet-dropdown>
                            </div>
                        </div>
                    @elseif (Auth::user()->roles == 'BENDAHARA_SARANA')
                        {{-- pemasukan --}}
                        <x-jet-nav-link href="{{ route('dashboard.saranaincome.index') }}" :active="request()->routeIs('dashboard.saranaincome.index') ||
                            request()->routeIs('dashboard.saranaincome.*')">
                            {{ __('Pemasukan Sarana') }}
                        </x-jet-nav-link>
                        {{-- pemasukan --}}
                        <x-jet-nav-link href="{{ route('dashboard.saranaincomethird.index') }}" :active="request()->routeIs('dashboard.saranaincomethird.index') ||
                            request()->routeIs('dashboard.saranaincomethird.*')">
                            {{ __('Pemasukan Pihak ke Tiga') }}
                        </x-jet-nav-link>
                        {{-- pengeluaran --}}
                        <x-jet-nav-link href="{{ route('dashboard.saranaexpenditure.index') }}" :active="request()->routeIs('dashboard.saranaexpenditure.index') ||
                            request()->routeIs('dashboard.saranaexpenditure.*')">
                            {{ __('Pengeluaran Sarana') }}
                        </x-jet-nav-link>

                        {{-- report --}}
                        {{-- <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <!-- Settings Dropdown -->
                            <div class="relative">
                                <x-jet-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{ __('Laporan') }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </x-slot>

                                    <x-slot name="content">
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Laporan') }}
                                        </div>

                                        <x-jet-dropdown-link href="{{ route('dashboard.sppincomereport') }}">
                                            {{ __('Pemasukan') }}
                                        </x-jet-dropdown-link>

                                        <x-jet-dropdown-link href="{{ route('dashboard.sppexpenditurereport') }}">
                                            {{ __('Pengeluaran') }}
                                        </x-jet-dropdown-link>
                                    </x-slot>
                                </x-jet-dropdown>
                            </div>
                        </div> --}}
                    @elseif (Auth::user()->roles == 'BENDAHARA_DU')
                        {{-- pemasukan --}}
                        <x-jet-nav-link href="{{ route('dashboard.duincome.index') }}" :active="request()->routeIs('dashboard.duincome.index') ||
                            request()->routeIs('dashboard.duincome.*')">
                            {{ __('Pemasukan Daftar Ulang') }}
                        </x-jet-nav-link>
                        {{-- pengeluaran --}}
                        <x-jet-nav-link href="{{ route('dashboard.duexpenditure.index') }}" :active="request()->routeIs('dashboard.duexpenditure.index') ||
                            request()->routeIs('dashboard.duexpenditure.*')">
                            {{ __('Pengeluaran Daftar Ulang') }}
                        </x-jet-nav-link>

                        {{-- report --}}
                        {{-- <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <!-- Settings Dropdown -->
                            <div class="relative">
                                <x-jet-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{ __('Laporan') }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </x-slot>

                                    <x-slot name="content">
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Laporan') }}
                                        </div>

                                        <x-jet-dropdown-link href="{{ route('dashboard.sppincomereport') }}">
                                            {{ __('Pemasukan') }}
                                        </x-jet-dropdown-link>

                                        <x-jet-dropdown-link href="{{ route('dashboard.sppexpenditurereport') }}">
                                            {{ __('Pengeluaran') }}
                                        </x-jet-dropdown-link>
                                    </x-slot>
                                </x-jet-dropdown>
                            </div>
                        </div> --}}
                    @elseif (Auth::user()->roles == 'BENDAHARA_TABUNGAN')
                        {{-- pemasukan --}}
                        <x-jet-nav-link href="{{ route('dashboard.tabunganincome.index') }}" :active="request()->routeIs('dashboard.tabunganincome.index') ||
                            request()->routeIs('dashboard.tabunganincome.*')">
                            {{ __('Pemasukan Tabungan Ujian') }}
                        </x-jet-nav-link>
                        {{-- pengeluaran --}}
                        <x-jet-nav-link href="{{ route('dashboard.tabunganexpenditure.index') }}" :active="request()->routeIs('dashboard.tabunganexpenditure.index') ||
                            request()->routeIs('dashboard.tabunganexpenditure.*')">
                            {{ __('Pengeluaran Tabungan Ujian') }}
                        </x-jet-nav-link>

                        {{-- report --}}
                        {{-- <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <!-- Settings Dropdown -->
                            <div class="relative">
                                <x-jet-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{ __('Laporan') }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </x-slot>

                                    <x-slot name="content">
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Laporan') }}
                                        </div>

                                        <x-jet-dropdown-link href="{{ route('dashboard.sppincomereport') }}">
                                            {{ __('Pemasukan') }}
                                        </x-jet-dropdown-link>

                                        <x-jet-dropdown-link href="{{ route('dashboard.sppexpenditurereport') }}">
                                            {{ __('Pengeluaran') }}
                                        </x-jet-dropdown-link>
                                    </x-slot>
                                </x-jet-dropdown>
                            </div>
                        </div> --}}
                    @elseif (Auth::user()->roles == 'BENDAHARA_KI')
                        {{-- pemasukan --}}
                        <x-jet-nav-link href="{{ route('dashboard.kiincome.index') }}" :active="request()->routeIs('dashboard.kiincome.index') ||
                            request()->routeIs('dashboard.kiincome.*')">
                            {{ __('Pemasukan KI') }}
                        </x-jet-nav-link>
                        {{-- pengeluaran --}}
                        <x-jet-nav-link href="{{ route('dashboard.kiexpenditure.index') }}" :active="request()->routeIs('dashboard.kiexpenditure.index') ||
                            request()->routeIs('dashboard.kiexpenditure.*')">
                            {{ __('Pengeluaran KI') }}
                        </x-jet-nav-link>
                    @endif
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link
                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-jet-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-jet-dropdown-link>
                                    @endcan

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Team Switcher -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Switch Teams') }}
                                    </div>

                                    @foreach (Auth::user()->allTeams() as $team)
                                        <x-jet-switchable-team :team="$team" />
                                    @endforeach
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}"
                                        alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard.index') }}" :active="request()->routeIs('dashboard.index')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>

            @if (Auth::user()->roles == 'ADMIN')
                {{-- user --}}
                <x-jet-responsive-nav-link href="{{ route('dashboard.user.index') }}" :active="request()->routeIs('dashboard.user.index') || request()->routeIs('dashboard.user.*')">
                    {{ __('User') }}
                </x-jet-responsive-nav-link>
                {{-- kelas --}}
                <x-jet-responsive-nav-link href="{{ route('dashboard.classroom.index') }}" :active="request()->routeIs('dashboard.classroom.index') ||
                    request()->routeIs('dashboard.classroom.*')">
                    {{ __('Kelas') }}
                </x-jet-responsive-nav-link>
                {{-- siswa --}}
                <x-jet-responsive-nav-link href="{{ route('dashboard.student.index') }}" :active="request()->routeIs('dashboard.student.index') || request()->routeIs('dashboard.student.*')">
                    {{ __('Siswa') }}
                </x-jet-responsive-nav-link>
            @endif
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                            alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                        :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-jet-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-jet-responsive-nav-link>
                    @endcan

                    <div class="border-t border-gray-200"></div>

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Switch Teams') }}
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)
                        <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>
