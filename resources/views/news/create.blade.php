<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a New Article') }}
        </h2>
    </x-slot>

 <div class="py-12">
  <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
   <form action="{{ route('news.store') }}" method="POST">
   @csrf

      // title
     <div class="mb-4">
       <label for="title" class="block text-gray-700 font-bold mb-2">News title:</label>
      <input type="text" name="title" id="title" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
     </div>

     // content
      <div class="mb-6">
<label for="content" class="block text-gray-700 font-bold mb-2">Article content:</label>
  <textarea name="content" id="content" rows="6" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
</div>

 // Submit Button 
 <div class="flex items-center justify-between">
   <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
 Publish Article
   </button>
  </div>
 </form>
 </div>
        </div>
    </div>
</x-app-layout>