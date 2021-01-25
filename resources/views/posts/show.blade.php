@extends('main')

@section('content')
<div class="relative focus-within:ring-2 focus-within:ring-indigo-500">
    <h2 class="text-xl font-semibold text-gray-800">
        {{ $post->title }}
    </h2>
    <p class="mt-1 text-sm text-gray-600 line-clamp-2">
        {{ $post->body }}
    </p>
</div>
<div class="mt-8 flex justify-start">
    <a href="{{ route('posts.edit', $post) }}"
        class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-light-blue-500">
        Edit
    </a>
    <form action="{{ route('posts.destroy', $post) }}" method="POST">
        @csrf
        @method('delete')
        <a href="{{ route('posts.destroy', $post) }}" onclick="event.preventDefault();this.closest('form').submit();"
            class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-light-blue-500 hover:bg-light-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-light-blue-500">
            Delete
        </a>
    </form>
</div>
@endsection

@section('title', $post->title)