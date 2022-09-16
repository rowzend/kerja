@extends('login.layout.dash')

@section('content')
    <div class="col-md-6 mb-4">
        <div class="card shadow">
            <div class="card-body">
                <a class="btn btn-primary float-right ml-3" href="{{ route('inmutasi.create') }}">Add more +</a>
            </div> <!-- /.card-body -->
        </div> <!-- /.card -->
    </div>
@endsection
