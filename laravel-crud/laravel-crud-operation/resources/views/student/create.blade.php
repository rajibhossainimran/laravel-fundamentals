@extends('layout.master')
@section('content')

<form action="{{route('student.store')}}" method="POST" class=" p-8 rounded-lg shadow-md  w-[700px]">
    @csrf
    
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Information Form</h2>
    
  
        <label for="name">Name</label>
        <input type="text" name="name"><br><br>

        <label for="email">Email</label>
        <input type="email" name="email"><br><br>

        <label for="contact">Contact</label>
        <input type="text" name="contact"><br><br>

        <button type="submit">Submit</button>

  
</form>


@endsection