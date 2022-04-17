@extends('layouts.app')

@section('content')
@role('kasir')
<div class="absolute rounded-lg border border-solid border-black" style="width: 425px; height: 853px; left: 1100px; top: 156px;">

    <div class="relative" style="width: 524px; height: 853px; top:175px;">

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

        <!-- menu -->
        <div class="absolute" style="left:10px;top: 125px;">
            <div class="grid grid-cols-6 gap-4">
                <div class="row-start-1 col-end-1">
                    <p class="text-xl text-gray-400">Nasi Goreng</p>
                </div>
                <div class="row-start-1 col-end-2">
                    <button><img class="w-full h-5" src="img/minus.png" /></button>
                </div>
                <div class="quantity row-start-1 col-end-3">
                    <p class="text-xl text-gray-400">1</p>
                </div>
                <div class="row-start-1 col-end-4">
                    <button><img class="w-full h-5" src="img/plus.png" /></button>
                </div>
                <div class="row-start-1 col-end-5" style="width: 75px;">
                    <p class="text-sm text-green-500">Rp. 20.000</p>
                </div>
            </div>
            <div class="py-2">
                <div class="w-96 border-t border-gray-500" style="top:75px"></div>
            </div>
        </div>

        <!-- catatan -->
        <div class="inline-flex space-x-2.5 items-center justify-end w-36 h-10 absolute" style="left: 47px; top: 430px;">
            <button class="w-10 h-10"><img src="img/catatan.png" alt=""></button>
            <p class="text-2xl text-green-500">Catatan</p>
        </div>

        <!-- bayar -->
        <div class="absolute" style="width: 417px; height: 86px; left: 50px; top: 728px;">
            <button id="bayar" class="flex items-center justify-center px-44 pt-6 pb-8 bg-green-500 rounded-2xl" style="width: 300px; height: 50px;" onclick="openModal('modal')">
                <p class="text-2xl font-bold text-white">Bayar</p>
            </button>
        </div>

        <div id="modal" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
            <div class="relative top-40 mx-auto shadow-lg rounded-md bg-white max-w-md">

                <!-- Modal header -->
                <div class="flex justify-between items-center bg-green-500 text-white text-xl rounded-t-md px-4 py-2">
                    <h3>Pilih Pembayaran</h3>
                    <button onclick="closeModal()">x</button>
                </div>

                <!-- Modal body -->
                <div class="max-h-48 overflow-y-scroll p-4">
                    <button onclick="tunai()">tunai</button>
                    <button id="nonTunai">non-tunai</button>
                </div>

                <!-- Modal footer -->
                <div class="px-4 py-2 border-t border-t-gray-500 flex justify-end items-center space-x-4">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition" onclick="closeModal()">Close</button>
                </div>
            </div>
        </div>

        <div id="tunai" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
            <!-- <div class="relative top-40 mx-auto shadow-lg rounded-md bg-white max-w-md"> -->

            <!-- Modal header -->
            <!-- <div class="flex justify-between items-center bg-green-500 text-white text-xl rounded-t-md px-4 py-2">
                <h3>Pilih Pembayaran</h3>
                <button onclick="closeModal()">x</button>
            </div> -->

            <!-- Modal body -->
            <!-- <div class="max-h-48 overflow-y-scroll p-4">
                <button onclick="tunai()">tunai</button>
                <button onclick="non_tunai()">non-tunai</button>
            </div> -->

            <!-- Modal footer -->
            <!-- <div class="px-4 py-2 border-t border-t-gray-500 flex justify-end items-center space-x-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition" onclick="closeModal()">Close</button>
            </div> -->
        </div>
    </div>

</div>

<pre><div id="result-json">JSON result will appear here after payment:<br></div></pre>
</div>
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<Set your ClientKey here>"></script>
<script type="text/javascript">
    document.getElementById('nonTunai').onclick = function() {
        // SnapToken acquired from previous step
        snap.pay('<?= $snapToken ?>', {
            // Optional
            onSuccess: function(result) {
                /* You may add your own js here, this is just example */
                document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            },
            // Optional
            onPending: function(result) {
                /* You may add your own js here, this is just example */
                document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            },
            // Optional
            onError: function(result) {
                /* You may add your own js here, this is just example */
                document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            }
        });
    };

    function openModal(modalId) {
        modal = document.getElementById(modalId)
        modal.classList.remove('hidden')
    }

    function tunai(modalId) {
        tunai = document.getElementById(modalId)
        tunai.classList.remove('hidden')
    }

    function closeModal() {
        modal = document.getElementById('modal')
        modal.classList.add('hidden')
    }
</script>
@endrole
@role('manajer')
<div class="absolute" style="width: 425px; height: 853px; left: 1100px; top: 156px;">

    <div class="grid grid-rows-3 grid-flow-col gap-2">
        <div class="grid grid-cols-2 gap-4">
            <div class="col-end-2 row-start-1">
                <a href=""><p class="text-2xl">Tambah</p></a>
            </div>
            <div class="col-end-1 row-start-1">
                <button><img src="img/tambah.png" alt=""></button>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="col-end-2 row-start-1">
                <a href=""><p class="text-2xl">Edit</p></a>
            </div>
            <div class="col-end-1 row-start-1">
               <button><img src="img/edit.png" alt=""></button> 
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="col-end-2 row-start-1">
                <a href=""><p class="text-2xl">Cetak Laporan</p></a>
            </div>
            <div class="col-end-1 row-start-1">
               <button> <img src="img/cetak.png" alt=""></button>
            </div>
        </div>
    </div>

</div>
@endrole
@endsection