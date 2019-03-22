@extends('layouts.app')

@section('head')
	<script src="{{ asset('global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js')}}"></script>
	<script src="{{ asset('global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js')}}"></script>
	<script src="{{ asset('global_assets/js/plugins/uploaders/fileinput/fileinput.min.js')}}"></script>
	
	
	
	<script src="{{ asset('global_assets/js/demo_pages/uploader_bootstrap.js')}}"></script>
	
	<!-- Theme JS files -->
	<script src="{{ asset('global_assets/js/plugins/editors/summernote/summernote.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/demo_pages/editor_summernote.js') }}"></script>
	<!-- /theme JS files -->

@endsection

@section('content')

@if (session('status'))
    <div class="alert alert-success alert-styled-left alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
        <span class="font-weight-semibold">{{ session('status') }}</span>
    </div>
@endif
@if ($errors->any())

        <div class="alert alert-warning alert-styled-left alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
            <span class="font-weight-semibold">Atención!</span>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>


@endif

<div class="card">
		<div class="card-header header-elements-inline">
			<h5 class="card-title">Crear Categoria</h5>
			<div class="header-elements">
				<div class="list-icons">
            		
            	</div>
        	</div>
		</div>

		<div class="card-body">
			<form id="formulario" action="{{ route('admin.category.update',$category->id) }}" method="POST" enctype="multipart/form-data">
				
				@csrf

				@method('PUT')

				<div class="form-group">
					
					<label for="">Nombre de la categoria</label>
				
					<input class="form-control" type="text" name="name" value="{{ $category ? $category->name :old('name') }}" >
				
				</div>

				<button type="submit" class="btn btn-success">Guardar</button>
			</form>
		</div>
	</div>
@endsection
