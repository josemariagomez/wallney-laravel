<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | Wallney</title>
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
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <a href="/">
                        <img src="/assets/login/images/login-img.png" alt="Wallney logo">
                    </a>
                </div>
                
                <form class="login100-form validate-form" action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }}
					<span class="login100-form-title">
                        {{ __('web.login_login') }}
                    </span>


					<div class="wrap-input100" @error('username') data-validate="{{ $message }}" @else data-validate="{{ __('web.login_valid_email') }}" @enderror>
						<input class="input100 email-alert" type="text" value="{{ old('email') }}" name="email" required autocomplete="off" placeholder="{{ __('web.login_email_or_username') }}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="{{ __('web.login_password_required') }}">
						<input class="input100 pass-alert" type="password" autocomplete="off" name="password" placeholder="{{ __('web.login_password') }}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							{{ __('web.login_submit') }}
                        </button>
                        @if (Route::has('password.request'))
                            <a class="pt-2" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
					</div>

					<div class="text-center p-t-136">
						<a href="{{ route('register') }}">{{ __('web.login_register_here') }}</a>
					</div>
				</form>
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
    <script>
        function showValidate(input) {
            var thisAlert = $(input).parent();
            $(thisAlert).addClass('alert-validate');
        }
                    
        @if($errors->any())
            showValidate($('.email-alert'));
        @enderror
    </script>

</body>
</html>