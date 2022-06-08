<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        /* counter */
        span {
            cursor: pointer;
        }

        .number {
            margin: 100px;
        }

        .minus,
        .plus {
            width: 20px;
            height: 20px;
            background: #f2f2f2;
            border-radius: 4px;
            padding: 8px 5px 8px 5px;
            border: 1px solid #ddd;
            display: inline-block;
            vertical-align: middle;
            text-align: center;
        }



        /* end counter */
        hr.style-one {
            border: 0;
            height: 1px;
            background: rgb(0, 0, 0);
            background-image: linear-gradient(to right, #ccc, rgb(0, 0, 0), #ccc);
        }

        .height {
            height: 50vh;
        }


        .search {
            position: relative;
            box-shadow: 0 0 40px rgba(51, 51, 51, .1);

        }

        .search input {

            height: 50px;
            text-indent: 25px;
            border: 2px solid #d6d4d4;


        }


        .search input:focus {

            box-shadow: none;
            border: 2px solid blue;


        }

        .search .fa-search {

            position: absolute;
            top: 20px;
            left: 16px;

        }

        .search button {

            position: absolute;
            top: 5px;
            right: 5px;
            height: 40px;
            width: 110px;
            background: blue;

        }

        .thumb-post img {
            object-fit: none;
            /* Do not scale the image */
            object-position: center;
            /* Center the image within the element */
            width: 100%;
            max-height: 250px;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>


    <nav class="navbar navbar-expand-md navbar-light rounded-bottom" style="background-color: #16A899">
        <div class="container-fluid  ">
            <button class="navbar-toggler mb-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class=" collapse navbar-collapse   " id="navbarSupportedContent">
                {{-- <form class="d-flex ">
                    <div class="input-group">
                        <input class="form-control border-end-0 border rounded-left " type="text" placeholder="search"
                            id="example-search-input">
                        <span class="input-group-append">
                            <button class="btn btn-outline-secondary bg-white border-start-0 border rounded-right ms-n3"
                                type="button">
                                <img height="30px" src="{{ url('/image/search.png') }}" />
                            </button>
                        </span>
                    </div>
                </form> --}}

                <form class="ps-4 search mt-3" style="width: 400px">
                    <i class="fa fa-search"></i>
                    <input type="text" class="form-control mr-sm-2 rounded-pill" placeholder="Cari makanan">
                    <button class="btn btn-outline-secondary bg-white border-start-0 border rounded-pill ms-n3"
                        type="button">
                        <img height="30px" src="{{ url('/image/search.png') }}" />
                    </button>
                </form>

            </div>

            <div class=" ps-3 d-flex flex-row-reverse bd-highlight ">
                <div class="dropdown">
                    <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img height="40px" src="{{ url('/image/setting.png') }}" /></button>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <button class="btn p-2 bd-highlight"><img height="40px" src="{{ url('/image/user.png') }}" /></button>
            </div>
        </div>
    </nav>

    {{-- body --}}
    <div class="p-3">
        <div class="row">
            <div class="col-md-8  ">
                <div class=" m-2">
                    <div class="d-flex ps-4 flex-row bd-highlight border border-secondary  rounded-pill  mb-3">
                        <a href="" class=" text-secondary nav-link p-2 bd-highlight">Makanan</a>
                        <a href="" class=" text-secondary nav-link  p-2 bd-highlight">Minuman</a>
                        <a href="" class=" text-secondary nav-link p-2 bd-highlight">Camilan</a>
                    </div>
                    <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
                        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">

                            <div class="col">
                                <div class="card h-100 shadow-sm">
                                    <div style="height: 200px">
                                        <img class="img-fluid img-thumbnail" style="height: 100%;width: 100%;"
                                            src="{{ url('/image/nasgor.jpg') }}" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <div class="clearfix mb-3"> <span
                                                class="float-start badge rounded-pill bg-success">Rp.10000</span>

                                        </div>
                                        <h5 class="card-title">Nasi Goreng</h5>
                                        <div class="d-grid gap-2 my-4"> <a href="#" class="btn "
                                                style="background-color:  #16A899">Add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card h-100 shadow-sm">
                                    <div style="height: 200px">
                                        <img class="img-fluid img-thumbnail" style="height: 100%;width: 100%;"
                                            src="{{ url('/image/nasi-goreng.png') }}" class="card-img-top"
                                            alt="...">
                                    </div>
                                    <div class="card-body">
                                        <div class="clearfix mb-3"> <span
                                                class="float-start badge rounded-pill bg-success">Rp.10000</span>

                                        </div>
                                        <h5 class="card-title">Nasi Goreng</h5>
                                        <div class="d-grid gap-2 my-4"> <a href="#" class="btn "
                                                style="background-color:  #16A899">Add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100 shadow-sm">
                                    <div style="height: 200px">
                                        <img class="img-fluid img-thumbnail" style="height: 100%;width: 100%;"
                                            src="{{ url('/image/nasgor.jpg') }}" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <div class="clearfix mb-3"> <span
                                                class="float-start badge rounded-pill bg-success">Rp.10000</span>

                                        </div>
                                        <h5 class="card-title">Nasi Goreng</h5>
                                        <div class="d-grid gap-2 my-4"> <a href="#" class="btn "
                                                style="background-color:  #16A899">Add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card h-100 shadow-sm">
                                    <div style="height: 200px">
                                        <img class="img-fluid img-thumbnail" style="height: 100%;width: 100%;"
                                            src="{{ url('/image/nasi-goreng.png') }}" class="card-img-top"
                                            alt="...">
                                    </div>
                                    <div class="card-body">
                                        <div class="clearfix mb-3"> <span
                                                class="float-start badge rounded-pill bg-success">Rp.10000</span>

                                        </div>
                                        <h5 class="card-title">Nasi Goreng</h5>
                                        <div class="d-grid gap-2 my-4"> <a href="#" class="btn "
                                                style="background-color:  #16A899">Add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100 shadow-sm">
                                    <div style="height: 200px">
                                        <img class="img-fluid img-thumbnail" style="height: 100%;width: 100%;"
                                            src="{{ url('/image/nasgor.jpg') }}" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <div class="clearfix mb-3"> <span
                                                class="float-start badge rounded-pill bg-success">Rp.10000</span>

                                        </div>
                                        <h5 class="card-title">Nasi Goreng</h5>
                                        <div class="d-grid gap-2 my-4"> <a href="#" class="btn "
                                                style="background-color:  #16A899">Add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card h-100 shadow-sm">
                                    <div style="height: 200px">
                                        <img class="img-fluid img-thumbnail" style="height: 100%;width: 100%;"
                                            src="{{ url('/image/nasi-goreng.png') }}" class="card-img-top"
                                            alt="...">
                                    </div>
                                    <div class="card-body">
                                        <div class="clearfix mb-3"> <span
                                                class="float-start badge rounded-pill bg-success">Rp.10000</span>

                                        </div>
                                        <h5 class="card-title">Nasi Goreng</h5>
                                        <div class="d-grid gap-2 my-4"> <a href="#" class="btn "
                                                style="background-color:  #16A899">Add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100 shadow-sm">
                                    <div style="height: 200px">
                                        <img class="img-fluid img-thumbnail" style="height: 100%;width: 100%;"
                                            src="{{ url('/image/nasgor.jpg') }}" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <div class="clearfix mb-3"> <span
                                                class="float-start badge rounded-pill bg-success">Rp.10000</span>

                                        </div>
                                        <h5 class="card-title">Nasi Goreng</h5>
                                        <div class="d-grid gap-2 my-4"> <a href="#" class="btn "
                                                style="background-color:  #16A899">Add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card h-100 shadow-sm">
                                    <div style="height: 200px">
                                        <img class="img-fluid img-thumbnail" style="height: 100%;width: 100%;"
                                            src="{{ url('/image/nasi-goreng.png') }}" class="card-img-top"
                                            alt="...">
                                    </div>
                                    <div class="card-body">
                                        <div class="clearfix mb-3"> <span
                                                class="float-start badge rounded-pill bg-success">Rp.10000</span>

                                        </div>
                                        <h5 class="card-title">Nasi Goreng</h5>
                                        <div class="d-grid gap-2 my-4"> <a href="#" class="btn "
                                                style="background-color:  #16A899">Add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    </main>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="position-sticky " style="top: 2rem;">
                    <form action="" class="border rounded border-secondary p-3">
                        <div class=" d-flex justify-content-between p-4 bg-light ">
                            <h4 class="fw-bold">Daftar Pesanan</h4>
                            <div style="width: 20%">
                                <div class="d-flex justify-content-end ">
                                    <div class="p-2 bd-highlight">
                                        <h5>No.</h5>
                                    </div>

                                    {{-- <label for="inputsm">No meja</label> --}}
                                    <input class="form-control input-sm" id="inputsm" type="number">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class=" ps-5 pe-5 overflow-auto " style="height: 400px">

                            <div class="d-flex justify-content-between ">
                                <div class="p-2 bd-highlight">Nasi goreng</div>
                                <div class="p-2  bd-highlight">
                                    <span class="minus">-</span>
                                    <input type="text" value="1" />
                                    <span class="plus">+</span>
                                </div>
                                <div class="p-2 bd-highlight" style="color: #16A899">Rp. 20000</div>
                            </div>
                            <hr class="style-one">

                            <div class="d-flex justify-content-between ">
                                <div class="p-2 bd-highlight">Nasi goreng</div>
                                <div class="p-2  bd-highlight">
                                    <span class="minus">-</span>
                                    <input type="text" value="1" />
                                    <span class="plus">+</span>
                                </div>
                                <div class="p-2 bd-highlight" style="color: #16A899">Rp. 20000</div>
                            </div>
                            <hr class="style-one">
                            <div class="d-flex justify-content-between ">
                                <div class="p-2 bd-highlight">Nasi goreng</div>
                                <div class="p-2  bd-highlight">
                                    <span class="minus">-</span>
                                    <input type="text" value="1" />
                                    <span class="plus">+</span>
                                </div>
                                <div class="p-2 bd-highlight" style="color: #16A899">Rp. 20000</div>
                            </div>
                            <hr class="style-one">

                            <div class="d-flex justify-content-between ">
                                <div class="p-2 bd-highlight">Nasi goreng</div>
                                <div class="p-2  bd-highlight">
                                    <span class="minus">-</span>
                                    <input type="text" value="1" />
                                    <span class="plus">+</span>
                                </div>
                                <div class="p-2 bd-highlight" style="color: #16A899">Rp. 20000</div>
                            </div>
                            <hr class="style-one">
                            <div class="d-flex justify-content-between ">
                                <div class="p-2 bd-highlight">Nasi goreng</div>
                                <div class="p-2  bd-highlight">
                                    <span class="minus">-</span>
                                    <input type="text" value="1" />
                                    <span class="plus">+</span>
                                </div>
                                <div class="p-2 bd-highlight" style="color: #16A899">Rp. 20000</div>
                            </div>
                            <hr class="style-one">

                            <div class="d-flex justify-content-between ">
                                <div class="p-2 bd-highlight">Nasi goreng</div>
                                <div class="p-2  bd-highlight">
                                    <span class="minus">-</span>
                                    <input type="text" value="1" />
                                    <span class="plus">+</span>
                                </div>
                                <div class="p-2 bd-highlight" style="color: #16A899">Rp. 20000</div>
                            </div>
                            <hr class="style-one">

                        </div>

                        <a class="d-inline-flex align-items-center ms-3 mt-4 mb-2 link-dark text-decoration-none"
                            href="#" aria-label="Bootstrap">
                            <img src="{{ url('/image/catatan.png') }}" width="60" height="60" class="d-block me-2"
                                viewBox="0 0 118 94" role="img">

                            <span class="fs-5">Catatan</span>
                        </a>

                        <div class=" d-flex justify-content-between mt-4 ps-4 pe-4 bg-light ">
                            <h4 class="fw-bold" style="color: #16A899">Total</h4>
                            <div style="width: 20%">
                                <div class="d-flex justify-content-end ">
                                    <div class="p-2 bd-highlight">
                                        <h5 style="color: #16A899">Rp.10000</h5>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <hr class="style-one">

                        <div class="d-grid gap-2">
                            <button class="fw-bold btn btn-lg" style="background-color:  #16A899; color: white;"
                                type="button">Bayar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="">

        <!-- Footer -->
        <footer class="text-center text-lg-start text-white" style="background-color:  #16A899">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2022 Copyright: Rejiku
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->

    </div>
    <!-- End of .container -->
</body>

</html>
