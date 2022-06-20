@extends('dashboard.layouts.main')

@section('content')
    <!-- strat content -->
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        <h1 class="flex mb-3 text-2xl font-bold text-slate-700">Posts Categories</h1>
        <hr>

        <a href="/dashboard/categories/create" class="btn my-4 px-4 py-2 max-w-xs">Create new category</a>
        <!-- Start Table Sales -->
        <div class="card max-w-4xl col-span-2 xl:col-span-1">

            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-r text-center">No</th>
                        <th class="px-4 py-2 border-r">Category Name</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($categories as $category)
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center">{{ $loop->iteration }}</td>
                            <td class="border border-l-0 px-4 py-2">{{ $category->name }}</td>
                            <td class="border border-l-0 border-r-0 px-4 py-2">
                                <div class="flex space-x-1 justify-center">
                                    <a href="/dashboard/categories/{{ $category->slug }}/edit"
                                        class="btn-bs-info text-sm px-2 py-1">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <form action="/dashboard/categories/{{ $category->slug }}" method="POST"
                                        onclick="return confirm('Are you sure?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn-bs-danger text-sm px-2 py-1 focus:outline-none">
                                            <i class="fa-solid fa-circle-xmark"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- End Table Sales -->

    </div>
    <!-- end content -->
@endsection
