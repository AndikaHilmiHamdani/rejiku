@extends('layouts.app')

@section('content')
<div class="absolute" style="width: 524px; height: 853px; left: 1366px; top: 156px;">
    <img class="w-3.5 h-44 absolute rounded-lg" style="left: 443px; top: 167px;" src="https://via.placeholder.com/14x175" />
    <div class="relative absolute" style="width: 415px; height: 51.50px; left: 42.50px; top: 30px;">
        <p class="absolute right-0 bottom-0 text-3xl">Daftar Pesanan</p>
        <p class="absolute right-0 bottom-0 text-sm">No. meja</p>
        <div class="inline-flex items-center justify-center w-8 h-5 px-2 py-0.5 absolute right-0 bottom-0 bg-white border border-black">
            <p class="text-sm">12</p>
        </div>
    </div>
    <img class="relative rounded-lg" style="width: 524px; height: 853px;" src="https://via.placeholder.com/524x853">
    <div class="inline-flex flex-col space-y-8 items-center justify-end w-28 h-48 absolute" style="left: 68px; top: 158px;">
        <p class="text-xl text-gray-400">Nasi Goreng</p>
        <p class="text-xl text-gray-400">Ayam Bakar</p>
        <p class="text-xl text-gray-400">Sate ayam</p>
        <p class="text-xl text-gray-400">Sate kambing</p>
    </div>
    <img class="w-96 h-40 absolute rounded-lg" style="left: 68.50px; top: 190.50px;" src="https://via.placeholder.com/381x162" />
    <div class="inline-flex flex-col space-y-9 items-center justify-end w-16 h-44 absolute" style="left: 353px; top: 164px;">
        <p class="text-sm text-green-500">Rp. 20.000</p>
        <p class="text-sm text-green-500">Rp. 20.000</p>
        <p class="text-sm text-green-500">Rp. 20.000</p>
        <p class="text-sm text-green-500">Rp. 20.000</p>
    </div>
    <div class="relative absolute" style="width: 388px; height: 48.50px; left: 70px; top: 627px;">
        <p class="absolute right-0 bottom-0 text-3xl">Total</p>
        <p class="absolute right-0 bottom-0 text-3xl text-green-500">Rp. 80.000</p>
    </div>
    <div class="inline-flex flex-col space-y-9 items-center justify-end w-2 h-44 absolute" style="left: 271px; top: 163px;">
        <p class="text-sm text-green-500">1</p>
        <p class="text-sm text-green-500">1</p>
        <p class="text-sm text-green-500">1</p>
        <p class="text-sm text-green-500">1</p>
    </div>

    <div class="inline-flex space-x-2.5 items-center justify-end w-36 h-10 absolute" style="left: 47px; top: 430px;">
        <img class="w-10 h-10" src="https://via.placeholder.com/41.23792266845703x39" />
        <p class="text-2xl text-green-500">Catatan</p>
    </div>
    <div class="inline-flex flex-col space-y-8 items-center justify-end w-5 h-44 absolute" style="left: 291px; top: 162px;">
        <img class="w-full h-5" src="https://via.placeholder.com/19x19" />
        <img class="w-full h-5" src="https://via.placeholder.com/19x19" />
        <img class="w-full h-5" src="https://via.placeholder.com/19x19" />
        <img class="w-full h-5" src="https://via.placeholder.com/19x19" />
    </div>
    <div class="inline-flex flex-col space-y-8 items-center justify-end w-5 h-44 pt-5 absolute" style="left: 241px; top: 162px;">
        <img class="w-full h-5" src="https://via.placeholder.com/19x19" />
        <img class="w-full h-5" src="https://via.placeholder.com/19x19" />
        <img class="w-full h-5" src="https://via.placeholder.com/19x19" />
        <img class="w-full h-5" src="https://via.placeholder.com/19x19" />
    </div>
    <div class="absolute" style="width: 417px; height: 86px; left: 50px; top: 728px;">
        <button id="bayar" class="flex items-center justify-center px-44 pt-6 pb-8 bg-green-500 rounded-2xl" style="width: 417px; height: 86px;" onclick="openModal('modal')">
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
@endsection