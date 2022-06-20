@extends('dashboard.layouts.main')

@section('content')
    <!-- strat content -->
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        <h1 class="flex mb-3 text-2xl font-bold text-slate-700">Create New Post</h1>
        <hr>

        <div class="max-w-3xl mx-auto my-8">
            <div class="border rounded-lg shadow-lg p-8 bg-white">
                <div class="rounded-md shadow-sm">
                    <form action="/dashboard/posts" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-8">
                            <label for="title" class="text-slate-500">Title</label>
                            <input id="title" name="title" type="text" required autofocus
                                class="appearance-none relative block w-full px-3 py-2 border placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('title') border-red-500 @enderror"
                                placeholder="Title" value="{{ old('title') }}">
                            @error('title')
                                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-8">
                            <label for="slug" class="text-slate-500">Slug</label>
                            <input id="slug" name="slug" type="text" required
                                class="appearance-none relative block w-full px-3 py-2 border placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('slug') border-red-500 @enderror"
                                placeholder="Slug" value="{{ old('slug') }}">
                            @error('slug')
                                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-8">
                            <label for="category" class="text-slate-500">Category</label>
                            <select name="category_id" id="category"
                                class="w-full relative block px-3 py-2 border rounded-md text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('category') border-red-500 @enderror">
                                @foreach ($categories as $category)
                                    @if (old('category_id') == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        {{-- Input File --}}
                        <div class="mb-8">
                            <label class="block font-medium text-slate-500" for="image">Post
                                Image</label>
                            <img class="img-preview w-1/2 my-2 rounded-md shadow-md" alt="">
                            <input
                                class="block w-full px-3 py-2 text-gray-900 border rounded-md cursor-pointer focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('image') border-red-500 @enderror"
                                id="image" type="file" name="image" onchange="previewImage()">
                            @error('image')
                                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        {{-- End Input file --}}

                        <div class="mb-8">
                            <label for="body" class="text-slate-500">Body</label>
                            @error('body')
                                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                    {{ $message }}
                                </span>
                            @enderror
                            <input type="hidden" id="body" name="body" required value="{{ old('body') }}">
                            <trix-editor input="body" style="text-transform: none;"
                                class="rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 @error('body') border-red-500 @enderror">
                            </trix-editor>
                        </div>
                        <button type="submit"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Create Post
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- end content -->

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
