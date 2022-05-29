<!DOCTYPE html>
<html>
    
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <h3>Rejiku</h3>
        </div>
        <div class="col-sm-4">
            <h2>Laporan Transaksi</h2>
        </div>
    </div>
    
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    
    
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Order_id</th>
            <th>Menu</th>
            <th>Total Price</th>
            <th>Payment Type</th>
            <th>Transaction Time</th>
            <th>Transaction Status</th>
            <th>VA number</th>
        </tr>
        
        @foreach($order as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->order_id }}</td>
            <td>
                @foreach($order->menu as $item)
                <div>{{ $item->nama_menu }} x {{ $item->quantity }}</div>
                @endforeach
            </td>
            <td>{{ $order->total_price }}</td>
            <td>{{ $order->payment_type ?? '-' }}</td>
            <td>{{ $order->transaction_time ?? '-' }}</td>
            <td>{{ $order->transaction_status ?? 'Belum Bayar' }}</td>
            <td>{{ $order->va_number ?? '-' }}</td>
        </tr>
        @endforeach
    
    </table>
</html>

