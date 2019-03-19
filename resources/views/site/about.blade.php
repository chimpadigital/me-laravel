@extends('layouts.site')

@section('content')

    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix bg-white position-relative" id="home">
        <div class="container h-100 mt-8 mb-4">
            <div class="row h-100 align-items-center text-center">
                <div class="col-12">
                    <div class="wellcome-heading wow fadeInLeft" data-wow-delay="0.7s">
                        <h2 class="mt-3">PENSAMOS GLOBAL<br>ACTUAMOS LOCAL</h2>
                    </div>
                    <a href="#conoceme" class="btn-primary wow fadeInLeft" data-wow-delay="0.9s">CONOCEME</a>
                </div>
                <div class="col-12 col-md-2"></div>
            </div>
        </div>
        <div class="bg-white planeta-bg position-relative" id="conoceme">
        <img src="img/bg-img/somos-top.svg" class="img-fluid somos-t w-100" alt="" >
            <div class="somos somos position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-3"></div>
                        <div class="col-12 col-md-6 text-center">
                            
                            <p class="text-white">Somos especialistas en Felicidad Organizacional y nos apasiona trabajar con otros para crecer, aprender y actualizarnos.<br></br>
                            Creemos que para transformar nuestra realidad local, es necesario desarrollar la inteligencia colectiva a nivel global, por eso, nos nutrimos de una red de socios estratégicos en latinoamérica, potenciando la vanguardia en la gestión de talentos organizacionales.</p>
                            
                        </div>
                        <div class="col-12 col-md-3"></div>
    
                    </div>
                </div>
            </div>
            <div class="w-100 planeta-container">
                <img src="img/ilustraciones/planeta.svg" class="planeta" alt="">
            </div>
            <img src="img/bg-img/somos-bottom.svg" class="img-fluid somos-b w-100" alt="">

        </div>
        <!-- Welcome thumb -->
       
    </section>
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Special Area Start ***** -->
    <section class="section_padding_100 bg-white position-relative" id="about">
        <div class="container">
            <div class="circ1">
                <img src="img/bg-img/circ-morado.svg" alt="">
            </div>
            <div class="circ2">
                <img src="img/bg-img/circ-celeste.svg" alt="">
            </div>
            <div class=" ml-md-5 mr-md-5 row">
                <!-- Single Special Area -->
                <div class="col-12 col-lg-6 col-md-12">
                    <div class="single-special wow fadeInUp" data-wow-delay="0.2s">
                        <h2 class="mb-30">Nuestro Propósito</h2>
                        <p>Colaborar para alcanzar el octavo objetivo de la Agenda 2030 para el Desarrollo Sostenible:<br></br>
                        <span>"Promover un crecimiento económico inclusivo y sostenible, un empleo pleno y productivo; y un trabajo decente para todos"</span></p>
                        <a href="https://unchronicle.un.org/es/article/objetivo-8-lisis-del-objetivo-8-relativo-al-trabajo-decente-para-todos" class="btn-link" target="_blank">Ver más</a>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-lg-6 col-md-12">
                    <div class="single-special wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="mb-30">Nuestra Misión</h2>
                        <p>Ser motores de transformación en organizaciones y empresas con foco en las personas, la conciencia del bienestar, el triple impacto y la acción mancomunada para mejorar el entorno en el que vivimos.</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-12">
                    <div class="single-special wow fadeInUp" data-wow-delay="0.6s">
                        <div class="row">
                            <div class="col-12 col-md-2">
                                <div class="">
                                    <img src="img/core-img/empresab.svg" class="mb-4 mb-lg-0" alt="">
                                </div>
                            </div>
                            <div class="col-12 col-md-10">
                                <h2 class="mb-30">Nuestro Compromiso</h2>
                                <p class="mb-3">Somos Empresa B certificada, es decir que, somos parte de un movimiento global de empresas que buscan construir una nueva economía y elevar el bienestar de las personas. Utilizamos la fuerza del mercado para resolver los problemas sociales y ambientales, generando así, un impacto positivo en nuestro entorno.</p>
                                <a href="https://sistemab.org/me-motivador-de-experiencias/" target="_blank" class="btn-link">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

        </div>
    </section>
    <!-- ***** Special Area End ***** -->
    
    <!-- ***** Client Feedback Area Start ***** -->
    <section class="bg-white section_padding_100 clearfix" id="testimonials">
        <div class="container">
            <div class="row justify-content-center ml-4 mr-4 ml-md-0 mr-md-0">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <img src="{{ asset('img/core-img/estrellas.svg') }}" class="mb-4" alt="">
                        <h2>Nuestro equipo</h2>
                        <!-- <div class="line-shape"></div> -->
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="single-team-member">
                        <div class="member-image text-center">
                            <img src="{{ asset('img/team-img/meli.png') }}" class="w-100" alt="">
                            <div class="team-hover-effects">
                                <p class="text-white text-center">Equipo de Estrategia:<br>¡la que hace las ideas volar!</p>
                                <div class="team-social-icon">
                                    <a href="https://www.linkedin.com/in/melisadiazacuna/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="member-text text-center">
                            <h4>Melisa Díaz <br> Acuña</h4>
                            <p>Co-Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="single-team-member">
                        <div class="member-image text-center">
                            <img src="{{ asset('img/team-img/cande.png') }}" class="w-100" alt="">
                            <div class="team-hover-effects">
                                <p class="text-white text-center">Equipo de Procesos:<br>¡la que hace las ideas realidad!</p>
                                <div class="team-social-icon">
                                    <a href="https://www.linkedin.com/in/candelariasimon/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="member-text text-center">
                            <h4>María Candelaria Simon</h4>
                            <p>Co-Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="single-team-member">
                        <div class="member-image text-center">
                            <img src="{{ asset('img/team-img/lu.png') }}" class="w-100" alt="">
                            <div class="team-hover-effects">
                                <p class="text-white text-center">Equipo de Comunicación:<br>¡la que hace las ideas hablar!</p>
                                <div class="team-social-icon">
                                    <a href="https://www.linkedin.com/in/lucianaballarescopel" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="member-text text-center">
                            <h4>Luciana Ballaré <br> Scopel</h4>
                            <p>Comunicación</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center ml-4 mr-4 ml-md-0 mr-md-0">
                <div class="col-md-3 col-12">
                    <div class="single-team-member">
                        <div class="member-image text-center">
                            <img src="{{ asset('img/team-img/anto.png') }}" class="w-100" alt="">
                            <div class="team-hover-effects">
                                <p class="text-white text-center">Equipo de Diseño:<br>¡la que hace las ideas lucir 100 veces mejor!</p>
                                <div class="team-social-icon">
                                    <a href="https://www.linkedin.com/in/antonella-prinzi-a26867b7/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="member-text text-center">
                            <h4>Antonella <br> Prinzi</h4>
                            <p>Diseño</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="single-team-member">
                        <div class="member-image text-center">
                            <img src="{{ asset('img/team-img/vale.png') }}" class="w-100" alt="">
                            <div class="team-hover-effects">
                                <p class="text-white text-center">Equipo de Procesos:<br>¡asistente para que las cosas pasen!</p>
                                <div class="team-social-icon">
                                    <a href="https://www.linkedin.com/in/valentina-barrios-061369171/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="member-text text-center">
                            <h4>Valentina <br> Barrios</h4>
                            <p>Procesos</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="single-team-member">
                        <div class="member-image text-center">
                            <img src="{{ asset('img/team-img/ale.jpg') }}" class="w-100" alt="">
                            <div class="team-hover-effects">
                                <p class="text-white text-center">Equipo Centroamérica:<br>¡la que exporta la felicidad a otros lugares!</p>
                                <div class="team-social-icon">
                                    <a href="https://www.linkedin.com/in/alejandra-rodr%C3%ADguez-61563689/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="member-text text-center">
                            <h4>Alejandra <br> Rodríguez</h4>
                            <p>Centroamérica</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Client Feedback Area End ***** -->

    <!-- Special Description Area -->
    <section class="bg-white section_padding_100 clearfix">
        <div class="special_description_area mt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <img src="img/core-img/estrellas.svg" class="mb-4" alt="">
                            <h2 class="mb-4">Nuestro día a día</h2>

                           <!-- LightWidget WIDGET -->
                           <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="https://lightwidget.com/widgets/477991bad43b5dbf836075eeb09a7379.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>



                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Our Team Area Start ***** -->
    <section class="red-amiga bg-white section_padding_100_50 clearfix" id="team">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-4">
                    <!-- Section Heading Area -->
                    <div class="section-heading">
                        <h2 class="mb-4">Nuestra red amiga</h2>
                        <p class="text-white">Somos parte de una gran comunidad global de agentes de innovación y transformación</p>
                        <!-- <div class="line-shape"></div> -->
                    </div>
                </div>
                <div class="col-12 d-lg-none d-block">
                    <div class="app_screenshots_slides owl-carousel">
                        <div class="single-shot">
                        <a href="http://www.espacioabasto.com.ar/" target="_blank">
                                <div class="red-logo wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ asset('img/logos/eabasto.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="single-shot">
                            <a href="https://www.institutodelbienestar.cl/" target="_blank">
                                <div class="red-logo wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ asset('img/logos/ibienestar.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="single-shot">
                            <a href="http://finclusionpartners.net/" target="_blank">
                                <div class="red-logo wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ asset('img/logos/financial.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="single-shot">
                            <a href="https://presidentialprecinct.org/" target="_blank">
                                <div class="red-logo wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ asset('img/logos/presidential.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="single-shot">
                            <a href="http://www.aleadership.org/" target="_blank">
                                <div class="red-logo wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ asset('img/logos/advanced.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="single-shot">
                            <a href="http://www.netimakerspace.com/" target="_blank">
                                <div class="red-logo wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ asset('img/logos/neti.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="single-shot">
                            <a href="https://www.millennialec.com/" target="_blank">
                                <div class="red-logo wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ asset('img/logos/millennial.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="single-shot">
                            <a href="https://ylai.state.gov/" target="_blank">
                                <div class="red-logo wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ asset('img/logos/young.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="single-shot">
                            <a href="https://sistemab.org/" target="_blank">
                                <div class="red-logo wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ asset('img/logos/sb.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 d-none d-md-block">
                    <div class="row">
                        <div class="col-md-4 col-6">
                            <a href="http://www.espacioabasto.com.ar/" target="_blank">
                                <div class="red-logo wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ asset('img/logos/eabasto.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-6">
                            <a href="https://www.institutodelbienestar.cl/" target="_blank">
                                <div class="red-logo wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ asset('img/logos/ibienestar.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-6">
                            <a href="http://finclusionpartners.net/" target="_blank">
                                <div class="red-logo wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ asset('img/logos/financial.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-6">
                            <a href="https://presidentialprecinct.org/" target="_blank">
                                <div class="red-logo wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ asset('img/logos/presidential.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-6">
                            <a href="http://www.aleadership.org/" target="_blank">
                                <div class="red-logo wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ asset('img/logos/advanced.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-6">
                            <a href="http://www.netimakerspace.com/" target="_blank">
                                <div class="red-logo wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ asset('img/logos/neti.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 col-6">
                            <a href="https://www.millennialec.com/" target="_blank">
                                <div class="red-logo wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ asset('img/logos/millennial.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-6">
                            <a href="https://ylai.state.gov/" target="_blank">
                                <div class="red-logo wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ asset('img/logos/young.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-6">
                            <a href="https://sistemab.org/" target="_blank">
                                <div class="red-logo wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ asset('img/logos/sb.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- ***** Our Team Area End ***** -->

    <section class="bg-white section_padding_100_50">
        <div class="container">
            <div class="row ml-md-5 ml-2 mr-md-5 mr-2">
                <div class="col-md-6 col-12">
                    <div class="section-heading ">
                        <img src="img/core-img/estrellas.svg" class="mb-4" alt="">
                        <h2 class="mb-3">Dónde estamos</h2>
                        <p>¡La felicidad es ilimitada! y brindamos asesoría a nivel global</p>
                        <h4 class="mb-3">Si estás en otro país</h4>
                        <a href="#contacto" class="btn-primary wow fadeInLeft" data-wow-delay="0.9s">INFORMAME</a>
                        <!-- <div class="line-shape"></div> -->
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    
                        <div class="row text-center align-items-center h-100 shadow">
                            <div class="col-12">
                                <h5 class="text-center magenta mt-3 mt-md-0">Sedes centrales de Felicidad</h5>
                            </div>
                            <div class="col-6">
                                <img class="mb-4" src="img/core-img/arg-lg.png" alt="">
                                <h6>Argentina</h6>
                                <p>Córdoba Capital</p>
                            </div>
                            <div class="col-6">
                                <img class="mb-4" src="img/core-img/cr-lg.png" alt="">
                                <h6>Costa Rica</h6>
                                <p>Santa Ana, San José</p>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </section>

    @include('layouts.contact')  


@endsection
@section('section-scripts')
<script type="text/javascript">
    $('#about').addClass('active-nuevo');
</script>
@endsection