@php
    $active = 'feedback';
@endphp

@extends('showcase.layout')

@section('page')
    <x-atomic-ui-panel title="Feedback">
        <div
            x-data="{
                showCode: false,
                toasts: [],
                pushToast(variant, title, message) {
                    const id = Date.now() + Math.random()
                    this.toasts.unshift({ id, variant, title, message })
                    if (this.toasts.length > 5) this.toasts.pop()
                    setTimeout(() => this.removeToast(id), 5200)
                },
                removeToast(id) {
                    this.toasts = this.toasts.filter(t => t.id !== id)
                }
            }"
            class="space-y-6"
        >
            <div class="flex flex-wrap items-center justify-between gap-3">
                <p :class="theme === 'dark' ? 'text-slate-300' : 'text-slate-600'">
                    Alerts, progress, empty states, skeletons, and toasts.
                </p>
                <x-atomic-ui-button variant="ghost" size="sm" @click="showCode = !showCode">
                    Toggle code
                </x-atomic-ui-button>
            </div>

            <div class="grid gap-6 lg:grid-cols-2">
                <div class="space-y-4">
                    <x-atomic-ui-alert variant="info" title="Heads up">Informational message for the user.</x-atomic-ui-alert>
                    <x-atomic-ui-alert variant="success" title="Success">Your changes have been saved.</x-atomic-ui-alert>
                    <x-atomic-ui-alert variant="warning" title="Warning">Double-check the configuration.</x-atomic-ui-alert>
                    <x-atomic-ui-alert variant="danger" title="Error">Something went wrong.</x-atomic-ui-alert>
                </div>
                <div class="space-y-4">
                    <x-atomic-ui-progress :value="64" />
                    <x-atomic-ui-empty-state title="No notifications" message="You're all caught up.">
                        <x-atomic-ui-button size="sm">Create alert</x-atomic-ui-button>
                    </x-atomic-ui-empty-state>
                    <x-atomic-ui-skeleton :lines="4" />
                </div>
            </div>

            <x-atomic-ui-divider label="Toast" />
            <div class="flex items-center gap-3">
                <button
                    type="button"
                    class="rounded-md border px-3 py-1.5 text-xs"
                    :class="theme === 'dark' ? 'border-white/10 text-slate-200' : 'border-slate-200 text-slate-700'"
                    @click="pushToast('success', 'Saved', 'Your settings were updated.')"
                >
                    Success toast
                </button>
                <button
                    type="button"
                    class="rounded-md border px-3 py-1.5 text-xs"
                    :class="theme === 'dark' ? 'border-white/10 text-slate-200' : 'border-slate-200 text-slate-700'"
                    @click="pushToast('info', 'Syncing', 'We are pulling the latest data.')"
                >
                    Info toast
                </button>
                <button
                    type="button"
                    class="rounded-md border px-3 py-1.5 text-xs"
                    :class="theme === 'dark' ? 'border-white/10 text-slate-200' : 'border-slate-200 text-slate-700'"
                    @click="pushToast('warning', 'Action needed', 'Please review the alert settings.')"
                >
                    Warning toast
                </button>
                <button
                    type="button"
                    class="rounded-md border px-3 py-1.5 text-xs"
                    :class="theme === 'dark' ? 'border-white/10 text-slate-200' : 'border-slate-200 text-slate-700'"
                    @click="pushToast('danger', 'Failed', 'We could not process that request.')"
                >
                    Danger toast
                </button>
                <span class="text-xs" :class="theme === 'dark' ? 'text-slate-400' : 'text-slate-500'">Auto hides after ~5s.</span>
            </div>
            <div class="fixed right-6 top-20 z-50 space-y-3">
                <template x-for="toast in toasts" :key="toast.id">
                    <div
                        class="max-w-lg rounded-2xl border px-6 py-5 text-base shadow-2xl"
                        :class="theme === 'dark'
                            ? ({
                                info: 'border-blue-500/20 bg-slate-900 text-slate-100',
                                success: 'border-green-500/20 bg-slate-900 text-slate-100',
                                warning: 'border-amber-500/20 bg-slate-900 text-slate-100',
                                danger: 'border-rose-500/20 bg-slate-900 text-slate-100'
                            }[toast.variant] || 'border-blue-500/20 bg-slate-900 text-slate-100')
                            : ({
                                info: 'border-blue-200 bg-white text-slate-900',
                                success: 'border-green-200 bg-white text-slate-900',
                                warning: 'border-amber-200 bg-white text-slate-900',
                                danger: 'border-rose-200 bg-white text-slate-900'
                            }[toast.variant] || 'border-blue-200 bg-white text-slate-900')"
                    >
                        <p class="text-sm font-semibold" x-text="toast.title"></p>
                        <p class="text-sm" x-text="toast.message"></p>
                    </div>
                </template>
            </div>

            <div
                x-show="showCode"
                x-transition
                x-cloak
                class="rounded-xl border p-4"
                :class="theme === 'dark' ? 'border-white/10 bg-slate-950/40' : 'border-slate-200 bg-slate-50'"
            >
                @verbatim
                    <pre class="overflow-x-auto text-xs leading-relaxed" :class="theme === 'dark' ? 'text-slate-200' : 'text-slate-700'"><code>&lt;x-atomic-ui-alert variant="success" title="Success"&gt;Saved&lt;/x-atomic-ui-alert&gt;
&lt;x-atomic-ui-progress :value="64" /&gt;
&lt;x-atomic-ui-empty-state title="No notifications" /&gt;
&lt;x-atomic-ui-skeleton :lines="4" /&gt;
&lt;x-atomic-ui-toast title="Saved" message="Updated." /&gt;</code></pre>
                @endverbatim
            </div>
        </div>
    </x-atomic-ui-panel>
@endsection
