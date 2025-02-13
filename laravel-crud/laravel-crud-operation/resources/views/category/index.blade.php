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
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">Rajib</td>
                        <td class="px-6 py-4">Lorem ipsum dolor sit amet.</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-sm font-semibold text-green-700 bg-green-200 rounded-full">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <button class="px-4 py-2 text-white bg-red-500 rounded-lg hover:bg-red-600">
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</section>


@endsection