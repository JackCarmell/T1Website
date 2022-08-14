  {{-- <div class="flex flex-col items-center justify-center mt-32 navbar" x-cloak x-data="appData()" x-init="appInit()">
    <div class="flex flex-col">
        <!-- Page Scroll Progress -->
        <div class="fixed inset-x-0 top-0 z-50 h-0.5 mt-0.5
            bg-blue-500" :style="`width: ${percent}%`"></div>

        <!-- Navbar -->
        <nav class="md:flex md:items-center md:justify-between bg-black/80
            backdrop-blur-md shadow-md w-full
            fixed top-0 left-0 right-0 z-40">

            <!-- Logo Container -->
            <div class="inline items-center">
                <!-- Logo -->
                <a class="cursor-pointer" href="{{ URL('/') }}">
                    <h3 class="text-2xl font-medium text-white-200">
                        <img class="h-20 object-cover"
                            src="{{ URL('stockImages/logo.png')}}" alt="Store Logo">
                    </h3>
                </a>
            </div>

            <!-- Links Section -->
            <ul class="nav-list items-center md:flex md:static z-[-1] absolute bg-black/70 ">
              <li>
                <a class="nav-list-item flex text-white text-center hover:text-white-200
                    cursor-pointer transition-colors duration-300">
                    Home
                </a>
              </li>
              
                <a class="nav-list-item flex text-center text-white hover:text-white-200
                    cursor-pointer transition-colors duration-300
                    font-semibold text-white">
                    Collections
                </a>

                <a class="nav-list-item flex text-white hover:text-white-200
                    cursor-pointer transition-colors duration-300">
                    About us
                </a>
            </div>

            <!-- Icon Menu Section -->
            @auth
            
              <div>
                <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
              </div>
    
              <!--
                Dropdown menu, show/hide based on menu state.
    
                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
              <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-gray-100", Not Active: "" -->
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
              </div>
            </div>
          
            @else
                <!-- Login -->
                <a class="flex text-white 
                    cursor-pointer transition-colors duration-300
                    font-semibold text-white" href="{{ route('login') }}">

                    <svg class="fill-current h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z" />
                    </svg>

                    Login
                </a>
            @endauth
              </ul>
        </nav>
    </div>
  </div> --}}
  <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
  <header class="fixed flex w-full justify-between items-center px-4 md:px-12 bg-gray h-24 bg-green-700 z-100">
    <a href="#" class="items-center">
      <img src="{{ URL('stockImages/logo.png')}}" class="h-12" />
    </a>
    <nav>
      <button class="md:hidden" @click="navbarOpen = !navbarOpen">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
      <ul :class="{'translate-x-full' : !navbarOpen, 'translate-x-0' : navbarOpen}" class="
      fixed
      align-middle
      w-full
      right-0
      left-0
      min-h-screen
      bg-green-700  
      space-y-4
      p-4
      z-50
      mt-5
      transform
      transition
      duration-200
      translate-x-full
      md:relative
      md:flex
      md:min-h-0
      md:space-y-0
      md:space-x-6
      md:p-0
      md:translate-x-0
      md:m-0
      "
      >
        <li class="flex justify-center align-center">
          <a href="/" class="align-middle text-white">HOME</a>
        </li>
        <li class="flex justify-center align-center">
          <a href="{{ route('products') }}" class="align-middle text-white">SHOP</a>
        </li>
        <li class="flex justify-center align-center">
          <a href="{{ route('about') }}" class="align-middle text-white">ABOUT</a>
        </li>
        <li class="flex justify-center align-center">
          <a href="{{ route('contact') }}" class="align-middle text-white">CONTACT</a>
        </li>
        <li class="flex justify-center align-center">
          <a href="{{ route('basket') }}" class="align-middle text-white">BASKET</a>
        </li>
        <li class="flex justify-center align-center bg-green-400 rounded px-2 transition-colors duration-300
        font-semibold">
          <a href="{{ route('login') }}" class="text-white">Login</a>
        </li>
      </ul>
    </nav>
  </header>


  {{-- <nav class="p-5 bg-white shadow md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center ">
      <span class="text-2xl font-[Poppins] cursor-pointer">
        <img class="h-10 inline"
          src="https://tailwindcss.com/_next/static/media/social-square.b622e290e82093c36cca57092ffe494f.jpg">
        tailwind
      </span>

      <span class="text-3xl cursor-pointer mx-2 md:hidden block">
        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
      </span>
    </div>

    <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-cyan-500 duration-500">HOME</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-cyan-500 duration-500">SERVICE</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-cyan-500 duration-500">ABOUT</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-cyan-500 duration-500">CONTACT</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-cyan-500 duration-500">BLOG'S</a>
      </li>

      <button class="bg-cyan-400 text-white font-[Poppins] duration-500 px-6 py-2 mx-4 hover:bg-cyan-500 rounded ">
        Get started
      </button>
<h2 class=""></h2>
    </ul>
  </nav>


  <script>
    function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }
  </script> --}}