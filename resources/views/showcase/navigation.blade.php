@php
    $active = 'navigation';
    $tabs = [
        ['id' => 'overview', 'label' => 'Overview', 'content' => '<p class="text-sm">Tab content one.</p>'],
        ['id' => 'metrics', 'label' => 'Metrics', 'content' => '<p class="text-sm">Tab content two.</p>'],
        ['id' => 'settings', 'label' => 'Settings', 'content' => '<p class="text-sm">Tab content three.</p>'],
    ];
@endphp

@extends('showcase.layout')

@section('page')
    <x-atomic-ui-panel title="Navigation">
        <div x-data="{ showCode: false }" class="space-y-6">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <p :class="theme === 'dark' ? 'text-slate-300' : 'text-slate-600'">
                    Breadcrumbs, tabs, steps, and pagination.
                </p>
                <x-atomic-ui-button variant="ghost" size="sm" @click="showCode = !showCode">
                    Toggle code
                </x-atomic-ui-button>
            </div>

            <x-atomic-ui-section-header title="Breadcrumbs" subtitle="Show hierarchy and location." />
            <x-atomic-ui-breadcrumb :items="[
                ['label' => 'Home', 'href' => '#'],
                ['label' => 'Projects', 'href' => '#'],
                ['label' => 'Lighthouse'],
            ]" />

            <x-atomic-ui-divider label="Tabs" />
            <x-atomic-ui-tabs :tabs="$tabs" active="overview" />

            <x-atomic-ui-divider label="Steps" />
            <x-atomic-ui-steps :steps="[
                ['label' => 'Details'],
                ['label' => 'Billing'],
                ['label' => 'Confirm'],
            ]" :active="2" />

            <x-atomic-ui-divider label="Pagination" />
            <x-atomic-ui-pagination :current="2" :total="8" />

            <div
                x-show="showCode"
                x-transition
                x-cloak
                class="rounded-xl border p-4"
                :class="theme === 'dark' ? 'border-white/10 bg-slate-950/40' : 'border-slate-200 bg-slate-50'"
            >
                @verbatim
                    <pre class="overflow-x-auto text-xs leading-relaxed" :class="theme === 'dark' ? 'text-slate-200' : 'text-slate-700'"><code>&lt;x-atomic-ui-breadcrumb :items="[['label' => 'Home']]" /&gt;
&lt;x-atomic-ui-tabs :tabs="$tabs" /&gt;
&lt;x-atomic-ui-steps :steps="[...]" :active="2" /&gt;
&lt;x-atomic-ui-pagination :current="2" :total="8" /&gt;</code></pre>
                @endverbatim
            </div>
        </div>
    </x-atomic-ui-panel>
@endsection
