<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head-layout')

<body>
  <div id="app">
    @include('layouts.nav-layout')
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