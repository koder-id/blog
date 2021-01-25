@extends('main')

@section('content')
<div>
    <div class="flow-root mt-6">
        <ul class="-my-5 divide-y divide-gray-200">
            @foreach ($posts as $post)
            <li class="py-5">
                <div class="relative focus-within:ring-2 focus-within:ring-indigo-500">
                    <h2 class="text-xl font-semibold text-gray-800">
                        <a href="{{ route('posts.show', $post) }}" class="hover:underline focus:outline-none">
                            <!-- Extend touch target to entire panel -->
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            {{ $post->title }}
                        </a>
                    </h2>
                    <p class="mt-1 text-sm text-gray-600 line-clamp-2">
                        {{ $post->body }}
                    </p>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection

@section('title', 'Belajar bikin blog dengan Laravel 8 di Koder')