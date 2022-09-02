@extends('login.layout.dash')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row align-items-center mb-2">
                <div class="col">
                    <h2 class="h5 page-title">Welcome! {{auth()->user()->name}}</h2>
                </div>
            </div>

            <div class="row">
                <!-- Striped rows -->
                <div class="col-md-auto col-lg">
                    <div class="card shadow">
                        <div class="card-header">
                            <strong class="card-title">Recent Data</strong>
                            <a class="float-right small text-muted" href="#!">View all</a>
                        </div>
                        <div class="card-body my-n2">
                            <table class="table table-striped table-hover table-borderless">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP / Nama</th>
                                        <th>Pangkat</th>
                                        <th>Jabatan</th>
                                        <th>Instansi Asal</th>
                                        <th>Instansi Tujuan</th>
                                        <th>Status</th>
                                        <th>Kelengkapan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <th scope="col">19931210 203001 1 001 <br> Dede Aftaviandi</th>
                                        <td>Pembina IV/e</td>
                                        <td>Calon Presiden</td>
                                        <td>Negeri Odni</td>
                                        <td>Wakanda Forever</td>
                                        <td>lengkap/kosong</td>
                                        <td>
                                        <a class="btn btn-outline-primary rounded-pill me-1 mb-1"   href="./koleksi">lengkapi</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- Striped rows -->
            </div> <!-- .row-->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->
@endsection