@extends('layouts.site')

@section('content')

  <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix bg-white position-relative" id="home">
        <div class="container h-100 mt-7">
			@if (session('successMail'))
				<div class="col-md-12">
					<div class="alert alert-warning alert-styled-left alert-dismissible">
						<button type="button" class="close" data-dismiss="alert"><span>×</span></button>
						<span class="font-weight-semibold">{{ session('successMail') }}</span>
					</div>
				</div>
			@endif
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-4">
                    <div class="wellcome-heading wow fadeInLeft text-center text-md-left" data-wow-delay="0.7s">
                        <h2 class="mb-5">Consultora en Felicidad Organizacional</h2>
                        <a href="#about1" class="btn-primary wow fadeInLeft mt-5" data-wow-delay="0.9s">INFORMAME</a>
                    </div>
                </div>
                <div class="col-12 col-md-2"></div>
                <div class="col-12 col-md-6 wow fadeInDown" data-wow-delay="1s" style="z-index:1000;">
                    <img src="{{ asset('img/ilustraciones/bienvenido.svg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="special-area wow fadeInUp" data-wow-delay="0.3s">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3"></div>
                    <div class="col-12 col-md-6 text-center mt-5 mt-md-0">
                        <img src="{{ asset('img/core-img/me-eb.svg') }}" class="pl-5 pr-5 pr-md-0 pl-md-0" alt="">
                        <h3 class="text-white mt-5 mb-5">Promovemos la felicidad organizacional para potenciar tu marca empleadora</h3>
                        
                    </div>
                    <div class="col-12 col-md-3"></div>
                </div>
            </div>
        </div>
        <!-- Welcome thumb -->
        <div class="welcome-thumb wow fadeInDown" data-wow-delay="0.4s">
            <img src="{{ asset('img/ilustraciones/fondo-circulo.svg') }}" alt="">
        </div>
    </section>
	@if (isset($message))
        <div class="alert alert-warning alert-styled-left alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
            <span class="font-weight-semibold">{{ $message }}</span>
        </div>
    @endif
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Special Area Start ***** -->
    <section class="section_padding_100 bg-white" id="about1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Area -->
                    <div class="section-heading text-center">
                        <img src="{{ asset('img/core-img/estrellas.svg') }}" class="mb-4" alt="">
                        <h2>¿Qué hacemos?</h2>
                        <!-- <div class="line-shape"></div> -->
                    </div>
                </div>
            </div>
            
            <div class="row">
                <!-- Single Special Area -->
                <div class="col-12 col-md-3">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single-icon">
                            <img src="{{ asset('img/core-img/asesoria.svg') }}" alt="">
                        </div>
                        <h4 class="mb-60">Asesoría</h4>
                        <a href="{{ route('service') }}#asesoria" class="btn-primary btn-yellow">CONOCEME</a>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-3">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-icon">
                            <img src="{{ asset('img/core-img/cursos.svg') }}" alt="">
                        </div>
                        <h4  class="mb-30">Cursos de Formación</h4>
                        <a href="{{ route('service') }}#cursos" class="btn-primary btn-yellow">CONOCEME</a>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-3">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-icon">
                            <img src="{{ asset('img/core-img/team.svg') }}" alt="">
                        </div>
                        <h4  class="mb-30">Team<br>Building</h4>
                        <a href="{{ route('service') }}#team-building" class="btn-primary btn-yellow">CONOCEME</a>
                        
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-3">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.8s">
                        <div class="single-icon">
                            <img src="{{ asset('img/core-img/charlas.svg') }}" alt="">
                        </div>
                        <h4  class="mb-30">Charlas y Conferencias</h4>
                        <a href="{{ route('service') }}#charlas" class="btn-primary btn-yellow">CONOCEME</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Special Area End ***** -->
    
    <!-- ***** Client Feedback Area Start ***** -->
	@if(app('config')->get('app.country') == 'ar')
		<section class="clients-feedback-area bg-white section_padding_100 clearfix" id="testimonials">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-10">
						<div class="slider slider-for">
							<!-- Client Feedback Text  -->
							<div class="client-feedback-text text-center">
								<div class="client">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</div>
								<div class="client-description text-center">
									<p>“ Hermosa experiencia y excelentes las actividades propuestas y su dinámica en la Jornada de Logística de Arcor Argentina. Destaco el compromiso, la buena energía y la predisposición de todo el equipo de ME!!! ”</p>
								</div>
								
								<div class="client-name text-center">
									<h5>Adriana Juárez</h5>
									<p>Arcor</p>
								</div>
							</div>
							<!-- Client Feedback Text  -->
							<div class="client-feedback-text text-center">
								<div class="client">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</div>
								<div class="client-description text-center">
									<p>“ Cuando te brindan calidad y calidez, capacitan, enseñan y divierten, ¡se aprende! Excelente grupo de trabajo!!! Un placer trabajar con ustedes ME!!! ”</p>
								</div>
								<div class="client-name text-center">
									<h5>Yamila Abad</h5>
									<p>Equipo de FARMACIAS LÍDER</p>
								</div>
							</div>
							<!-- Client Feedback Text  -->
							<div class="client-feedback-text text-center">
								<div class="client">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</div>
								<div class="client-description text-center">
									<p>“ Hicimos una capacitación con el equipo, son muy originales, fuera de lo común. Una experiencia muy linda, amena.. una nueva manera de aprender!!! ”</p>
								</div>
								<div class="client-name text-center">
									<h5>Belén Matias</h5>
									<p>Grupo Edisur</p>
								</div>
							</div>
							
						</div>
					</div>
					<!-- Client Thumbnail Area -->
					<div class="col-12 col-md-6 col-lg-5">
						<div class="slider slider-nav">
							<div class="client-thumbnail">
								<img src="img/logos/arcor.png" alt="">
							</div>
							<div class="client-thumbnail">
								<img src="img/logos/lider.png" alt="">
							</div>
							<div class="client-thumbnail">
								<img src="img/logos/edisur.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	@endif
	@if(app('config')->get('app.country') == 'cr')
		<section class="clients-feedback-area bg-white section_padding_100 clearfix" id="testimonials">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-10">
						<div class="slider slider-for">
							<!-- Client Feedback Text  -->
							<div class="client-feedback-text text-center">
								<div class="client">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</div>
								<div class="client-description text-center">
									<p>“ Aprendí muchísimo y lo disfruté... fue maravilloso conocer personas maravillosas como ustedes, con un gran carisma y que disfrutan al máximo lo que hacen ”</p>
								</div>
								
								<div class="client-name text-center">
									<h5>Gau Zuniga</h5>
								</div>
							</div>
							<!-- Client Feedback Text  -->
							<div class="client-feedback-text text-center">
								<div class="client">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</div>
								<div class="client-description text-center">
									<p>“ Excelente entrenamiento, muy provechoso! Y tanto Meli como Cande, muy buenas transmitiendo el amplio conocimiento que tienen ”</p>
								</div>
								<div class="client-name text-center">
									<h5>Carolina Golcher</h5>
								</div>
							</div>
							<!-- Client Feedback Text  -->
							<div class="client-feedback-text text-center">
								<div class="client">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</div>
								<div class="client-description text-center">
									<p>“ Me encanto lo disfrute mil ”</p>
								</div>
								<div class="client-name text-center">
									<h5>Peggy Chaves Mora</h5>
								</div>
							</div>
							
						</div>
					</div>
					<!-- Client Thumbnail Area -->
					<div class="col-12 col-md-6 col-lg-5">
						<div class="slider slider-nav">
							<div class="client-thumbnail">
								<img src="img/logos/user.png" alt="">
							</div>
							<div class="client-thumbnail">
								<img src="img/logos/user.png" alt="">
							</div>
							<div class="client-thumbnail">
								<img src="img/logos/user.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	@endif
    <!-- ***** Client Feedback Area End ***** -->

    <!-- Special Description Area -->
    <section class="bg-white section_padding_100 clearfix pb-4">
        <div class="special_description_area mt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <img src="img/core-img/estrellas.svg" class="mb-4" alt="">
                            <h2>Confían en nosotros</h2>
                            <!-- <div class="line-shape"></div> -->
                        </div>
                    </div>
                    <div class="cont-princ-slider" style="background-color:white">
                          <div class="slier-prin">
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/gedisur.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/iveco.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/flider.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/lekons.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/protectia.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/paclin.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/proa.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/tecnocampo.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/tecnoair.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/apex.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/golf.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/nodhos.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/01.jpg') }}" alt=""></div>
                            <!-- <div class="juegos_DWG"><img src="img/logos/apex.png" alt=""></div> -->
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/03.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/04.jpg') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/05.jpg') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/06.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/gedisur.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/08.jpg') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/09.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/lekons.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/flider.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/12.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/13.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/14.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/15.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/tecnocampo.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/nodhos.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/18.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/01.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/paclin.jpg') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/20.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/21.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/22.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/sancor.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/24.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/tecnoair.png') }}" alt=""></div>
                          </div>
                        </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ***** Our Team Area Start ***** -->
    <section class="our-Team-area bg-white section_padding_100_50 clearfix" id="team">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Section Heading Area -->
                    <div class="section-heading text-center">
                        <img src="img/core-img/estrellas.svg" class="mb-4" alt="">
                        <h2>Próximos eventos</h2>
                        <!-- <div class="line-shape"></div> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="app_screenshots_slides owl-carousel">
					@if(count($events) >= 3)
						@for($i = 0; $i < 3; $i++)
							<div class="single-shot">
								<div class="single-team-member">
									<div class="charlas-image">
										<img src="{{asset('storage/'.$events[$i]->img)}}" alt="">
										<div class="charlas-hover-effects">
											<div class="charlas-social-icon">
												<a href="{{ route('events.show.front',$events[$i]->id) }}">
													<h5>{{$events[$i]->name}}</h5>
													<ul class="d-inline-flex charla-info">
														<li>
															<i class="fa fa-calendar"></i> {{date('d',strtotime($events[$i]->date_start)) }} / {{ date('m',strtotime($events[$i]->date_start))}}
														</li>
														<li>
															<i class="fa fa-clock-o"></i> {{$events[$i]->hour}}
														</li>
													</ul>
													<a href="{{ route('events.show.front',$events[$i]->id) }}" class="charlas-mas">
														<i class="fa fa-plus"></i>
													</a>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>					
						@endfor
					@else
						@for($i = 0; $i < count($events); $i++)
							<div class="single-shot">
								<div class="single-team-member">
									<div class="charlas-image">
										<img src="{{asset('storage/'.$events[$i]->img)}}" alt="">
										<div class="charlas-hover-effects">
											<div class="charlas-social-icon">
												<a href="{{ route('events.show.front',$events[$i]->id) }}">
													<h5>{{$events[$i]->name}}</h5>
													<ul class="d-inline-flex charla-info">
														<li>
															<i class="fa fa-calendar"></i> {{date('d',strtotime($events[$i]->date_start)) }} / {{ date('m',strtotime($events[$i]->date_start))}}
														</li>
														<li>
															<i class="fa fa-clock-o"></i> {{$events[$i]->hour}}
														</li>
													</ul>
													<a href="{{ route('events.show.front',$events[$i]->id) }}" class="charlas-mas">
														<i class="fa fa-plus"></i>
													</a>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>					
						@endfor
					@endif
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Team Area End ***** -->

   @include('layouts.contact')

@endsection

@section('section-scripts')
<script type="text/javascript">
    $('#bienvenido').addClass('active-nuevo');
</script>
@endsection