@extends('layouts.main')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 mb-10">
            <h1 class="text-3xl font-bold text-slate-700 mb-2">{{ $post->title }}</h1>
            <p class="mb-3 text-sky-500">By. <a
                    href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                    href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>


            @if ($post->image)
                {{-- <div class="max-h-96 overflow-hidden"> --}}
                <img src="{{ asset('storage/' . $post->image) }}"
                    class="rounded-lg mb-6 max-h-96 text-center w-full object-cover" alt="{{ $post->category->name }}">
                {{-- </div> --}}
            @else
                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"
                    class="rounded-lg mb-6 text-center" alt="{{ $post->category->name }}">
            @endif

            <div class="text-slate-800 mb-6">{!! $post->body !!}</div>

            <a href="/posts" class="text-base">Back to posts</a>
        </div>
    </div>
@endsection
