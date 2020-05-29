<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register | Wallney</title>
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

                <form class="login100-form validate-form" action="{{ route('register') }}" method="POST">
                    {{ csrf_field() }}
					<span class="login100-form-title">
						{{ __('web.register_login') }}
					</span>

					<div class="wrap-input100">
						<input class="input100" type="text" value="{{ old('name') }}" name="name" required autocomplete="off" placeholder="{{ __('web.register_name') }}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" @error('username') data-validate="{{ $message }}" @enderror>
						<input class="input100 username-alert" type="text" value="{{ old('username') }}" name="username" required autocomplete="off" placeholder="{{ __('web.register_username') }}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-at" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" @error('email') data-validate="{{ $message }}" @else data-validate="{{ __('web.register_valid-email') }}" @enderror>
						<input class="input100 email-alert" type="text" value="{{ old('email') }}" name="email" required autocomplete="off" placeholder="{{ __('web.register_email') }}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" @error('password') data-validate="{{ $message }}" @else data-validate="{{ __('web.register_confirm_pass') }}" @enderror>
						<input class="input100 pass-alert" type="password" autocomplete="off" name="password" placeholder="{{ __('web.register_password') }}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>
					<div class="wrap-input100 validate-input" data-validate="{{ __('web.register_confirm_pass') }}">
						<input class="input100" type="password" autocomplete="off" name="password_confirmation" placeholder="{{ __('web.register_password_confirmation') }}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							{{ __('web.login_submit') }}
                        </button>
                        <div class="text-center p-t-20">
                            <a href="{{ route('login') }}">{{ __('web.register_login_here') }}</a>
                        </div>
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
                
    @error('password')
        showValidate($('.pass-alert'));
    @enderror
    @error('email')
        showValidate($('.email-alert'));
    @enderror
    @error('username')
        showValidate($('.username-alert'));
    @enderror
    </script>

</body>
</html>