<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Product Create') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form for new Create Product') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    {{-- user table  --}}
    <div class="container mx-auto p-4">
        <div class="overflow-x-auto">
            <a href="{{route('product.index')}}" class="inline-block my-5 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300">
                Back
              </a>
         
        </div>
      </div>

      <section class="w-150">
        <form wire:submit="submit">
            <flux:input class="py-2" wire:model="name" type="text" label="Product Name" />
            <flux:textarea class="py-2" wire:model="detail" label="Details" />
            <flux:button type="submit" class="mx-auto block my-3" variant="primary">Submit</flux:button>
        </form>
      </section>
      
</div>

