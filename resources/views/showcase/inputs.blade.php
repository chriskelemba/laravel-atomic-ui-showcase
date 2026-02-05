@php
    $active = 'inputs';
@endphp

@extends('showcase.layout')

@section('page')
    <x-atomic-ui-panel title="Inputs">
        <div x-data="{ showCode: false }" class="space-y-6">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <p :class="theme === 'dark' ? 'text-slate-300' : 'text-slate-600'">
                    Core input controls for forms and filters.
                </p>
                <x-atomic-ui-button variant="ghost" size="sm" @click="showCode = !showCode">
                    Toggle code
                </x-atomic-ui-button>
            </div>

            <div class="grid gap-6 lg:grid-cols-2">
                <div class="space-y-4">
                    <x-atomic-ui-form-field label="Select" name="role">
                        <x-atomic-ui-select :options="[
                            ['label' => 'Admin', 'value' => 'admin'],
                            ['label' => 'Editor', 'value' => 'editor'],
                            ['label' => 'Viewer', 'value' => 'viewer'],
                        ]" name="role" />
                    </x-atomic-ui-form-field>

                    <x-atomic-ui-form-field label="Textarea" name="notes">
                        <x-atomic-ui-textarea name="notes" placeholder="Add a note..." />
                    </x-atomic-ui-form-field>

                    <x-atomic-ui-form-field label="Date" name="due_date">
                        <x-atomic-ui-date-input name="due_date" />
                    </x-atomic-ui-form-field>
                </div>
                <div class="space-y-4">
                    <x-atomic-ui-form-field label="Checkboxes">
                        <div class="space-y-2">
                            <x-atomic-ui-checkbox label="Email alerts" />
                            <x-atomic-ui-checkbox label="Weekly report" checked />
                        </div>
                    </x-atomic-ui-form-field>

                    <x-atomic-ui-form-field label="Radio Group">
                        <x-atomic-ui-radio-group name="plan" :options="[
                            ['label' => 'Starter', 'value' => 'starter', 'checked' => true],
                            ['label' => 'Pro', 'value' => 'pro'],
                            ['label' => 'Enterprise', 'value' => 'enterprise'],
                        ]" />
                    </x-atomic-ui-form-field>

                    <x-atomic-ui-form-field label="Toggle">
                        <x-atomic-ui-toggle label="Enable beta" />
                    </x-atomic-ui-form-field>

                    <x-atomic-ui-form-field label="File Upload">
                        <x-atomic-ui-file-upload label="Upload CSV" />
                    </x-atomic-ui-form-field>
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
                    <pre class="overflow-x-auto text-xs leading-relaxed" :class="theme === 'dark' ? 'text-slate-200' : 'text-slate-700'"><code>&lt;x-atomic-ui-select :options="[['label' => 'Admin', 'value' => 'admin']]" /&gt;
&lt;x-atomic-ui-textarea placeholder="Add a note..." /&gt;
&lt;x-atomic-ui-date-input /&gt;
&lt;x-atomic-ui-checkbox label="Email alerts" /&gt;
&lt;x-atomic-ui-radio-group name="plan" :options="[...]" /&gt;
&lt;x-atomic-ui-toggle label="Enable beta" /&gt;
&lt;x-atomic-ui-file-upload label="Upload CSV" /&gt;</code></pre>
                @endverbatim
            </div>
        </div>
    </x-atomic-ui-panel>
@endsection
