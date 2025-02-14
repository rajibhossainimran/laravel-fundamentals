@extends('layout.master')
@section('content')

<section>
    <p class="w-[150px] text-center"><a href="{{url('category')}}" class="bg-red-700 px-4 py-2 rounded-3xl my-10 block hover:bg-teal-500 ">Back</a></p>
    
    <div class="p-6 max-w-4xl mx-auto">
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300 bg-white shadow-md rounded-lg">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left">Id</th>
                        <th class="px-6 py-3 text-left">Name</th>
                        <th class="px-6 py-3 text-left">Description</th>
                        <th class="px-6 py-3 text-left">Status</th>
                        
                    </tr>
                </thead>
                <tbody>
                 
                        
                    
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-6 py-4">{{$category->id}}</td>
                        <td class="px-6 py-4">{{$category->name}}</td>
                        <td class="px-6 py-4">{{$category->description}}</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-sm font-semibold text-green-700 bg-green-200 rounded-full">
                                {{$category->status == 1? 'Active':'Inactive'}}
                            </span>
                        </td>
                        
                    </tr>
                
                </tbody>
            </table>
        </div>
    </div>
    
</section>


@endsection