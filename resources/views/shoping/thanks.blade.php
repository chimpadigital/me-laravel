@extends('layouts.site')

@section('content')

  <!-- ***** Wellcome Area Start ***** -->
<section class="wellcome_area clearfix bg-white position-relative" id="home">
    <div class="container h-100 mt-8">
        <div class="row h-100">
            <div class="col-12 col-md-5">
            <form action="envio-9-5.php" method="post">
                        <!-- Message Input Area Start -->
                        <div class="contact_input_area">
                            <div class="row">
                                <div class="col-10">
                                    <h3 class="mb-3">Ya casi</h3>
                                    <div class="wellcome-heading wow fadeInLeft" data-wow-delay="0.7s">
                                        <h2>Te enviamos un mail con instrucciones para completar tu inscripción</h2>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Message Input Area End -->
                    </form>
            </div>

            <div class="col-12 col-md-2"></div>
            <div class="col-12 col-md-5 wow fadeInDown" data-wow-delay="1s" style="z-index:1000;">
                <div class="precio">
                    <h3 class="">Recordame</h3>                        
                    
                    <ul class="info-evento mt-5 wow fadeInLeft" data-wow-delay=".8s">
                        <li>
                            <img src="{{ asset('img/core-img/calendar.svg') }}" alt="" class="float-left mr-4 icono-evento">
                            <h5>{{ $event->date_start }}</h5>
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
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome thumb -->
    <div class="welcome-thumb2 wow fadeInDown" data-wow-delay="0.4s">
        <img src="../img/bg-img/evento-bg.svg" alt="">
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
                    <div class="single-shot">
                        <div class="single-team-member">
                            <div class="charlas-image">
                                <img src="../img/charlas/11-4.jpg" alt="">
                                <div class="charlas-hover-effects">
                                    <div class="charlas-social-icon">
                                        <a href="11-4.php">
                                            <h5>Comunicá efectivamente</h5>
                                            <ul class="d-inline-flex charla-info">
                                                <li>
                                                    <i class="fa fa-calendar"></i> 11 / 4
                                                </li>
                                                <li>
                                                    <i class="fa fa-clock-o"></i> 18:00hs
                                                </li>
                                            </ul>
                                            <a href="" class="charlas-mas">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-shot">
                        <div class="single-team-member">
                            <div class="charlas-image">
                                <img src="../img/charlas/9-5.jpg" alt="">
                                <div class="charlas-hover-effects">
                                    <div class="charlas-social-icon">
                                        <a href="9-5.php">
                                            <h5>Nuevas economías</h5>
                                            <ul class="d-inline-flex charla-info">
                                                <li>
                                                    <i class="fa fa-calendar"></i> 09 / 5
                                                </li>
                                                <li>
                                                    <i class="fa fa-clock-o"></i> 18:00hs
                                                </li>
                                            </ul>
                                            <a href="" class="charlas-mas">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-shot">
                        <div class="single-team-member">
                            <div class="charlas-image">
                                <img src="../img/charlas/13-6.jpg" alt="">
                                <div class="charlas-hover-effects">
                                    <div class="charlas-social-icon">
                                        <a href="13-6.php">
                                            <h5>Conocé tus fortalezas</h5>
                                            <ul class="d-inline-flex charla-info">
                                                <li>
                                                    <i class="fa fa-calendar"></i> 13 / 6
                                                </li>
                                                <li>
                                                    <i class="fa fa-clock-o"></i> 18:00hs
                                                </li>
                                            </ul>
                                            <a href="" class="charlas-mas">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
</section>

@endsection