@extends('layouts.app')

@section('content')
    <div class="main-container">
        @include('partials.flash')
        <div class="main-content">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="login-container">
                        <div class="center">
                            <h1>
                                <i class="ace-icon fa fa-leaf green"></i>
                                <span class="red">Ace</span>
                                <span class="white" id="id-text2">Application</span>
                            </h1>
                            <h4 class="blue" id="id-company-text">&copy; Company Name</h4>
                        </div>

                        <div class="space-6"></div>

                        <div class="position-relative">
                            <div id="login-box" class="login-box visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header blue lighter bigger">
                                            <i class="ace-icon fa fa-coffee green"></i>
                                            Please Enter Your Information
                                        </h4>

                                        <div class="space-6"></div>

                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <fieldset>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input id="email" type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}" placeholder="Email"
                                                            required autocomplete="email" autofocus>
                                                        <i class="ace-icon fa fa-envelope"></i>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input id="password" type="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password" placeholder="Password" required
                                                            autocomplete="current-password">
                                                        <i class="ace-icon fa fa-lock"></i> @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </span>
                                                </label>

                                                <div class="space"></div>

                                                <div class="clearfix">
                                                    <label class="inline">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"> Remember Me</span>
                                                    </label>

                                                    <button type="submit"
                                                        class="width-35 pull-right btn btn-sm btn-primary">
                                                        <i class="ace-icon fa fa-key"></i>
                                                        <span class="bigger-110">Login</span>
                                                    </button>
                                                </div>

                                                <div class="space-4"></div>
                                            </fieldset>
                                        </form>

                                        <div class="social-or-login center">
                                            <span class="bigger-110">Or Login Using</span>
                                        </div>

                                        <div class="space-6"></div>

                                        <div class="social-login center">
                                            <a class="btn btn-primary">
                                                <i class="ace-icon fa fa-facebook"></i>
                                            </a>

                                            <a class="btn btn-info">
                                                <i class="ace-icon fa fa-twitter"></i>
                                            </a>

                                            <a class="btn btn-danger">
                                                <i class="ace-icon fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                    </div><!-- /.widget-main -->

                                    <div class="toolbar clearfix">
                                        <div>
                                            <a href="#" data-target="#forgot-box" class="forgot-password-link">
                                                <i class="ace-icon fa fa-arrow-left"></i>
                                                I forgot my password
                                            </a>
                                        </div>

                                        <div>
                                            <a href="#" data-target="#signup-box" class="user-signup-link">
                                                I want to register
                                                <i class="ace-icon fa fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- /.widget-body -->
                            </div><!-- /.login-box -->

                            <div id="forgot-box" class="forgot-box widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header red lighter bigger">
                                            <i class="ace-icon fa fa-key"></i>
                                            Retrieve Password
                                        </h4>

                                        <div class="space-6"></div>
                                        <p>
                                            Enter your email and to receive instructions
                                        </p>

                                        <form>
                                            <fieldset>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="email" class="form-control" placeholder="Email" />
                                                        <i class="ace-icon fa fa-envelope"></i>
                                                    </span>
                                                </label>

                                                <div class="clearfix">
                                                    <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                                                        <i class="ace-icon fa fa-lightbulb-o"></i>
                                                        <span class="bigger-110">Send Me!</span>
                                                    </button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div><!-- /.widget-main -->

                                    <div class="toolbar center">
                                        <a href="#" data-target="#login-box" class="back-to-login-link">
                                            Back to login
                                            <i class="ace-icon fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div><!-- /.widget-body -->
                            </div><!-- /.forgot-box -->

                            <div id="signup-box" class="signup-box widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header green lighter bigger">
                                            <i class="ace-icon fa fa-users blue"></i>
                                            New User Registration
                                        </h4>

                                        <div class="space-6"></div>
                                        <p> Enter your details to begin: </p>

                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <fieldset>
                                                <label
                                                    class="
                                                     block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input id="email" type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}" placeholder="Email"
                                                            required autocomplete="email" autofocus>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <i class="ace-icon fa fa-envelope"></i>
                                                    </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input id="name" type="text"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            name="name" value="{{ old('name') }}" placeholder="Username"
                                                            required autocomplete="name" autofocus>

                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <i class="ace-icon fa fa-user"></i>
                                                    </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input id="password" type="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password" placeholder="Password" required
                                                            autocomplete="new-password">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <i class="ace-icon fa fa-lock"></i>
                                                    </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input id="password-confirm" type="password" class="form-control"
                                                            name="password_confirmation" placeholder="Repeat password"
                                                            required autocomplete="new-password">
                                                        <i class="ace-icon fa fa-retweet"></i>
                                                    </span>
                                                </label>

                                                <label class="block">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl">
                                                        I accept the
                                                        <a href="#">User Agreement</a>
                                                    </span>
                                                </label>

                                                <div class="space-24"></div>

                                                <div class="clearfix">
                                                    <button type="reset" class="width-30 pull-left btn btn-sm">
                                                        <i class="ace-icon fa fa-refresh"></i>
                                                        <span class="bigger-110">Reset</span>
                                                    </button>

                                                    <button type="submit"
                                                        class="width-65 pull-right btn btn-sm btn-success">
                                                        <span class="bigger-110">Register</span>

                                                        <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                    </button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>

                                    <div class="toolbar center">
                                        <a href="#" data-target="#login-box" class="back-to-login-link">
                                            <i class="ace-icon fa fa-arrow-left"></i>
                                            Back to login
                                        </a>
                                    </div>
                                </div><!-- /.widget-body -->
                            </div><!-- /.signup-box -->
                        </div><!-- /.position-relative -->

                        <div class="navbar-fixed-top align-right">
                            <br />
                            &nbsp;
                            <a id="btn-login-dark" href="#">Dark</a>
                            &nbsp;
                            <span class="blue">/</span>
                            &nbsp;
                            <a id="btn-login-blur" href="#">Blur</a>
                            &nbsp;
                            <span class="blue">/</span>
                            &nbsp;
                            <a id="btn-login-light" href="#">Light</a>
                            &nbsp; &nbsp; &nbsp;
                        </div>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.main-content -->
    </div><!-- /.main-container -->
@endsection
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
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
</div> --}}
