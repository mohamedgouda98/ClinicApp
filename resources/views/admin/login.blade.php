<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Meta -->
	<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
	<meta name="author" content="ParkerThemes">
	<link rel="shortcut icon" href="img/fav.png" />

	<!-- Title -->
	<title>Clinic App - Login</title>

	<!-- *************
			************ Common Css Files *************
			************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="{{ asset('assetsAdmin/css/bootstrap.min.css') }}">
		<!-- Main css -->
		<link rel="stylesheet" href="{{ asset('assetsAdmin/css/main.css') }}">
	</head>

<body class="authentication">

	<!-- Container start -->
	<div class="container">

		<form action="{{ route('login') }}" method="post">
			@if ($errors->any())
			@foreach ($errors->all() as $error)
			<div class="alert alert-danger text-center my-1" role="alert">
				{{ $error }}
			</div>
			@endforeach
			@endif
			@csrf
			<div class="row justify-content-md-center">
				<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
					<div class="login-screen">
						<div class="login-box">
							<a href="#" class="login-logo">
								Clinic App
							</a>
							<h5>Welcome back,<br />Please Login to your Account.</h5>
							<div class="form-group">
								<input type="email" id="email" name="email" class="form-control" placeholder="Email Address" />
							</div>
							<div class="form-group">
								<input type="password" id="password" name="password" class="form-control" placeholder="Password" />
							</div>
							<div class="actions">
								<button type="submit" class="btn btn-info">Login</button>
							</div>
							<hr>

						</div>
					</div>
				</div>
			</div>
		</form>

	</div>
	<!-- Container end -->
@include('sweetalert::alert')
</body>


</html>