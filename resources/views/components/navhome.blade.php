<header class="bg-animate glass bg-pan-right sticky inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-2 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="/" class="p-1.5 px-6 btn glass hover:bg-white">
          <span class="sr-only">Gaelan</span>
          <img class="h-8 w-auto" src="{{ asset('gaelanlogo.png') }}" alt="">
        </a>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <button class="btn glass btn-xs sm:btn-sm md:btn-md lg:btn-sm hover:bg-blue-100">
          <a href="#">
            Product
          </a>
        </button>
        <button class="btn glass btn-xs sm:btn-sm md:btn-md lg:btn-sm hover:bg-blue-100">
          <a href="#">
            Features
          </a>
        </button>
        <button class="btn glass btn-xs sm:btn-sm md:btn-md lg:btn-sm hover:bg-blue-100">
          <a href="#">
            Marketplace
          </a>
        </button>
        <button class="btn glass btn-xs sm:btn-sm md:btn-md lg:btn-sm hover:bg-blue-100">
          <a href="#">
            Company
          </a>
        </button>
      </div>
      @if (Route::has('login'))
      <nav class="-mx-2 flex flex-1 justify-end">
          @auth
          <div class="hidden lg:flex lg:gap-x-2">
              <div class="hidden lg:flex lg:flex-1">
                  <a href="{{ url('/dashboard') }}" class="btn glass btn-xs sm:btn-sm md:btn-md lg:btn-sm hover:bg-blue-100">
                      Dashboard
                      </a>
                </div>
          </div>
          @else
          <div class="hidden lg:flex lg:gap-x-2">
          <div class="hidden lg:flex lg:flex-1">
              <a href="{{ route('login') }}" class="btn glass btn-xs sm:btn-sm md:btn-md lg:btn-sm hover:bg-blue-100">
                  Sign In
                  </a>
            </div>
            <div class="rounded-md py-2 text-sm font-medium">
              /
            </div>
              @if (Route::has('register'))
              <div class="hidden lg:flex lg:flex-1">
                  <a href="{{ route('register') }}" class="btn glass btn-xs sm:btn-sm md:btn-md lg:btn-sm hover:bg-blue-100">
                      Register 
                  </a>
                </div>
              </div>
              @endif
          @endauth
          @endif
      </nav>
    </nav>

    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-50 mt-4">
        <div class="drawer justify-end px-6 py-2">
          <input id="my-drawer" type="checkbox" class="drawer-toggle" />
          <div class="drawer-content">
            <!-- Page content here -->
            <label for="my-drawer" class="btn glass drawer-button">
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </label>
          </div>
          <div class="drawer-side">
            <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4">
              <div class="flex lg:flex-1 mb-4">
                <a href="/" class="p-1.5 px-6 ">
                  <span class="sr-only">Gaelan</span>
                  <img class="h-8 w-auto" src="{{ asset('gaelanlogo.png') }}" alt="">
                </a>
              </div>
              <!-- Sidebar content here -->
              <li>
                  <a href="#">
                  Product
                  </a>
                </li>
                  <li>
                    <a href="#">
                    Features
                    </a>
                  </li>
                <li>
                  <a href="#">
                  Marketplace
                  </a>
                </li>
              <li>
                <a href="#">
                Company
                </a>
              </li>
              <div class="mt-8"> 
              <li>
                <a href="{{ route('login') }}" class="block rounded-lg leading-5 text-gray-900 hover:bg-gray-50">
                  Log in
                </a>
              </li>
              <li>
                <a href="{{ route('register') }}" class="block rounded-lg leading-5 text-gray-900 hover:bg-gray-50">
                  Register
                </a>
              </li>
            </div>
            </ul>
          </div>
        </div>
        </div>
      </div>
      {{-- <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="/" class="-m-1.5 p-1.5">
              <span class="sr-only">Gaelan</span>
              <img class="h-10 w-auto" src="{{ asset('bo.png') }}" alt="">
          </a>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Product</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
            </div>
            <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
              <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
              <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
          </button>
          <div class="py-6">
              <div class="">
                  <a href="{{ route('login') }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
              </div>
              <div class="">
                  <a href="{{ route('register') }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Register</a>
              </div>
          </div>
          </div>
        </div>
      </div>
    </div> --}}
  </header>