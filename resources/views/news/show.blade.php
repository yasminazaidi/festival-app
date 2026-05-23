<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $news->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <p class="text-gray-500 text-sm mb-6">Published on {{ $news->published_at }}</p>
                <div class="text-gray-800 text-lg whitespace-pre-line">
                    {{ $news->content }}
                </div>
                <div class="mt-8">
                    <a href="{{ route('news.index') }}" class="text-blue-500 hover:underline">&larr; Back to news</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>