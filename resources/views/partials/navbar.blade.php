{{-- Header Start --}}
<header class="top-0 left-0 z-10 flex w-full items-center bg-sky-500">
  <div class="container mx-auto">
    <div class="relative flex items-center justify-between">
      <div class="px-4">
        <a href="#" class="block py-6 text-lg font-bold text-white">WPU Blog</a>
      </div>
      <div class="flex items-center px-4">
        <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
          <i class="fa-solid fa-bars text-white text-2xl"></i>
        </button>

        <nav id="nav-menu" class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-slate-100 py-5 shadow-lg lg:static lg:block lg:max-w-full lg-rounded-none lg:bg-transparent lg:shadow-none">
          <ul class="block lg:flex">
            <li class="group">
              <a href="/" class="mx-8 flex py-2 text-base text-sky-500 lg:text-white group-hover:text-sky-900 transition duration-500 {{ Request::is('/') ? 'lg:text-sky-900 font-bold' : '' }}">Home</a>
            </li>
            <li class="group">
              <a href="/about" class="mx-8 flex py-2 text-base text-sky-500 lg:text-white group-hover:text-sky-900 transition duration-500 {{ Request::is('about') ? 'lg:text-sky-900 font-bold' : '' }}">About</a>
            </li>
            <li class="group">
              <a href="/posts" class="mx-8 flex py-2 text-base text-sky-500 lg:text-white group-hover:text-sky-900 transition duration-500 {{ Request::is('posts') ? 'lg:text-sky-900 font-bold' : '' }}">Blog</a>
            </li>
            <li class="group">
              <a href="/categories" class="mx-8 flex py-2 text-base text-sky-500 lg:text-white group-hover:text-sky-900 transition duration-500  {{ Request::is('categories') ? 'lg:text-sky-900 font-bold' : '' }}">Categories</a>
            </li>

            @auth
              <div class="max-w-lg mx-auto">
                  
                <button class="text-sky-500 bg-white transition duration-500 hover:text-white hover:bg-sky-900 focus:ring-4 focus:ring-blue-300 font-bold rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button" data-dropdown-toggle="dropdown">Welcome, {{ auth()->user()->name }} <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>

                <!-- Dropdown menu -->
                <div class="hidden bg-white text-base z-[999] list-none divide-y divide-gray-100 rounded shadow my-4 px-2" id="dropdown">
                    <div class="px-4 py-3">
                      <span class="block text-sm mb-2 text-gray-800"><i class="fa-solid fa-user mr-2"></i> {{ auth()->user()->name }}</span>
                      <span class="block text-sm font-medium text-gray-500 truncate">{{ auth()->user()->email }}</span>
                    </div>
                    <ul class="py-1" aria-labelledby="dropdown">
                      <li>
                          <a href="/dashboard" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2"><i class="fa-solid fa-table-columns mr-2"></i> My Dashboard</a>
                      </li>
                      <li>
                        <form action="/logout" method="POST">
                          @csrf
                          <button type="submit" class="text-sm hover:bg-gray-100 text-gray-700 block pl-4 pr-16 py-2"><i class="fa-solid fa-right-from-bracket mr-2"></i>  Logout</button>
                        </form>
                      </li>
                    </ul>
                </div>
              </div>
              <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
            @else
              <li class="group">
                <a href="/login" class="mx-8 flex py-2 lg:px-4 lg:bg-white rounded-full text-base text-sky-500 lg:text-sky-500 group-hover:text-sky-900 transition duration-500">Login</a>
              </li>
            @endauth

          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
{{-- Header End --}}