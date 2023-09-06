<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('user/css/mdb.min.css') }}" />

</head>

<body>
    <header>
        <style>
            #introCarousel,
            .carousel-inner,
            .carousel-item,
            .carousel-item.active {
                height: 100vh;
            }

            .carousel-item:nth-child(1) {
                background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
            }

            .carousel-item:nth-child(2) {
                background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
            }

            .carousel-item:nth-child(3) {
                background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
            }

            /* Height for devices larger than 576px */
            @media (min-width: 992px) {
                #introCarousel {
                    margin-top: -58.59px;
                }
            }

            .navbar .nav-link {
                color: #fff !important;
            }
        </style>

        <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand nav-link" target="_blank" href="https://mdbootstrap.com/docs/standard/">
                    <strong>MDB</strong>
                </a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="#intro">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA"
                                rel="nofollow" target="_blank">Learn Bootstrap 5</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://mdbootstrap.com/docs/standard/" target="_blank">Download
                                MDB UI KIT</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav list-inline">
                        <!-- Icons -->
                        <li class="">
                            <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA"
                                rel="nofollow" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="">
                            <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow"
                                target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-light" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                               <i class="fas fa-user-circle"></i>&nbsp; {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4 bg-gradient-white" aria-labelledby="dropdownMenuButton">
                                <li class="nav-item d-flex justify-content-center">
                                    <a class="nav-link" href="{{ route('logout') }}"
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
        <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
                <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
                <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
            </ol>

            <!-- Inner -->
            <div class="carousel-inner">
                <!-- Single item -->
                <div class="carousel-item active">
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-white text-center">
                                <h1 class="mb-3">Learn Bootstrap 5 with MDB</h1>
                                <h5 class="mb-4">Best & free guide of responsive web design</h5>
                                <a class="btn btn-outline-light btn-lg m-2"
                                    href="https://www.youtube.com/watch?v=c9B4TPnak1A" role="button" rel="nofollow"
                                    target="_blank">Start tutorial</a>
                                <a class="btn btn-outline-light btn-lg m-2"
                                    href="https://mdbootstrap.com/docs/standard/" target="_blank"
                                    role="button">Download MDB UI KIT</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-white text-center">
                                <h2>You can place here any content</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <div class="mask"
                        style="
                background: linear-gradient(
                  45deg,
                  rgba(29, 236, 197, 0.7),
                  rgba(91, 14, 214, 0.7) 100%
                );
              ">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-white text-center">
                                <h2>And cover it with any mask</h2>
                                <a class="btn btn-outline-light btn-lg m-2"
                                    href="https://mdbootstrap.com/docs/standard/content-styles/masks/" target="_blank"
                                    role="button">Learn
                                    about masks</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Inner -->

            <!-- Controls -->
            <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </header>
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
