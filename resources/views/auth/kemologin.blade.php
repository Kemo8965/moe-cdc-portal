<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Login | Digital Content Developer (CDC)</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/auth/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/auth/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/auth/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/auth/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">

                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <h4 class="login-title">
                                     Digital Content Developer (CDC) 
                                </h4>
                                <a href="#" class="auth-logo">
                                    <img src="assets/auth/images/coa.png" height="70" class="logo-dark mx-auto" alt="">
                                    <img src="assets/auth/images/coa.png" height="70" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>
    
                        <!-- <h4 class="text-muted text-center font-size-18"><b>Sign In</b></h4> -->
    
                        <div class="p-3">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                        
                                <!-- Email Address -->
                                <div>
                                    {{-- <x-input-label for="exam_number" :value="__('Exam Number')" /> --}}
                                    <x-text-input id="username" class="form-control" type="string" name="username" :value="old('username')" placeholder="Username" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                                </div>
                                <br>
                        
                                <!-- Password -->
                                <divs>
                                    {{-- <x-input-label for="password" :value="__('Password')" /> --}}
                        
                                    <x-text-input id="password" class="form-control"
                                                    type="password"
                                                    name="password"
                                                    placeholder="Password"
                                                    required autocomplete="current-password" />
                        
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                        
                                <!-- Remember Me -->
                                <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>
                        
                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                    <div class="form-group mb-0 row mt-2">
                                        <div class="col-sm-7 mt-3">
                                            <a href="/recoverpw" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                        </div>
                                        <div class="col-sm-5 mt-3">
                                            <a href="{{ route('register') }}" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a>
                                        </div>
                                    </div>
                                    @endif
                        
                                    <div class="form-group mb-3 text-center row mt-3 pt-1">
                                        <div class="col-12">
                                            <button  class="btn btn-info w-100 waves-effect waves-light" type="submit">Log In</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- <div class="spinner-container">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            </div> -->

                        </div>
                        <!-- end -->
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

        <script>
            $(window).on('load', function () {
            // Hide the spinner
            $('.spinner-container').fadeOut();
            });
        </script>

    </body>
</html>

<style>
    .spinner-container {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 9999;
}

</style>
