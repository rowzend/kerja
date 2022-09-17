@extends('layouts.log')

@section('content')
<form class="form-default" action="{{ route('login') }}" method="POST">
    @csrf

    <div class="login-form">
        <a class="logo-login"> <img src="{{asset('assets/img/logo/bkd.png')}}" alt=""></a>
        <h2>Selamat Datang di <br>si-mulai</h2>
        <div class="form-input">
            <label for="name">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-input">
            <label for="name">Password</label>
            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" placeholder="Password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-input pt-30">
            <input type="submit" name="submit" value="login">
        </div>

        <!-- Forget Password -->
        <a href="{{ route('password.request') }}" class="forget">Lupa Password</a>
        <!-- Forget Password -->
        <a href="{{ route('register') }}" class="registration">Daftar Akun</a>
    </div>
</form>
@endsection