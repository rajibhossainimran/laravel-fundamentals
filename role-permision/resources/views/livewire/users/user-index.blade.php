<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Users') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manage your all users') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    @if (session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    {{-- user table  --}}
    <div class="container mx-auto p-4">
        <div class="overflow-x-auto">
          @can('user.create')
          <a href="{{route('user.create')}}" class="inline-block my-5 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300">
            Create User
          </a>
          @endcan
            
          <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-100">
              <tr>
                <th class="py-2 px-4 border-b text-left">ID</th>
                <th class="py-2 px-4 border-b text-left">Name</th>
                <th class="py-2 px-4 border-b text-left">Email</th>
                <th class="py-2 px-4 border-b text-left">Roles</th>
                <th class="py-2 px-4 border-b text-left">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
              <tr class="hover:bg-gray-50">
                <td class="py-2 px-4 border-b">{{$user->id}}</td>
                <td class="py-2 px-4 border-b">{{$user->name}}</td>
                <td class="py-2 px-4 border-b">{{$user->email}}</td>
                <td>
                  @if ($user->roles)
                  @foreach ($user->roles as $role)
                    <flux:badge>{{$role->name}}</flux:badge>
                  @endforeach
              
              @endif
              </td>
                <td class="py-2 px-4 border-b">

                  @can('user.edit')
                  <a href="{{route('user.edit',$user->id)}}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 mr-2">Edit</a>
                  @endcan
                 
                  
                  @can('user.delete')
                  <button wire:click="delete('{{$user->id}}')" wire:confirm="Are you sure you want to delete ?" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                  @endcan
                 
                </td>
              </tr>
              @endforeach

              <!-- More rows as needed -->
            </tbody>
          </table>
        </div>
      </div>
      
</div>
