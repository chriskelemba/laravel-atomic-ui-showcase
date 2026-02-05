@php
    $active = 'buttons';
@endphp

@extends('showcase.layout')

@section('page')
    <x-atomic-ui-panel title="Buttons">
        <div x-data="{ showCode: false }" class="space-y-4">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <p :class="theme === 'dark' ? 'text-slate-300' : 'text-slate-600'">
                    Primary, secondary, danger, and ghost variants with size control.
                </p>
                <x-atomic-ui-button variant="ghost" size="sm" @click="showCode = !showCode">
                    Toggle code
                </x-atomic-ui-button>
            </div>
            <div class="flex flex-wrap gap-3">
                <x-atomic-ui-button>Primary</x-atomic-ui-button>
                <x-atomic-ui-button variant="secondary">Secondary</x-atomic-ui-button>
                <x-atomic-ui-button variant="danger">Danger</x-atomic-ui-button>
                <x-atomic-ui-button variant="ghost">Ghost</x-atomic-ui-button>
                <x-atomic-ui-button size="sm">Small</x-atomic-ui-button>
                <x-atomic-ui-button size="lg">Large</x-atomic-ui-button>
            </div>
            <div
                x-show="showCode"
                x-transition
                x-cloak
                class="rounded-xl border p-4"
                :class="theme === 'dark' ? 'border-white/10 bg-slate-950/40' : 'border-slate-200 bg-slate-50'"
            >
                @verbatim
                    <pre class="overflow-x-auto text-xs leading-relaxed" :class="theme === 'dark' ? 'text-slate-200' : 'text-slate-700'"><code>&lt;x-atomic-ui-button&gt;Primary&lt;/x-atomic-ui-button&gt;
&lt;x-atomic-ui-button variant="secondary"&gt;Secondary&lt;/x-atomic-ui-button&gt;
&lt;x-atomic-ui-button variant="danger"&gt;Danger&lt;/x-atomic-ui-button&gt;
&lt;x-atomic-ui-button variant="ghost" size="sm"&gt;Ghost&lt;/x-atomic-ui-button&gt;</code></pre>
                @endverbatim
            </div>
        </div>
    </x-atomic-ui-panel>

    <x-atomic-ui-panel title="Action Buttons">
        <div x-data="{ showCode: false }" class="space-y-4">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <p :class="theme === 'dark' ? 'text-slate-300' : 'text-slate-600'">
                    Accent call-to-action buttons for headers and toolbars.
                </p>
                <x-atomic-ui-button variant="ghost" size="sm" @click="showCode = !showCode">
                    Toggle code
                </x-atomic-ui-button>
            </div>
            <div class="flex flex-wrap gap-3">
                <x-atomic-ui-action-button variant="primary" label="Create Project">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                </x-atomic-ui-action-button>
                <x-atomic-ui-action-button label="Share" />
                <x-atomic-ui-action-button label="Export" />
            </div>
            <div
                x-show="showCode"
                x-transition
                x-cloak
                class="rounded-xl border p-4"
                :class="theme === 'dark' ? 'border-white/10 bg-slate-950/40' : 'border-slate-200 bg-slate-50'"
            >
                @verbatim
                    <pre class="overflow-x-auto text-xs leading-relaxed" :class="theme === 'dark' ? 'text-slate-200' : 'text-slate-700'"><code>&lt;x-atomic-ui-action-button variant="primary" label="Create Project" /&gt;
&lt;x-atomic-ui-action-button label="Share" /&gt;</code></pre>
                @endverbatim
            </div>
        </div>
    </x-atomic-ui-panel>
@endsection
