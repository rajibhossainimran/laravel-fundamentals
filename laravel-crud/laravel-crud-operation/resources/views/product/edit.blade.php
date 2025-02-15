@extends('layout.master')
@section('content')

<div class="bg-gray-100 min-h-screen flex items-center justify-center">
    <form action="{{route('product.update',$product->id)}}" method="POST" class="bg-white p-8 rounded-lg shadow-md  w-[700px]">
        @csrf
        @method('PUT')
        <p class="w-[150px] text-center"><a href="{{url('product')}}" class="bg-red-700 px-4 py-2 rounded-3xl my-10 block hover:bg-red-500 ">Back</a></p>
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Edit Product</h2>
        
        <!-- Name Field -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-medium mb-2" for="name">
                Name
            </label>
            <input 
                type="text" 
                id="name"
                name="name"
                value="{{$product->name}}"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Enter your name"
                required
            >
        </div>

        <!-- Description Field -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-medium mb-2" for="description">
                Description
            </label>
            <textarea 
                id="description"
                rows="3"
                name="description"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Enter description"
                required
            >{{$product->description}}</textarea>
        </div>

        <!-- Status Field -->
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-medium mb-2" for="status">
                Status
            </label>
            <select 
                id="status"
                name="status"
                value="{{$product->status}}"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
                <option value="1">Active</option>
                <option value="0">Inactive</option>
                
            </select>
        </div>

        <!-- Submit Button -->
        <button 
            type="submit"
            class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
        >
            Update
        </button>
    </form>
</div>




@endsection