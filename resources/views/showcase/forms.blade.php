@php
    $active = 'forms';
@endphp

@extends('showcase.layout')

@section('page')
    <x-atomic-ui-panel title="Form Fields">
        <div x-data="{ showCode: false }" class="space-y-4">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <p :class="theme === 'dark' ? 'text-slate-300' : 'text-slate-600'">
                    Form field wrapper + input atom for clean labels and hints.
                </p>
                <x-atomic-ui-button variant="ghost" size="sm" @click="showCode = !showCode">
                    Toggle code
                </x-atomic-ui-button>
            </div>
            <x-atomic-ui-form action="#" method="GET" submitLabel="Send Invite">
                <x-atomic-ui-form-field
                    label="Full name"
                    name="name"
                    placeholder="Ada Lovelace"
                />
                <x-atomic-ui-form-field
                    label="Email"
                    name="email"
                    type="email"
                    placeholder="ada@lovelace.io"
                    hint="We will never share this email."
                />
                <x-atomic-ui-form-field
                    label="Role"
                    name="role"
                    placeholder="Admin, Editor, Viewer"
                />
                <x-slot:actions>
                    <x-atomic-ui-button variant="ghost" type="button">Cancel</x-atomic-ui-button>
                </x-slot:actions>
            </x-atomic-ui-form>
            <div
                x-show="showCode"
                x-transition
                x-cloak
                class="rounded-xl border p-4"
                :class="theme === 'dark' ? 'border-white/10 bg-slate-950/40' : 'border-slate-200 bg-slate-50'"
            >
                @verbatim
                    <pre class="overflow-x-auto text-xs leading-relaxed" :class="theme === 'dark' ? 'text-slate-200' : 'text-slate-700'"><code>&lt;x-atomic-ui-form action="#" method="GET" submitLabel="Send Invite"&gt;
    &lt;x-atomic-ui-form-field label="Full name" name="name" placeholder="Ada Lovelace" /&gt;
    &lt;x-atomic-ui-form-field label="Email" name="email" type="email" /&gt;
    &lt;x-atomic-ui-form-field label="Role" name="role" /&gt;
&lt;/x-atomic-ui-form&gt;</code></pre>
                @endverbatim
            </div>
        </div>
    </x-atomic-ui-panel>
@endsection
