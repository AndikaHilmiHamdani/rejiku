@include('layouts.head-layout')
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
            <button onclick="closeModal('modal')">x</button>
        </div>

        <!-- Modal body -->
        <div class="max-h-48 overflow-y-scroll p-4">
            <div>
                <button onclick="tunai()">tunai</button>
            </div>
            @csrf @method('POST')
            <div>
                <button id="nonTunai">non-tunai</button>
            </div>
        </div>

        <!-- Modal footer -->
        <div class="px-4 py-2 border-t border-t-gray-500 flex justify-end items-center space-x-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition" onclick="closeModal('modal')">Close</button>
        </div>
    </div>
</div>

<div id="tunai" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
    <div class="relative top-40 mx-auto shadow-lg rounded-md bg-white max-w-md">

        <!-- Modal header -->
        <div class="flex justify-between items-center bg-green-500 text-white text-xl rounded-t-md px-4 py-2">
            <h3>Tunai</h3>
            <button onclick="closeModal('tunai')">x</button>
        </div>

        <!-- Modal body -->
        <div class="max-h-48 overflow-y-scroll p-4">
            <h3>Silahkan bayar ke kasir</h3>
        </div>

        <!-- Modal footer -->
        <div class="px-4 py-2 border-t border-t-gray-500 flex justify-end items-center space-x-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition" onclick="closeModal('tunai')">Close</button>
        </div>
    </div>
</div>
<div>
    <table>
        <thead>
            <tr>
                <th>Nama Menu</th>
                <th>Quantity</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cart as $item)
            <tr>
                <td>{{$item->menu->nama_menu}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->quantity * $item->menu->price}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<Set your ClientKey here>"></script>
<script type="text/javascript">
    var secure_token = '{{ csrf_token() }}';
    document.getElementById('nonTunai').onclick = function() {
        // SnapToken acquired from previous step
        snap.pay('<?= $snapToken ?>', {
            // Optional
            onSuccess: function(result) {
                /* You may add your own js here, this is just example */
                // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);


            },
            // Optional
            onPending: function(result) {
                /* You may add your own js here, this is just example */
                // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                window.onunload = function() {
                    debugger;
                }

                const data = {
                    "status_code": null,
                    "status_message": null,
                    "transaction_id": null,
                    "order_id": null,
                    "gross_amount": null,
                    "payment_type": null,
                    "transaction_time": null,
                    "transaction_status": null,
                    "va_numbers": [{
                        "bank": null,
                        "va_number": null
                    }],
                };

                fetch('/store', {
                        method: 'POST', // or 'PUT'
                        headers: {
                            'Content-Type': 'application/json',
                        },

                        body: JSON.stringify({
                            ...data,
                            _token: secure_token
                        }),
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Success:', data);
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                    });
            },
            // Optional
            onError: function(result) {
                /* You may add your own js here, this is just example */
                // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            }
        });
    };

    function openModal(modalId) {
        modal = document.getElementById(modalId)
        modal.classList.remove('hidden')
    }

    function tunai() {
        openModal('tunai')
    }

    function closeModal(modalId) {
        modal = document.getElementById(modalId)
        modal.classList.add('hidden')
        document.location = "/home"
    }
</script>