@extends('layouts.app')

@section('head')
<script src="{{ asset('global_assets/js/plugins/media/fancybox.min.js') }}"></script>
<script src="{{ asset('global_assets/js/demo_pages/blog_single.js') }}"></script>
@endsection

@section('content')

@if (session('success'))
    <div class="alert alert-success alert-styled-left alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
        <span class="font-weight-semibold">{{ session('success') }}</span>
    </div>
@endif

<div class="d-flex align-items-start flex-column flex-md-row">

					<!-- Left content -->
					<div class="w-100 overflow-auto order-2 order-md-1">

						<!-- Post -->
						<div class="card">
							<div class="card-body">
								<div class="mb-4">
									<div class="mb-3 text-center">
										<a href="#" class="d-inline-block">
											<img src="{{ Storage::disk('public')->url($post->cover_image) }}" class="img-fluid" alt="">
										</a>
									</div>

									<h4 class="font-weight-semibold mb-1">
										<a href="#" class="text-default">{{ $post->name }}</a>
									</h4>

									<ul class="list-inline list-inline-dotted text-muted mb-3">
										<li class="list-inline-item">Categoria: <a href="#" class="text-muted">{{ $post->category->name }}</a></li>

										<li class="list-inline-item">Pais: <a href="#" class="text-muted">{{ is_null($post->country_id) ?  "Todos los paises" : $post->country->name  }}</a></li>

										<li class="list-inline-item">{{ date('d-m-Y',strtotime($post->created_at)) }}</li>										
									</ul>

								</div>

								{!! $post->description !!}
								
								@include('blog.tags')
							</div>
							
						</div>
						<!-- /post -->

					</div>
					<!-- /left content -->

				</div>
				<!-- /inner container -->

@endsection

@section('scripts')
<script type="text/javascript">
    $('#blog-menu').addClass('active');
</script>
@endsection