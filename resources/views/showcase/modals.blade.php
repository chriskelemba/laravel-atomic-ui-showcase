@php
    $active = 'modals';
@endphp

@extends('showcase.layout')

@section('page')
    <x-atomic-ui-panel title="Modal">
        <div x-data="{ showCode: false }" class="space-y-4">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <p :class="theme === 'dark' ? 'text-slate-300' : 'text-slate-600'">
                    Alpine-powered modal with trigger and size options.
                </p>
                <x-atomic-ui-button variant="ghost" size="sm" @click="showCode = !showCode">
                    Toggle code
                </x-atomic-ui-button>
            </div>
            <x-atomic-ui-modal title="Deploy preview" size="md">
                <x-slot:trigger>
                    <x-atomic-ui-button>Open modal</x-atomic-ui-button>
                </x-slot:trigger>
                <p class="text-sm" :class="theme === 'dark' ? 'text-slate-300' : 'text-slate-600'">
                    This modal is ready to drop into confirmations or inline previews.
                </p>
                <div class="mt-4 flex gap-2">
                    <x-atomic-ui-button variant="secondary">Review</x-atomic-ui-button>
                    <x-atomic-ui-button>Deploy</x-atomic-ui-button>
                </div>
            </x-atomic-ui-modal>
            <div
                x-show="showCode"
                x-transition
                x-cloak
                class="rounded-xl border p-4"
                :class="theme === 'dark' ? 'border-white/10 bg-slate-950/40' : 'border-slate-200 bg-slate-50'"
            >
                @verbatim
                    <pre class="overflow-x-auto text-xs leading-relaxed" :class="theme === 'dark' ? 'text-slate-200' : 'text-slate-700'"><code>&lt;x-atomic-ui-modal title="Deploy preview"&gt;
    &lt;x-slot:trigger&gt;
        &lt;x-atomic-ui-button&gt;Open modal&lt;/x-atomic-ui-button&gt;
    &lt;/x-slot:trigger&gt;
    Modal content here.
&lt;/x-atomic-ui-modal&gt;</code></pre>
                @endverbatim
            </div>
        </div>
    </x-atomic-ui-panel>
@endsection
