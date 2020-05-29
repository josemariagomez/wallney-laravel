{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}

 <!DOCTYPE html>
 <html lang="es">
 <head>
     <title>{{ __('Reset Password') }} | Wallney</title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">	
     <link rel="icon" type="image/png" href="/assets/login/images/icons/favicon.ico"/>
     <link rel="stylesheet" type="text/css" href="/assets/login/vendor/bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="/assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="/assets/login/vendor/animate/animate.css">	
     <link rel="stylesheet" type="text/css" href="/assets/login/vendor/css-hamburgers/hamburgers.min.css">
     <link rel="stylesheet" type="text/css" href="/assets/login/vendor/select2/select2.min.css">
     <link rel="stylesheet" type="text/css" href="/assets/login/css/util.css">
     <link rel="stylesheet" type="text/css" href="/assets/login/css/main.css">
     <style>
         .is-invalid {
             border: 1px solid tomato;
         }
     </style>
 </head>
 <body>
     
     <div class="limiter">
         <div class="container-login100">
             <div class="wrap-login100" style="padding: 92px 60px 83px 40px">
                 <div class="login100-pic js-tilt" data-tilt>
                     <a href="/">
                         <img src="/assets/login/images/login-img.png" alt="Wallney logo">
                     </a>
                 </div>
                 
                 
                 <div>
                     <span class="login100-form-title">
                         {{ __('Reset Password') }}
                     </span>
                     @if (session('status'))
                         <div class="alert alert-success" role="alert">
                             {{ session('status') }}
                         </div>
                     @endif
 
                     <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-12">
                                <button type="submit" class="login100-form-btn">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                 </div>
             </div>
         </div>
     </div>
     
     
 
         
     <script src="/assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
     <script src="/assets/login/vendor/bootstrap/js/popper.js"></script>
     <script src="/assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
     <script src="/assets/login/vendor/select2/select2.min.js"></script>
     <script src="/assets/login/vendor/tilt/tilt.jquery.min.js"></script>
     <script >
         $('.js-tilt').tilt({
             scale: 1.1
         })
     </script>
     <script src="/assets/login/js/main.js"></script>
 
 </body>
 </html>