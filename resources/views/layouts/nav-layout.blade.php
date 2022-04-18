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