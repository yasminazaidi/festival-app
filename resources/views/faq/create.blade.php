<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add a Question to the FAQ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
     <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
    <form action="{{ route('faq.store') }}" method="POST">
                    @csrf

      <div class="mb-4">
       <label for="category_id" class="block text-gray-700 font-bold mb-2">Choose a category:</label>
      <select name="category_id" id="category_id" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <option value="">-- Select a category --</option>
      @foreach($categories as $category)
         <option value="{{ $category->id }}">{{ $category->name }}</option>
           @endforeach
           </select>
         </div>

      <div class="mb-4">
      <label for="question" class="block text-gray-700 font-bold mb-2">Question:</label>
           <input type="text" name="question" id="question" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
       </div>

      <div class="mb-6">
        <label for="answer" class="block text-gray-700 font-bold mb-2">Answer:</label>
         <textarea name="answer" id="answer" rows="5" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
  </div>

<div class="flex items-center justify-between">
     <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
     Save FAQ Item
    </button>
  </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>