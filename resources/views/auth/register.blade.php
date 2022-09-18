@extends('layouts.log')

@section('content')
<form class="form-default" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="login-form">
        <div class="form-input">
            <label for="name">Full name</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama Lengkap" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-input">
            <label for="email">Email Address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Alamat Email" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-input">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-input">
            <label for="repassword">Confirm Password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Ulangi Password" required autocomplete="new-password">
        </div>
        <div class="form-input">
            <label for="avatar">Photo Profile/Image</label>
            <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar">

            @error('avatar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-input">
            <label for="type">Jenis Layanan</label>
            <div class="default-select">
                <select class="form-control" id="type" name="type" required> 
                    <option selected disabled value="">Pilih Layanan</option>
                    <option value="0">Izin Seleksi Pindah</option>
                    <option value="1">Permintaan Persetujuan Mutasi</option>
                    <option value="2">Pemberkasan Bahan Mutasi</option>
                </select>
            </div>
            <!-- <select class="form-control" id="type" name="type" required>
                <option selected disabled value="">Pilih Salah Satu...</option>
                <option value="0">Izin Seleksi Pindah</option>
                <option value="1">Permintaan Persetujuan Mutasi</option>
                <option value="2">Pemberkasan Bahan Mutasi</option>
            </select> -->
            <div class="invalid-feedback"> Jangan Lupa Pilih Jenis Pelayanan?!
            </div>
        </div>
        <div class="form-input pt-30">
            <input type="submit" name="submit" value="Daftar Akun!!">
        </div>
        <!-- Forget Password -->
        <a href="{{ route('login') }}" class="registration">Udah Punya Akun</a>
    </div>
</form>
@endsection