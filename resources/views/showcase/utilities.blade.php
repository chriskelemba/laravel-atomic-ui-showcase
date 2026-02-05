@php
    $active = 'utilities';
@endphp

@extends('showcase.layout')

@section('page')
    <x-atomic-ui-panel title="Utilities">
        <div x-data="{ showCode: false }" class="space-y-6">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <p :class="theme === 'dark' ? 'text-slate-300' : 'text-slate-600'">
                    Search, filters, and sorting helpers.
                </p>
                <x-atomic-ui-button variant="ghost" size="sm" @click="showCode = !showCode">
                    Toggle code
                </x-atomic-ui-button>
            </div>

            <x-atomic-ui-section-header title="Search" subtitle="Quick filtering input" />
            <x-atomic-ui-search-bar placeholder="Search invoices" />

            <x-atomic-ui-divider label="Filter Chips" />
            <x-atomic-ui-filter-chips :items="[
                ['label' => 'All', 'active' => true],
                ['label' => 'Active'],
                ['label' => 'Paused'],
                ['label' => 'Archived'],
            ]" />

            <x-atomic-ui-divider label="Sort" />
            <x-atomic-ui-sort-control :options="[
                ['label' => 'Newest', 'value' => 'new'],
                ['label' => 'Oldest', 'value' => 'old'],
                ['label' => 'Highest value', 'value' => 'high'],
            ]" />

            <div
                x-show="showCode"
                x-transition
                x-cloak
                class="rounded-xl border p-4"
                :class="theme === 'dark' ? 'border-white/10 bg-slate-950/40' : 'border-slate-200 bg-slate-50'"
            >
                @verbatim
                    <pre class="overflow-x-auto text-xs leading-relaxed" :class="theme === 'dark' ? 'text-slate-200' : 'text-slate-700'"><code>&lt;x-atomic-ui-search-bar placeholder="Search invoices" /&gt;
&lt;x-atomic-ui-filter-chips :items="[...]" /&gt;
&lt;x-atomic-ui-sort-control :options="[...]" /&gt;</code></pre>
                @endverbatim
            </div>
        </div>
    </x-atomic-ui-panel>
@endsection
