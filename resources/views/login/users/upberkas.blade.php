@extends('login.layout.dash')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row align-items-center mb-2">
                <div class="col">
                <h2 class="h5 page-title">Berkas <strong>{{auth()->user()->name}}</strong> yang sudah di Upload</h2>
                </div>
            </div>
            <div class="mb-2 align-items-center">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <form>
                            <div class="col-12 col-md">
                                <h5 class="text-900 mb-4" data-anchor>SK Contohnya</h5>
                            </div>
                        </form>
                        <form>
                            <div class="col-12 col-md">
                                <h5 class="text-900 mb-4" data-anchor>SK2 Contohnya</h5>
                            </div>
                        </form>
                        <form>
                            <div class="col-12 col-md">
                                <h5 class="text-900 mb-4" data-anchor>SK3 Contohnya dst</h5>
                            </div>
                        </form>
                    </div> <!-- .card-body -->
                </div> <!-- .card -->
            </div>
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->
@endsection