@extends('layouts.log')

@section('content')
<form class="form-default" action="{{ route('password.email') }}" method="POST">
    @csrf

    <div class="login-form">
        <a class="logo-login"> <img src="{{asset('assets/img/logo/loder.png')}}" alt=""></a>
        <h2>Reset Ulang Password</h2>
        <div class="form-input">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <label for="name">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-input pt-30">
            <input type="submit" name="submit" value="reset link password">
        </div>
        <a href="{{ route('login') }}" class="registration">Kembali Log In</a>
    </div>
</form>
@endsection