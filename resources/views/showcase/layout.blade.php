@extends('atomic-ui::layouts.app')

@section('title', 'Atomic UI Showcase')

@php
    $active = $active ?? 'overview';
    $sidebarItems = [
        [
            'label' => 'Overview',
            'href' => route('showcase.overview'),
            'active' => $active === 'overview',
            'icon' => '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M4 10v10a1 1 0 001 1h5m4 0h5a1 1 0 001-1V10"/></svg>',
        ],
        [
            'label' => 'Buttons',
            'href' => route('showcase.buttons'),
            'active' => $active === 'buttons',
            'icon' => '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"/></svg>',
        ],
        [
            'label' => 'Inputs',
            'href' => route('showcase.inputs'),
            'active' => $active === 'inputs',
            'icon' => '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/></svg>',
        ],
        [
            'label' => 'Forms',
            'href' => route('showcase.forms'),
            'active' => $active === 'forms',
            'icon' => '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m-6-8h6M5 6h14a1 1 0 011 1v10a1 1 0 01-1 1H5a1 1 0 01-1-1V7a1 1 0 011-1z"/></svg>',
        ],
        [
            'label' => 'Navigation',
            'href' => route('showcase.navigation'),
            'active' => $active === 'navigation',
            'icon' => '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h18M12 3v18"/></svg>',
        ],
        [
            'label' => 'Data',
            'href' => route('showcase.data'),
            'active' => $active === 'data',
            'icon' => '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg>',
        ],
        [
            'label' => 'Overlays',
            'href' => route('showcase.overlays'),
            'active' => $active === 'overlays',
            'icon' => '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16v12H4z"/></svg>',
        ],
        [
            'label' => 'Feedback',
            'href' => route('showcase.feedback'),
            'active' => $active === 'feedback',
            'icon' => '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h10M7 16h6\"/></svg>',
        ],
        [
            'label' => 'Lists',
            'href' => route('showcase.lists'),
            'active' => $active === 'lists',
            'icon' => '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01"/></svg>',
        ],
        [
            'label' => 'Sidebar',
            'href' => route('showcase.sidebar'),
            'active' => $active === 'sidebar',
            'icon' => '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 18h16M9 6v12"/></svg>',
        ],
        [
            'label' => 'Utilities',
            'href' => route('showcase.utilities'),
            'active' => $active === 'utilities',
            'icon' => '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16\"/></svg>',
        ],
        [
            'label' => 'Display',
            'href' => route('showcase.display'),
            'active' => $active === 'display',
            'icon' => '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h14v6H5zM5 14h14v6H5z\"/></svg>',
        ],
        [
            'label' => 'Visuals',
            'href' => route('showcase.visuals'),
            'active' => $active === 'visuals',
            'icon' => '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3v18h18M7 15l3-3 4 4 5-6"/></svg>',
        ],
    ];

    $statCards = [
        [
            'label' => 'Active Users',
            'value' => '1,284',
            'description' => 'vs last week',
            'trend' => 'up',
            'trendValue' => '12.4%',
            'icon' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-4-4h-1m-4 6H2v-2a4 4 0 014-4h5m4-4a4 4 0 11-8 0 4 4 0 018 0z"/></svg>',
        ],
        [
            'label' => 'Revenue',
            'value' => '$42,390',
            'description' => 'monthly recurring',
            'trend' => 'up',
            'trendValue' => '8.1%',
            'icon' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-3.314 0-6 2.686-6 6v2h12v-2c0-3.314-2.686-6-6-6z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8V6a2 2 0 10-4 0"/></svg>',
        ],
        [
            'label' => 'Latency',
            'value' => '219ms',
            'description' => 'p95 response',
            'trend' => 'down',
            'trendValue' => '4.2%',
            'icon' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2"/><circle cx="12" cy="12" r="9" stroke-width="2"/></svg>',
        ],
    ];

    $activityItems = [
        [
            'title' => 'Webhook delivered for invoice #2391',
            'meta' => '2 minutes ago',
            'tone' => 'green',
            'icon' => '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>',
        ],
        [
            'title' => 'New team member invited',
            'meta' => '1 hour ago',
            'tone' => 'blue',
            'icon' => '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 20a7 7 0 0114 0"/></svg>',
        ],
        [
            'title' => 'Incident resolved: queue latency',
            'meta' => 'Today, 9:12 AM',
            'tone' => 'amber',
            'icon' => '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3l9 16H3l9-16z"/></svg>',
        ],
    ];

    $taskItems = [
        [
            'title' => 'Ship onboarding email flow',
            'meta' => 'Due Friday',
            'priority' => 'high',
        ],
        [
            'title' => 'Finalize metrics dashboard copy',
            'meta' => 'Due next week',
            'priority' => 'medium',
        ],
        [
            'title' => 'Clean up stale feature flags',
            'meta' => 'No due date',
            'priority' => 'low',
        ],
    ];

    $tableHeaders = ['User', 'Role', 'Status', 'Last Active'];
    $tableRows = [
        ['Ada Lovelace', 'Admin', 'Active', '2 hours ago'],
        ['Grace Hopper', 'Editor', 'Active', 'Today, 8:23 AM'],
        ['Katherine Johnson', 'Viewer', 'Invited', 'Yesterday'],
        ['Alan Turing', 'Editor', 'Suspended', 'Jan 30, 2026'],
    ];
@endphp

@section('content')
    <x-atomic-ui-app-shell
        title="Atomic UI"
        subtitle="Blade components for Laravel — Alpine + Tailwind"
    >
        <x-slot:sidebar>
            <x-atomic-ui-sidebar title="Showcase" :items="$sidebarItems">
                <div
                    class="mt-6 rounded-xl border p-4 text-xs"
                    :class="theme === 'dark' ? 'border-white/10 bg-white/5 text-slate-300' : 'border-slate-200 bg-white text-slate-600'"
                >
                    <p class="font-semibold">Laravel Atomic UI</p>
                    <p class="mt-1">Blade-first components for fast UI assembly.</p>
                </div>
            </x-atomic-ui-sidebar>
        </x-slot:sidebar>

        <x-slot:actions>
            <x-atomic-ui-action-button
                variant="primary"
                label="Browse Components"
                as="a"
                href="{{ route('showcase.buttons') }}"
            />
            <x-atomic-ui-action-button
                label="View Docs"
                as="a"
                href="{{ route('showcase.overview') }}"
            />
        </x-slot:actions>

        <div class="space-y-10">
            @yield('page')
        </div>
    </x-atomic-ui-app-shell>
@endsection
