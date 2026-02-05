@php
    $active = 'sidebar';
    $previewItems = [
        [
            'label' => 'Dashboard',
            'href' => '#',
            'active' => true,
            'icon' => '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M4 10v10a1 1 0 001 1h5m4 0h5a1 1 0 001-1V10"/></svg>',
        ],
        [
            'label' => 'Projects',
            'href' => '#',
            'icon' => '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg>',
        ],
        [
            'label' => 'Team',
            'href' => '#',
            'icon' => '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-4-4h-1m-4 6H2v-2a4 4 0 014-4h5m4-4a4 4 0 11-8 0 4 4 0 018 0z"/></svg>',
        ],
    ];
@endphp

@extends('showcase.layout')

@section('page')
    <x-atomic-ui-panel title="Sidebar">
        <div x-data="{ showCode: false }" class="space-y-4">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <p :class="theme === 'dark' ? 'text-slate-300' : 'text-slate-600'">
                    Use the sidebar organism to power navigation in the app shell. It supports icons, active states,
                    and additional content slots.
                </p>
                <x-atomic-ui-button variant="ghost" size="sm" @click="showCode = !showCode">
                    Toggle code
                </x-atomic-ui-button>
            </div>

            <div class="grid gap-6 lg:grid-cols-[260px_1fr]">
                <div class="rounded-2xl border p-3"
                    :class="theme === 'dark' ? 'border-white/10 bg-slate-900/80' : 'border-slate-200 bg-white'"
                >
                    <x-atomic-ui-sidebar title="Preview" :items="$previewItems">
                        <div class="mt-6 rounded-xl border p-4 text-xs"
                            :class="theme === 'dark' ? 'border-white/10 bg-white/5 text-slate-300' : 'border-slate-200 bg-slate-50 text-slate-600'"
                        >
                            <p class="font-semibold">Sidebar slot</p>
                            <p class="mt-1">Add badges, filters, or call-to-action blocks.</p>
                        </div>
                    </x-atomic-ui-sidebar>
                </div>
                <div class="space-y-3">
                    <p class="text-sm" :class="theme === 'dark' ? 'text-slate-300' : 'text-slate-600'">
                        The sidebar uses the same theme-aware classes as the app shell. It highlights the active
                        link, shows icons, and exposes a slot for extra content.
                    </p>
                    <div class="rounded-xl border p-4"
                        :class="theme === 'dark' ? 'border-white/10 bg-slate-950/40' : 'border-slate-200 bg-slate-50'"
                    >
                        <p class="text-xs font-semibold uppercase tracking-widest" :class="theme === 'dark' ? 'text-slate-400' : 'text-slate-500'">Pro tip</p>
                        <p class="mt-2 text-sm" :class="theme === 'dark' ? 'text-slate-200' : 'text-slate-700'">
                            Use the sidebar in combination with the app shell to create a polished layout in minutes.
                        </p>
                    </div>
                </div>
            </div>

            <div
                x-show="showCode"
                x-transition
                x-cloak
                class="rounded-xl border p-4"
                :class="theme === 'dark' ? 'border-white/10 bg-slate-950/40' : 'border-slate-200 bg-slate-50'"
            >
                @verbatim
                    <pre class="overflow-x-auto text-xs leading-relaxed" :class="theme === 'dark' ? 'text-slate-200' : 'text-slate-700'"><code>&lt;x-atomic-ui-sidebar
    title="Preview"
    :items="[
        ['label' => 'Dashboard', 'active' => true],
        ['label' => 'Projects'],
        ['label' => 'Team'],
    ]"
&gt;
    &lt;div class="mt-6 rounded-xl border p-4 text-xs"&gt;...
    &lt;/div&gt;
&lt;/x-atomic-ui-sidebar&gt;</code></pre>
                @endverbatim
            </div>
        </div>
    </x-atomic-ui-panel>
@endsection
