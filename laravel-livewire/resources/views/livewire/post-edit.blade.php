<div>
    <flux:modal name="edit-post" class="md:w-96">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Edit Post</flux:heading>
            <flux:text class="mt-2">Fillup the form for the post.</flux:text>
        </div>

        <flux:input wire:model="title" label="title" placeholder="post title" />

        <flux:textarea wire:model="body" label="body" type="date" placeholder="description ..." />

        <div class="flex">
            <flux:spacer />

            <flux:button type="submit" wire:click="update" variant="primary">update</flux:button>
        </div>
    </div>
</flux:modal>
</div>
