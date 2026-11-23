@extends('layouts.app')
@section('title', 'Welcome to COMMITLN')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-surface-container-lowest overflow-hidden border border-surface-dim sm:rounded-lg">
            <div class="p-6 text-on-surface">
                <h1 class="text-display-sm font-display font-bold mb-4 text-primary">Welcome to COMMITLN</h1>
                <p class="text-title-md text-on-surface-variant">This is the landing page. Start managing your projects efficiently.</p>
                <div class="mt-8">
                    <a href="/dashboard" class="inline-block bg-primary text-on-primary px-6 py-3 rounded-md shadow-sm hover:bg-primary-container transition font-medium">Go to Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
