<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Edit User') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Edit user form ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    {{-- user table  --}}
    <div class="container mx-auto p-4">
        <div class="overflow-x-auto">
            <a href="{{route('user.index')}}" class="inline-block my-5 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300">
                Back
              </a>
         
        </div>
      </div>

      <section class="w-150">
        <form wire:submit="submit">
            <flux:input class="py-2" wire:model="name" type="text" label="Name" />
            <flux:input class="py-2" wire:model="email" type="email" label="Email" />
            <flux:input class="py-2" wire:model="password" type="password" label="Password" />
            <flux:button type="submit" class="mx-auto block" variant="primary">Submit</flux:button>
        </form>
      </section>
      
</div>

