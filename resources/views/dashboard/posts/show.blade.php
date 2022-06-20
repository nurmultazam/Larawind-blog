@extends('dashboard.layouts.main')

@section('content')
    <!-- start content -->
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        <div class="flex justify-center">
            <div class="border bg-white p-8 w-8/12 rounded-lg shadow-lg" style="text-transform: none;">
                <div class="w-full mb-10">
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">{{ $post->title }}</h1>

                    <div class="flex space-x-1 mb-3">
                        <p class="btn-bs-success text-sm px-2 py-1"><a href="/dashboard/posts" style="text-transform: none;">
                                <i class="fa-solid fa-arrow-left"></i> Back to all my post</a></p>
                        <p class="btn-bs-info text-sm px-2 py-1"><a href="/dashboard/posts/{{ $post->slug }}/edit"
                                style="text-transform: none;">
                                <i class="fa-solid fa-pen-to-square"></i> Edit</a></p>
                        <form action="/dashboard/posts/{{ $post->slug }}" method="POST"
                            onclick="return confirm('Are you sure?')">
                            @method('delete')
                            @csrf
                            <button class="btn-bs-danger text-sm px-2 py-1">
                                <i class=" fa-solid fa-circle-xmark"></i> Delete
                            </button>
                        </form>
                    </div>

                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" style="max-height: 15rem"
                            class="rounded-lg mb-6 text-center w-full object-cover" alt="{{ $post->category->name }}">
                    @else
                        <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"
                            class="rounded-lg mb-6 text-center" alt="{{ $post->category->name }}">
                    @endif

                    <div class="text-gray-700">{!! $post->body !!}</div>

                </div>
            </div>
        </div>
    </div>
    <!-- end content -->
@endsection
