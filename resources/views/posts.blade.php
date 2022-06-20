@extends('layouts.main')

@section('content')
    <h1 class="text-4xl text-center font-bold text-slate-800 mb-10">{{ $title }}</h1>

    <div class="mx-auto w-8/12 mb-10">
        <div class="w-full px-4">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="w-full flex">
                    <input type="text" name="search" placeholder="Search"
                        class="w-full rounded-l-lg p-3 text-dark bg-slate-200  focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500"
                        value="{{ request('search') }}">
                    <button
                        class="rounded-r-lg p-3 text-white bg-blue-500  focus:border-sky-900 focus:outline-none focus:ring-1 focus:ring-sky-900 hover:bg-sky-900 transition ease-in-out"
                        type="submit">Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="border rounded-lg shadow-lg mb-10 text-center overflow-hidden">
            @if ($posts[0]->image)
                {{-- <div class="max-h-96 overflow-hidden"> --}}
                <img src="{{ asset('storage/' . $posts[0]->image) }}" class="object-cover w-full max-h-96"
                    alt="{{ $posts[0]->category->name }}">
                {{-- </div> --}}
            @else
                <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="w-full"
                    alt="{{ $posts[0]->category->name }}">
            @endif

            <div class="p-10">
                <h2 class="mb-2"><a href="/posts/{{ $posts[0]->slug }}"
                        class="text-3xl font-bold text-sky-500">{{ $posts[0]->title }}</a></h2>
                <p class="mb-3 ">
                    <small class="text-slate-500">
                        By. <a href="/posts?author={{ $posts[0]->author->username }}"
                            class="text-sky-500">{{ $posts[0]->author->name }}</a> in <a
                            href="/posts?category={{ $posts[0]->category->slug }}"
                            class="text-sky-500">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="text-lg mb-6">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}"
                    class="text-base font-semibold text-white py-2 px-4 bg-blue-500 rounded-xl shadow-lg hover:bg-blue-700 transition delay-100 ease-in-out">Read
                    more</a>
            </div>
        </div>

        <div class="flex w-full px-4 flex-wrap justify-center">
            @foreach ($posts->skip(1) as $post)
                <div class="w-4/12 p-4">
                    <div class="border rounded-lg shadow-lg relative overflow-hidden">
                        <div class="absolute bg-slate-700 px-4 py-2 rounded-tl-lg opacity-75"><a
                                href="/posts?category={{ $post->category->slug }}"
                                class="text-white">{{ $post->category->name }}</a></div>

                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}"
                                class="text-center max-h-96 object-cover w-full" alt="{{ $post->category->name }}">
                        @else
                            <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}"
                                class="text-center" alt="{{ $post->category->name }}">
                        @endif

                        <div class="p-8 group">
                            <h2
                                class="mb-2 truncate transition ease-in group-hover:overflow-visible group-hover:whitespace-normal">
                                <a href="/posts/{{ $post->slug }}"
                                    class="text-3xl font-bold text-sky-500">{{ $post->title }}</a>
                            </h2>
                            <p class="mb-3 ">
                                <small class="text-slate-500">
                                    By. <a href="/posts?author={{ $post->author->username }}"
                                        class="text-sky-500">{{ $post->author->name }}</a>
                                    {{ $post->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="text-lg mb-6">{{ Str::limit($post->excerpt, 100) }}</p>
                            <a href="/posts/{{ $post->slug }}"
                                class="text-base font-semibold text-white py-2 px-4 bg-blue-500 rounded-xl shadow-lg hover:bg-blue-700 transition ease-in-out">Read
                                more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center font-bold text-red-500 text-4xl">No post found!</p>
    @endif

    <div class="flex justify-center p-4 ">
        {{ $posts->links() }}
    </div>

@endsection
