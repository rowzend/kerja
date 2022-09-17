@extends('login.layout.dash')

@section('content')
    <div class="row">
        <!-- Striped rows -->
        <div class="col-md-12 my-4">
            <h2 class="h4 mb-1">Daftar User</h2>
            <p class="mb-4">Customized user table</p>
            <div class="card shadow">
                <div class="card-body">
                    <div class="toolbar row mb-3">
                        <div class="col">
                            {{-- <form class="form-inline">
                                <div class="form-row">
                                    <div class="form-group col-auto">
                                        <label for="search" class="sr-only">Search</label>
                                        <input type="text" class="form-control" id="search" value=""
                                            placeholder="Search">
                                    </div>
                                    <div class="form-group col-auto ml-3">
                                        <label class="my-1 mr-2 sr-only" for="inlineFormCustomSelectPref">Status</label>
                                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                            <option selected>Choose...</option>
                                            <option value="1">Processing</option>
                                            <option value="2">Success</option>
                                            <option value="3">Pending</option>
                                            <option value="3">Hold</option>
                                        </select>
                                    </div>
                                </div>
                            </form> --}}
                        </div>
                        <div class="col ml-auto">
                            <div class="dropdown float-right">
                                <a class="btn btn-primary float-right ml-3" href="{{ route('fulluser.create') }}">Add more +</a>
                                {{-- <button class="btn btn-secondary dropdown-toggle" type="button" id="actionMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
                                <div class="dropdown-menu" aria-labelledby="actionMenuButton">
                                    <a class="dropdown-item" href="#">Export</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- table -->
                    <table class="table table-bordered">
                        <thead>
                            <tr role="row">
                                <th hidden>ID</th>
                                <th>Photo Profil</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Satus</th>
                                <th>Autentifikasi</th>
                                <th>Pembuatan Acc</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $items)
                            <tr>
                                <td hidden>{{ $items->id }}</td>
                                <td>
                                    <div class="avatar avatar-md">
                                        <img src="{{ $items->avatar }}" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                </td>
                                <td>{{ $items->name }}</td>
                                <td><strong>{{ $items->email }}</strong></td>
                                <td><span class="badge badge-secondary">Aktif</span></td>
                                <td>
                                    @if ($items->type=='master')
                                    <span class="badge badge-info">{{ $items->type }}</span>
                                    @elseif ($items->type=='admin')
                                    <span class="badge badge-primary">{{ $items->type }}</span>
                                    @elseif ($items->type=='user')
                                    <span class="badge badge-warning">{{ $items->type }}</span>
                                    @endif
                                </td>
                                <td>{{ $items->created_at }}</td>
                                <td>
                                    {{-- <a class="btn mb-2 btn-outline-primary" href="{{ route('fulluser.edit',$items) }}" style="display: inline-block">Edit</a> --}}
                                    <form method="POST" action="{{ route('fulluser.destroy',$items->id) }}" enctype="multipart/form-data">
                                        @method('delete')
                                        @csrf
                                    <button type="submit" class="btn mb-2 btn-primary">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Table Paging" class="mb-0 text-muted">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div> <!-- simple table -->
    </div>
@endsection
