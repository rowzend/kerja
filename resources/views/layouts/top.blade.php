<div class="collapse navbar-collapse nav-collapse">
    <div class="menu-container">
        <ul class="navbar-nav navbar-nav-right">
            <li class="smooth-menu"><a class="nav-item-child nav-item-hover" href="#informasi">Informasi</a></li>
            @if (Route::has('login'))
            <li class="smooth-menu"><a class="nav-item-child nav-item-hover" href="{{ route('login') }}">Log In</a></li>
            @endif
        </ul>
    </div>
</div>