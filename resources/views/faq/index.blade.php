<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Frequently Asked Questions (FAQ)') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-cover bg-center bg-no-repeat" style="background-image: url('https://img.freepik.com/premium-photo/3d-faq-speech-bubble-icons-render-purple-background-question-answer-communication-social-dialogue-banner-with-color-rectangular-chat-message-boxes-ask-doubt-signs-empty-space_645257-2768.jpg?w=2000');">
        <div class="bg-white bg-opacity-90 p-6 rounded-lg max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h1 class="text-4xl font-extrabold text-gray-800 mb-2">Got Questions? We've Got Answers!</h1>
                <p class="text-lg text-gray-600">Explore our frequently asked questions to find the information you need about Festival 2026.</p>
            </div>
     <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            
      @if(auth()->user() && auth()->user()->email === 'admin@ehb.be')
     <div class="mb-6">
     <a href="{{ route('faq.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
       + Add FAQ Question
         </a>
        </div>
      @endif

     <div class="space-y-4">
    @forelse($faqs as $faq)
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
            <h4 class="text-lg font-bold text-gray-800">Q: {{ $faq->question }}</h4>
            <p class="text-gray-600 pl-4 border-l-2 border-gray-300 mt-2">
                {{ $faq->answer }}
            </p>
        </div>
    @empty
        <p class="text-gray-500 italic text-center">No questions available at the moment.</p>
    @endforelse
</div>
        </div>
</x-app-layout>