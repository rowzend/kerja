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
                            <a class="float-right small text-muted" href="{{ route('berkas.create') }}">insert</a>
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
                                    @foreach ($berkas as $items)
                                        <td>{{ $items->id }}</td>
                                        <th scope="col">{{ $items->nip }}<br> {{$items->nama}}</th>
                                        <td>{{ $items->pangkat }}</td>
                                        <td>Coming</td>
                                        <td>Soon</td>
                                        <td>End</td>
                                        <td>lengkap/kosong</td>
                                        <td>
                                        <form action="{{ route('berkas.destroy',$items->id) }}" method="POST">
                                        <a class="btn btn-outline-primary rounded-pill me-1 mb-1" href="{{ route('berkas.show',$items->id) }}" style="display:inline-block;">show</a>
                                        <a class="btn btn-outline-primary rounded-pill me-1 mb-1" href="{{ route('berkas.edit',$items->id) }}" style="display:inline-block;">edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger rounded-pill me-1 mb-1">Del</button>
                                        </form>
                                            </div>
                                        </td>
                                        @endforeach
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
