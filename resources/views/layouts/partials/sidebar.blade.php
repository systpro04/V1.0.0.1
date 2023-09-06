<div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="#">
        <img src="{{ asset('assets/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="logo">
        <span class="ms-1 font-weight-bold text-white">System1.0</span>
    </a>
</div>
<hr class="horizontal light mt-0 mb-2">
<div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link text-white {{ request()->is('home*') ? 'bg-gradient-success active' : '' }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link text-white {{ request()->is('users*') ? 'bg-gradient-success active' : '' }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fas fa-user-tag"></i>
                </div>
                <span class="nav-link-text ms-1">Users</span>
            </a>
        </li>        
    </ul>
</div>
