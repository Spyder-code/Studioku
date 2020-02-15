        @extends('layouts/user')
        @section('title','Home')

        @section('jumbotron')
        <div class="jumbotron jumbotron-fluid bg-warning" style="height:800px">
            <div class="container text-center">
                <img src="" width="200px" height="200px" class="mb-2">
                <h1>STUDIO MUSIK</h1>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum impedit dolor reprehenderit fugiat velit exercitationem eligendi molestias dolorem ipsam, eaque perspiciatis? Perferendis sequi animi omnis dignissimos. Eum rem necessitatibus iure.</P>
            <a href="{{url('mitra')}}" class="btn btn-success">Daftar Mitra Studio</a>
            </div>
        </div>
        @endsection

        @section('navbar')
        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg navbar-light" style="color:white">
            <a class="navbar-brand" href="#">Studio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto justify-content-around">
                <li class="nav-item  ml-5 mr-5">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown ml-5 mr-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kategori
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('pria/') }}">Pria </a>
                        <a class="dropdown-item" href="{{ url('wanita/') }}">Wanita</a>
                        <a class="dropdown-item" href="{{ url('anak/') }}">Anak-anak</a>
                    </div>
                </li>
                <li class="nav-item ml-5 mr-5">
                <a class="nav-link" href="{{ url('about/') }}">Pembayaran</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="get" action="{{ url('hasil-pencarian') }}">
                <input class="form-control mr-sm-2" type="search" name="cari" style="width:330px;">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            </div>
        </nav>

        {{-- akhir navbar --}}

        @endsection

        @section('container')

        {{--Pengenalan  --}}
        <div class="container text-center">
            <div class="row mt-5">
                <div class="col">
                    <div class="card" style="height:200px;>
                        <img src="" alt="">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <h2>Judul</h2>
                    <hr>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium tempora magni, expedita voluptatem eaque quo? Sed harum corrupti, iste vero modi voluptatem aliquid saepe quia eius beatae facilis rerum molestias?</p>
                </div>
                <div class="col">
                    <h2>Judul</h2>
                    <hr>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium tempora magni, expedita voluptatem eaque quo? Sed harum corrupti, iste vero modi voluptatem aliquid saepe quia eius beatae facilis rerum molestias?</p>
                </div>
                <div class="col">
                    <h2>Judul</h2>
                    <hr>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium tempora magni, expedita voluptatem eaque quo? Sed harum corrupti, iste vero modi voluptatem aliquid saepe quia eius beatae facilis rerum molestias?</p>
                </div>
            </div>
        </div>

        {{-- Akhir pengenalan --}}

        <div class="container-fluid mt-5">
            <div class="row">
                @foreach ($studio as $item)
                <div class="col col-lg-3">
                    <div class="card ml-2 mb-5 mr-2" >
                        <div class="card-header float-right bg-primary" style="color:white">{{$item->nama}}</div>
                        <img id="myImg" alt="" src="assets/img/{{$item->image}}" class=" img-thumbnail" style="height:300px;">
                        <div class="card-body">
                            <p class="card-text text-center">{{$item->deskripsi}}</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Alamat         : {{$item->alamat}}</b></li>
                                <li class="list-group-item"><b>Jam kerja      : {{$item->jam_kerja}}</b></li>
                                <li class="list-group-item"><b>Jumlah studio  : {{$total}}</b></li>
                            </ul>
                        </div>
                        <div class="car-footer">
                        <a href="detail/{{$item->id}}" class="btn btn-success d-block">Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


        @endsection
