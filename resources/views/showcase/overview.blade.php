@php
    $active = 'overview';
@endphp

@extends('showcase.layout')

@section('page')
    <section class="grid gap-8 lg:grid-cols-[1.2fr_1fr]">
        <div class="space-y-4">
            <p class="text-sm font-semibold uppercase tracking-widest text-blue-400">Atomic UI Preview</p>
            <h1 class="text-4xl font-bold tracking-tight sm:text-5xl">
                Build Blade UIs that feel premium out of the box.
            </h1>
            <p :class="theme === 'dark' ? 'text-slate-300' : 'text-slate-600'">
                This page is a live gallery of the Laravel Atomic UI components. Every preview is paired
                with the exact Blade snippet you can drop into your app.
            </p>
            <div class="flex flex-wrap gap-3">
                <x-atomic-ui-button>Primary Action</x-atomic-ui-button>
                <x-atomic-ui-button variant="secondary">Secondary</x-atomic-ui-button>
                <x-atomic-ui-button variant="ghost">Ghost</x-atomic-ui-button>
            </div>
        </div>
        <div class="grid gap-4 sm:grid-cols-2">
            @foreach ($statCards as $card)
                <x-atomic-ui-stat-card
                    :label="$card['label']"
                    :value="$card['value']"
                    :description="$card['description']"
                    :trend="$card['trend']"
                    :trendValue="$card['trendValue']"
                    :icon="$card['icon']"
                />
            @endforeach
        </div>
    </section>
@endsection
