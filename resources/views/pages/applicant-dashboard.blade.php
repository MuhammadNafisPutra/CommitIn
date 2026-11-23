@extends('layouts.app')
@section('title', 'Dashboard Pelamar')

@section('content')
<!-- Welcome Banner -->
<div class="bg-primary rounded-lg p-8 mb-8 text-on-primary relative overflow-hidden shadow-sm">
    <div class="relative z-10">
        <h2 class="text-headline-lg font-display mb-2">Selamat datang kembali, Budi!</h2>
        <p class="text-on-primary opacity-90 max-w-xl">
            Saat ini kamu memiliki 1 jadwal wawancara yang akan datang dan 2 lamaran sedang dalam tahap peninjauan. Persiapkan dirimu dengan baik!
        </p>
    </div>
    <!-- Decorative background elements -->
    <div class="absolute right-0 top-0 opacity-10 transform translate-x-1/4 -translate-y-1/4">
        <svg width="300" height="300" viewBox="0 0 24 24" fill="currentColor"><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1-11v6h2v-6h-2zm0-4v2h2V7h-2z"/></svg>
    </div>
</div>

<!-- Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
    <div class="bg-surface-container-lowest p-5 rounded-lg border border-surface-dim shadow-sm flex items-center gap-4">
        <div class="p-3 bg-primary-fixed text-on-primary-fixed rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
        </div>
        <div>
            <p class="text-sm text-on-surface-variant font-medium">Total Lamaran</p>
            <h3 class="text-headline-lg-mobile font-bold text-on-surface">5</h3>
        </div>
    </div>
    <div class="bg-surface-container-lowest p-5 rounded-lg border border-surface-dim shadow-sm flex items-center gap-4">
        <div class="p-3 bg-secondary-fixed text-on-secondary-fixed rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        </div>
        <div>
            <p class="text-sm text-on-surface-variant font-medium">Sedang Direview</p>
            <h3 class="text-headline-lg-mobile font-bold text-on-surface">2</h3>
        </div>
    </div>
    <div class="bg-surface-container-lowest p-5 rounded-lg border border-surface-dim shadow-sm flex items-center gap-4">
        <div class="p-3 bg-tertiary-fixed text-on-tertiary-fixed rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
        </div>
        <div>
            <p class="text-sm text-on-surface-variant font-medium">Jadwal Wawancara</p>
            <h3 class="text-headline-lg-mobile font-bold text-on-surface">1</h3>
        </div>
    </div>
    <div class="bg-surface-container-lowest p-5 rounded-lg border border-surface-dim shadow-sm flex items-center gap-4">
        <div class="p-3 bg-surface-container text-on-surface-variant rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        </div>
        <div>
            <p class="text-sm text-on-surface-variant font-medium">Selesai/Diterima</p>
            <h3 class="text-headline-lg-mobile font-bold text-on-surface">1</h3>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Left Column: Applications Table -->
    <div class="lg:col-span-2">
        <div class="bg-surface-container-lowest rounded-lg border border-surface-dim overflow-hidden shadow-sm">
            <div class="px-6 py-5 border-b border-surface-dim flex justify-between items-center">
                <h3 class="text-title-md font-bold text-on-surface">Status Lamaran Saya</h3>
                <a href="/explore" class="text-sm font-medium text-primary hover:text-primary-container flex items-center gap-1">Cari Lowongan Baru <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></a>
            </div>
            
            <div class="divide-y divide-surface-dim">
                <!-- Application Item 1 -->
                <div class="p-6 hover:bg-surface-container-low transition-colors">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h4 class="text-title-md font-bold text-on-surface">Koordinator Divisi IT</h4>
                            <p class="text-sm text-on-surface-variant">BEM Fakultas Ilmu Komputer &bull; Dikirim 12 Okt 2026</p>
                        </div>
                        <span class="bg-primary-fixed text-on-primary-fixed px-3 py-1 rounded-full text-xs font-bold">Wawancara</span>
                    </div>
                    
                    <!-- Progress Tracker -->
                    <div class="mt-4 flex justify-between items-center text-xs text-outline font-medium w-full">
                        <span class="text-primary">Terkirim</span>
                        <span class="text-primary">Seleksi Berkas</span>
                        <span class="text-on-primary-container font-bold bg-primary-container px-3 py-1.5 rounded-full border border-primary-fixed-dim">Wawancara</span>
                        <span>Pengumuman</span>
                    </div>
                </div>
                
                <!-- Application Item 2 -->
                <div class="p-6 hover:bg-surface-container-low transition-colors">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h4 class="text-title-md font-bold text-on-surface">Creative Design Staff</h4>
                            <p class="text-sm text-on-surface-variant">Panitia Art Week 2026 &bull; Dikirim 15 Okt 2026</p>
                        </div>
                        <span class="bg-secondary-fixed text-on-secondary-fixed px-3 py-1 rounded-full text-xs font-bold">Review Berkas</span>
                    </div>
                    
                    <!-- Progress Tracker -->
                    <div class="mt-4 flex justify-between items-center text-xs text-outline font-medium w-full">
                        <span class="text-secondary">Terkirim</span>
                        <span class="text-on-secondary-container font-bold bg-secondary-container px-3 py-1.5 rounded-full border border-secondary-fixed-dim">Seleksi Berkas</span>
                        <span>Wawancara</span>
                        <span>Pengumuman</span>
                    </div>
                </div>

                <!-- Application Item 3 -->
                <div class="p-6 hover:bg-surface-container-low transition-colors">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h4 class="text-title-md font-bold text-on-surface">Sponsorship Manager</h4>
                            <p class="text-sm text-on-surface-variant">Tech Summit Indonesia &bull; Dikirim 01 Sep 2026</p>
                        </div>
                        <span class="bg-tertiary-fixed text-on-tertiary-fixed px-3 py-1 rounded-full text-xs font-bold">Diterima</span>
                    </div>
                    
                    <!-- Progress Tracker -->
                    <div class="mt-4 flex justify-between items-center text-xs text-outline font-medium w-full">
                        <span class="text-tertiary">Terkirim</span>
                        <span class="text-tertiary">Seleksi Berkas</span>
                        <span class="text-tertiary">Wawancara</span>
                        <span class="text-on-tertiary-container font-bold bg-tertiary-container px-3 py-1.5 rounded-full border border-tertiary-fixed-dim">Diterima</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Column: Sidebar Widgets -->
    <div class="space-y-6">
        <!-- Upcoming Interviews Widget -->
        <div class="bg-surface-container-lowest rounded-lg shadow-sm border border-surface-dim p-6">
            <h3 class="text-title-md font-bold text-on-surface mb-4 flex items-center gap-2">
                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                Jadwal Wawancara
            </h3>
            
            <div class="bg-primary-fixed rounded-lg p-4 border border-primary-fixed-dim relative overflow-hidden">
                <div class="absolute top-0 left-0 w-1 h-full bg-primary"></div>
                <h4 class="font-bold text-on-primary-fixed text-sm mb-1">Koordinator Divisi IT</h4>
                <p class="text-xs text-on-primary-fixed-variant mb-3">BEM Fakultas Ilmu Komputer</p>
                
                <div class="flex items-center gap-2 text-xs text-on-primary-fixed-variant font-medium mb-1">
                    <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Besok, 10:00 WIB
                </div>
                <div class="flex items-center gap-2 text-xs text-on-primary-fixed-variant font-medium mb-4">
                    <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
                    Google Meet (Tautan tersedia)
                </div>
                
                <button class="w-full bg-primary hover:bg-primary-container text-on-primary text-xs font-bold py-2 rounded transition-colors">
                    Gabung Rapat
                </button>
            </div>
        </div>

        <!-- Task / Tips Widget -->
        <div class="bg-inverse-surface rounded-lg shadow-sm p-6 text-inverse-on-surface">
            <h3 class="text-title-md font-bold mb-2">Tips Wawancara</h3>
            <p class="text-sm opacity-90 mb-4">Pastikan portofolio digitalmu di profil sudah terupdate agar panitia bisa melihat karya terbaikmu!</p>
            <a href="/profile" class="text-sm font-medium text-inverse-primary hover:opacity-80 flex items-center gap-1">
                Update Profil Sekarang 
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>
</div>
@endsection
