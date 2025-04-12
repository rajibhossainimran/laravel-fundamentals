<div>
    <flux:modal name="create-post" class="md:w-96">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Create Post</flux:heading>
            <flux:text class="mt-2">Fillup the form for the post.</flux:text>
        </div>

        <flux:input wire:model="title" label="title" placeholder="post title" />

        <flux:textarea wire:model="body" label="body" type="date" placeholder="description ..." />

        <div class="flex">
            <flux:spacer />

            <flux:button type="submit" wire:click="submit" variant="primary">Save</flux:button>
        </div>
    </div>
</flux:modal>
</div>
