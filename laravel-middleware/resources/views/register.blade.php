@extends('welcome')

@section('welcomepage')
<section class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl text-center font-bold text-amber-950 mb-6">Register</h1>
        <form action="{{route('register')}}" method="post" class="space-y-4">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
           @endif

            <div class="">
                <label for="name"
                    class=" text-gray-500 text-xl transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:text-base peer-focus:top-3 peer-focus:text-sm peer-focus:text-amber-600">
                    Full Name
                </label>
                <input type="text" name="name" id="name" placeholder=" "
                    class="peer w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-amber-600">
                
            </div>
            
            <div class="">
                <label for="email"
                    class=" text-gray-500 text-xl transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:text-base peer-focus:top-3 peer-focus:text-sm peer-focus:text-amber-600">
                    Email
                </label>
                <input type="email" name="email" id="email" placeholder=" "
                    class="peer w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-amber-600">
                
            </div>
            
            <div class="">
                <label for="password"
                class=" text-gray-500 text-xl transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:text-base peer-focus:top-3 peer-focus:text-sm peer-focus:text-amber-600">
                Password
            </label>
                <input type="password" name="password" id="password" placeholder=" "
                    class="peer w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-amber-600">
               <input type="hidden" name="role" value="customer">
            </div>
            
            <button type="submit"
                class="w-full bg-amber-600 text-white py-3 rounded-md hover:bg-amber-700 transition cursor-pointer">Register</button>
                <p class="text-center">have an account . <a class="text-sky-500" href="login">LOGIN</a></p>
        </form>
    </div>
</section>
@endsection


