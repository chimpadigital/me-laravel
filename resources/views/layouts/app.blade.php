<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('global_assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/intlTelInput.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/fakeLoader.css') }}">


	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="{{ asset('js/fakeLoader.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
	<script src="{{ asset('global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<script src="{{ asset('global_assets/js/plugins/ui/slinky.min.js')}}"></script>
	<script src="{{ asset('global_assets/js/plugins/ui/ripple.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ asset('global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
	<script src="{{ asset('global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
	<script src="{{ asset('global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
	<script src="{{ asset('global_assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
	<script src="{{ asset('global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
	<script src="{{ asset('global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>
	<script src="{{ asset('assets/js/app.js')}}"></script>
	<script src="{{ asset('global_assets/js/demo_pages/dashboard.js')}}"></script>

	<!-- /theme JS files -->

	@yield('head')

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark bg-indigo">
		<div class="navbar-brand wmin-0 mr-5">
			<a href="index.html" class="d-inline-block">
				<img src="{{ asset('/img/logo_pmz.png') }}" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
		</div>
		
		<div class="collapse navbar-collapse" id="navbar-mobile">
			

			<span class="badge bg-success-400 badge-pill ml-md-3 mr-md-auto"></span>

			<ul class="navbar-nav ml-auto">
				@php
					$userAuth = Auth::user();
				@endphp
				<li class="nav-item dropdown">
					<a href="" class="navbar-nav-link legitRipple" title="Tiene nuevas notificaciones">
						<i class="icon-bell2"></i>
						<span class="d-xl-none ml-2">Notificaciones</span>
						<span class="badge badge-mark border-pink ml-auto ml-md-0"></span>
					</a>					
				</li>
				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="
						@if(is_null($userAuth->avatar))
							https://www.w3schools.com/w3images/avatar2.png
						@else
							{{Storage::disk('public')->url($userAuth->avatar)}}
						@endif
						" class="rounded-circle mr-2" height="34" alt="">
						<span>{{ $userAuth->name }}</span>
					</a>
					

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> Mi perfil</a>
						
						<div class="dropdown-divider"></div>

						<a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-exit3"></i> Finalizar</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		                 @csrf
		                </form>
					</div>
				</li>
			</ul>
		</div>
		
	</div>
	<!-- /main navbar -->


	<!-- Secondary navbar -->
	<div class="navbar navbar-expand-md navbar-light">
		<div class="text-center d-md-none w-100">
			<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-navigation">
				<i class="icon-unfold mr-2"></i>
				Navegacion
			</button>
		</div>

		<div class="navbar-collapse collapse" id="navbar-navigation">
			<ul class="navbar-nav navbar-nav-highlight">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link active legitRipple">
						<i class="icon-home4 mr-2"></i>
						Inicio
					</a>
				</li>
				
					<li class="nav-item dropdown">
						<a href="#" class="navbar-nav-link dropdown-toggle legitRipple" data-toggle="dropdown">
							<i class="icon-users mr-2"></i>
							Cursos 
						</a>

						<div class="dropdown-menu">
							<!--<div class="dropdown-header">Basic layouts</div>-->
							<a href="{{ route('events.create') }}" class="dropdown-item"><i class="icon-file-plus"></i> Nueva curso</a>

							<a href="{{ route('events.index') }}" class="dropdown-item"><i class="icon-file-spreadsheet"></i> Listar cursos</a>

						</div>
					</li>
			</ul>
		</div>
	</div>
	<!-- /secondary navbar -->


		

	<!-- Page content -->
	<div class="page-content pt-0 mt-2">

		<!-- Main content -->
		<div class="content-wrapper">
		
		@yield('header-content')
			<!-- Content area -->
			<div class="content">

				@yield('content')
				

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


	<!-- Footer -->
	<div class="navbar navbar-expand-lg navbar-light">
		

			<ul class="navbar-nav ml-lg-auto">
				<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Mesa de Ayuda</a></li>
				
			</ul>
		</div>
	</div>
	<!-- /footer -->
	@yield('scripts')
</body>
</html>
