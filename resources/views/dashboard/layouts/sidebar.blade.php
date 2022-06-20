    <!-- start sidebar -->
    <div id="sideBar"
        class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">


        <!-- sidebar content -->
        <div class="flex flex-col">

            <!-- sidebar toggle -->
            <div class="text-right hidden md:block mb-4">
                <button id="sideBarHideBtn">
                    <i class="fad fa-times-circle"></i>
                </button>
            </div>
            <!-- end sidebar toggle -->

            <p class="uppercase text-base text-gray-600 mb-4 tracking-wider">homes</p>

            <!-- link -->
            <a href="/dashboard"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500 {{ Request::is('dashboard') ? 'text-teal-600' : '' }}">
                <i class="fa-solid fa-table-columns text-base mr-2"></i>
                Dashboard
            </a>
            <!-- end link -->

            <!-- link -->
            <a href="/dashboard/posts"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500 {{ Request::is('dashboard/posts*') ? 'text-teal-600' : '' }}">
                <i class="fa-solid fa-newspaper text-base mr-2"></i>
                My Posts
            </a>
            <!-- end link -->


            {{-- Administrator --}}
            @can('admin')
                <p class="uppercase text-base text-gray-600 mt-4 mb-4 tracking-wider">administrator</p>

                <!-- link -->
                <a href="/dashboard/categories"
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500 {{ Request::is('dashboard/categories*') ? 'text-teal-600' : '' }}">
                    <i class="fa-solid fa-border-all text-base mr-2"></i>
                    Post Categories
                </a>
                <!-- end link -->
            @endcan

        </div>
        <!-- end sidebar content -->

    </div>
    <!-- end sidbar -->
