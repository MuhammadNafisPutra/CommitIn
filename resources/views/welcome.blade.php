<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CommitIn - Professional Network</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <!-- Scripts / Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-on-background bg-background flex flex-col min-h-screen">
    
    <!-- Navbar -->
    <header class="bg-surface-container-lowest border-b border-surface-dim h-16 flex items-center justify-between px-6 md:px-12 shrink-0">
        <a href="/" class="text-2xl font-bold text-primary flex items-center gap-2">
            <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
            </svg>
            CommitIn
        </a>
        
        @if (Route::has('login'))
            <nav class="flex items-center gap-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-on-surface-variant hover:text-primary transition-colors">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-medium text-on-surface hover:text-primary transition-colors">Masuk</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="bg-primary text-on-primary hover:bg-primary-container px-5 py-2 rounded-md text-sm font-medium transition-colors shadow-sm">Daftar</a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <!-- Hero Section -->
    <main class="flex-1 flex flex-col items-center justify-center px-6 md:px-12 py-20 text-center">
        <div class="max-w-3xl">
            <h1 class="text-display-lg font-display text-on-surface font-bold mb-6 tracking-tight">Bangun Karir Organisasimu Bersama Kami</h1>
            <p class="text-title-md text-on-surface-variant font-medium mb-10 max-w-2xl mx-auto leading-relaxed">
                Platform rekrutmen terpusat untuk mahasiswa. Temukan kepanitiaan, bangun portofolio, dan capai potensi terbesarmu di kampus.
            </p>
            
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="/explore" class="w-full sm:w-auto bg-primary hover:bg-primary-container text-on-primary px-8 py-3.5 rounded-lg text-sm font-bold transition-colors shadow-sm flex items-center justify-center gap-2">
                    Eksplorasi Lowongan
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                <a href="{{ route('register') ?? '#' }}" class="w-full sm:w-auto bg-surface-container-lowest border border-surface-dim hover:bg-surface-container-low text-on-surface px-8 py-3.5 rounded-lg text-sm font-bold transition-colors">
                    Daftar sebagai Penyelenggara
                </a>
            </div>
        </div>

        <!-- Features Grid -->
        <div class="mt-24 grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl text-left">
            <div class="bg-surface-container-lowest p-8 rounded-lg border border-surface-dim shadow-sm">
                <div class="w-12 h-12 bg-primary-fixed text-on-primary-fixed rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-title-md font-bold text-on-surface mb-3">Manajemen Terpusat</h3>
                <p class="text-sm text-on-surface-variant leading-relaxed">Kelola pendaftaran, seleksi berkas, hingga jadwal wawancara dalam satu dashboard yang efisien.</p>
            </div>
            
            <div class="bg-surface-container-lowest p-8 rounded-lg border border-surface-dim shadow-sm">
                <div class="w-12 h-12 bg-secondary-fixed text-on-secondary-fixed rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-title-md font-bold text-on-surface mb-3">Sistem Terverifikasi</h3>
                <p class="text-sm text-on-surface-variant leading-relaxed">Hanya organisasi kemahasiswaan resmi yang dapat mempublikasikan lowongan kepanitiaan.</p>
            </div>
            
            <div class="bg-surface-container-lowest p-8 rounded-lg border border-surface-dim shadow-sm">
                <div class="w-12 h-12 bg-tertiary-fixed text-on-tertiary-fixed rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-title-md font-bold text-on-surface mb-3">Portofolio Otomatis</h3>
                <p class="text-sm text-on-surface-variant leading-relaxed">Setiap kepanitiaan yang diselesaikan akan otomatis menjadi rekam jejak digital di profilmu.</p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-surface-container-lowest border-t border-surface-dim py-8 mt-auto">
        <div class="max-w-6xl mx-auto px-6 text-center text-sm text-on-surface-variant font-medium">
            &copy; 2026 CommitIn. All rights reserved. Designed with Corporate Modern guidelines.
        </div>
    </footer>

</body>
</html>
