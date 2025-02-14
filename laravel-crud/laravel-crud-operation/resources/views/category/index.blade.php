@extends('layout.master')
@section('content')

<section>
    <p class="w-[150px] text-center"><a href="{{url('category/create')}}" class="bg-teal-700 px-4 py-2 rounded-3xl my-10 block hover:bg-teal-500 ">Add Category</a></p>
    <h1 class="text-2xl font-semibold text-center"> Category Lists</h1>
    <div class="p-6 max-w-4xl mx-auto">
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300 bg-white shadow-md rounded-lg">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left">Id</th>
                        <th class="px-6 py-3 text-left">Name</th>
                        <th class="px-6 py-3 text-left">Description</th>
                        <th class="px-6 py-3 text-left">Status</th>
                        <th class="px-6 py-3 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        
                    
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-6 py-4">{{$category->id}}</td>
                        <td class="px-6 py-4">{{$category->name}}</td>
                        <td class="px-6 py-4">{{$category->description}}</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-sm font-semibold text-green-700 bg-green-200 rounded-full">
                                {{$category->status == 1? 'Active':'Inactive'}}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-center flex flex-col">
                            <a href="{{route('category.edit',$category->id)}}" class="bg-lime-600 rounded-md px-2 py-1 my-1">Edit</a>
                            <a href="{{route('category.show',$category->id)}}" class="bg-sky-600 rounded-md px-2 py-1 my-1">show</a>
                            <form action="{{route('category.destroy',$category->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="bg-red-600 rounded-md px-2 py-1 my-1">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</section>


@endsection