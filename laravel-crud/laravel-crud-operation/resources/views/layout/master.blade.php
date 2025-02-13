<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Opetation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="min-h-screen flex flex-col">
    <!-- header  -->
    <header class="bg-gray-800 text-white p-4 text-center">
        <ul class="flex justify-center gap-6 items-center text-sm text-white font-bold">
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
        </ul>
    </header>

    <!-- Main Content-->
    <section class="flex-grow flex items-start justify-center bg-gray-100 p-6">
        @yield('content')
    </section>

    <!-- Footer-->
    <footer class="bg-gray-800 text-white p-4 text-center">
        Develop by Md Rajib Hossain ❤
    </footer>
</div>

</body>
</html>