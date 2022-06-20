@extends('layouts.main')

@section('content')
    <h1 class="text-4xl font-bold text-slate-800 mb-10">Post Categories</h1>  

    <div class="flex w-full px-4 flex-wrap justify-center">
            @foreach ($categories as $category)
            <div class="w-4/12 p-4">
                <div class="bg-sky-900 px-4 py-2 text-center rounded-2xl shadow-2xl w-3/4 mx-auto -mb-5 z-50 relative">
                    <a href="/posts?category={{ $category->slug }}" class="text-xl font-bold text-white uppercase">{{ $category->name }}</a>
                </div>
                <a href="/posts?category={{ $category->slug }}" class="z-50">
                    <img src="https://source.unsplash.com/500x500/?{{ $category->name }}" class="rounded-lg shadow-lg" alt="{{ $category->name }}">
                </a>
            </div>
            @endforeach
        </div>

    {{-- @foreach ($categories as $category)
    <ul>
        <li>
            <h2 class="mb-3"><a href="/categories/{{ $category->slug }}" class="text-3xl font-bold text-sky-500">{{ $category->name }}</a></h2>
        </li>
    </ul>
    @endforeach --}}
@endsection