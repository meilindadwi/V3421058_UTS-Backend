<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
        <style type="text/css">
            body {
                margin-top: 20px;
                background: #f6f9fc;
            }

            .account-block {
                padding: 0;
                background-image: url('https://marketplace.canva.com/EAFIbLmuRds/2/0/900w/canva-hitam-dan-putih-modern-malam-wallpaper-telepon-L9SRaqYQdTA.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                height: 100%;
                position: relative;
            }

            .account-block .overlay {
                -webkit-box-flex: 1;
                -ms-flex: 1;
                flex: 1;
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                background-color: rgba(0, 0, 0, 0.4);
            }

            .account-block .account-testimonial {
                text-align: center;
                color: #fff;
                position: absolute;
                margin: 0 auto;
                padding: 0 1.75rem;
                bottom: 3rem;
                left: 0;
                right: 0;
            }

            .text-theme {
                color: #5369f8 !important;
            }

            .btn-theme {
                background-color: #5369f8;
                border-color: #5369f8;
                color: #fff;
            }

            .btn-theme:hover {
                background-color: #fff;
                border-color: #5369f8;
                color: #5369f8;
            }
        </style>
    </head>

    <body>
        <div id="main-wrapper" class="container">
            <div class="row justify-content-center align-items-center mb-5">
                <div class="col-xl-10">
                    <div class="card border-0">
                        <div class="card-body p-0">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="mb-5">
                                            <h3 class="h4 font-weight-bold text-theme">Login</h3>
                                        </div>

                                        <h6 class="h5 mb-0">Welcome back!</h6>
                                        <p class="text-muted mt-2 mb-5">Enter your email and password to access
                                            user dashboard.</p>
                                        <div class="alert alert-info">
                                            <span>
                                                Admin login : <br>
                                                Email : meilinda@gmail.com <br>
                                                Password : linda
                                            </span>
                                        </div>
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            @error('email')
                                            <div class="alert alert-danger" role="alert">
                                                <i class="fa fa-exclamation-triangle"></i>
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                                    name="email" required autocomplete="email" value="{{old('email')}}">
                                            </div>
                                            <div class="form-group mb-5">
                                                <label for="password">Password</label>
                                                <input type="password"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    id="password" name="password" required autocomplete="new-password">
                                            </div>
                                            <button type="submit" class="btn btn-theme">Login</button>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-lg-6 d-none d-lg-inline-block">
                                    <div class="account-block rounded-right">
                                        <div class="overlay rounded-right"></div>
                                        {{-- <div class="account-testimonial">
                                            <h4 class="text-white mb-4">~ Gadget Store ~</h4>
                                            <p class="lead text-white">"Toko HP terlengkap di dunia, dengan prinsip anda
                                                puas kami harus lebih puas."</p>
                                            <p>- Admin User</p>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                    <p class="text-muted text-center mt-3 mb-0">Don't have an account? <a href="/register58"
                            class="text-primary ml-1">Register</a></p>

                    <!-- end row -->
                </div>
                <!-- end col -->
            </div>
            <!-- Row -->
        </div>

        <script src="plugins/jquery/jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
    </body>

</html>