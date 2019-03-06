@extends('layouts.app')

@section('head')
<script src="{{ asset('global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
@endsection


@section('content')




@if (session('error'))

		<div class="alert alert-warning alert-styled-left alert-dismissible">
			<button type="button" class="close" data-dismiss="alert"><span>×</span></button>
			<span class="font-weight-semibold">{{ session('error') }}</span>
	    </div>
@endif

@if (session('success'))

		<div class="alert alert-success alert-styled-left alert-dismissible">
			<button type="button" class="close" data-dismiss="alert"><span>×</span></button>
			<span class="font-weight-semibold">{{ session('success') }}</span>
	    </div>
@endif

<!-- Simple list -->
<div class="card">
	<div class="card-header header-elements-inline">
		<h5 class="card-title">Cursos existentes</h5>
		<div class="pull-right">
			<div class="header-elements d-none">
				<a href="{{ route('events.create') }}" class="btn btn-labeled btn-labeled-right bg-pink-400">Nuevo <b><i class="icon-add"></i></b></a>
			</div>
		</div>
	</div>

	<div class="card-body">


		<table class="table datatable-show-all">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Fecha de inicio</th>
					<th>pais</th>
					<th>Acciones</th>
					
				</tr>
			</thead>
			<tbody>
			
				@forelse($events as $event)
				
					<tr>
						<td><strong>{{ $event->name }}</strong></td>
						<td>{{ $event->date_start }}</td>
						<td>{{ $event->country->name }}</td>


						<td>
							
						</td>

					</tr>
				
				@empty
					<tr>
						<td>Si Cursos disponibles</td>
					</tr>
				@endforelse
			
			</tbody>
		</table>

		
	</div>
</div>
<!-- /simple list -->
@endsection