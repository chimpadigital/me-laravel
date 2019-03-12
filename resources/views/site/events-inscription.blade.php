@extends('layouts.site')

@section('content')


    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix bg-white position-relative" id="home">
        <div class="container h-100 mt-8">
            <div class="row h-100">
                <div class="col-12 col-md-5">
                @if (isset($error))

                        <div class="alert alert-warning alert-styled-left alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                            <span class="font-weight-semibold">{{ $error }}</span>
                        </div>
                @endif
                <form action="{{ route('store.inscription') }}" method="post">
                            @csrf
							<input type="hidden" name="price" value="{{$event->price}}"/>
							<input type="hidden" name="eventName" value="{{$event->name}}"/>
                            <input name="event" type="hidden" value="{{$event->id}}">
                            <input name="date_start" type="hidden" value="{{$event->date_start}}">
                            <input name="hour" type="hidden" value="{{$event->hour}}">
                            <input name="address" type="hidden" value="{{$event->address}}">
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <div class="col-10">
                                        <h3 class="mb-3">Pre-inscripción</h3>
                                        <div class="wellcome-heading wow fadeInLeft" data-wow-delay="0.7s">
                                            <h2>{{$event->name}}</h2>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <!-- <img src="{{ asset('img/core-img/sonrisa.png') }}" class="sonrisa" alt=""> -->
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Nombre y Apellido" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Teléfono" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Casilla de correo" required>
                                        </div>
                                    </div>

                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="¿Dudas?" required></textarea>
                                        </div>
                                    </div>

                                        <div class="col-12">
                                        <div class="form-group">
                                            <select class="form-control" name="method_payment" id="method_payment">
                                                <option value="mercado_pago"><i class="fa fab-mp"></i>MercadoPago</option>
                                                <option value="transferencia"><i class="fa fa-bank"></i>Transferencia Bancaria</option>
                                            </select>
                                        </div>
                                    </div>


                                    <!-- Single Input Area Start -->
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                </div>

                <div class="col-12 col-md-2"></div>
                <div class="col-12 col-md-5 wow fadeInDown" data-wow-delay="1s" style="z-index:1000;">
                    <div class="precio">
                        <h3 class="">Costo</h3>
                        <h1 class="mb-4">${{$event->price}}</h1>
                        
                        
                        <ul class="info-evento mt-5 wow fadeInLeft" data-wow-delay=".8s">
                            <li>
                                <img src="{{ asset('img/core-img/calendar.svg') }}" alt="" class="float-left mr-4 icono-evento">
                                <h5>{{ date('d',strtotime($event->date_start)) }} de {{ date('M',strtotime($event->date_start)) }}</h5>
                            </li>
                            <li>
                                <img src="{{ asset('img/core-img/timer.svg') }}" alt="" class="float-left mr-4 icono-evento">
                                <h5>{{$event->hour}}</h5>
                            </li>
                            <li>
                                <img src="{{ asset('img/core-img/location-point.svg') }}" alt="" class="float-left mr-4 icono-evento">
                                <h5>{{$event->address}}</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome thumb -->
        <div class="welcome-thumb2 wow fadeInDown" data-wow-delay="0.4s">
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
    <section class="footer-contact-area section_padding_100 clearfix bg-white" id="contact">
        <div class="container">
            <div class="row">
                
                <div class="col-md-5">
                    <!-- Heading Text  -->
                    <div class="footer-heading">
                        <h2>Contacto</h2>
                    </div>
                    <div class="footer-text">
                        <img src="../img/core-img/mail.svg" class="float-left mr-3 mb-5" alt="">
                        <h4>EscribiME</h4>
                        <p>contamemas@meexperiencias.com</p>
                    </div>
                    <div class="footer-text">
                        <img src="../img/core-img/tel.svg" class="float-left mr-3 mb-5" alt="">
                        <h4>LlamaME</h4>
                        <p>+54-9-351-2017150</p>
                    </div>
                    <div class="footer-social-icon">
                        <a href="https://www.facebook.com/MEExperiencias" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/meexperiencias" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/meexperiencias/" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://www.linkedin.com/company/meexperiencias/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                    
                </div>
                <div class="col-md-7">
                    <!-- Form Start-->
                    <div class="contact_from">
                        <form action="#" method="post">
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <div class="col-10">
                                        <h3 class="mb-3">¿Querés recibir + info?</h3>
                                    </div>
                                    <div class="col-2">
                                        <img src="img/core-img/sonrisa.png" class="sonrisa" alt="">
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Nombre y Apellido" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Teléfono" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Casilla de correo" required>
                                        </div>
                                    </div>

                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Consulta" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area End ***** -->    
@endsection