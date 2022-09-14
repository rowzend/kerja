@extends('login.layout.dash')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row align-items-center mb-2">
                <div class="col">
                <h2 class="h5 page-title">Lengkapi data mu {{auth()->user()->name}}</h2>
                </div>
            </div>
            <div class="mb-2 align-items-center">
                <div class="card shadow mb-4">
                    <div class="card-body">

                        <form>
                            <div class="col-12 col-md">
                                <h3 class="text-900 mb-4" data-anchor>Data PNS</h3>
                                <div class="row mb-3"><label class="col-sm-2 col-form-label" for="nip">NIP</label>
                                    <div class="col-sm-10"><input class="form-control" id="nip" type="text"></div>
                                </div>
                                <div class="row mb-3"><label class="col-sm-2 col-form-label" for="nama">Nama Lengkap</label>
                                    <div class="col-sm-10"><input class="form-control" id="nama" type="text"></div>
                                </div>
                                <div class="row mb-3"><label class="col-sm-2 col-form-label" for="pangkat">Pangkat/Gol.Ruang</label>
                                    <div class="col-sm-10"><input class="form-control" id="pangkat" type="text"></div>
                                </div>
                                <div class="row mb-3"><label class="col-sm-2 col-form-label" for="jabatan">Jabatan</label>
                                    <div class="col-sm-10"><input class="form-control" id="jabatan" type="text"></div>
                                </div>
                                <div class="row mb-3"><label class="col-sm-2 col-form-label" for="asal">Unit Kerja</label>
                                    <div class="col-sm-10"><input class="form-control" id="asal" type="text"></div>
                                </div>
                                <div class="row mb-3"><label class="col-sm-2 col-form-label" for="tujuan">Instansi</label>
                                    <div class="col-sm-10"><input class="form-control" id="tujuan" type="text"></div>
                                </div>
                                <div class="row mb-3"><label class="col-sm-2 col-form-label" for="alasan">Alasan Pindah</label>
                                    <div class="col-sm-10"><input class="form-control" id="alasan" type="text"></div>
                                </div>
                                <div class="row mb-3"><label class="col-sm-2 col-form-label" for="call">No Hp Aktif</label>
                                    <div class="col-sm-10"><input class="form-control" id="call" type="text"></div>
                                </div>
                                <div class="mb-3">
                                    <div class="row mb-3"><label class="col-sm-2 col-form-label" for="uploadfile">SK1 Misalnya</label>
                                        <div class="col-sm-10"><input class="form-control" id="customFile" type="file"></div>
                                    </div>
                                    <div class="row mb-3"><label class="col-sm-2 col-form-label" for="uploadfile">SK2 Misalnya</label>
                                        <div class="col-sm-10"><input class="form-control" id="customFile" type="file"></div>
                                    </div>
                                    <div class="row mb-3"><label class="col-sm-2 col-form-label" for="uploadfile">SK3 Misalnya</label>
                                        <div class="col-sm-10"><input class="form-control" id="customFile" type="file"></div>
                                    </div>
                                    <div class="row mb-3"><label class="col-sm-2 col-form-label" for="uploadfile">SK4 Misalnya</label>
                                        <div class="col-sm-10"><input class="form-control" id="customFile" type="file"></div>
                                    </div>
                                    <div class="row mb-3"><label class="col-sm-2 col-form-label" for="uploadfile">SK5 Misalnya</label>
                                        <div class="col-sm-10"><input class="form-control" id="customFile" type="file"></div>
                                    </div>
                                    <div class="row mb-3"><label class="col-sm-2 col-form-label" for="uploadfile">SK6 Misalnya</label>
                                        <div class="col-sm-10"><input class="form-control" id="customFile" type="file"></div>
                                    </div>
                                    <div class="row mb-3"><label class="col-sm-2 col-form-label" for="uploadfile">SK7 Misalnya</label>
                                        <div class="col-sm-10"><input class="form-control" id="customFile" type="file"></div>
                                    </div>
                                    <div class="row mb-3"><label class="col-sm-2 col-form-label" for="uploadfile">SK8 Misalnya</label>
                                        <div class="col-sm-10"><input class="form-control" id="customFile" type="file"></div>
                                    </div>
                                    <div class="row mb-3"><label class="col-sm-2 col-form-label" for="uploadfile">SK9 Misalnya</label>
                                        <div class="col-sm-10"><input class="form-control" id="customFile" type="file"></div>
                                    </div>
                                    <div class="row mb-3"><label class="col-sm-2 col-form-label" for="uploadfile">SK10 Misalnya</label>
                                        <div class="col-sm-10"><input class="form-control" id="customFile" type="file"></div>
                                    </div>
                                    <div class="row mb-3"><label class="col-sm-2 col-form-label" for="uploadfile">SK11 Misalnya</label>
                                        <div class="col-sm-10"><input class="form-control" id="customFile" type="file"></div>
                                    </div>
                                    <div class="row mb-3"><label class="col-sm-2 col-form-label" for="uploadfile">SK12 Misalnya</label>
                                        <div class="col-sm-10"><input class="form-control" id="customFile" type="file"></div>
                                    </div>
                                    <div class="row mb-3"><label class="col-sm-2 col-form-label" for="uploadfile">SK13 Misalnya</label>
                                        <div class="col-sm-10"><input class="form-control" id="customFile" type="file"></div>
                                    </div>
                                    <div class="row mb-3"><label class="col-sm-2 col-form-label" for="uploadfile">SK14 Misalnya</label>
                                        <div class="col-sm-10"><input class="form-control" id="customFile" type="file"></div>
                                    </div>
                                    <div class="row mb-3"><label class="col-sm-2 col-form-label" for="uploadfile">SK15 Misalnya</label>
                                        <div class="col-sm-10"><input class="form-control" id="customFile" type="file"></div>
                                    </div>
                                    <button class="btn btn-primary" type="submit" name="submit" value="save">Save Our Soul</button>
                                </div>
                            </div>
                        </form>

                    </div> <!-- .card-body -->
                </div> <!-- .card -->
            </div>
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->
@endsection
