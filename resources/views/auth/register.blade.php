
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/logo.png" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Register</h4>
							<form method="POST" class="my-login-validation" novalidate="" action="{{ route('register') }}">

                            @if ( Session::get('Success'))
                                <div class="alert alert-success">
                                    {{Session::get('Success')}}
                                </div>
                            @endif
                            @if ( Session::get('Error'))
                                <div class="alert alert-danger">
                                    {{Session::get('Error')}}
                                </div>
                            @endif
                            @csrf

								<div class="form-group">
									<label for="name">Name</label>
									<input id="name" type="text" class="form-control"
                                    name="name" required autofocus placeholder="Enter User Name"
                                    value="{{ old('name') }}">

                                    @error('name')
                                    <div class="text-danger">
                                        {{ $message }}
									</div>
                                    @enderror
								</div>

								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control"
                                    name="email" required placeholder="Enter Email Address"
                                    value="{{ old('email') }}">

                                    @error('email')
                                    <div class="text-danger">
                                        {{ $message }}
									</div>
                                    @enderror
								</div>

                                <div class="form-group">
									<label for="favoriteColorl">Favorite Color</label>
									<input id="favoriteColor" type="text" class="form-control"
                                    name="favoriteColor" required placeholder="Enter Favorite Color"
                                    value="{{ old('favoriteColor') }}">

                                    @error('favoriteColor')
                                    <div class="text-danger">
                                        {{ $message }}
									</div>
                                    @enderror
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control"
                                    name="password" required data-eye placeholder="Enter Password"
                                    value="{{ old('password') }}">

                                    @error('password')
                                    <div class="text-danger">
                                        {{ $message }}
									</div>
                                    @enderror
								</div>

                                <div class="form-group">
									<label for="password-confirm">Confirm Password</label>
									<input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required data-eye placeholder="Confirm Password"
                                    value="{{ old('password_confirmation') }}">

                                    @error('password_confirmation')
                                    <div class="text-danger">
                                        {{ $message }}
									</div>
                                    @enderror
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
										<label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and Conditions</a></label>
										<div class="invalid-feedback">
											You must agree with our Terms and Conditions
										</div>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Register
									</button>
								</div>
								<div class="mt-4 text-center">
									Already have an account? <a href="{{route('login')}}">Login</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2017 &mdash; Your Company
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>
