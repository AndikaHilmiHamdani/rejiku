@include('layouts.head-layout')
<div class="relative" style="width: auto; height: auto;">
    <p class="absolute text-center text-5xl font-bold" style="width: 531.18px; height: 77.14px; left: 650.39px; top: 58.93px;">ANGGOTA</p>

    <div class="relative grid grid-rows-3 grid-flow-col gap-2" style="top:100px;">
        <div class="grid grid-cols-2 gap-4">
            <div class="col-end-2 row-start-1">
                <a href="{{route('user.create')}}">
                    <p class="text-4xl">Tambah</p>
                </a>
            </div>
            <a class="col-end-1 row-start-1" href="{{route('user.create')}}">
                <div>
                    <button><img src="img/tambah.png" alt=""></button>
                </div>
            </a>
        </div>
    </div>

    <table id="example" class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>
                    <center>Id </center>
                </th>
                <th>
                    <center>Nama Karyawan</center>
                </th>
                <th>
                    <center>Alamat </center>
                </th>
                <th>
                    <center>No Hp </center>
                </th>
                <th>
                    <center>Email</center>
                </th>
                <th>
                    <center>Aksi</center>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->nama_karyawan}}</td>
                <td>{{$user->alamat}}</td>
                <td>{{$user->no_hp}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <center>
                        <div id="thanks">
                            <a class="btn btn-sm" data-placement="bottom" data-toggle="tooltip" title="Edit Anggota" href="{{route('user.edit',$user->id)}}">
                                <div>
                                    <button><img src="img/edit-tabel.png" alt=""> edit</button>
                                </div>
                            </a>
                            <button type="submit"><img src="img/hapus-tabel.png" alt="" onclick="openModal('modal')">delete</button>
                            <div id="modal" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
                                <div class="relative top-40 mx-auto shadow-lg rounded-md bg-white max-w-md">

                                    <!-- Modal header -->
                                    <div class="flex justify-between items-center bg-green-500 text-white text-xl rounded-t-md px-4 py-2">
                                        <h3>Apakah anda ingin menghapus??</h3>
                                        <button onclick="closeModal()">x</button>
                                    </div>

                                    <form action="{{route('user.destroy',$user->id)}}" method="post">
                                        @csrf @method('DELETE')
                                        <!-- Modal body -->
                                        <div class="max-h-48 p-4">
                                            <h3>are you sure to remove?</h3>
                                            <button class="btn btn-danger" type="submit">Remove</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </center>
                </td>
            </tr>
        </tbody>
        @endforeach
</div>
</tbody>
</table>

<button class="w-64 h-20 py-6 pl-14 pr-12 bg-green-500 rounded-lg">
    <a class="flex items-center justify-center flex-1 h-full bg-green-500 rounded-lg " href="/home">
        <p class="flex-1 h-full text-4xl font-bold">Kembali</p>
    </a>
</button>
</div>

<script>
    function openModal(modalId) {
        modal = document.getElementById(modalId)
        modal.classList.remove('hidden')
    }

    function closeModal() {
        modal = document.getElementById('modal')
        modal.classList.add('hidden')
    }
</script>