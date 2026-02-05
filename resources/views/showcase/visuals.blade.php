@php
    $active = 'visuals';
    $linePoints = [12, 18, 14, 26, 32, 28, 36, 40, 38, 46, 52, 48];
    $barItems = [
        ['label' => 'Mon', 'value' => 18],
        ['label' => 'Tue', 'value' => 24],
        ['label' => 'Wed', 'value' => 12],
        ['label' => 'Thu', 'value' => 30],
        ['label' => 'Fri', 'value' => 22],
        ['label' => 'Sat', 'value' => 10],
        ['label' => 'Sun', 'value' => 16],
    ];
    $pieSegments = [
        ['label' => 'Product', 'value' => 54, 'color' => '#60a5fa'],
        ['label' => 'Services', 'value' => 28, 'color' => '#a78bfa'],
        ['label' => 'Add-ons', 'value' => 18, 'color' => '#f472b6'],
    ];
    $calendarEvents = [
        ['day' => 3, 'label' => 'Launch', 'color' => '#38bdf8'],
        ['day' => 8, 'label' => 'Design review', 'color' => '#a78bfa'],
        ['day' => 14, 'label' => 'Sprint demo', 'color' => '#fb7185'],
        ['day' => 21, 'label' => 'Roadmap', 'color' => '#facc15'],
    ];
@endphp

@extends('showcase.layout')

@section('page')
    <x-atomic-ui-panel title="Charts">
        <div x-data="{ showCode: false }" class="space-y-6">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <p :class="theme === 'dark' ? 'text-slate-300' : 'text-slate-600'">
                    Lightweight charts you can drop into dashboards without extra JS.
                </p>
                <x-atomic-ui-button variant="ghost" size="sm" @click="showCode = !showCode">
                    Toggle code
                </x-atomic-ui-button>
            </div>

            <div class="grid gap-6 lg:grid-cols-2">
                <x-atomic-ui-line-chart title="Monthly Active" subtitle="Last 12 months" :points="$linePoints" />
                <x-atomic-ui-bar-chart title="Weekly Orders" subtitle="Last 7 days" :items="$barItems" />
            </div>
            <x-atomic-ui-pie-chart title="Revenue Mix" subtitle="By stream" :segments="$pieSegments" />

            <div
                x-show="showCode"
                x-transition
                x-cloak
                class="rounded-xl border p-4"
                :class="theme === 'dark' ? 'border-white/10 bg-slate-950/40' : 'border-slate-200 bg-slate-50'"
            >
                @verbatim
                    <pre class="overflow-x-auto text-xs leading-relaxed" :class="theme === 'dark' ? 'text-slate-200' : 'text-slate-700'"><code>&lt;x-atomic-ui-line-chart :points="[12,18,14,26]" /&gt;
&lt;x-atomic-ui-bar-chart :items="[['label' => 'Mon', 'value' => 12]]" /&gt;
&lt;x-atomic-ui-pie-chart :segments="[['label' => 'Product', 'value' => 60]]" /&gt;</code></pre>
                @endverbatim
            </div>
        </div>
    </x-atomic-ui-panel>

    <x-atomic-ui-panel title="Calendar">
        <div x-data="{ showCode: false }" class="space-y-6">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <p :class="theme === 'dark' ? 'text-slate-300' : 'text-slate-600'">
                    Event-ready calendar component with a simple events array.
                </p>
                <x-atomic-ui-button variant="ghost" size="sm" @click="showCode = !showCode">
                    Toggle code
                </x-atomic-ui-button>
            </div>

            <x-atomic-ui-calendar title="Release Calendar" :events="$calendarEvents" />

            <div
                x-show="showCode"
                x-transition
                x-cloak
                class="rounded-xl border p-4"
                :class="theme === 'dark' ? 'border-white/10 bg-slate-950/40' : 'border-slate-200 bg-slate-50'"
            >
                @verbatim
                    <pre class="overflow-x-auto text-xs leading-relaxed" :class="theme === 'dark' ? 'text-slate-200' : 'text-slate-700'"><code>&lt;x-atomic-ui-calendar :events="[['day' => 3, 'label' => 'Launch']]" /&gt;</code></pre>
                @endverbatim
            </div>
        </div>
    </x-atomic-ui-panel>
@endsection
