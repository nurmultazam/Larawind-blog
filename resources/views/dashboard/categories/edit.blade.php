@extends('dashboard.layouts.main')

@section('content')
    <!-- strat content -->
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        <h1 class="flex mb-3 text-2xl font-bold text-slate-700">Edit Category Name</h1>
        <hr>

        <div class="max-w-2xl mx-auto my-8">
            <div class="border rounded-lg shadow-lg p-8 bg-white">
                <div class="rounded-md shadow-sm">
                    <form action="/dashboard/categories/{{ $category->slug }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="mb-8">
                            <label for="name" class="text-slate-500">Name</label>
                            <input id="name" name="name" type="text" required autofocus
                                class="appearance-none relative block w-full px-3 py-2 border placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('name') border-red-500 @enderror"
                                placeholder="Name" value="{{ old('name', $category->name) }}">
                            @error('name')
                                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-8">
                            <label for="slug" class="text-slate-500">Slug</label>
                            <input id="slug" name="slug" type="text" required
                                class="appearance-none relative block w-full px-3 py-2 border placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('slug') border-red-500 @enderror"
                                placeholder="Slug" value="{{ old('slug', $category->slug) }}">
                            @error('slug')
                                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <button type="submit"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Update Category
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- end content -->

    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function() {
            fetch('/dashboard/categories/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>
@endsection
