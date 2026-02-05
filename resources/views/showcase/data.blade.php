@php
    $active = 'data';
@endphp

@extends('showcase.layout')

@section('page')
    <x-atomic-ui-panel title="Table">
        <div x-data="{ showCode: false }" class="space-y-4">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <p :class="theme === 'dark' ? 'text-slate-300' : 'text-slate-600'">
                    Data tables with headers and rows array props.
                </p>
                <x-atomic-ui-button variant="ghost" size="sm" @click="showCode = !showCode">
                    Toggle code
                </x-atomic-ui-button>
            </div>
            <x-atomic-ui-table :headers="$tableHeaders" :rows="$tableRows" />
            <div
                x-show="showCode"
                x-transition
                x-cloak
                class="rounded-xl border p-4"
                :class="theme === 'dark' ? 'border-white/10 bg-slate-950/40' : 'border-slate-200 bg-slate-50'"
            >
                @verbatim
                    <pre class="overflow-x-auto text-xs leading-relaxed" :class="theme === 'dark' ? 'text-slate-200' : 'text-slate-700'"><code>@php
$headers = ['User', 'Role', 'Status'];
$rows = [['Ada', 'Admin', 'Active']];
@endphp

&lt;x-atomic-ui-table :headers="$headers" :rows="$rows" /&gt;</code></pre>
                @endverbatim
            </div>
        </div>
    </x-atomic-ui-panel>

    <x-atomic-ui-panel title="Stat Cards">
        <div x-data="{ showCode: false }" class="space-y-4">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <p :class="theme === 'dark' ? 'text-slate-300' : 'text-slate-600'">
                    Gradient-backed stats with trends and icons.
                </p>
                <x-atomic-ui-button variant="ghost" size="sm" @click="showCode = !showCode">
                    Toggle code
                </x-atomic-ui-button>
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
            <div
                x-show="showCode"
                x-transition
                x-cloak
                class="rounded-xl border p-4"
                :class="theme === 'dark' ? 'border-white/10 bg-slate-950/40' : 'border-slate-200 bg-slate-50'"
            >
                @verbatim
                    <pre class="overflow-x-auto text-xs leading-relaxed" :class="theme === 'dark' ? 'text-slate-200' : 'text-slate-700'"><code>&lt;x-atomic-ui-stat-card
    label="Active Users"
    value="1,284"
    description="vs last week"
    trend="up"
    trendValue="12.4%"
/&gt;</code></pre>
                @endverbatim
            </div>
        </div>
    </x-atomic-ui-panel>
@endsection
