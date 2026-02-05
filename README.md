# Laravel Atomic UI Showcase

This repo showcases the `chriskelemba/laravel-atomic-ui` package with a full multi-page showcase built on Laravel + Tailwind + Alpine.

The showcase lives at `/` and `/showcase/*` routes.

## Showcase Pages

- `/` Overview
- `/showcase/buttons`
- `/showcase/inputs`
- `/showcase/forms`
- `/showcase/navigation`
- `/showcase/data`
- `/showcase/overlays`
- `/showcase/feedback`
- `/showcase/lists`
- `/showcase/sidebar`
- `/showcase/utilities`
- `/showcase/display`
- `/showcase/visuals`

## Package Usage

Consumers can use hyphenated tags out of the box after `composer require` (no publishing needed). The package also supports the standard `x-atomic-ui::` namespace.

### Example

```blade
<x-atomic-ui-button>Primary</x-atomic-ui-button>
<x-atomic-ui-input name="email" placeholder="you@example.com" />
<x-atomic-ui-modal title="Confirm">
    <x-slot:trigger>
        <x-atomic-ui-button>Open</x-atomic-ui-button>
    </x-slot:trigger>
    Modal content here.
</x-atomic-ui-modal>
```

## Component Inventory

### Atoms

- `atomic-ui-button`
- `atomic-ui-input`
- `atomic-ui-action-button`
- `atomic-ui-badge`
- `atomic-ui-avatar`
- `atomic-ui-tag`
- `atomic-ui-divider`

### Molecules

- `atomic-ui-form-field`
- `atomic-ui-modal`
- `atomic-ui-alert`
- `atomic-ui-toast`
- `atomic-ui-tooltip`
- `atomic-ui-popover`
- `atomic-ui-dropdown`
- `atomic-ui-tabs`
- `atomic-ui-breadcrumb`
- `atomic-ui-pagination`
- `atomic-ui-steps`
- `atomic-ui-toggle`
- `atomic-ui-checkbox`
- `atomic-ui-radio-group`
- `atomic-ui-select`
- `atomic-ui-textarea`
- `atomic-ui-date-input`
- `atomic-ui-file-upload`
- `atomic-ui-search-bar`
- `atomic-ui-filter-chips`
- `atomic-ui-sort-control`

### Organisms

- `atomic-ui-form`
- `atomic-ui-panel`
- `atomic-ui-table`
- `atomic-ui-stat-card`
- `atomic-ui-sidebar`
- `atomic-ui-line-chart`
- `atomic-ui-bar-chart`
- `atomic-ui-pie-chart`
- `atomic-ui-calendar`
- `atomic-ui-drawer`
- `atomic-ui-empty-state`
- `atomic-ui-progress`
- `atomic-ui-skeleton`
- `atomic-ui-section-header`
- `atomic-ui-timeline`
- `atomic-ui-activity-list`
- `atomic-ui-task-list`

### Templates

- `atomic-ui-app-shell`
- `atomic-ui-dashboard`
- `atomic-ui-crud-page`
- `atomic-ui-resource-index`

## Notes

- Alpine is loaded automatically by the package layout.
- The showcase uses the hyphenated tags everywhere.