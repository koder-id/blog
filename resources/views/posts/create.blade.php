@extends('main')

@section('content')
<main class="max-w-lg mx-auto pt-10 pb-12 px-4 lg:pb-16">
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="space-y-6">
            <div>
                <h1 class="text-lg leading-6 font-medium text-gray-900">
                    Publish new post
                </h1>
            </div>

            @if ($errors->count() > 0)
            <div class="rounded-md bg-red-50 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <!-- Heroicon name: x-circle -->
                        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800">
                            Whoops! Something went wrong.
                        </h3>
                        <div class="mt-2 text-sm text-red-700">
                            {{ $errors->first() }}
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">
                    Post title
                </label>
                <div class="mt-1">
                    <input type="text" name="title" id="title"
                        class="block w-full shadow-sm focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm border-gray-300 rounded-md"
                        value="{{ old('title') }}">
                </div>
            </div>

            <div>
                <label for="body" class="block text-sm font-medium text-gray-700">
                    Post body
                </label>
                <div class="mt-1">
                    <textarea id="body" name="body" rows="8"
                        class="block w-full shadow-sm focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm border-gray-300 rounded-md">{{ old('body') }}</textarea>
                </div>
            </div>

            <div class="flex justify-end">
                <a href="{{ route('posts.index') }}"
                    class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-light-blue-500">
                    Cancel
                </a>
                <button type="submit"
                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-light-blue-500 hover:bg-light-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-light-blue-500">
                    Save
                </button>
            </div>
        </div>
    </form>
</main>
@endsection

@section('title', 'Publish new post')