<div>

    @if (session()->has('success'))
    <div 
        x-data="{ show: true }" 
        x-init="setTimeout(() => show = false, 3000)" 
        x-show="show"
        class="p-3 mb-4 bg-green-100 text-green-800 border border-green-300 rounded transition-opacity duration-500"
    >
        {{ session('success') }}
    </div>
  @endif

<flux:modal name="edit-messag" class="md:w-96">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Edit your Message</flux:heading>
            <flux:text class="mt-2">Make changes to your message.</flux:text>
        </div>

        <flux:input wire:model="title" label="Name"/>

        <flux:textarea wire:model="body" label="Description" type="text" />

        <div class="flex">
            <flux:spacer />

            <flux:button type="submit" wire:click="update" variant="primary">Update</flux:button>
        </div>
    </div>
</flux:modal>
</div>
