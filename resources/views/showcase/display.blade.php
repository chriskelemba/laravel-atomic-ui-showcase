@php
    $active = 'display';
@endphp

@extends('showcase.layout')

@section('page')
    <x-atomic-ui-panel title="Display">
        <div x-data="{ showCode: false }" class="space-y-6">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <p :class="theme === 'dark' ? 'text-slate-300' : 'text-slate-600'">
                    Badges, tags, avatars, and timeline display elements.
                </p>
                <x-atomic-ui-button variant="ghost" size="sm" @click="showCode = !showCode">
                    Toggle code
                </x-atomic-ui-button>
            </div>

            <div class="grid gap-6 lg:grid-cols-2">
                <div class="space-y-4">
                    <x-atomic-ui-section-header title="Badges & Tags" subtitle="Use for status and metadata" />
                    <div class="flex flex-wrap gap-2">
                        <x-atomic-ui-badge variant="primary">Primary</x-atomic-ui-badge>
                        <x-atomic-ui-badge variant="success">Success</x-atomic-ui-badge>
                        <x-atomic-ui-badge variant="warning">Warning</x-atomic-ui-badge>
                        <x-atomic-ui-badge variant="danger">Danger</x-atomic-ui-badge>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <x-atomic-ui-tag>Tag</x-atomic-ui-tag>
                        <x-atomic-ui-tag variant="accent">Accent</x-atomic-ui-tag>
                        <x-atomic-ui-tag variant="muted">Muted</x-atomic-ui-tag>
                    </div>
                </div>
                <div class="space-y-4">
                    <x-atomic-ui-section-header title="Avatars" subtitle="Initials or images" />
                    <div class="flex items-center gap-3">
                        <x-atomic-ui-avatar name="Ada Lovelace" />
                        <x-atomic-ui-avatar name="Grace Hopper" size="sm" />
                        <x-atomic-ui-avatar name="Alan Turing" size="lg" />
                    </div>
                </div>
            </div>

            <x-atomic-ui-divider label="Timeline" />
            <x-atomic-ui-timeline :items="[
                ['title' => 'Design kickoff', 'meta' => 'Feb 1, 2026', 'color' => '#60a5fa'],
                ['title' => 'Prototype review', 'meta' => 'Feb 3, 2026', 'color' => '#a78bfa'],
                ['title' => 'Beta launch', 'meta' => 'Feb 5, 2026', 'color' => '#f472b6'],
            ]" />

            <div
                x-show="showCode"
                x-transition
                x-cloak
                class="rounded-xl border p-4"
                :class="theme === 'dark' ? 'border-white/10 bg-slate-950/40' : 'border-slate-200 bg-slate-50'"
            >
                @verbatim
                    <pre class="overflow-x-auto text-xs leading-relaxed" :class="theme === 'dark' ? 'text-slate-200' : 'text-slate-700'"><code>&lt;x-atomic-ui-badge variant="success"&gt;Success&lt;/x-atomic-ui-badge&gt;
&lt;x-atomic-ui-tag variant="accent"&gt;Accent&lt;/x-atomic-ui-tag&gt;
&lt;x-atomic-ui-avatar name="Ada Lovelace" /&gt;
&lt;x-atomic-ui-timeline :items="[...]" /&gt;</code></pre>
                @endverbatim
            </div>
        </div>
    </x-atomic-ui-panel>
@endsection
