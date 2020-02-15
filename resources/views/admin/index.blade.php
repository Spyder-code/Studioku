    @extends('layouts.admin')
    @section('studio',)
    @section('content')


    @if (Auth::user()->status==0)
    <form method="POST">
        @csrf

    <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
        <div class="form-group row mt-5">
            <label for="name" class="col-4 col-form-label text-md-right ml-2">Nama Studio</label>

            <div class="col mr-2">
                <input id="name" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" required >

                @error('nama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-4 col-form-label text-md-right ml-2">Alamat</label>

            <div class="col mr-2">
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" required>

                @error('alamat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-4 col-form-label text-md-right ml-2">Nomor Telp.</label>
            <div class="col mr-2">
                <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="nomor" required >

                @error('nomor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-4 col-form-label text-md-right ml-2">Jam Kerja</label>
            <div class="col mr-2">
                <input type="text" class="form-control @error('jam_kerja') is-invalid @enderror" name="jam_kerja" required >

                @error('jam_kerja')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-4 col-form-label text-md-right ml-2">Deskripsi</label>
            <div class="col mr-2">
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="4" cols="70"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-4 col-form-label text-md-right ml-2">Image</label>
            <div class="col mr-2">
                <input id="image" type="file" class="form-control-file" name="image">
            </div>
        </div>
            <button type="submit" class="btn btn-success float-right mr-5 mb-5">Daftar</button>
    </form>
    @else
    <div class="container">
        <!-- Main Content -->
        <div id="content  ">
            <div class="container mt-5">
                    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Pengunjung</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">100</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Transaksi</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">100</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Studio</div>
                <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">100</div>
                    </div>
                </div>
                </div>
                <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Pesan Masuk</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">100</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Content Row -->
                {{-- <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                    </div>
                    <div class="card-body">
                        @if ($product<=20 && $product>1)
                    <h4 class="small font-weight-bold">Memori <span class="float-right">{{number_format($product)}}%</span></h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{$product}}%" aria-valuenow="{{$product}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            @elseif ($product<=40 && $product>20)
                            <h4 class="small font-weight-bold">Memori <span class="float-right">{{number_format($product)}}%</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: {{$product}}%" aria-valuenow="{{$product}}" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                @elseif ($product<=60 && $product>40)
                                <h4 class="small font-weight-bold">Memori <span class="float-right">{{number_format($product)}}%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: {{$product}}%" aria-valuenow="{{$product}}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    @elseif ($product<=80 && $product>60)
                                <h4 class="small font-weight-bold">Memori <span class="float-right">{{number_format($product)}}%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{$product}}%" aria-valuenow="{{$product}}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    @elseif ($product<=100 && $product>80)
                                <h4 class="small font-weight-bold">Memori <span class="float-right">{{number_format($product)}}%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{$product}}%" aria-valuenow="{{$product}}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                        @endif
                    </div>
            </div> --}}
                            <!-- Bar Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Grafik Pengunjung</h6>
                    </div>
                    <div class="card-body">
                        <div class="chart-bar">
                            <canvas id="myBarChart"></canvas>
                        </div>
                    <hr>Jumlah pengunjung dihitung berdasakan bulan.
                    </div>
                </div>
    @endif



        </div>
    </div>
    </div>
    @endsection
