@extends('login.layout.dash')

@section('content')
    <div class="wrapper vh-100">
            <form action="{{ route('fulluser.store') }}" method="POST" class="col-lg-6 col-md-8 col-10 mx-auto" enctype="multipart/form-data">
                @csrf
                <div class="mx-auto text-center my-4">
                    <a class="navbar-brand mx-auto mt-2 flex-fill text-center">
                        <img version="1.1" id="logo" class="navbar-brand-img brand-md" src="{{ asset('base/img/logo/bkd.png') }}">
                    </a>
                    <h2 class="my-3">Tambah User</h2>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Full name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="name" placeholder="Nama Lengkap" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" placeholder="Alamat Email" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="type">Jenis User</label>
                            <select class="form-control" id="type" name="type" required>
                              <option selected disabled value="">Choose...</option>
                              <option value="0">User Izin</option>
                              <option value="1">User Persetujuan</option>
                              <option value="2">User Mutasi</option>
                              <option value="3">admin</option>
                            </select>
                            <div class="invalid-feedback"> Pilih Jenis Usernya!?. </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="avatar">Profil Image</label>
                          <input type="file" id="avatar" name="avatar" class="form-control-file @error('avatar') is-invalid @enderror">

                            @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>
                <hr class="my-4">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" placeholder="Password" required
                                autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="repassword">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                placeholder="Ulangi Password" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-2">Password requirements</p>
                        <p class="small text-muted mb-2"> To create a new password, you have to meet all of the following
                            requirements: </p>
                        <ul class="small text-muted pl-4 mb-0">
                            <li> Minimum 8 character </li>
                            <li>At least one special character</li>
                            <li>At least one number</li>
                            <li>Can’t be the same as a previous password </li>
                        </ul>
                    </div>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Tambah</button>
                <p class="mt-5 mb-3 text-muted text-center">© 2020</p>
            </form>
    </div>
@endsection
