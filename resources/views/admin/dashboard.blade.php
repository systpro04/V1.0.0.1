@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 position-relative z-index-2">
                <div class="card card-plain">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <h3 class="font-weight-bolder text-light">
                                        General Statistics
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="horizontal light my-sm-4" />
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card mb-2">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="fas fa-user-tag"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Users</p>
                                    <h4 class="mb-0">{{ $users->count() }}</h4>
                                </div>
                            </div>

                            <hr class="dark horizontal my-0" />
                            <div class="card-footer p-3">
                                <p class="mb-0">
                                    <span class="text-success text-sm font-weight-bolder">+{{ $users->count() }}</span>
                                    user(s) available
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-5 mt-sm-0 mt-4">
                        <div class="card mb-2">
                            <div class="card-header p-3 pt-2 bg-transparent">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Visitors</p>
                                    <h4 class="mb-0">{{ $users->count() }}</h4>
                                </div>
                            </div>

                            <hr class="horizontal my-0 dark" />
                            <div class="card-footer p-3">
                                <p class="mb-0">
                                    <span class="text-success text-sm font-weight-bolder">{{ $users->count() }}
                                    </span>visitor(s) available
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card mb-2">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">weekend</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Bookings</p>
                                    <h4 class="mb-0">281</h4>
                                </div>
                            </div>

                            <hr class="dark horizontal my-0" />
                            <div class="card-footer p-3">
                                <p class="mb-0">
                                    <span class="text-success text-sm font-weight-bolder">+55% </span>than last week
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-5 mt-sm-0 mt-4">
                        <div class="card mb-2">
                            <div class="card-header p-3 pt-2 bg-transparent">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">store</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Revenue</p>
                                    <h4 class="mb-0">34k</h4>
                                </div>
                            </div>

                            <hr class="horizontal my-0 dark" />
                            <div class="card-footer p-3">
                                <p class="mb-0">
                                    <span class="text-success text-sm font-weight-bolder">+1% </span>than yesterday
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
