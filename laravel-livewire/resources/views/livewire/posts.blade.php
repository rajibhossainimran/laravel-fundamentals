<div>
    <flux:modal.trigger name="create-post">
    <flux:button>create post</flux:button>
</flux:modal.trigger>

<livewire:post-create/>
<livewire:post-edit/>

    {{-- modal code end  --}}


    {{-- delete modal start  --}}

<flux:modal name="delete-post" class="min-w-[22rem]">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Delete project?</flux:heading>

            <flux:text class="mt-2">
                <p>You're about to delete this project.</p>
                <p>This action cannot be reversed.</p>
            </flux:text>
        </div>

        <div class="flex gap-2">
            <flux:spacer />

            <flux:modal.close>
                <flux:button variant="ghost">Cancel</flux:button>
            </flux:modal.close>

            <flux:button type="submit" variant="danger" wire:click="destroy()">Delete</flux:button>
        </div>
    </div>
</flux:modal>
    {{-- delete modal end  --}}

    <div class="overflow-x-auto mt-5">
        <table class="min-w-full divide-y divide-gray-200 border rounded-lg">
          <thead class="bg-gray-100">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Body</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Action</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($posts as $post)
                
            
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$post->id}}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$post->title}}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$post->body}}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">

                <flux:button wire:click="edit({{$post->id}})" size="sm">Edit</flux:button>

                <flux:button wire:click="delete({{$post->id}})" variant="danger" size="sm">Del</flux:button>
              </td>
            </tr>
            @endforeach
            <!-- Repeat for more rows -->
          </tbody>
        </table>
      </div>
      
   
</div>
