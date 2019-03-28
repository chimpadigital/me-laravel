@extends('layouts.site')

@section('facebook-shared')
<meta property="og:url"           content="{{ route('notes',$post->id) }}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{ "Me Experiencias-".$post->name }}" />
<meta property="og:description"   content="{{ $post->summary }}" />
@endsection

@section('content')

     <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="mb-4 wow fadeInLeft mt-150" data-wow-delay="0.7s">
                        <h2 class="text-warning mb-3">{{ $post->name }}</h2>
                        <i class="text-warning fa fa-calendar float-left mr-2"></i> <p class="text-warning">{{ date('d/m/Y',strtotime($post->created_at)) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix bg-white position-relative" id="home" style="z-index:0;">
        <div class="container h-100">
            <div class="row h-100">
                
                <div class="col-12 col-md-8  mt-5 mt-4 text-center text-lg-left">
                    <div class="mb-5 wow fadeInLeft" data-wow-delay="0.7s">
                        {!! $post->description !!}
                    </div>
                    <div class="container">
                        <div class="mb-4">
                            <div class="fb-share-button" data-href="{{ route('notes',$post->id) }}" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
                        </div>
                    </div>

                    
                    <div class="container">

                        <div data-width="100%" class="fb-comments" data-href="{{ route('notes',$post->id) }}" data-numposts="5"></div>

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

                </div>
            </div>
        </div>
        
    </section>
    <!-- ***** Wellcome Area End ***** -->
    <section class="bg-white pb-5">

        <!-- <div class="container">
            <div class="widget">
                <div class="fb-share-button" data-href="{{ route('notes',$post->id) }}" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
            </div>
        </div>

        
        <div class="container">

            <div data-width="100%" class="fb-comments" data-href="{{ route('notes',$post->id) }}" data-numposts="5"></div>

        </div> -->
        

    </section>

@endsection

@section('section-scripts')
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2&appId=2055355464685660&autoLogAppEvents=1"></script>

@endsection