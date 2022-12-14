@extends('layouts.log')

@section('content')
<form class="form-default" action="{{ route('register') }}" method="POST">
    @csrf

    <div class="login-form">
        <h2>Daftar Akun</h2>

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
            <label for="name">Email Address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Alamat Email" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-input">
            <label for="name">Password</label>
            <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-input">
            <label for="name">Confirm Password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Ulangi Password" required autocomplete="new-password">
        </div>
        <div class="form-input pt-30">
            <input type="submit" name="submit" value="Registration">
        </div>
        <!-- Forget Password -->
        <a href="{{ route('login') }}" class="registration">Udah Punya Akun</a>
    </div>
</form>
@endsection