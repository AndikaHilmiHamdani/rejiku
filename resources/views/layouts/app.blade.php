<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Rejiku') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div id="app">
    <nav class="navbar navbar-expand-md  relative bg-green-500 rounded-lg">

      <div class="container">
        <div class="relative bg-white rounded-lg" style="width: 400px; height: 65px; left: 50px;">
          <input class="w-96 h-10 absolute text-2xl text-gray-300" style="left: 14px; top: 20px;" placeholder="Cari makanan" type="text">
          <a href="/search"><img class="w-12 h-12 absolute" style="left: 350px; top: 7px;" src="img/search.png" /></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav me-auto">

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            @role('kasir')
            <li class="nav-item">
              <a class="nav-link" href="/detail_user"><img src="img/user_dashboard.png"></a>
            </li>
            @endrole
            @role('manajer')
            <li class="nav-item">
              <a class="nav-link" href="/user"><img src="img/user_dashboard.png"></a>
            </li>
            @endrole
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <img class="w-12 h-full" src="/img/settings.png" />
              </a>
              @role('kasir')
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                {{ Auth::user()->nama_karyawan }}
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
              @endrole
              @role('manajer')

              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                {{ Auth::user()->nama_karyawan }}
                <a href="/lupa">Lupa Password</a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
              @endrole
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
    <main class="py-4">

      <!-- kategori -->
      <div class="relative" style="width: 1440px; height: 50px;">

        <div class="kategori mx-4 mt-2">
          <div class="inline-flex bg-white bg-opacity-50 border rounded-lg border-black ml-4" style="width: 750px; height: 35px; margin: left 10px;">
            <a href="">
              <p class="text-2xl text-green-500 mx-4 mt-2 active:underline">Makanan</p>
            </a>
            <a href="">
              <p class="text-2xl mx-4 mt-2">Minuman</p>
            </a>
            <a href="">
              <p class="text-2xl mx-4 mt-2">Camilan</p>
            </a>
            <a href="">
              <p class="text-2xl mx-4 mt-2">Dessert</p>
            </a>
            <a href="">
              <p class="text-2xl mx-4 mt-2">Hotplate</p>
            </a>
          </div>
        </div>
      </div>

      <!-- menu -->
      @role('kasir')
      <div class="relative absolute" style="width: 1255px; height: 646px; left: 50px; top: 25px;">

        <div class="container flex col">
          <div class="inline-flex flex-row space-y-2.5 items-start justify-end w-64 h-72">

            <button class="inline-flex items-center justify-center w-full h-64 pb-0.5 bg-gray-300 hover:bg-grey-700">
              <img class="flex-1 h-28 shadow border border-black" src="img/nasi_goreng.svg" />
            </button>
          </div>

          <div class="inline-flex flex-row space-y-3 items-start justify-end w-64 h-72 absolute" style="left: 315px; top: 0px;">
            <div class="inline-flex items-center justify-center w-full h-64 pb-0.5 bg-gray-300">
              <img class="flex-1 h-full shadow border border-black" src="img/ayam_bakar.png" />
            </div>
          </div>
          <div class="inline-flex flex-row space-y-3 items-start justify-end w-64 h-72 absolute" style="left: 625px; top: 0px;">
            <div class="inline-flex items-center justify-center w-full h-64 pb-0.5 bg-gray-300">
              <img class="flex-1 h-full shadow border border-black" src="img/sate_ayam.png" />
            </div>
          </div>
        </div>
        <div class="container flex flex-col">
          <div class="flex flex-row">
            <p class="w-24 text-xl" style="margin-left: 115px;">Nasi Goreng</p>
            <p class="w-24 text-xl" style="margin-left: 200px;">Ayam Bakar</p>
            <p class="w-24 text-xl" style="margin-left: 225px;">Sate Ayam</p>
          </div>
        </div>

        <div class="container flex col" style="margin-top: 150;">
          <div class="inline-flex flex-row space-y-1 items-center justify-end w-64 h-72 absolute" style="left: 0px; top: 325px;">
            <div class="w-full h-64 bg-gray-300">
              <img class="flex-1 h-full shadow border border-black" src="img/sate_kambing.png" />
            </div>
          </div>

          <div class="inline-flex flex-col space-y-2 items-center justify-end w-64 h-72 absolute" style="left: 365.96px; top: 325px;">
            <div class="w-full h-64 bg-gray-300">
              <img class="flex-1 h-full shadow border border-black" src="img/sop_ayam.png" />
            </div>
          </div>
          <div class="inline-flex flex-col space-y-2 items-center justify-end w-64 h-72 absolute" style="left: 731.91px; top: 325px;">
            <div class="w-full h-64 bg-gray-300">
              <img class="flex-1 h-full shadow border border-black" src="img/nasi_uduk.png" />
            </div>
          </div>
        </div>
        <div class="container flex flex-col" style="margin-top: 315px;">
          <div class="flex flex-row">
            <p class="w-24 text-xl" style="margin-left: 115px;">Sate kambing</p>
            <p class="w-24 text-xl" style="margin-left: 200px;">Sop Ayam</p>
            <p class="w-24 text-xl" style="margin-left: 225px;">Nasi Uduk</p>
          </div>
        </div>
      </div>
      @endrole

      @role('manajer')
      <div class="relative absolute" style="width: 1255px; height: 646px; left: 50px; top: 25px;">

        <div class="container flex col">
          <div class="inline-flex flex-row space-y-2.5 items-start justify-end w-64 h-72">

            <button class="inline-flex items-center justify-center w-full h-64 pb-0.5 bg-gray-300 hover:bg-grey-700">
              <img class="flex-1 h-28 shadow border border-black" src="img/nasi_goreng.svg" />
            </button>
          </div>

          <div class="inline-flex flex-row space-y-3 items-start justify-end w-64 h-72 absolute" style="left: 315px; top: 0px;">
            <div class="inline-flex items-center justify-center w-full h-64 pb-0.5 bg-gray-300">
              <img class="flex-1 h-full shadow border border-black" src="img/ayam_bakar.png" />
            </div>
          </div>
          <div class="inline-flex flex-row space-y-3 items-start justify-end w-64 h-72 absolute" style="left: 625px; top: 0px;">
            <div class="inline-flex items-center justify-center w-full h-64 pb-0.5 bg-gray-300">
              <img class="flex-1 h-full shadow border border-black" src="img/sate_ayam.png" />
            </div>
          </div>
        </div>
        <div class="container flex flex-col">
          <div class="flex flex-row">
            <p class="w-24 text-xl" style="margin-left: 115px;">Nasi Goreng</p>
            <p class="w-24 text-xl" style="margin-left: 200px;">Ayam Bakar</p>
            <p class="w-24 text-xl" style="margin-left: 225px;">Sate Ayam</p>
          </div>
        </div>

        <div class="container flex col" style="margin-top: 150;">
          <div class="inline-flex flex-row space-y-1 items-center justify-end w-64 h-72 absolute" style="left: 0px; top: 325px;">
            <div class="w-full h-64 bg-gray-300">
              <img class="flex-1 h-full shadow border border-black" src="img/sate_kambing.png" />
            </div>
          </div>

          <div class="inline-flex flex-col space-y-2 items-center justify-end w-64 h-72 absolute" style="left: 365.96px; top: 325px;">
            <div class="w-full h-64 bg-gray-300">
              <img class="flex-1 h-full shadow border border-black" src="img/sop_ayam.png" />
            </div>
          </div>
          <div class="inline-flex flex-col space-y-2 items-center justify-end w-64 h-72 absolute" style="left: 731.91px; top: 325px;">
            <div class="w-full h-64 bg-gray-300">
              <img class="flex-1 h-full shadow border border-black" src="img/nasi_uduk.png" />
            </div>
          </div>
        </div>
        <div class="container flex flex-col" style="margin-top: 315px;">
          <div class="flex flex-row">
            <p class="w-24 text-xl" style="margin-left: 115px;">Sate kambing</p>
            <p class="w-24 text-xl" style="margin-left: 200px;">Sop Ayam</p>
            <p class="w-24 text-xl" style="margin-left: 225px;">Nasi Uduk</p>
          </div>
        </div>
      </div>
      @endrole

      @yield('content')
    </main>
  </div>
</body>

</html>