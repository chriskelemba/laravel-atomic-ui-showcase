<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('showcase.*', function ($view) {
            $view->with([
                'statCards' => [
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
                ],
                'activityItems' => [
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
                ],
                'taskItems' => [
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
                ],
                'tableHeaders' => ['User', 'Role', 'Status', 'Last Active'],
                'tableRows' => [
                    ['Ada Lovelace', 'Admin', 'Active', '2 hours ago'],
                    ['Grace Hopper', 'Editor', 'Active', 'Today, 8:23 AM'],
                    ['Katherine Johnson', 'Viewer', 'Invited', 'Yesterday'],
                    ['Alan Turing', 'Editor', 'Suspended', 'Jan 30, 2026'],
                ],
            ]);
        });
    }
}