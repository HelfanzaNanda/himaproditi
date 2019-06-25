{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login Anggota</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('anggota.login.submit') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username"
                                   class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text"
                                       class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                       name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember"
                                           id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

--}}

        <!doctype html>
<!--[if lte IE 9]>
<html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en"> <!--<![endif]-->

<!-- Mirrored from altair_html.tzdthemes.com/login_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 May 2019 01:22:35 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">

    <title>Altair Admin v2.21.0 - Login Page v2</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>

    <!-- uikit -->
    <link rel="stylesheet" href="{{asset('assets/bower_components/uikit/css/uikit.almost-flat.min.css')}}"/>

    <!-- altair admin login page -->
    <link rel="stylesheet" href="{{asset('assets/css/login_page.min.css')}}"/>

</head>
<body class="login_page login_page_v2">

<div class="uk-container uk-container-center">
    <div class="md-card">
        <div class="md-card-content padding-reset">
            <div class="uk-grid uk-grid-collapse">
                <div class="uk-width-large-2-3 uk-hidden-medium uk-hidden-small">
                    <div class="login_page_info uk-height-1-1"
                         style="background-image: url('{{asset('assets/img/others/sabri-tuzcu-331970.jpg')}}')">
                        <div class="info_content">
                            <h1 class="heading_b">Login Page Header</h1>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aut culpa cumque eaque
                            earum error esse exercitationem fuga, fugiat harum perferendis praesentium quasi qui,
                            repellendus sapiente, suscipit totam! Eaque, excepturi!

                        </div>
                    </div>
                </div>
                <div class="uk-width-large-1-3 uk-width-medium-2-3 uk-container-center">
                    <div class="login_page_forms">
                        <div id="login_card">
                            <div id="login_form">
                                <div class="login_heading">
                                    <div class="user_avatar"></div>
                                </div>
                                <form action="{{route('anggota.login')}}" method="post">
                                    @csrf
                                    <div class="uk-form-row">
                                        <label for="login_username">Username</label>
                                        <input class="md-input" type="text" id="login_username" name="username"
                                               {{ $errors->has('username') ? ' is-invalid' : '' }} value="{{ old('username') }}"
                                               required autofocus/>
                                        @if ($errors->has('username'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="uk-form-row">
                                        <label for="login_password">Password</label>
                                        <input class="md-input{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               type="password" id="login_password" name="password" required/>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="uk-margin-medium-top">
                                        <button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large">
                                            Sign In
                                        </button>
                                    </div>

                                    <div class="uk-margin-top">
                                        <a href="#" id="password_reset_show" class="uk-float-right">reset your
                                            password</a>
                                        <span class="icheck-inline">
                                                <input type="checkbox" name="login_page_stay_signed"
                                                       id="login_page_stay_signed" data-md-icheck :name="remember"/>
                                                <label for="login_page_stay_signed"
                                                       class="inline-label">Stay signed in</label>
                                            </span>
                                    </div>
                                </form>
                            </div>
                            <div id="login_password_reset" style="display: none">
                                <button type="button"
                                        class="uk-position-top-right uk-close uk-margin-right back_to_login"></button>
                                <h2 class="heading_a uk-margin-large-bottom">Reset password</h2>
                                <form>
                                    <div class="uk-form-row">
                                        <label for="login_email_reset">Your email address</label>
                                        <input class="md-input" type="text" id="login_email_reset"
                                               name="login_email_reset"/>
                                    </div>
                                    <div class="uk-margin-medium-top">
                                        <a href="index-2.html" class="md-btn md-btn-primary md-btn-block">Reset
                                            password</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- common functions -->
<script src="{{asset('assets/js/common.min.js')}}"></script>
<!-- uikit functions -->
<script src="{{asset('assets/js/uikit_custom.min.js')}}"></script>
<!-- altair core functions -->
<script src="{{asset('assets/js/altair_admin_common.min.js')}}"></script>

<!-- altair login page functions -->
<script src="{{asset('assets/js/pages/login.min.js')}}"></script>

<script>
    // check for theme
    if (typeof(Storage) !== "undefined") {
        var root = document.getElementsByTagName('html')[0],
            theme = localStorage.getItem("altair_theme");
        if (theme == 'app_theme_dark' || root.classList.contains('app_theme_dark')) {
            root.className += ' app_theme_dark';
        }
    }
</script>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-65191727-1', 'auto');
    ga('send', 'pageview');
</script>
</body>

<!-- Mirrored from altair_html.tzdthemes.com/login_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 May 2019 01:22:40 GMT -->
</html>