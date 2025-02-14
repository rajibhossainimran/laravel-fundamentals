@extends('layout.master')
@section('content')

<section>
    
    <div class="p-6 w-[700px] mx-auto">
        <div class="max-w-lg mx-auto bg-white p-6 shadow-lg rounded-lg mt-10">
            <p class="w-[150px] text-center"><a href="{{url('category')}}" class="bg-red-700 px-4 py-2 rounded-3xl my-10 block hover:bg-red-500 ">Back</a></p>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Edit Category</h2>
            
            <form action="{{route('category.update',$category->id)}}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" value="{{$category->name}}" name="name"
                        class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300 outline-none"
                        placeholder="Enter category name" >
                        @error('name')<span class="text-red-800">{{$message}}</span>
                            
                        @enderror
                </div>
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="description" name="description" rows="3"
                        class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300 outline-none"
                        placeholder="Enter category description">{{$category->description}}</textarea>
                    @error('description')<span class="text-red-800">{{$message}}</span>
                    @enderror
                </div>
                
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select id="status"  value="{{$category->status}}" name="status"
                        class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300 outline-none">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    @error('status')<span class="text-red-800">{{$message}}</span>
                            
                        @enderror
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Update
                    </button>
                </div>
            </form>
        </div>
        
    </div>
    
</section>


@endsection