@extends('layout.master')
@section('content')
<section>
    <p class="w-[150px] text-center"><a href="{{url('product/create')}}" class="bg-teal-700 px-4 py-2 rounded-3xl my-10 block hover:bg-teal-500 ">Add Product</a></p>
    <h1 class="text-2xl font-semibold text-center"> Product Lists</h1>
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
                    @foreach ($products as $product)
                     <tr>
                        <td class="px-6 py-3 text-left">{{$product->id}}</td>   
                     <td class="px-6 py-3 text-left">{{$product->name}}</td>   
                     <td class="px-6 py-3 text-left">{{$product->description}}</td>   
                     <td class="px-6 py-3 text-left">{{$product->status==1?'Active':'Inactive'}}</td> 
                     <td>
                        <a href="{{product.edit}}" class="bg-lime-600 rounded-md px-2 py-1 my-1">edit</a>   
                        <a href="" class="bg-sky-600 rounded-md px-2 py-1 my-1">show</a>   
                    </td>    
                    </tr>  
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
    
</section>

@endsection