<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Frequently Asked Questions (FAQ)') }}
        </h2>
    </x-slot>

    <div class="py-12">
     <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            
      @if(auth()->check() && auth()->user()->is_admin)
     <div class="mb-6">
     <a href="{{ route('faq.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
       + Add FAQ Question
         </a>
        </div>
      @endif

      @forelse($categories as $category)
     <div class="mb-8">
     <h3 class="text-2xl font-extrabold text-indigo-600 mb-4 border-b pb-2">
     {{ $category->name }}
     </h3>

 <div class="space-y-4">
  @forelse($category->faqs as $faq)
 <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
  <h4 class="text-lg font-bold t  Q: {{ $faq->question }}
   </h4>
     <p class="text-gray-600 pl-4 border-l-2 border-gray-300">
      {{ $faq->answer }}
  </p>
    </div>
     @empty
         <p class="text-gray-500 italic pl-4">No questions in this category at the moment.</p>
          @endforelse
        </div>
     </div>
      @empty
     <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-center text-gray-500">
         No FAQ categories available.
           </div>
      @endforelse

        </div>
    </div>
</x-app-layout>