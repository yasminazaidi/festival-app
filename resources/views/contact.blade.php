<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact the Festival Team') }}
        </h2>
    </x-slot>

    <div class="py-12">
     <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
 <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
  @if(session('success'))
<div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
       {{ session('success') }}
     </div>
  @endif

 <form action="{{ route('contact.submit') }}" method="POST">
    @csrf
       <div class="mb-4">
       <label for="name" class="block text-gray-700 font-bold mb-2">Name / Username:</label>
      <input type="text" name="name" id="name" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
       </div>

       <div class="mb-4">
      <label for="email" class="block text-gray-700 font-bold mb-2">Email Address:</label>
      <input type="email" name="email" id="email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>

      <div class="mb-6">
      <label for="message" class="block text-gray-700 font-bold mb-2">Your Message:</label>
       <textarea name="message" id="message" rows="5" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
     </div>

     <div class="flex items-center justify-between">
      <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
       Send Message
      </button>
     </div>
      </form>
       </div>
        </div>
    </div>
</x-app-layout>