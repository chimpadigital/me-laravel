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
				<a href="{{ route('admin.category.create') }}" class="btn btn-labeled btn-labeled-right bg-pink-400">Nuevo <b><i class="icon-add"></i></b></a>
			</div>
		</div>
	</div>

	<div class="card-body">


		<table class="table datatable-show-all">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			
				@forelse($categories as $category)
				
					<tr>
						<td><strong>{{ $category->name }}</strong></td>

						<td>
							<div class="align-self-center ml-3">
							<div class="list-icons list-icons-extended">
		                    	<a href="{{ route('admin.category.edit',$category->id) }}" class="list-icons-item" data-popup="tooltip" title="Modificar"  data-original-title="Mdificar"><i class="icon-pencil7"></i></a>
		                    	<form action="{{ route('admin.category.destroy',$category->id) }}" method="POST">
								    @method('DELETE')
								    @csrf
								   <button type="submit" class="icon-trash" data-popup="tooltip" title="Eliminar" data-original-title="Eliminar"></button>
								</form>
							</div>
						</div>
						</td>

					</tr>
				
				@empty
					<tr>
						<td>Sin Categorias disponibles</td>
					</tr>
				@endforelse
			
			</tbody>
		</table>

		
	</div>
</div>
<!-- /simple list -->
@endsection