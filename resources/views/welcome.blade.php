<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Festival App</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gray-100">
        
 <nav class="bg-white shadow-sm p-4 flex justify-between items-center max-w-7xl mx-auto rounded-b-lg">
   <div class="text-xl font-bold text-indigo-600">🎉 Festival 2026</div>
    <div class="space-x-4">
      <a href="{{ route('news.index') }}" class="text-gray-700 hover:text-indigo-600 font-medium">News</a>
   <a href="{{ route('faq.index') }}" class="text-gray-700 hover:text-indigo-600 font-medium">FAQ</a>
       <a href="{{ route('contact.show') }}" class="text-gray-700 hover:text-indigo-600 font-medium">Contact</a>
                
      @if (Route::has('login'))
        @auth
       <a href="{{ url('/dashboard') }}" class="inline-block bg-indigo-600 text-white px-4 py-2 rounded shadow hover:bg-indigo-700">Dashboard</a>
      @else
      <a href="{{ route('login') }}" class="text-gray-700 hover:text-indigo-600 font-medium">Log in</a>
          @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 inline-block bg-indigo-600 text-white px-4 py-2 rounded shadow hover:bg-indigo-700">Register</a>
       @endif
    @endauth
   @endif
            </div>
        </nav>

 <header class="max-w-7xl mx-auto mt-6 px-4">
 <div class="relative rounded-2xl overflow-hidden shadow-lg h-[450px]">
<img src="https://tse3.mm.bing.net/th/id/OIP.mRSSoL0l_J27QDdCs7t6gQHaE8?r=0&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Festival Banner" class="w-full h-full object-cover">
        
  <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-center p-6">
     <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-4">Welcome to the Festival 2026!</h1>
     <p class="text-lg text-gray-200 max-w-xl mb-6">See you on July 22nd for an unforgettable open-air experience ☀️✨.</p>
       <div class="space-x-4">
          <a href="{{ route('news.index') }}" class="bg-indigo-600 text-white font-bold px-6 py-3 rounded-lg shadow hover:bg-indigo-700 transition">View the News</a>
              <a href="{{ route('faq.index') }}" class="bg-white text-indigo-600 font-bold px-6 py-3 rounded-lg shadow hover:bg-gray-100 transition">Frequently Asked Questions (FAQ)</a>
      </div>
      </div>
     </div>
        </header>

        <footer class="text-center py-8 text-gray-500 text-sm">
            &copy; 2026 Festival App - Backend Web Final Project.
        </footer>
    </body>
</html>