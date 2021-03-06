<head>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
</head>
@extends('layouts.head-layout')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambahkan Menu') }}</div>

                <div class="card-body">
                    <form class="form-horizontal style-form" style="margin-top: 20px;" action="{{isset($menu)?route('menu.update',$menu->id_menu):route('menu.store')}}" method="post" enctype="multipart/form-data" name="form1" id="form1">
                        @csrf
                        @if(isset($menu))
                        @method('put')
                        @endif
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama Menu') }}</label>

                            <div class="col-md-6">
                                <input id="nama_menu" type="text" class="form-control @error('nama_menu') is-invalid @enderror" name="nama_menu" value="{{ $menu->nama_menu?? old('nama_menu') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('image') }}</label>

                            
                            <div class="col-md-6">
                                @if(isset($menu->image))
                                <img class="max-w-[200px] max-h-[200px]"src="{{asset('storage/'.$menu->image)}}" alt="" srcset="">
                                @endif
                                <input type="file" class="form-control" {{!isset($menu->image)?"required":null}} name="image" >
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!--begin::Dropzone-->
                        <!-- <div class="dropzone" id="kt_dropzonejs_example_1"> -->
                        <!--begin::Message-->
                        <!-- <div class="dz-message needsclick"> -->
                        <!--begin::Icon-->
                        <!-- <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i> -->
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <!-- <div class="ms-4">
                                    <h3 class="fs-5 fw-bolder text-gray-900 mb-4" name="image">Drop files here or click to upload.</h3>
                                </div> -->
                        <!--end::Info-->
                        <!-- </div>
                        </div> -->
                        <!--end::Dropzone-->

                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Harga') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$menu->price?? old('price') }}" required autocomplete="price" autofocus>

                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="kategori_menu" class="col-md-4 col-form-label text-md-end">{{ __('kategori') }}</label>

                            <select id="kategori_menu" class="col-md-4 col-form-label text-md-end" name="id_kategori">
                                @foreach($kategori_menu as $kategori)
                                <option value="{{$kategori->id_kategori}}" {{isset($menu) && $menu->id_kategori== $kategori->id_kategori? "selected":null}}>{{ $kategori->nama_kategori }}</option>
                                @endforeach
                            </select>

                            @error('id_kategori')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group row mb-0" style="margin-bottom: 20px;">
                            <label class="col-sm-2 col-sm-2 control-label"></label>
                            <div class="col-sm-8">

                                <a href="{{route('home')}}" class="btn btn-sm btn-secondary">Batal </a>
                                <input type="submit" value="submit" class="btn btn-sm btn-success" />&nbsp;
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- <script>
    var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
        url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
        paramName: "file", // The name that will be used to transfer the file
        maxFiles: 1,
        maxFilesize: 3, // MB
        addRemoveLinks: true,
        accept: function(file, done) {
            if (file.name == "wow.jpg") {
                done("Naha, you don't.");
            } else {
                done();
            }
        }
    });
</script> -->