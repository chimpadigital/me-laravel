<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('global_assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{ asset('global_assets/js/main/jquery.min.js')}}"></script>
	<script src="{{ asset('global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
	<script src="{{ asset('global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<script src="{{ asset('global_assets/js/plugins/ui/ripple.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ asset('assets/js/app.js')}}"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static">
		<div class="navbar-brand">
			<a href="index.html" class="d-inline-block">
				<img src="{{ asset('/img/logo_pmz.png') }}" alt="">
			</a>
		</div>

		
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center mb-3">

				<!-- Login form -->
				<form class="login-form" action="{{ route('login') }}" method="POST">
					@csrf
					<div class="card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
								<i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="mb-0">Ingreso al sistema</h5>
								
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="email" class="form-control  {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Usuario" name="email" value="{{ old('email') }}" required>
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>

								@if ($errors->has('email'))
						            <span class="invalid-feedback" role="alert">
						                <strong>{{ $errors->first('email') }}</strong>
						            </span>
						        @endif
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="password" class="form-control  {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Contraseña" name="password" required>
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
								@if ($errors->has('password'))
						            <span class="invalid-feedback" role="alert">
						                <strong>{{ $errors->first('password') }}</strong>
						            </span>
						        @endif
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Continuar <i class="icon-circle-right2 ml-2"></i></button>
							</div>

							<div class="text-center">
								<a href="{{ route('password.request') }}">Recuperar Contraseña</a>
							</div>
						</div>
					</div>
				</form>
				<!-- /login form -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
