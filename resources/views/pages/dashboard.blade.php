@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="mb-8">
    <h2 class="text-headline-lg-mobile md:text-headline-lg font-display text-on-surface mb-1">Recruitment Overview</h2>
    <p class="text-on-surface-variant text-sm">Monitor your active talent pipeline and vacancy status across departments.</p>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <!-- Card 1 -->
    <div class="bg-surface-container-lowest rounded-lg border border-surface-dim p-6">
        <div class="flex justify-between items-start mb-4">
            <div class="p-2 bg-primary-fixed rounded-lg text-on-primary-fixed">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            </div>
            <div class="flex items-center text-primary text-sm font-medium">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                +12%
            </div>
        </div>
        <h3 class="text-title-md font-bold text-on-surface mb-1">24</h3>
        <p class="text-on-surface-variant text-sm">Active Vacancies</p>
    </div>

    <!-- Card 2 -->
    <div class="bg-surface-container-lowest rounded-lg border border-surface-dim p-6">
        <div class="flex justify-between items-start mb-4">
            <div class="p-2 bg-tertiary-fixed rounded-lg text-on-tertiary-fixed">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            </div>
            <div class="flex items-center text-primary text-sm font-medium">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                +8%
            </div>
        </div>
        <h3 class="text-title-md font-bold text-on-surface mb-1">1,284</h3>
        <p class="text-on-surface-variant text-sm">Total Applicants</p>
    </div>

    <!-- Card 3 -->
    <div class="bg-primary-container rounded-lg border border-surface-dim p-6">
        <div class="flex justify-between items-start mb-4">
            <div class="p-2 bg-primary rounded-lg text-on-primary shadow-sm">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
        </div>
        <h3 class="text-title-md font-bold text-on-primary-container mb-1">48</h3>
        <p class="text-on-primary-container text-sm opacity-90">Interviews Scheduled</p>
    </div>
</div>

<!-- Recent Applications -->
<div class="mb-8">
    <div class="flex justify-between items-center mb-4">
        <h3 class="text-title-md font-bold text-on-surface">Recent Applications</h3>
        <a href="#" class="text-primary text-sm font-medium hover:text-primary-container flex items-center">
            View All
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </a>
    </div>
    
    <div class="bg-surface-container-lowest rounded-lg border border-surface-dim overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface text-on-surface-variant text-label-lg uppercase tracking-wider border-b border-surface-dim">
                        <th class="px-6 py-4 font-semibold">Student Name</th>
                        <th class="px-6 py-4 font-semibold">Applied Position</th>
                        <th class="px-6 py-4 font-semibold">Match Score</th>
                        <th class="px-6 py-4 font-semibold">Date</th>
                        <th class="px-6 py-4 font-semibold text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-dim">
                    <!-- Row 1 -->
                    <tr class="hover:bg-surface-container-low transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-primary-fixed text-on-primary-fixed flex items-center justify-center font-bold text-sm mr-3">
                                    AS
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-on-surface">Arjun Sharma</p>
                                    <p class="text-xs text-on-surface-variant">Computer Engineering</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-on-surface-variant">
                            Frontend Developer Intern
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="w-full bg-surface-dim rounded-full h-2 mr-2 max-w-[100px]">
                                    <div class="bg-primary h-2 rounded-full" style="width: 92%"></div>
                                </div>
                                <span class="text-xs font-semibold text-on-surface">92%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-on-surface-variant">
                            2 hours ago
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end space-x-3">
                                <button class="text-error hover:opacity-80 p-1">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </button>
                                <button class="bg-primary hover:bg-primary-container text-on-primary px-4 py-1.5 rounded-md text-sm font-medium transition-colors">
                                    Accept
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 2 -->
                    <tr class="hover:bg-surface-container-low transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-tertiary-fixed text-on-tertiary-fixed flex items-center justify-center font-bold text-sm mr-3">
                                    MW
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-on-surface">Maya Williams</p>
                                    <p class="text-xs text-on-surface-variant">Marketing & Design</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-on-surface-variant">
                            UX Research Assistant
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="w-full bg-surface-dim rounded-full h-2 mr-2 max-w-[100px]">
                                    <div class="bg-secondary h-2 rounded-full" style="width: 78%"></div>
                                </div>
                                <span class="text-xs font-semibold text-on-surface">78%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-on-surface-variant">
                            5 hours ago
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end space-x-3">
                                <button class="text-error hover:opacity-80 p-1">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </button>
                                <button class="bg-primary hover:bg-primary-container text-on-primary px-4 py-1.5 rounded-md text-sm font-medium transition-colors">
                                    Accept
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 3 -->
                    <tr class="hover:bg-surface-container-low transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center font-bold text-sm mr-3">
                                    LC
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-on-surface">Leo Chen</p>
                                    <p class="text-xs text-on-surface-variant">Data Science</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-on-surface-variant">
                            Machine Learning Intern
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="w-full bg-surface-dim rounded-full h-2 mr-2 max-w-[100px]">
                                    <div class="bg-primary h-2 rounded-full" style="width: 85%"></div>
                                </div>
                                <span class="text-xs font-semibold text-on-surface">85%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-on-surface-variant">
                            Yesterday
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end space-x-3">
                                <button class="text-error hover:opacity-80 p-1">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </button>
                                <button class="bg-primary hover:bg-primary-container text-on-primary px-4 py-1.5 rounded-md text-sm font-medium transition-colors">
                                    Accept
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Active Vacancies -->
<div>
    <div class="flex justify-between items-center mb-4">
        <h3 class="text-title-md font-bold text-on-surface">Active Vacancies</h3>
        <button class="bg-primary text-on-primary px-4 py-2 rounded-md text-sm font-medium hover:bg-primary-container hover:text-on-primary-container transition-colors flex items-center gap-2 shadow-sm">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            Post New Vacancy
        </button>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Vacancy Card 1 -->
        <div class="bg-surface-container-lowest rounded-lg border border-surface-dim p-6 flex flex-col h-full">
            <div class="flex justify-between items-start mb-2">
                <h4 class="text-title-md font-bold text-on-surface">Lead AI Researcher</h4>
                <span class="bg-tertiary-fixed text-on-tertiary-fixed text-label-lg px-2.5 py-1 rounded-md">Active</span>
            </div>
            <p class="text-label-sm text-on-surface-variant uppercase tracking-wider mb-4 font-medium">Dept: Research Lab Alpha</p>
            
            <div class="flex flex-wrap gap-4 text-sm text-on-surface-variant mb-6 flex-1">
                <div class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-outline-variant" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    12 Applicants
                </div>
                <div class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-outline-variant" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Ends Oct 24
                </div>
                <div class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-outline-variant" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    $2,500/mo
                </div>
            </div>
            
            <div class="flex border-t border-surface-dim pt-4 mt-auto">
                <button class="flex-1 flex items-center justify-center gap-2 text-sm font-medium text-on-surface-variant hover:text-primary border-r border-surface-dim pr-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                    Edit
                </button>
                <button class="flex-1 flex items-center justify-center gap-2 text-sm font-medium text-error hover:opacity-80 pl-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg>
                    Close Vacancy
                </button>
            </div>
        </div>

        <!-- Vacancy Card 2 -->
        <div class="bg-surface-container-lowest rounded-lg border border-surface-dim p-6 flex flex-col h-full">
            <div class="flex justify-between items-start mb-2">
                <h4 class="text-title-md font-bold text-on-surface">Social Media Coordinator</h4>
                <span class="bg-tertiary-fixed text-on-tertiary-fixed text-label-lg px-2.5 py-1 rounded-md">Active</span>
            </div>
            <p class="text-label-sm text-on-surface-variant uppercase tracking-wider mb-4 font-medium">Dept: University Relations</p>
            
            <div class="flex flex-wrap gap-4 text-sm text-on-surface-variant mb-6 flex-1">
                <div class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-outline-variant" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    45 Applicants
                </div>
                <div class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-outline-variant" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Ends Nov 02
                </div>
                <div class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-outline-variant" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    $1,200/mo
                </div>
            </div>
            
            <div class="flex border-t border-surface-dim pt-4 mt-auto">
                <button class="flex-1 flex items-center justify-center gap-2 text-sm font-medium text-on-surface-variant hover:text-primary border-r border-surface-dim pr-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                    Edit
                </button>
                <button class="flex-1 flex items-center justify-center gap-2 text-sm font-medium text-error hover:opacity-80 pl-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg>
                    Close Vacancy
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
