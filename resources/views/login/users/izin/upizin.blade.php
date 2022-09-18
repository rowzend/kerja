@extends('login.layout.dash')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row align-items-center mb-2">
                <div class="col">
                    <h2 class="h5 page-title">Lengkapi data mu {{ auth()->user()->name }}</h2>
                </div>
            </div>
            <div class="mb-2 align-items-center">
                <div class="card shadow mb-4">
                    <div class="card-body">

                        <form action="{{ route('izin.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h4 class="text-900 mb-4" data-anchor>Data PNS</h4>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="nip">NIP</label>
                                <div class="col-sm-10">
                                    <input class="form-control @error('nip') is-invalid @enderror" id="nip" type="number" name="nip" placeholder="199909091999091009" required autofocus value="{{ old('nip') }}">

                                    @error('nip')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3"><label class="col-sm-2 col-form-label" for="nama">Nama
                                    Lengkap</label>
                                <div class="col-sm-10"><input class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" type="text" placeholder="Nama Saya" required value="{{ old('nama') }}">
                                    @error('nama')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3"><label class="col-sm-2 col-form-label" for="pangkat">Pangkat-Gol/Ruang</label>
                                <div class="col-sm-10"><select class="form-control" id="pangkat" name="pangkat" required>
                                        <option selected disabled value="">Pilih Jabatan Gol Ruang...</option>
                                        <option value="Pengatur Muda (II/a)">Pengatur Muda (II/a)</option>
                                        <option value="Pengatur Muda Tk.I (II/b)">Pengatur Muda Tk.I (II/b)</option>
                                        <option value="Pengatur (II/c)">Pengatur (II/c)</option>
                                        <option value="Pengatur Tk.I (II/d)">Pengatur Tk.I (II/d)</option>
                                        <option value="Penata Muda (III/a)">Penata Muda (III/a)</option>
                                        <option value="Penata Muda Tk.I (III/b)">Penata Muda Tk.I (III/b)</option>
                                        <option value="Penata (III/c)">Penata (III/c)</option>
                                        <option value="Penata Tk.I (III/d)">Penata Tk.I (III/d)</option>
                                        <option value="Pembina (IV/a)">Pembina (IV/a)</option>
                                        <option value="Pembina Tk.I (IV/b)">Pembina Tk.I (IV/b)</option>
                                        <option value="Pembina Muda (IV/c)">Pembina Muda (IV/c)</option>
                                        <option value="Pembina Madya(IV/d)">Pembina Madya(IV/d)</option>
                                    </select>
                                    <div class="invalid-feedback"> Pilih Golongan/Ruang Anda!?. </div>
                                </div>
                            </div>
                            <div class="row mb-3"><label class="col-sm-2 col-form-label" for="jabas">Jabatan</label>
                                <div class="col-sm-10"><input class="form-control @error('jabas') is-invalid @enderror" id="jabas" type="text" name="jabas" placeholder="Jabatan Sesuai SK" required value="{{ old('jabas') }}">
                                    @error('jabas')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3"><label class="col-sm-2 col-form-label" for="unora">Unit
                                    Kerja</label>
                                <div class="col-sm-10"><input class="form-control @error('unora') is-invalid @enderror" id="unora" name="unora" type="text" placeholder="Organisasi Perangkat Daerah" required value="{{ old('unora') }}">
                                    @error('unora')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3"><label class="col-sm-2 col-form-label" for="instansia">Instansi</label>
                                <div class="col-sm-10"><input class="form-control @error('instansia') is-invalid @enderror" id="instansia" name="instansia" type="text" placeholder="Pemerintah Kabupaten/Kota Anda" required value="{{ old('instansia') }}">
                                    @error('instansia')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3"><label class="col-sm-2 col-form-label" for="nohp">No Hp/Wa
                                    Aktif</label>
                                <div class="col-sm-10"><input class="form-control @error('nohp') is-invalid @enderror" id="nohp" type="number" name="nohp" placeholder="081122334455" required value="{{ old('nohp') }}">
                                    @error('nohp')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <h4 class="text-900 mb-4" data-anchor>Informasi Tujuan</h4>
                            <div class="mb-3">
                                <div class="row mb-3"><label class="col-sm-2 col-form-label" for="instansib">Instansi</label>
                                    <div class="col-sm-10"><input class="form-control @error('instansib') is-invalid @enderror" id="instansib" type="text" name="instansib" placeholder="Pemerintah Kab/Kota Tujuan" required value="{{ old('instansib') }}">
                                        @error('instansib')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3"><label class="col-sm-2 col-form-label" for="unorb">Unit
                                    Kerja*</label>
                                <div class="col-sm-10"><input class="form-control" id="unorb" name="unorb" type="text" placeholder="Organisasi Perangkat Daerah Tujuan">
                                    <span class="help-block"><small>*hanya di isi apabila?1</small></span>
                                </div>
                            </div>
                            <div class="row mb-3"><label class="col-sm-2 col-form-label" for="jabtu">Jabatan*</label>
                                <div class="col-sm-10"><input class="form-control" id="jabtu" name="jabtu" type="text" placeholder="Jabatan yang akan diisi">
                                    <span class="help-block"><small>*hanya saja.</small></span>
                                </div>
                            </div>
                            <h4 class="text-900 mb-4" data-anchor>Kelengkapan Berkas</h4>
                            {{-- input berkas --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="permohonan">Surat Permohonan</label>
                                        <input type="file" id="permohonan" name="permohonan" class="form-control form-control-file" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="sizin">Surat Izin Kepala OPD</label>
                                        <input type="file" id="sizin" name="sizin" class="form-control form-control-file" required>
                                    </div>
                                </div> <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="skp">SKP 1 Tahun Terakhir</label>
                                        <input type="file" id="skp" name="skp" class="form-control form-control-file" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="sk">SK Terakhir</label>
                                        <input type="file" id="sk" name="sk" class="form-control form-control-file" required>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Simpan Data</button>
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