<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-gradient-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-gradient-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/login.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
</head>
<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-gradient-menu preload-transitions 1-column login-bg   blank-page blank-page" data-open="click" data-menu="vertical-gradient-menu" data-col="1-column">
<div class="row">
    <div class="col s12">
        <div class="container"><div id="login-page" class="row">
                <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
                    <form class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row">
                            <div class="input-field col s12">
                                <h5 class="ml-4">Sign in</h5>
                            </div>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">person_outline</i>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                <label for="username" class="center-align">{{ __('E-Mail Address') }}</label>

                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">lock_outline</i>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m12 l12 ml-2 mt-1">
                                <p>
                                    <label>
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <span for="remember">{{ __('Remember Me') }}</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">
                                                                    {{ __('Login') }}
                                                                </button>
                            </div>
                        </div>
{{--                        <div class="row">--}}
{{--                            <div class="input-field col s6 m6 l6">--}}
{{--                                <p class="margin medium-small"><a href="user-register.html">Register Now!</a></p>--}}
{{--                            </div>--}}
{{--                            <div class="input-field col s6 m6 l6">--}}
{{--                                <p class="margin right-align medium-small"><a href="user-forgot-password.html">Forgot password ?</a></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </form>
                </div>
            </div>
        </div>
        <div class="content-overlay"></div>
    </div>
</div>

<!-- BEGIN VENDOR JS-->
<script src="../../../app-assets/js/vendors.min.js"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="../../../app-assets/js/plugins.min.js"></script>
<script src="../../../app-assets/js/search.min.js"></script>
<script src="../../../app-assets/js/custom/custom-script.min.js"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!-- END PAGE LEVEL JS-->
</body>
</html>
