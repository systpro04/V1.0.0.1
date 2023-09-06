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
                                        Users Information
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="horizontal light my-sm-4" />
                <div class="row">
                    <div class="col-12">
                        <div class="card my-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-success shadow-primary border-radius-lg pt-4 pb-3">
                                    <h6 class="text-white text-capitalize ps-3">Users List</h6>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table
                                        class="table table-striped table-bordered align-items-center mb-0 text-center">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Created</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user )
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>
                                                    <a href="" class="btn btn-sm btn-info"><i class="fas fa-pen"></i></a>
                                                    <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
