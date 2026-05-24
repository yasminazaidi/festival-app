<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Latest Festival News') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Admin Button --}}
            @if(auth()->user() && auth()->user()->email === 'admin@ehb.be')
                <div class="mb-6">
                    <a href="{{ route('news.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        + Add News
                    </a>
                </div>
            @endif

            // News Grid 
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @forelse($news as $item)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <h3 class="text-2xl font-bold mb-2">{{ $item->title }}</h3>
                        <p class="text-gray-500 text-sm mb-4">Published on: {{ $item->published_at }}</p>
                        <p class="text-gray-700 mb-4">{{ Str::limit($item->content, 150) }}</p>
                        <a href="{{ route('news.show', $item->id) }}" class="text-blue-500 hover:underline">Read more &rarr;</a>
                    </div>
                @empty
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 col-span-2 text-center">
                        <p class="text-gray-500">No news available at the moment. Stay tuned!</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>