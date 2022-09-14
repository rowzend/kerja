<nav class="vertnav navbar navbar-light">
    <!-- nav bar -->
    <div class="w-100 mb-4 d-flex">
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="/home">
            <img id="logo" class="navbar-brand-img brand-sm" src="{{ asset('base/img/logo/bkd.png') }}">
        </a>
    </div>
    <p class="text-muted nav-heading mt-4 mb-1">
        <span>Izin Mengikuti Seleksi</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
            <a href="#izin" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-archive fe-16"></i>
                <span class="ml-3 item-text">Bahan Izin</span><span class="sr-only">(current)</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="izin">
                <li class="nav-item active">
                    <a class="nav-link pl-3" href="{{ route('izin.index') }}"><span class="ml-1 item-text">Data Pegawai</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="./inberkas"><span class="ml-1 item-text">Pemberkasan</span></a>
                </li>
            </ul>
        </li>
        <li class="nav-item w-100">
            <a class="nav-link" href="#">
                <i class="fe fe-file fe-16"></i>
                <span class="ml-3 item-text">Download Surat Izin</span>
                <span class="badge badge-pill badge-primary">New</span>
            </a>
        </li>
    </ul>
    <p class="text-muted nav-heading mt-4 mb-1">
        <span>Permintaan Persetujuan Mutasi</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
            <a href="#setuju" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-copy fe-16"></i>
                <span class="ml-3 item-text">Bahan Persetujuan</span><span class="sr-only">(current)</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="setuju">
                <li class="nav-item active">
                    <a class="nav-link pl-3" href="./berkas"><span class="ml-1 item-text">Kelengkapan</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="./inberkas"><span class="ml-1 item-text">Pemberkasan</span></a>
                </li>
            </ul>
        </li>
        <li class="nav-item w-100">
            <a class="nav-link" href="#">
                <i class="fe fe-file fe-16"></i>
                <span class="ml-3 item-text">Download Surat <br>Persetujuan</span>
                <span class="badge badge-pill badge-primary">New</span>
            </a>
        </li>
    </ul>
    <p class="text-muted nav-heading mt-4 mb-1">
        <span>Mutasi Ke Pesisir</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
            <a href="#berkas" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-folder fe-16"></i>
                <span class="ml-3 item-text">Berkas Mutasi</span><span class="sr-only">(current)</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="berkas">
                <li class="nav-item active">
                    <a class="nav-link pl-3" href="./berkas"><span class="ml-1 item-text">Kelengkapan</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="./inberkas"><span class="ml-1 item-text">Pemberkasan</span></a>
                </li>
            </ul>
        </li>
    </ul>

</nav>
