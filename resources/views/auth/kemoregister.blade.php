<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Register | eLearners Portal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

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
                                     The e-Learners Portal
                                </h4>
                                <a href="#" class="auth-logo">
                                    <img src="assets/auth/images/coa.png" height="70" class="logo-dark mx-auto" alt="">
                                    <img src="assets/auth/images/coa.png" height="70" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>
    
                       
    
                        <div class="p-3">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                        
                                <!-- Name -->
                                <div >
                                    {{-- <x-input-label for="name" :value="__('Name')" /> --}}
                                    <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <br>
                        
                                <!-- Email Address -->
                                {{-- <div class="mt-4">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div> --}}
                                {{-- <div class="mt-4">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div> --}}
                        
                                <div >
                                    {{-- <x-input-label for="exam_number" :value="__('Exam Number')" /> --}}
                                    <x-text-input id="username"  class="form-control" type="string" name="username" :value="old('username')" required autocomplete="username" placeholder="Useraname"/>
                                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                                </div>
                                <br>
                                <!-- Password -->
                                <div >
                                    {{-- <x-input-label for="password" :value="__('Password')" /> --}}
                        
                                    <x-text-input id="password" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password"
                                                    class="form-control"
                                                    placeholder="Password"
                                                    required autocomplete="new-password" />
                        
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <br>
                                <!-- Confirm Password -->
                                <div>
                                    {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}
                        
                                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                    type="password"
                                                    class="form-control"
                                                    placeholder="Confirm Password"
                                                    name="password_confirmation" required autocomplete="new-password" />
                        
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                        
                                
                                {{-- <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="form-label ms-1 fw-normal" for="customCheck1">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
                                        </div>
                                    </div>
                                </div> --}}
                                <br>
                                <div class="form-group text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Register</button>
                                    </div>
                                </div>
    
                                <div class="form-group mt-2 mb-0 row">
                                    <div class="col-12 mt-3 text-center">
                                        <a href="{{route('login')}}" class="text-muted">Already have account?</a>
                                    </div>
                                </div>
                            </form>
                            <!-- end form -->
                        </div>
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

    </body>
</html>
