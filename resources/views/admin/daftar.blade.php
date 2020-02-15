    @extends('layouts/admin')
    @section('content')

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

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
    @endsection
