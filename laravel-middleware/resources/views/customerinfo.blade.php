@extends('customer')

@section('content')

<section>
    <section class="flex items-center justify-center  bg-gray-100">
        <div class="w-full max-w-lg bg-white px-8 py-4 rounded-lg shadow-md">
            <h2 class="text-4xl font-bold text-center text-amber-800 ">User Information</h2>

            <p class="text-xl font-semibold py-1 text-yellow-900">{{ Auth::user()->name }}</p>
            <p class="text-sm font-semibold mb-3 text-yellow-900">{{ Auth::user()->email }}</p>
            
    
            <form action="{{route('storeInfo')}}" method="POST" class="space-y-5">
                @csrf
    
                <!-- Age -->
                <div>
                    <label for="age" class="block text-gray-700 font-medium">Age</label>
                    <input type="number" id="age" name="age" placeholder="Enter your age"
                        class="w-full mt-1 p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-amber-600" required>
                </div>
    
                <!-- Gender -->
                <div>
                    <label for="gender" class="block text-gray-700 font-medium">Gender</label>
                    <select id="gender" name="gender"
                        class="w-full mt-1 p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-amber-600" required>
                        <option value="" disabled selected>Select your gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
    
                <!-- Phone -->
                <div>
                    <label for="phone" class="block text-gray-700 font-medium">Phone</label>
                    <input type="text" id="phone" name="phone" placeholder="Enter your phone number"
                        class="w-full mt-1 p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-amber-600" required>
                </div>
    
                <!-- Address -->
                <div>
                    <label for="address" class="block text-gray-700 font-medium">Address</label>
                    <textarea id="address" name="address" rows="3" placeholder="Enter your address"
                        class="w-full mt-1 p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-amber-600" required></textarea>
                </div>
    
                <!-- Submit -->
                <div>
                    <button type="submit"
                        class="w-full bg-amber-600 text-white py-3 rounded-md hover:bg-amber-700 transition">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </section>
    
</section>
    
@endsection