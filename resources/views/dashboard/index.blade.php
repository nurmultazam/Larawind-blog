@extends('dashboard.layouts.main')

@section('content')
    <!-- strat content -->
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        {{-- @if (session()->has('success'))
        {{ session('success', toast(session('success'), 'success')) }}
    @endif --}}

        <h1 class="flex mb-5 text-2xl font-bold text-slate-700">Welcome back, {{ auth()->user()->name }}</h1>


        <!-- General Report -->
        <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

            <!-- card -->
            <div class="report-card">
                <div class="card">
                    <div class="card-body flex flex-col">

                        <!-- top -->
                        <div class="flex flex-row justify-between items-center">
                            <div class="h6 text-red-700 fad fa-store"></div>
                            <span class="rounded-full text-white badge bg-red-400 text-xs">
                                6%
                                <i class="fal fa-chevron-down ml-1"></i>
                            </span>
                        </div>
                        <!-- end top -->

                        <!-- bottom -->
                        <div class="mt-8">
                            <h1 class="h5">{{ auth()->user()->posts->count() }}</h1>
                            <p>Posts</p>
                        </div>
                        <!-- end bottom -->

                    </div>
                </div>
                <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
            </div>
            <!-- end card -->


            <!-- card -->
            <div class="report-card">
                <div class="card">
                    <div class="card-body flex flex-col">

                        <!-- top -->
                        <div class="flex flex-row justify-between items-center">
                            <div class="h6 text-yellow-600 fad fa-sitemap"></div>
                            <span class="rounded-full text-white badge bg-teal-400 text-xs">
                                72%
                                <i class="fal fa-chevron-up ml-1"></i>
                            </span>
                        </div>
                        <!-- end top -->

                        <!-- bottom -->
                        <div class="mt-8">
                            <h1 class="h5">{{ $categories->count() }}</h1>
                            <p>Categories</p>
                        </div>
                        <!-- end bottom -->

                    </div>
                </div>
                <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
            </div>
            <!-- end card -->


            <!-- card -->
            <div class="report-card">
                <div class="card">
                    <div class="card-body flex flex-col">

                        <!-- top -->
                        <div class="flex flex-row justify-between items-center">
                            <div class="h6 text-green-700 fad fa-users"></div>
                            <span class="rounded-full text-white badge bg-teal-400 text-xs">
                                150%
                                <i class="fal fa-chevron-up ml-1"></i>
                            </span>
                        </div>
                        <!-- end top -->

                        <!-- bottom -->
                        <div class="mt-8">
                            <h1 class="h5">{{ $users->count() }}</h1>
                            <p>Users</p>
                        </div>
                        <!-- end bottom -->

                    </div>
                </div>
                <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
            </div>
            <!-- end card -->


        </div>
        <!-- End General Report -->


    </div>
    <!-- end content -->
@endsection
