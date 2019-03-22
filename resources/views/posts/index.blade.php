@extends('layouts.app')

@section('head')
<script src="{{ asset('global_assets/js/demo_pages/components_modals.js') }}"></script>
@endsection

@section('content')
<!-- Content area -->
			

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

	<!-- Post grid -->
	<div class="row">					
	@forelse($posts as $post)
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<div class="card-img-actions mb-3">
						<img class="card-img img-fluid" src="{{ Storage::disk('public')->url($post->cover_image) }}" alt="">
						<div class="card-img-actions-overlay card-img">
							<a href="{{ route('admin.post.show',$post->id) }}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
								<i class="icon-link"></i>
							</a>
						</div>
					</div>

					<h5 class="font-weight-semibold mb-1">
						<a href="#" class="text-default">{{ $post->name }}</a>
					</h5>

					<ul class="list-inline list-inline-dotted text-muted mb-3">
						<li class="list-inline-item">Categoria: <a href="#" class="text-muted">{{ $post->category->name }}</a></li>
						<li class="list-inline-item">{{ date('d-m-Y',strtotime($post->created_at)) }}</li>
					</ul>

					{{ $post->summary }}
				</div>

				<div class="card-footer d-flex">
					<a class="btn btn-primary mr-2" href="{{ route('admin.post.show',$post->id) }}"><i class="icon-eye"></i></a>
					<a class="btn btn-success" href="{{ route('admin.post.edit',$post->id) }}"><i class="icon-pencil7"></i></a>
					<button type="button" class="btn bg-danger legitRipple  ml-2" data-toggle="modal" data-target="#modal_destroy_{{$post->id}}"><i class="icon-trash"></i></button>

				</div>
			</div>
		</div>
	
		<!-- inicio Modal -->
		@include('posts.modals.modal-danger-destroy')
		<!-- fin Modal -->

	@empty
		<p>Sin posts disponibles</p>
	@endforelse					
	</div>
	<!-- /post grid -->


	<!-- Pagination -->
	<div class="d-flex justify-content-center mt-3 mb-3">
		{{ $posts->links() }}
	</div>
	<!-- /pagination -->

@endsection