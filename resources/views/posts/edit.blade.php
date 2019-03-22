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
			<h5 class="card-title">Crear Post</h5>
			<div class="header-elements">
				<div class="list-icons">
            		
            	</div>
        	</div>
		</div>

		<div class="card-body">
			<form id="formulario" action="{{ route('admin.post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
				
				@csrf

				@method('PUT')
				
				<div class="form-row">
					
					<div class="form-group col-md-6">
				
						<label for="">Titulo:</label>
					
						<input class="form-control" type="text" name="name" required value="{{ $post ? $post->name : old('name') }}">
					
					</div>

					<div class="form-group col-md-6">
				
						<label for="">Categoria:</label>
					
						<select id="category" class="form-control" name="category" required>
							
							@forelse($categories as $category)
								<option value="{{ $category->id }}">{{ $category->name }}</option>
							@empty

								<option selected disabled> Sin categorias </option>
							
							@endforelse

						</select>
					
					</div>

					


				</div>

				<div class="form-row">
					
					<div class="form-group col-md-6">
				
						<label for="">Resumen:</label>
					
						<input class="form-control" type="summary" name="summary" required value="{{ $post ? $post->summary : old('summary') }}">
					
					</div>

					<div class="form-group col-md-6">
				
						<label for="">Pais:</label>
					
						<select id="country" class="form-control" name="country" required>
							
							@forelse($countries as $country)
								<option value="{{ $country->id }}">{{ $country->name }}</option>
							@empty

								<option selected disabled> Sin paises </option>
							
							@endforelse

						</select>
					
					</div>

					


				</div>

					
				<div class="form-group">
					
				
					<label for="">Descripción:</label>
				
					<div id="summernote" class="summernote">{!! $post ? $post->description : old('description') !!}</div>
				
					<input id="description" class="form-control" type="hidden" name="description" required>
				
			

				</div>
				


				<div class="form-group">
					
					<label for="">Imagen de Portada</label>
				
					<input class="file-input" type="file" data-show-caption="false" data-show-upload="false" data-show-remove="true" name="img">
				
				</div>

				<button type="submit" class="btn btn-success">Guardar</button>
			</form>
		</div>
	</div>
@endsection

@section('scripts')
<script type="text/javascript">
	$('#formulario').submit(function(){
		var markupStr = $('#summernote').summernote('code');
		$('#description').val(markupStr);
			
	});
	

    $('#summernote').summernote({
	    height: ($(window).height() - 300),
	    callbacks: {
	        onImageUpload: function(image) {
	            uploadImage(image[0]);
	        }
	    }
	});

	function uploadImage(image) {
	    var data = new FormData();
	    data.append("image", image);
	    data.append("_token", "{{ csrf_token() }}");
	    $.ajax({
	        url: '{{ route('img.store') }}',
	        cache: false,
	        contentType: false,
	        processData: false,
	        data: data,
	        type: "post",
	        success: function(url) {
	            var image = $('<img>').attr('src', url);
	            $('#summernote').summernote("insertNode", image[0]);
	            console.log(url);
	        },
	        error: function(data) {
	            console.log(data);
	        }
	    });
}


$('#category').val({{ $post ? $post->category_id : old('category') }});
$('#country').val({{ $post ? $post->country_id : old('country') }});

</script>
@endsection