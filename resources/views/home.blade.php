@extends('layouts.app')

@section('content')
@role('kasir')
<div class="rounded-lg border border-solid border-black" style="width: 425px; height: 853px; left: 1100px; top: 156px; overflow-x: scroll;">

    <div class="relative" style=" height: 853px; top:175px;">

        <!-- daftar pesanan -->
        <div class="absolute border-solid border-black" style="width: 300px; height: 51.50px; left:50px;top: 30px;">
            <p class="absolute right-0 bottom-0 text-3xl">Daftar Pesanan</p>
            <p class="absolute right bottom-0 text-sm" style="width:150px;left:250px; top:50px">No. meja</p>
            <div class="inline-flex items-center justify-center w-8 h-5 px-2 py-0.5 absolute right bottom-0 bg-white border border-black" style="width:25px;left:315px; top:50px">
                <p class="text-sm">12</p>
            </div>
            <div class="py-20">
                <div class="w-full border-t border-gray-500" style="top:75px"></div>
            </div>
        </div>

        <!-- bayar -->
        <form action="/checkout" method="post">
            @csrf
            @method('POST')
            <div class="absolute" style="width: 417px; height: 86px; left: 50px; top: 728px;">
                <button id="bayar" class="flex items-center justify-center px-44 pt-6 pb-8 bg-green-500 rounded-2xl" style="width: 300px; height: 50px;">
                    <p class="text-2xl font-bold text-white">Bayar</p>
                </button>
            </div>
            <!-- menu -->
            <div class="absolute w-full" id="clicked_menu" style="left:10px;top: 125px;">
                <!-- Menu items displayed here -->
            </div>

            <!-- <input class="text-xl text-gray-400" id="nama_menu" name="menu[].nama_menu" value="{{$menu[0]->nama_menu}}" readonly></input>
            <input class="text-sm text-green-500" id="totalPrice" name="menu[].price" value="{{$menu[0]->price}}" readonly></input>
            <input id="inputnama_menu" name="id_menu[]" class="text-xl text-gray-400" readonly />
            <input name="quantity[]" value="2" /> -->
        </form>
        <!-- catatan -->
        <div class="inline-flex space-x-2.5 items-center justify-end w-36 h-10 absolute" style="left: 47px; top: 430px;">
            <button class="w-10 h-10"><img src="img/catatan.png" alt=""></button>
            <p class="text-2xl text-green-500">Catatan</p>
        </div>



    </div>

</div>


</div>

@endrole
@role('manajer')
<div class="" style="width: 425px; height: 853px; left: 1100px; top: 156px;">

    <div class="grid grid-rows-3 grid-flow-col gap-2">
        <div class="grid grid-cols-2 gap-4">
            <div class="col-end-2 row-start-1">
                <a href="{{route('menu.create')}}">
                    <p class="text-2xl">Tambah</p>
                </a>
            </div>
            <div class="col-end-1 row-start-1">
                <button><img src="img/tambah.png" alt=""></button>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="col-end-2 row-start-1">
                <a href="">
                    <p class="text-2xl">Edit</p>
                </a>
            </div>
            <div class="col-end-1 row-start-1">
                <button><img src="img/edit.png" alt=""></button>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="col-end-2 row-start-1">
                <a href="/cetak">
                    <p class="text-2xl">Cetak Laporan</p>
                </a>
            </div>
            <div class="col-end-1 row-start-1">
                <button> <img src="img/cetak.png" alt=""></button>
            </div>
        </div>
    </div>

</div>
@endrole
@endsection