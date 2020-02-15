@extends('layouts.admin')
@section('content')
<div class="container">
    {{-- Form modal --}}
            <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registrasi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    @csrf

                    @foreach ($studio as $item)
                    <input type="hidden" name="id_studio" value="{{$item->id}}">
                    <input type="hidden" name="id_user" value="{{$item->id_user}}">
                    @endforeach
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
                        <label for="name" class="col-4 col-form-label text-md-right ml-2">Fasilitas</label>

                        <div class="col mr-2">
                        <textarea name="fasilitas" class="form-control @error('fasilitas') is-invalid @enderror" id="" cols="30" rows="4"></textarea>

                            @error('fasilitas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label text-md-right ml-2">Harga / 30 menit</label>
                        <div class="col mr-2">
                            <input type="number" class="form-control @error('biaya') is-invalid @enderror" name="biaya" required >

                            @error('biaya')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-3 col-form-label text-md-right ml-2">Jumlah Gitar</label>
                        <div class="col mr-2">
                            <input type="number" class="form-control @error('gitar') is-invalid @enderror" name="gitar" required >

                            @error('gitar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label for="name" class="col-3 col-form-label text-md-right ml-2">Jumlah Bass</label>
                        <div class="col mr-2">
                            <input type="number" class="form-control @error('bass') is-invalid @enderror" name="bass" required >

                            @error('bass')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label for="name" class="col-3 col-form-label text-md-right ml-2">Jumlah Mic</label>
                        <div class="col mr-2">
                            <input type="number" class="form-control @error('mic') is-invalid @enderror" name="mic" required >

                            @error('mic')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label for="name" class="col-3 col-form-label text-md-right ml-2">Jumlah Drum</label>
                        <div class="col mr-2">
                            <input type="number" class="form-control @error('drum') is-invalid @enderror" name="drum" required >

                            @error('drum')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>

        </div>
        </div>
    </div>

    {{-- Akhir form modal --}}
    <div class="row">
        @foreach ($studio as $item)
        <div class="col">
            <div class="card ml-2 mb-5 mr-2 mt-3" >
                <div class="card-header float-right bg-primary" style="color:white">Upload on {{date("d, F y",strtotime($item->created_at))}}</div>
                <img id="myImg" alt="{{$item->nama}}" src="assets/img/" class=" img-thumbnail" style="height:100px;">
                <div class="card-body">
                    <h1 class="text-center">Ruang {{$item->nama}}</h1>
                    <p class="card-text text-center">({{ $item->deskripsi }})</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Alamat : {{$item->alamat}}</b></li>
                        <li class="list-group-item"><b>Nomor Telp : {{ $item->nomor }}</b></li>
                        <li class="list-group-item"><b>Jam kerja : {{ $item->jam_kerja }}</b></li>
                    </ul>
                    <div class="card-footer text-center">
                        <a href="detail/{{$item->id}}" class="btn btn-primary d-block">Ubah</a>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>

    <hr>
    <button type="button" class="btn btn-secondary mt-4 mb-5" data-toggle="modal" data-target="#exampleModal">
        Buat Studio
    </button>
    <div class="row">
        @foreach ($ruangan as $item)
            <div class="col col">
                <div class="card ml-2 mb-5 mr-2" >
                    <div class="card-header float-right bg-primary" style="color:white">Upload on {{date("d, F y",strtotime($item->created_at))}}</div>
                    <img id="myImg" alt="{{$item->nama}}" src="assets/img/" class=" img-thumbnail" style="height:100px;">
                    <div class="card-body">
                        <h1 class="text-center">Ruang {{$item->nama}}</h1>
                        <p class="card-text text-center">({{ $item->fasilitas }})</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Harga : {{$item->biaya}}</b></li>
                            <li class="list-group-item"><b>Gitar : {{ $item->gitar }}</b></li>
                            <li class="list-group-item"><b>Bass : {{ $item->bass }}</b></li>
                            <li class="list-group-item"><b>Mic : {{ $item->mic }}</b></li>
                        </ul>
                        <div class="card-footer text-center">
                            <a href="detail/{{$item->id}}" class="btn btn-primary">Ubah</a>
                        <a href="hapus/{{$item->id}}" class="btn btn-danger">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    <hr>

</div>
@endsection
