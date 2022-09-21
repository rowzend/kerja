@extends('login.layout.dash')

@section('content')
<div class="col-md-6 mb-4">
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('persetujuan.store') }}" method="POST">
                    @csrf
                <div class="form-group mb-3">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="nama pegawai" value="{{ old('nama') }}" autofocus>
                </div>
                <div class="form-group mb-3">
                    <label for="nip">NIP Pegawai</label>
                    <input type="number" id="nip" name="nip" class="form-control @error('nip') is-invalid @enderror" placeholder="nip pegawai" value="{{ old('nip') }}" autofocus>
                </div>
                <div class="form-group mb-3">
                    <label for="pangkat">pangkat pegawai</label>
                    <div class="form-group mb-3"><select class="form-control" id="pangkat" name="pangkat" required>
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
                    <!-- <input type="text" id="pangkat" name="pangkat" class="form-control @error('pangkat') is-invalid @enderror" placeholder="pangkat Pegawai" value="{{ old('pangkat') }}" autofocus> -->
                </div>
                <div class="form-group mb-3">
                    <label for="jabas">Jabatan Pegawai</label>
                    <input type="text" id="jabas" name="jabas" class="form-control @error('jabas') is-invalid @enderror" placeholder="jabatan" value="{{ old('jabas') }}" autofocus>
                </div>
                <div class="form-group mb-3">
                    <label for="unora">Unit Kerja Pegawai</label>
                    <input type="text" id="unora" name="unora" class="form-control @error('unora') is-invalid @enderror" placeholder="Unit Kerja" value="{{ old('unora') }}" autofocus>
                </div>
                <div class="form-group mb-3">
                    <label for="instansia">Instansi Pegawai</label>
                    <input type="text" id="instansia" name="instansia" class="form-control @error('instansia') is-invalid @enderror" placeholder="Nama Instansi" value="{{ old('instansia') }}" autofocus>
                </div>
                <div class="form-group mb-3">
                    <label for="nohp">No. Telephone/Wa</label>
                    <input type="text" id="nohp" name="nohp" class="form-control @error('nohp') is-invalid @enderror" placeholder="No HP/WA" value="{{ old('nohp') }}" autofocus>
                </div>
                <div class="form-group mb-3">
                    <label for="instansib">Instansi Tujuan</label>
                    <input type="text" id="instansib" name="instansib" class="form-control @error('instansib') is-invalid @enderror" placeholder="Instansi Tujuan" value="{{ old('instansib') }}" autofocus>
                </div>
                <div class="form-group mb-3">
                    <label for="unorb">Unit Kerja Tujuan</label>
                    <input type="text" id="unorb" name="unorb" class="form-control" placeholder="Unit Kerja Tujuan" value="{{ old('unorb') }}" autofocus>
                </div>
                <div class="form-group mb-3">
                    <label for="jabtu">Jabatan Tujuan</label>
                    <input type="text" id="jabtu" name="jabtu" class="form-control" placeholder="Jabatan Yang Akan Diisi" value="{{ old('jabtu') }}" autofocus>
                </div>
                <button type="submit" class="btn mb-2 btn-primary btn-lg btn-block">Simpan Se</button>
                </form>
            </div> <!-- /.card-body -->
        </div> <!-- /.card -->
    </div>
@endsection