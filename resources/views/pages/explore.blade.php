@extends('layouts.app')
@section('title', 'Cari Lowongan')

@section('content')
<div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-4">
    <div>
        <h2 class="text-headline-lg-mobile md:text-headline-lg font-display font-bold text-on-surface mb-1">Eksplorasi Kepanitiaan</h2>
        <p class="text-on-surface-variant text-sm">Temukan dan lamar posisi yang sesuai dengan minat dan keahlianmu.</p>
    </div>
</div>

<!-- Search and Filters Section -->
<!-- Search and Filters Section -->
<div class="bg-surface-container-lowest p-6 rounded-lg border border-surface-dim mb-8">
    <div class="flex flex-col md:flex-row gap-4">
        <!-- Search Bar -->
        <div class="flex-1 relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="w-5 h-5 text-outline-variant" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="text" class="block w-full pl-10 pr-3 py-2.5 border border-outline-variant rounded-lg focus:ring-primary focus:border-primary text-sm bg-surface-container-lowest text-on-surface" placeholder="Cari nama kepanitiaan, acara, atau posisi...">
        </div>
        
        <!-- Category Filter -->
        <div class="w-full md:w-48">
            <select class="block w-full py-2.5 px-3 border border-outline-variant bg-surface-container-lowest text-on-surface rounded-lg focus:outline-none focus:ring-primary focus:border-primary text-sm">
                <option value="">Semua Kategori</option>
                <option value="teknologi">Teknologi & IT</option>
                <option value="desain">Desain & Kreatif</option>
                <option value="humas">Humas & Publikasi</option>
                <option value="acara">Manajemen Acara</option>
            </select>
        </div>
        
        <!-- Search Button -->
        <button class="bg-primary hover:bg-primary-container text-on-primary px-6 py-2.5 rounded-lg text-sm font-medium transition-colors shadow-sm">
            Cari
        </button>
    </div>
    
    <!-- Secondary Filters -->
    <div class="mt-4 flex flex-wrap items-center gap-4 pt-4 border-t border-surface-dim">
        <label class="flex items-center gap-2 cursor-pointer">
            <input type="checkbox" class="w-4 h-4 text-primary rounded border-outline focus:ring-primary" checked>
            <span class="text-sm text-on-surface-variant font-medium">Hanya Ormawa Verified</span>
            <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
        </label>
        
        <label class="flex items-center gap-2 cursor-pointer">
            <input type="checkbox" class="w-4 h-4 text-primary rounded border-outline focus:ring-primary">
            <span class="text-sm text-on-surface-variant">Terbuka untuk Umum</span>
        </label>
        
        <label class="flex items-center gap-2 cursor-pointer">
            <input type="checkbox" class="w-4 h-4 text-primary rounded border-outline focus:ring-primary" checked>
            <span class="text-sm text-on-surface-variant">Pendaftaran Masih Buka</span>
        </label>
    </div>
</div>

<!-- Vacancies Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    
    <!-- Card 1 -->
    <div class="bg-surface-container-lowest rounded-lg border border-surface-dim overflow-hidden hover:border-primary hover:bg-surface-container-low hover:shadow-sm transition-all duration-200 group flex flex-col">
        <div class="p-5 flex-1">
            <div class="flex justify-between items-start mb-3">
                <div class="bg-primary-fixed text-on-primary-fixed text-xs font-bold px-2.5 py-1 rounded-md border border-primary-fixed-dim">Teknologi</div>
                <div class="flex items-center text-xs font-medium text-on-tertiary-fixed bg-tertiary-fixed px-2 py-1 rounded">
                    <span class="w-1.5 h-1.5 rounded-full bg-tertiary mr-1.5"></span>
                    Aktif
                </div>
            </div>
            
            <h3 class="text-title-md font-bold text-on-surface mb-1 group-hover:text-primary transition-colors">Frontend Web Developer</h3>
            <div class="flex items-center gap-1.5 text-sm font-medium text-on-surface-variant mb-4">
                BEM Fakultas Ilmu Komputer
                <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
            </div>
            
            <p class="text-sm text-on-surface-variant line-clamp-2 mb-4">
                Membutuhkan mahasiswa yang menguasai ReactJS dan TailwindCSS untuk mengembangkan platform pendaftaran Tech Fest 2026.
            </p>
            
            <div class="flex flex-wrap gap-2 mb-4">
                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-surface-container text-on-surface-variant">ReactJS</span>
                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-surface-container text-on-surface-variant">TailwindCSS</span>
                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-surface-container text-on-surface-variant">UI/UX</span>
            </div>
        </div>
        
        <div class="px-5 py-4 bg-surface-container-lowest border-t border-surface-dim flex items-center justify-between mt-auto">
            <div class="flex items-center text-xs text-on-surface-variant">
                <svg class="w-4 h-4 mr-1 text-outline-variant" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Sisa 5 Hari
            </div>
            <button class="text-sm font-semibold text-primary hover:text-primary-container flex items-center gap-1">Lihat Detail <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></button>
        </div>
    </div>
    
    <!-- Card 2 -->
    <div class="bg-surface-container-lowest rounded-lg border border-surface-dim overflow-hidden hover:border-primary hover:bg-surface-container-low hover:shadow-sm transition-all duration-200 group flex flex-col">
        <div class="p-5 flex-1">
            <div class="flex justify-between items-start mb-3">
                <div class="bg-secondary-fixed text-on-secondary-fixed text-xs font-bold px-2.5 py-1 rounded-md border border-secondary-fixed-dim">Desain Grafis</div>
                <div class="flex items-center text-xs font-medium text-on-tertiary-fixed bg-tertiary-fixed px-2 py-1 rounded">
                    <span class="w-1.5 h-1.5 rounded-full bg-tertiary mr-1.5"></span>
                    Aktif
                </div>
            </div>
            
            <h3 class="text-title-md font-bold text-on-surface mb-1 group-hover:text-primary transition-colors">Creative Visual Designer</h3>
            <div class="flex items-center gap-1.5 text-sm font-medium text-on-surface-variant mb-4">
                HIMA DKV
                <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
            </div>
            
            <p class="text-sm text-on-surface-variant line-clamp-2 mb-4">
                Tim kreatif untuk mengonsep dan mendesain aset visual untuk kampanye Art Week Universitas 2026.
            </p>
            
            <div class="flex flex-wrap gap-2 mb-4">
                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-surface-container text-on-surface-variant">Illustrator</span>
                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-surface-container text-on-surface-variant">Photoshop</span>
                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-surface-container text-on-surface-variant">Branding</span>
            </div>
        </div>
        
        <div class="px-5 py-4 bg-surface-container-lowest border-t border-surface-dim flex items-center justify-between mt-auto">
            <div class="flex items-center text-xs text-on-surface-variant">
                <svg class="w-4 h-4 mr-1 text-outline-variant" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Sisa 2 Hari
            </div>
            <button class="text-sm font-semibold text-primary hover:text-primary-container flex items-center gap-1">Lihat Detail <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></button>
        </div>
    </div>
    
    <div class="bg-surface-container-lowest rounded-lg border border-surface-dim overflow-hidden hover:border-primary hover:bg-surface-container-low hover:shadow-sm transition-all duration-200 group flex flex-col opacity-75">
        <div class="p-5 flex-1">
            <div class="flex justify-between items-start mb-3">
                <div class="bg-error-container text-error text-xs font-bold px-2.5 py-1 rounded-md border border-error">Acara</div>
                <div class="flex items-center text-xs font-medium text-on-surface-variant bg-surface-container px-2 py-1 rounded">
                    Tutup
                </div>
            </div>
            
            <h3 class="text-title-md font-bold text-on-surface mb-1">Koordinator Logistik Acara</h3>
            <div class="flex items-center gap-1.5 text-sm font-medium text-on-surface-variant mb-4">
                Panitia Ospek Universitas
            </div>
            
            <p class="text-sm text-on-surface-variant line-clamp-2 mb-4">
                Memastikan ketersediaan dan distribusi perlengkapan selama acara ospek universitas berlangsung.
            </p>
            
            <div class="flex flex-wrap gap-2 mb-4">
                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-surface-container text-on-surface-variant">Manajemen</span>
                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-surface-container text-on-surface-variant">Komunikasi</span>
            </div>
        </div>
        
        <div class="px-5 py-4 bg-surface-container-lowest border-t border-surface-dim flex items-center justify-between mt-auto">
            <div class="flex items-center text-xs text-error font-medium">
                Pendaftaran Ditutup
            </div>
            <button class="text-sm font-semibold text-outline cursor-not-allowed">Tidak Tersedia</button>
        </div>
    </div>
    
</div>
@endsection
