<x-layouts.app :title="__('Dashboard')">
    <div>
        <div class="relative mb-6 w-full">
            <flux:heading size="xl" level="1">{{ __('Messages') }}</flux:heading>
            <flux:subheading size="lg" class="mb-6">{{ __('Manage your messages') }}</flux:subheading>
            <flux:separator variant="subtle" />
        </div>
    </div>
    <livewire:messages/>
</x-layouts.app>
