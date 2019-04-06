@extends('layouts.site')

@section('content')

<!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix bg-white position-relative" id="home">
        <div class="container h-100 mt-8">
            <div class="row h-100">
                <div class="col-12 col-md-6">
                    <div class="wellcome-heading wow fadeInLeft" data-wow-delay="0.7s">
                        <h5>Cursos impulso 2019</h5>
                        <h2>{{ $event->name }}</h2>
                        <p class="text-dark">{{ $event->description }}</p>
                    </div>
                    <ul class="info-evento mb-5 wow fadeInLeft" data-wow-delay=".8s">
                        <li>
                            <img src="{{ asset('img/core-img/calendar.svg') }}" alt="" class="float-left mr-4 icono-evento">
                            <h5>{{ date('d',strtotime($event->date_start)) }} de {{ date('M',strtotime($event->date_start)) }}</h5>
                        </li>
                        <li>
                            <img src="{{ asset('img/core-img/timer.svg') }}" alt="" class="float-left mr-4 icono-evento">
                            <h5>{{ $event->hour }}</h5>
                        </li>
                        <li>
                            <img src="{{ asset('img/core-img/location-point.svg') }}" alt="" class="float-left mr-4 icono-evento">
                            <h5>{{ $event->address }}</h5>
                        </li>
                    </ul>
                    
                    <button class="btn-acordeon wow fadeInUp color-magenta" data-wow-delay="1s" type="button" data-toggle="collapse" data-target="#desc" aria-expanded="false" aria-controls="collapseExample">
                        Acerca del evento <img src="{{ asset('img/core-img/plus.svg') }}" class="float-right" alt="">
        
                        <div class="collapse" id="desc">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12">
                                      
                                      {!! $event->about_event !!}

                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </button>

                    <button class="btn-acordeon wow fadeInUp color-magenta" data-wow-delay="1.2s" type="button" data-toggle="collapse" data-target="#temas" aria-expanded="false" aria-controls="collapseExample">
                        Que vamos a aprender <img src="{{ asset('img/core-img/plus.svg') }}" class="float-right" alt="">
        
                        <div class="collapse" id="temas">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="evento">
                                            
                                            {!! $event->temary !!}
                                            
                                        </ul>

                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </button>
                </div>

                <div class="col-12 col-md-1"></div>
                <div class="col-12 col-md-5 wow fadeInDown" data-wow-delay="1s" style="z-index:1000;">
                    <div class="precio">
                        @if(date(('Y-m-d')) <= $event->date_start )
                        <h3 class="">Costo</h3>
                        <h1 class="mb-4"> @if(app('config')->get('app.country')=='ar')$ @endif {{ $event->price }} @if(app('config')->get('app.country')=='cr') USD @endif</h1>

                        
                        <a href="{{ route('events.inscription.front',$event->id) }}" class="btn btn-primary mt-5">Inscribirse</a>

                        @else
                            <h3 class="">Evento terminado</h3>

                            <a href="{{ route('events') }}" class="btn btn-primary mt-5">Próximos cursos</a>
                        @endif

                        <!-- <h6 class="mt-3"><b>*Información importante !! La inscripción finaliza cuando realizas el pago total del curso por medio de transferencia bancaria.</b> </h6> -->
                        <!-- <p>Datos para realizar la transferencia:</p>
                        <ul class="evento">
                            <li>
                                Titular ME Motivador de Experiencias SAS
                            </li>
                            <li>
                                CUIT 30-71579237-7
                            </li>
                            <li>
                                Moneda AR$
                            </li>
                            <li>
                                Banco ICBC
                            </li>
                            <li>
                                Nueva Córdoba - Suc 887
                            </li>
                            <li>
                                Nro de Cta Cte 887/02001366/78
                            </li>
                            <li>
                                CBU 0150887902000001366785
                            </li>
                        </ul>
                        <h6 class="mt-5"><b>*Información importante !! La inscripción finaliza cuando realizas el pago total del curso por medio de transferencia bancaria.</b> </h6> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome thumb -->
        <div class="welcome-thumb2">
            <img src="{{ asset('img/bg-img/evento-bg.svg') }}" alt="">
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->
    <section class="bg-white">
        <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <!-- Section Heading Area -->
                        <div class="section-heading text-center  mt-7">
                            <h2 class="color-amarillo">Otros eventos</h2>
                            <!-- <div class="line-shape"></div> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="app_screenshots_slides owl-carousel">
                    @forelse($nextEvents as $ev)
						<div class="single-shot">
							<div class="single-team-member">
								<div class="charlas-image">
									<img src="{{asset('storage/'.$ev->img)}}" alt="">
									<div class="charlas-hover-effects">
										<div class="charlas-social-icon">
											<a href="{{ route('events.show.front',$ev->id) }}">
												<h5>{{$ev->name}}</h5>
												<ul class="d-inline-flex charla-info">
													<li>
														<i class="fa fa-calendar"></i> {{$ev->date_start}}
													</li>
													<li>
														<i class="fa fa-clock-o"></i> {{$ev->hour}}
													</li>
												</ul>
												<a href="{{ route('events.show.front',$ev->id) }}" class="charlas-mas">
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
    </section>

    <!-- ***** Contact Us Area Start ***** -->
   @include('layouts.contact')
    <!-- ***** Contact Us Area End ***** -->    

@endsection