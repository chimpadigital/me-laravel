@extends('layouts.site')

@section('content')

	<!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix bg-white position-relative" id="home">
        <div class="container h-100 mt-7">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-6 text-center text-lg-left">
                    <div class="wellcome-heading wow fadeInLeft" data-wow-delay="0.7s">
                        <h2>Charlas y conferencias</h2>
                        <h5>Nos encanta propagar la Felicidad como modelo de Negocio a ONGs, Instituciones Educativas, Entes Públicos, Eventos Privados, Conferencias.</h5>
                    </div>
                    <a href="#eventos" class="btn-primary wow fadeInLeft" data-wow-delay="0.9s">VER EVENTOS</a>
                </div>
                <!-- <div class="col-12 col-md-1"></div> -->
                <div class="col-12 col-md-6 mt-5 mt-lg-0 wow fadeInDown" data-wow-delay="1s" style="z-index:1000;">
                    <img src="{{ asset('img/ilustraciones/conferencia.svg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="special-area cursos wow fadeInUp" data-wow-delay="0.3s">
            <div class="container">
                <div class="row mt-7">
                    <div class="col-12 text-center">
                        <!-- Section Heading Area -->
                        <div class="section-heading text-center" id="eventos">
                            <h2 class="color-amarillo">Próximos eventos</h2>
                            <!-- <div class="line-shape"></div> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="app_screenshots_slides owl-carousel">
                        @forelse($events as $event)
							<div class="single-shot">
                                <div class="single-team-member">
                                    <div class="charlas-image">
                                        
                                            <img src="{{asset('storage/'.$event->img)}}" alt="">
                                            
                                                <div class="charlas-hover-effects">
                                                    
                                                        <div class="charlas-social-icon">
                                                            <a href="{{ route('events.show.front',$event->id) }}">
                                                                <h5>{{ $event->name }}</h5>
                                                                <ul class="d-inline-flex charla-info">
                                                                    <li>
                                                                        <i class="fa fa-calendar"></i> {{ date('d',strtotime($event->date_start)) }} / {{ date('m',strtotime($event->date_start)) }}
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-clock-o"></i> {{ $event->hour }}
                                                                    </li>
                                                                </ul>
                                                                <a href="{{ route('events.show.front',$event->id) }}" class="charlas-mas">
                                                                    <i class="fa fa-plus"></i>
                                                                </a>
                                                            </a>
                                                        </div>
                                                    
                                                </div>
                                            
                                        
                                    </div>
                                </div>
                            </div>

                        @empty
                        @endforelse
                    </div>
                    
                </div>
                
            </div>
            </div>
        </div>
        <!-- Welcome thumb -->
        <div class="welcome-thumb">
            <img src="{{ asset('img/ilustraciones/fondo-circulo.svg') }}" alt="">
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->


    <section class="bg-white">
        
        <div class="cursos " style="padding-top: 30px;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <!-- Section Heading Area -->
                        <div class="section-heading text-center" id="eventos">
                            <h2 class="color-amarillo">Eventos pasados</h2>
                            <!-- <div class="line-shape"></div> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    @forelse($pastEvents as $event)
                        
                        <div class="single-team-member col-md-4">
                            
                            <div class="charlas-image">
                                
                            <img src="{{asset('storage/'.$event->img)}}" alt="">
                            
                                <div class="charlas-hover-effects">
                                    
                                        <div class="charlas-social-icon">
                                            <a href="{{ route('events.show.front',$event->id) }}">
                                                <h5>{{ $event->name }}</h5>
                                                <ul class="d-inline-flex charla-info">
                                                    <li>
                                                        <i class="fa fa-calendar"></i> {{ date('d',strtotime($event->date_start)) }} / {{ date('m',strtotime($event->date_start)) }}
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-clock-o"></i> {{ $event->hour }}
                                                    </li>
                                                </ul>
                                                <a href="{{ route('events.show.front',$event->id) }}" class="charlas-mas">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                            </a>
                                        </div>
                                    
                                </div>
                                    
                                
                            </div>
                        </div>
                        

                    @empty

                    @endforelse
                    
                </div>
                
            </div>
            
        </div>
        <div style="display: flex; justify-content: center;">
            
            {{$pastEvents->links()}}
            
        </div>
    </section>
    
    <section>
        <div class="bg-white cursos" style="padding-top: 60px;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <!-- Section Heading Area -->
                        <div class="section-heading text-center" id="eventos">
                            <h2 class="color-amarillo">Eventos en otros paises</h2>
                            <!-- <div class="line-shape"></div> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="app_screenshots_slides owl-carousel">
                        @forelse($eventsOther as $event)
                            <div class="single-shot">
                                <div class="single-team-member">
                                    <div class="charlas-image">
                                        
                                            <img src="{{asset('storage/'.$event->img)}}" alt="">
                                            
                                                <div class="charlas-hover-effects">
                                                    
                                                        <div class="charlas-social-icon">
                                                            <a href="{{ route('events.show.front',$event->id) }}">
                                                                <h5>{{ $event->name }}</h5>
                                                                <ul class="d-inline-flex charla-info">
                                                                    <li>
                                                                        <i class="fa fa-calendar"></i> {{ date('d',strtotime($event->date_start)) }} / {{ date('m',strtotime($event->date_start)) }}
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-clock-o"></i> {{ $event->hour }}
                                                                    </li>
                                                                </ul>
                                                                <a href="{{ route('events.show.front',$event->id) }}" class="charlas-mas">
                                                                    <i class="fa fa-plus"></i>
                                                                </a>
                                                            </a>
                                                        </div>
                                                    
                                                </div>
                                            
                                        
                                    </div>
                                </div>
                            </div>

                        @empty
                        @endforelse
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>

@endsection
@section('section-scripts')
<script type="text/javascript">
    $('#events').addClass('active-nuevo-dos');
</script>
@endsection