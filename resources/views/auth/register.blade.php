{{-- @extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center mt-5">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{ route('register') }}" class="feed-form">
                    @csrf

                    <div class="row">
                        <div class="col-md-12">
                            <input id="name" placeholder="Name" type="text"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <input id="username" placeholder="Username" type="text"
                                class="form-control @error('username') is-invalid @enderror" name="username"
                                value="{{ old('username') }}" autocomplete="username" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <input id="email" placeholder="Email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <input id="password" placeholder="Password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control"
                                name="password_confirmation" autocomplete="new-password">
                        </div>
                    </div>

                    <button type="submit" class="button_submit">
                        <i class="fas fa-sign-in-alt"></i> Register
                    </button>
            </div>
            </form>
        </div>
    </div>
@endsection




<style>
    .feed-form {
        margin-top: 40px;
        display: flex;
        flex-direction: column;
        width: 350px;
        justify-content: center;
    }

    .feed-form input {
        height: 54px;
        border-radius: 5px;
        background: rgb(221, 221, 221);
        margin-bottom: 15px;
        border: black;
        padding: 0 20px;
        font-weight: 300;
        font-size: 15px;
        color: #000000;

    }

    .button_submit:hover,
    .feed-form input:hover {
        transform: scale(1.009);
        box-shadow: 0px 0px 3px 0px #212529;
    }

    .button_submit {
        width: 100%;
        height: 50px;
        font-size: 14px;
        color: rgb(255, 255, 255);
        background: rgba(255, 0, 85, 0.829);

        border-radius: 5px;
        border: none;
        font-weight: 500;
        /* text-transform: uppercase; */
    }
</style> --}}
