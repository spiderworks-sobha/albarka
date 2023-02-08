
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>{{$common_settings['site_name']}} - Admin Dashboard - Lock Screen</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset($common_settings['fav_icon'])}}">

        <!-- App css -->
        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/custom.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-body accountbg">

        <!-- Log In page -->
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a class="logo logo-admin">
                                            <img src="{{asset($common_settings['logo'])}}" height="100%" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 font-weight-semibold text-dark font-18">{{$common_settings['site_name']}} Admin Panel</h4>   
                                        <p class="text-dark  mb-0">Sign in to continue to {{$common_settings['site_name']}}.</p>  
                                    </div>
                                </div>
                                <div class="card-body p-0">

                                    

                                    

                                        <div class="tab-pane active p-3" id="LogIn_Tab" role="tabpanel">   
                                            <div class="tab-content">
                                            @if ($errors->any())
                                                @foreach ($errors->all() as $error)
                                                <div class="alert alert-danger text-center" role="alert">
                                                  {{ $error }}
                                                </div>                                     
                                                @endforeach
                                            @endif

                                            <form class="form-horizontal auth-form" method="POST" id="LoginFrm" action="{{ route('admin_login') }}">
                                                @csrf
                                                <div class="form-group mb-2">
                                                    <label for="username">Email</label>
                                                    <div class="input-group">
                                                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="Enter your email" required autofocus />                      </div>                                    
                                                </div><!--end form-group--> 
                    
                                                <div class="form-group mb-2">
                                                    <label for="userpassword">Password</label>                                            
                                                    <div class="input-group">
                                                        <x-input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="current-password" placeholder="Enter password" />                               
                                                    </div>                               
                                                </div><!--end form-group--> 
                    
                                                <div class="form-group row my-3">
                                                    <div class="col-sm-6">
                                                        <div class="custom-control custom-switch switch-success">
                                                            <input id="remember_me" type="checkbox" class="custom-control-input" name="remember" id="customSwitchSuccess">
                                                            <label class="custom-control-label text-muted" for="customSwitchSuccess">Remember me</label>
                                                        </div>
                                                    </div><!--end col--> 
                                                    <div class="col-sm-6 text-right">
                                                        <a href="{{ route('password.request') }}" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>                                    
                                                    </div>
                                                </div><!--end form-group--> 
                    
                                                <div class="form-group mb-0 row">
                                                    <div class="col-12">
                                                        <button class="btn btn-dark btn-block waves-effect waves-light">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                                    </div><!--end col--> 
                                                </div> <!--end form-group-->                           
                                            </form><!--end form-->

                                        </div>
                                        
                                    </div>
                                </div><!--end card-body-->
                                @if($common_settings['google_login'] == 1)
                                <hr/>
                                <div class="text-center">
                                    <div id="g_id_onload"
                                        data-client_id="{{$common_settings['google_auth_client_id']}}"
                                        data-login_uri="{{route('google.login')}}"
                                        data-auto_prompt="false">
                                    </div>
                                    <div class="g_id_signin"
                                        data-type="standard"
                                        data-size="large"
                                        data-theme="outline"
                                        data-text="sign_in_with"
                                        data-shape="rectangular"
                                        data-logo_alignment="left">
                                    </div>
                                </div>
                                @endif
                                <div class="card-body bg-light-alt text-center">
                                    <span class="text-muted d-none d-sm-inline-block">{{$common_settings['site_name']}} © {{date('Y')}}</span>                                            
                                </div>
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page -->

        


        <!-- jQuery  -->
        <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/waves.js')}}"></script>
        <script src="{{asset('admin/assets/js/feather.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/simplebar.min.js')}}"></script>
        <script src="{{asset('admin/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
        @if($common_settings['google_login'] == 1)
            <script src="https://accounts.google.com/gsi/client" async defer></script>
        @endif


        <script type="text/javascript">
            var validator = $('#LoginFrm').validate({
                ignore: [],
                rules: {
                    email: {
                      required: true,
                      email: true,
                    },
                    password: "required",
                  },
                  messages: {
                    email: {
                      required: "Email cannot be blank",
                      email: "Enter a valid email id",
                    },
                    password: "Password cannot be blank",
                  },
                });
        </script>
    </body>

</html>