
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Reset Password</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  crossorigin="anonymous">
</head>
<body class="my-login-page">
	<section class="vh-100 ">
		<div class="container h-100 ">
			<div class="row justify-content-center align-items-center h-100">
				<div class="card-wrapper">
					<div class="card fat border-0">
						<div class="card-body">
							<h4 class="card-title">Forgot Password</h4>
							<form method="POST" class="my-login-validation" novalidate="">
                                @csrf
                                @if (session('status'))
                                    <div class="alert alert-sucess">
                                        {{session('status')}}
                                    </div>
                                @endif
								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="{{_old('email')}}" required autofocus placeholder="Enter your email addressS">
									<span class="text-danger">@error('email'){{$message}} @enderror</span>
									<div class="form-text text-muted">
										A Reset Password will be sent to your Email.
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Reset Password
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>
