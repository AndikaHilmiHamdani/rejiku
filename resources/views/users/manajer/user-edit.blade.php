@include('layouts.head-layout')
<div class="row">
    <div class="col-xs-12">
        <div class="panel">
            <header class="panel-heading">
                <b>Edit Anggota</b>

            </header>
            <!-- <div class="box-header"> -->
            <!-- <h3 class="box-title">Responsive Hover Table</h3> -->
            <?php
            // $query = mysql_query("SELECT * FROM data_anggota WHERE id='$_GET[kd]'");
            // $data  = mysql_fetch_array($query);
            ?>
            <!-- </div> -->
            <div class="panel-body">
                <form class="form-horizontal style-form" style="margin-top: 20px;" action="{{route('user.update',$users->id)}}" method="post" enctype="multipart/form-data" name="form1" id="form1">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">ID Anggota</label>
                        <div class="col-sm-8">
                            <input name="id" type="text" id="id" class="form-control" placeholder="Tidak perlu di isi" value="{{$users->id}}" autofocus="on" readonly="readonly" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">name</label>
                        <div class="col-sm-8">
                            <input name="nama_karyawan" type="text" id="nama_karyawan" class="form-control" placeholder="name" value="{{$users->nama_karyawan}}" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Email</label>
                        <div class="col-sm-8">
                            <input name="email" type="email" id="email" class="form-control" placeholder="Ex : 00123" value="{{$users->email}}" required />
                            <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                        </div>
                    </div>

                    <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-8">
                                <input name="alamat" class="form-control" id="alamat" type="text" placeholder="alamat" value="{{$users->alamat}}" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">No Hp</label>
                            <div class="col-sm-8">
                                <input name="no_hp" class="form-control" id="no_hp" type="text" placeholder="No Hp" value="{{$users->no_hp}}" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">password</label>
                            <div class="col-sm-8">
                                <input name="password" class="form-control" id="password" type="text" placeholder="password" value="{{$users->password}}" required />
                            </div>
                        </div>
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label class="col-sm-2 col-sm-2 control-label"></label>
                        <div class="col-sm-8">
                            <input type="submit" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
                            <a href="{{route('user.index')}}" class="btn btn-sm btn-danger">Batal </a>
                        </div>
                    </div>
                    <div style="margin-top: 20px;"></div>
                </form>
            </div>
        </div><!-- /.box -->
    </div>
</div>