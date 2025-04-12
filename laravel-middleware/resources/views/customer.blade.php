<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white p-5">
            <h2 class="text-2xl font-bold mb-6">Customer Dashboard</h2>
            <ul>
                <li class="mb-4"><a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Dashboard</a></li>
                <li class="mb-4"><a href="{{route('customer.info')}}" class="block px-4 py-2 rounded hover:bg-gray-700">Users</a></li>
                <li class="mb-4"><a href="{{route('customer.details')}}" class="block px-4 py-2 rounded hover:bg-gray-700">Details</a></li>
                <li class="mb-4"><a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Settings</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Top Navbar -->
            <header class="bg-white shadow p-4 flex justify-between items-center">
                <h2 class="text-xl font-semibold">Dashboard</h2>
                <button class="bg-blue-500 text-white px-4 py-2 rounded cursor-pointer"><a href="{{route('logout')}}">Logout</a></button>
            </header>

            <!-- Content Area -->
            <main class="p-6">
               @yield('content')
            </main>
        </div>

        
    </div>
</body>
</html>
