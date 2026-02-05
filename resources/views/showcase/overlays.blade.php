@php
    $active = 'overlays';
@endphp

@extends('showcase.layout')

@section('page')
    <x-atomic-ui-panel title="Overlays">
        <div x-data="{ showCode: false }" class="space-y-6">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <p :class="theme === 'dark' ? 'text-slate-300' : 'text-slate-600'">
                    Modals, drawers, tooltips, popovers, and dropdowns.
                </p>
                <x-atomic-ui-button variant="ghost" size="sm" @click="showCode = !showCode">
                    Toggle code
                </x-atomic-ui-button>
            </div>

            <div class="grid gap-6 lg:grid-cols-2">
                <div class="space-y-4">
                    <x-atomic-ui-modal title="Modal preview">
                        <x-slot:trigger>
                            <x-atomic-ui-button>Open modal</x-atomic-ui-button>
                        </x-slot:trigger>
                        <p class="text-sm" :class="theme === 'dark' ? 'text-slate-300' : 'text-slate-600'">Modal content goes here.</p>
                    </x-atomic-ui-modal>

                    <x-atomic-ui-popover title="Popover">
                        <x-slot:trigger>
                            <x-atomic-ui-button variant="secondary">Open popover</x-atomic-ui-button>
                        </x-slot:trigger>
                        <x-slot:content>
                            <p class="text-sm">Quick actions and shortcuts.</p>
                        </x-slot:content>
                    </x-atomic-ui-popover>

                    <x-atomic-ui-tooltip text="Copy to clipboard">
                        <x-atomic-ui-button variant="ghost">Hover tooltip</x-atomic-ui-button>
                    </x-atomic-ui-tooltip>
                </div>
                <div class="space-y-4">
                    <x-atomic-ui-dropdown :items="[
                        ['label' => 'Edit', 'href' => '#'],
                        ['label' => 'Duplicate', 'href' => '#'],
                        ['label' => 'Archive', 'href' => '#'],
                    ]">
                        <x-slot:trigger>
                            <x-atomic-ui-button variant="secondary">Open dropdown</x-atomic-ui-button>
                        </x-slot:trigger>
                    </x-atomic-ui-dropdown>

                    <x-atomic-ui-drawer title="Drawer">
                        <x-slot:trigger>
                            <x-atomic-ui-button>Open drawer</x-atomic-ui-button>
                        </x-slot:trigger>
                        <p class="text-sm" :class="theme === 'dark' ? 'text-slate-300' : 'text-slate-600'">Drawer content lives here.</p>
                    </x-atomic-ui-drawer>
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
                    <pre class="overflow-x-auto text-xs leading-relaxed" :class="theme === 'dark' ? 'text-slate-200' : 'text-slate-700'"><code>&lt;x-atomic-ui-modal title="Modal preview"&gt;...&lt;/x-atomic-ui-modal&gt;
&lt;x-atomic-ui-popover title="Popover"&gt;...&lt;/x-atomic-ui-popover&gt;
&lt;x-atomic-ui-tooltip text="Copy"&gt;...&lt;/x-atomic-ui-tooltip&gt;
&lt;x-atomic-ui-dropdown :items="[...]"&gt;...&lt;/x-atomic-ui-dropdown&gt;
&lt;x-atomic-ui-drawer title="Drawer"&gt;...&lt;/x-atomic-ui-drawer&gt;</code></pre>
                @endverbatim
            </div>
        </div>
    </x-atomic-ui-panel>
@endsection
