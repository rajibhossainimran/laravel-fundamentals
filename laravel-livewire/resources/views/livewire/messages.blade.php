<div>
  <flux:modal.trigger name="edit-message">
    <flux:button>Create Message</flux:button>
</flux:modal.trigger>

  <livewire:message-create/>
  <livewire:message-edit/>



<flux:modal name="delete-message" class="min-w-[22rem]">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Delete Message?</flux:heading>

            <flux:text class="mt-2">
                
            </flux:text>
        </div>

        <div class="flex gap-2">
            <flux:spacer />

            <flux:modal.close>
                <flux:button variant="ghost">Close</flux:button>
            </flux:modal.close>

            <flux:button type="submit" wire:click="delete" variant="danger">Delete</flux:button>
        </div>
    </div>
</flux:modal>

  {{-- modal button  --}}



    <div class="p-4">
        <div class="overflow-x-auto">
          <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <thead>
              <tr class="bg-gray-100 text-gray-700 text-left">
                <th class="px-4 py-2 border-b">ID</th>
                <th class="px-4 py-2 border-b">Title</th>
                <th class="px-4 py-2 border-b">Body</th>
                <th class="px-4 py-2 border-b">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($messages as $message)
                  
              
              <tr class="hover:bg-gray-50">
                <td class="px-4 py-2 border-b">{{$message->id}}</td>
                <td class="px-4 py-2 border-b">{{$message->title}}</td>
                <td class="px-4 py-2 border-b">{{$message->body}}</td>
                <td class="px-4 py-2 border-b space-x-2">
                  <flux:button wire:click="edit({{$message->id}})" size="sm">Edit</flux:button>
                  <flux:button size="sm" wire:click="selectDel({{$message->id}})" variant="danger">Del</flux:button>
                </td>
              </tr>
              @endforeach
              <!-- Add more rows as needed -->
            </tbody>
          </table>
        </div>
      </div>
      
</div>