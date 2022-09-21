@extends('login.layout.dash')

@section('content')
<div class="col-md-12 my-4">
    <h2 class="h4 mb-1">Daftar User</h2>
    <p class="mb-3">Management User Tabel</p>
    <div class="card shadow">
        <div class="card-body">
            <div class="toolbar">
                <form class="form">
                    <div class="form-row">
                        <div class="form-group col-auto mr-auto">
                            <label class="my-1 mr-2 sr-only" for="inlineFormCustomSelectPref1">Show</label>
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelectPref1">
                                <option value="">...</option>
                                <option value="1"selected>12</option>
                                <option value="2" >32</option>
                                <option value="3">64</option>
                                <option value="3">128</option>
                            </select>
                        </div>
                        <div class="form-group col-auto">
                            <label for="search" class="sr-only">Search</label>
                            <input type="text" class="form-control" id="search1" value="" placeholder="Search">
                        </div>
                    </div>
                </form>
            </div>
            <!-- table -->
            <table class="table table-borderless table-hover">
                <thead>
                    <tr>
                        <th>Avatar</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Autentifikasi</th>
                        <th>Tanggal Pembuatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user_table as $key=>$items)
                    <tr>
                        <td>
                            <div class="avatar avatar-md">
                                <img src="{{ $items->avatar }}" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </td>
                        <td>
                            <p class="name mb-0 text-muted">{{ $items->name }}</p>
                        </td>
                        <td>
                            <p class="mb-0 text-muted"><strong>{{ $items->email }}</strong></p>
                        </td>
                        <td>
                            <p class="mb-0 text-muted"><span class="badge badge-success">Aktif</span></p>
                        </td>
                        <td>
                            @if($items->type == 'master')
                            <p class="mb-0 text-muted"><strong><span class="badge badge-primary">{{ $items->type }}</span></strong></p>
                            @elseif ($items->type =='admin')
                            <p class="mb-0 text-muted"><strong><span class="badge badge-success">{{ $items->type }}</span></strong></p>
                            @elseif ($items->type =='user')
                            <p class="mb-0 text-muted"><strong><span class="badge badge-warning">{{ $items->type }}</span></strong></p>
                            @endif
                        
                        </td>
                        <td class="text-muted">{{ $items->created_at }}</td>
                        <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" type="button" class="btn edituser" data-toggle="modal" data-target="#edituser" data-whatever="@mdo">edit</a>
                                <a class="dropdown-item" href="#">Remove</a>
                                <a class="dropdown-item" href="#">Assign</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <nav aria-label="Table Paging" class="mb-0 text-muted">
                <ul class="pagination justify-content-center mb-0">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>


    <div class="card shadow">
            <div class="modal fade" id="edituser" tabindex="-1" role="dialog" aria-labelledby="edituserLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="edituserLabel">Edit User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="e_name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label">Password</label>
                                    <input type="password" class="form-control" id="password">
                                </div>
                                <div class="form-group">
                                    <label for="auth" class="col-form-label">Change Tipe</label>
                                    <input type="option" class="form-control" id="option">
                                </div>
                                <div class="form-group">
                                    <label for="avatar" class="col-form-label">Foto/Image</label>
                                    <input type="file" class="form-control" id="avatar">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn mb-2 btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection