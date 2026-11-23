<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'COMMITLN')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Scripts / Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased text-on-surface bg-surface flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-64 bg-surface-container-lowest border-r border-surface-dim flex-shrink-0 h-full flex flex-col">
        <!-- Logo -->
        <div class="h-16 flex items-center px-6 border-b border-surface-dim">
            <a href="/" class="text-2xl font-bold text-primary flex items-center gap-2">
                <!-- Simple SVG Logo Placeholder -->
                <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                </svg>
                CommitIn
            </a>
        </div>

        <!-- Navigation Menu -->
        <nav class="flex-1 overflow-y-auto py-4 px-3 space-y-1">
            
            <!-- Beranda -->
            <a href="/" class="flex items-center gap-3 px-3 py-2 rounded-md transition-colors {{ request()->is('/') ? 'text-primary bg-surface-container font-medium' : 'text-on-surface-variant hover:bg-surface-container-low hover:text-primary' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                <span class="font-medium text-sm">Beranda</span>
            </a>

            <!-- Dashboard Dropdown (AlpineJS for state) -->
            <div x-data="{ open: {{ request()->is('pelamar') || request()->is('dashboard') ? 'true' : 'false' }} }" class="space-y-1">
                <button @click="open = !open" class="w-full flex items-center justify-between px-3 py-2 rounded-md transition-colors {{ request()->is('pelamar') || request()->is('dashboard') ? 'text-primary bg-surface-container' : 'text-on-surface-variant hover:bg-surface-container-low hover:text-primary' }}">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                        <span class="font-medium text-sm">Dashboard</span>
                    </div>
                    <!-- Chevron -->
                    <svg :class="{'rotate-180': open}" class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                
                <!-- Dropdown Items -->
                <div x-show="open" class="pl-11 pr-3 space-y-1">
                    <a href="/pelamar" class="block px-3 py-2 text-sm rounded-md {{ request()->is('pelamar') ? 'font-medium text-primary bg-surface-container-low' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-lowest' }}">Pelamar</a>
                    <a href="/dashboard" class="block px-3 py-2 text-sm rounded-md {{ request()->is('dashboard') ? 'font-medium text-primary bg-surface-container-low' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-lowest' }}">Penyelenggara</a>
                </div>
            </div>

            <a href="/explore" class="flex items-center gap-3 px-3 py-2 rounded-md transition-colors {{ request()->is('explore') ? 'text-primary bg-surface-container font-medium' : 'text-on-surface-variant hover:bg-surface-container-low hover:text-primary' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <span class="font-medium text-sm">Cari Lowongan</span>
            </a>
            
            @if(request()->is('dashboard'))
            <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-md text-on-surface-variant hover:bg-surface-container-lowest hover:text-on-surface transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                <span class="font-medium text-sm">Manage Vacancies</span>
            </a>
            @endif
            
        </nav>

        <!-- User Profile Area at Bottom -->
        <div class="p-4 border-t border-surface-dim">
            <div class="flex items-center gap-3">
                <img src="https://ui-avatars.com/api/?name=Admin+User&background=005d8f&color=fff" alt="User avatar" class="w-9 h-9 rounded-full">
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-on-surface truncate">Budi Mahasiswa</p>
                    <a href="/profile" class="text-xs text-primary hover:text-primary-container font-medium truncate flex items-center gap-1 mt-0.5">
                        View Profile 
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content Area -->
    <main class="flex-1 flex flex-col h-full overflow-hidden">
        
        <!-- Header area for the current page (optional, but good for context) -->
        <header class="bg-surface-container-lowest border-b border-surface-dim h-16 flex items-center px-8 flex-shrink-0 justify-between">
            <h1 class="text-xl font-display font-semibold text-on-surface">@yield('title', 'Dashboard')</h1>
            <!-- Notification icon placeholder -->
            <button class="text-on-surface-variant hover:text-on-surface">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
            </button>
        </header>

        <!-- Scrollable Content -->
        <div class="flex-1 overflow-y-auto p-8">
            <div class="max-w-6xl mx-auto">
                @yield('content')
                @isset($slot)
                    {{ $slot }}
                @endisset
            </div>
        </div>
    </main>

    @livewireScripts
</body>
</html>
