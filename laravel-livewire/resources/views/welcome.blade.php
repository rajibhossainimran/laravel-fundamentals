<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Styles -->
       
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main >
                
  
      <!-- Hero Section -->
      <section class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-20">
        <div class="max-w-5xl mx-auto text-center px-4">
          <h2 class="text-4xl md:text-5xl font-bold mb-4">Advanced Defense Solutions</h2>
          <p class="text-lg mb-8">Leading the way in next-generation turret and security technologies.</p>
          <a href="#contact" class="px-6 py-3 bg-white text-indigo-600 font-semibold rounded shadow hover:bg-gray-100 transition">Get in Touch</a>
        </div>
      </section>
  
      <!-- Features Section -->
      <section class="py-16">
        <div class="max-w-6xl mx-auto px-4 text-center">
          <h3 class="text-3xl font-semibold mb-12">Our Key Capabilities</h3>
          <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg p-6 shadow hover:shadow-lg transition">
              <h4 class="text-xl font-semibold mb-2">Modular Turret Systems</h4>
              <p class="text-gray-600">Customizable, advanced turret systems for land and naval defense.</p>
            </div>
            <div class="bg-white rounded-lg p-6 shadow hover:shadow-lg transition">
              <h4 class="text-xl font-semibold mb-2">Surveillance & Control</h4>
              <p class="text-gray-600">Integrated systems for maximum situational awareness and response.</p>
            </div>
            <div class="bg-white rounded-lg p-6 shadow hover:shadow-lg transition">
              <h4 class="text-xl font-semibold mb-2">Global Partnerships</h4>
              <p class="text-gray-600">Collaborating with defense leaders to deliver cutting-edge solutions worldwide.</p>
            </div>
          </div>
        </div>
      </section>
  
      <!-- CTA Section -->
      <section class="bg-indigo-700 py-20 text-white text-center">
        <div class="max-w-4xl mx-auto px-4">
          <h3 class="text-3xl font-bold mb-4">Partner With Us for the Future of Defense</h3>
          <p class="mb-6">Connect with our experts to discover how Turret Global can enhance your mission capabilities.</p>
          <a href="#contact" class="bg-white text-indigo-700 px-6 py-3 rounded font-semibold hover:bg-gray-200 transition">Contact Us</a>
        </div>
      </section>
  
      <!-- Footer -->
      <footer class="bg-gray-800 text-gray-300 py-6 text-center">
        <p>&copy; 2025@Rajib Hossain. All rights reserved.</p>
      </footer>
            </main>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif


        <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>

    </body>
</html>
