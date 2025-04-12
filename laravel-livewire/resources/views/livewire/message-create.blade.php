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

    <flux:modal name="edit-message" class="md:w-96">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Create Message</flux:heading>
            <flux:text class="mt-2">Fill the form .</flux:text>
        </div>

        <flux:input wire:model="title" label="Name" placeholder="Your name" />
 
        <flux:textarea wire:model="body" label="Message" type="text" placeholder="write your message" />

        <div class="flex">
            <flux:spacer />

            <flux:button type="submit" wire:click="createm" variant="primary">create</flux:button>
        </div>
    </div>
</flux:modal>
</div>
