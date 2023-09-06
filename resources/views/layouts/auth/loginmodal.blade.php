<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="{{ route('login') }}" class="feed-form" role="form" id="loginForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="username" placeholder="Username" type="text"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        value="{{ old('username') }}">
                                    @error('username')
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
                                        autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="button_submit">
                                <i class="fas fa-sign-in-alt"></i> Log In
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}"
                                    style="text-decoration: none">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .modal-content {
        background-image: linear-gradient(rgba(245, 246, 252, 0.466), rgba(117, 19, 93, 0.671)), url('{{ asset('image/bg.jpg') }}');
        background-size: cover;
        background-repeat: no-repeat;
    }

    .feed-form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        max-width: 400px;
        margin-left: 30px;
        margin-right: 30px;
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
        margin-bottom: 10px;
    }
</style>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@if($errors->has('username') || $errors->has('password'))
    <script>
        $(function () {
            Swal.fire({
                icon: 'error',
                title: 'Error! Invalid username or password',
                timer: 2000,
                showConfirmButton: false,
                position: 'top-end',
                timerProgressBar: true,
                toast: true
            });
            $('#loginModal').modal('show');
        });
    </script>
@endif
