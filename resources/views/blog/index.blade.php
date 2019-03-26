@extends('layouts.site')

@section('content')

    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix bg-white position-relative" id="home" style="z-index:0;">
        <div class="container h-100 mt-5">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-4 mt-100 mt-lg-0 text-center text-lg-left">
                    <div class="wellcome-heading wow fadeInLeft" data-wow-delay="0.7s">
                        <h4>Categoría:</h4>    
                        <h2>{{ $category->name }}</h2>
                    </div>
                    <a href="#posts" class="btn-primary wow fadeInLeft" data-wow-delay="0.9s">ENTERARME</a>
                </div>
                <div class="col-12 col-md-2"></div>
                <div class="col-12 col-md-6 wow fadeInDown mt-100" data-wow-delay="1s" style="z-index:1000;">
                    <img src="img/ilustraciones/blog.svg" alt="">
                </div>
            </div>
        </div>
        <div class="special-area wow fadeInUp" data-wow-delay="0.3s">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3"></div>
                    <div class="col-12 col-md-6 text-center">
                        <div class="divider"></div>
                    </div>
                    <div class="col-12 col-md-3"></div>
                </div>
            </div>
        </div>
        <!-- Welcome thumb -->
        <div class="welcome-thumb wow fadeInDown" data-wow-delay="0.4s">
            <img src="img/ilustraciones/fondo-circulo.svg" alt="">
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Special Area Start ***** -->
    <section class="section_padding_100 bg-white" id="posts">
        <div class="container">
            
            <div class="row">
                <!-- Single Special Area -->
                
                <div class="col-12 col-md-8">
                    <div class="row">
                        @forelse($posts as $post)
                        <div class="col-12 col-md-6">
                            <div class="blog-post wow fadeInUp" data-wow-delay="0.2s">
                                <div class="blog-image">
                                    <img src="{{ Storage::disk('public')->url($post->cover_image) }}" alt="">
                                </div>
                                <div class="blog-content">
                                    <h5 class="mb-4">{{ $post->name }}</h5>
                                    <p class="mb-5">{{ $post->summary }}</p>
                                    <a href="{{ route('notes',$post->id) }}" class="btn-primary btn-sm">VER NOTA</a>
                                </div>
                            </div>
                        </div>
                        @empty

                        @endforelse

                    </div>
                    <div class="mt-5">
                        {{ $posts->links() }}
                    </div>
                </div>
               

                <!-- Single Special Area -->
                <div class="col-12 col-md-4 sidebar-blog bg-white">
                    <div class="widget">
                        <h4 class="mb-30">Últimas Noticias</h4>
                        <ul>
                            @include('blog.latest-news')
                        </ul>
                    </div>

                    @include('blog.categories')
<!-- 
                    <div class="widget">
                        <h4 class="mb-30">Archivo</h4>
                        <ul>
                            <li>
                                <a href="">
                                    <p>12/2018</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <p>11/2018</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <p>10/2018</p>
                                </a>
                            </li>
                        </ul>
                    </div> -->

                    <!-- <div class="widget">
                        <h4 class="mb-30">Categorías</h4>
                        <ul>
                            <li>
                                <a href="">
                                    <p>Charlas</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <p>Innovación</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <p>Capacitaciones</p>
                                </a>
                            </li>
                        </ul>
                    </div> -->

                </div>
                
            </div>
        </div>
    </section>

@endsection
@section('section-scripts')
<script type="text/javascript">
    $('#blog').addClass('active-nuevo');
</script>
@endsection