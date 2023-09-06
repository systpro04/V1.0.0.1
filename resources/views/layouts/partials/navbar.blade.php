<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            </div>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>

                <li class="nav-item dropdown px-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-light" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                       <i class="fas fa-user-circle"></i>&nbsp; {{ Auth::user()->name }}
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4 bg-gradient-white" aria-labelledby="dropdownMenuButton">
                        <li class="nav-item d-flex justify-content-center">
                            <a class="nav-link text-body p-0 " href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"
                                data-mdb-toggle="popover" data-mdb-placement="top" title="Logout">
                                <i class="fas fa-power-off"></i>&nbsp; Logout
                            </a>
        
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
