@extends('login.layout.dash')

@section('content')
    <div class="col-md-6 mb-4">
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('inmutasi.store') }}" method="POST">
                    @csrf
                <div class="form-group mb-3">
                    <label for="judul">Judul Informasi</label>
                    <input type="text" id="judul" name="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Judul Article" value="{{ old('judul') }}" autofocus>
                </div>
                <div class="form-group mb-3">
                    <label for="isi">Penjelasan dari Judul</label>
                    <input id="isi" type="hidden" name="isi">
                    <trix-editor input="isi"></trix-editor>
                </div>
                <button type="submit" class="btn mb-2 btn-primary btn-lg btn-block">Simpan Artikel</button>
                </form>
            </div> <!-- /.card-body -->
        </div> <!-- /.card -->
    </div>
@endsection
