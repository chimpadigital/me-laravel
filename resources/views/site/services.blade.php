@extends('layouts.site')

@section('content')


    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix bg-white position-relative" id="home">
        <div class="container h-100 mt-8 mb-4">
            <div class="row h-100 align-items-center text-center">
                <div class="col-12">
                    <div class="wellcome-heading wow fadeInLeft" data-wow-delay="0.7s">
                        <h2 class="mt-3">¿Qué Hacemos?</h2>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="services-area wow fadeInUp" data-wow-delay="0.3s">
            <div class="container">
                <div class="row">
                    
                    <!-- Single Special Area -->
                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                            <div class="single-icon">
                                <img src="{{ asset('img/core-img/asesoria.svg') }}" alt="">
                            </div>
                            <h4 class="mb-60">Asesoría</h4>
                            <a href="#asesoria" class="btn-primary btn-yellow">INFORMAME</a>
                        </div>
                    </div>
                    <!-- Single Special Area -->
                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                            <div class="single-icon">
                                <img src="{{ asset('img/core-img/cursos.svg') }}" alt="">
                            </div>
                            <h4  class="mb-30">Cursos de Formación</h4>
                            <a href="#cursos" class="btn-primary btn-yellow">INFORMAME</a>
                        </div>
                    </div>
                    <!-- Single Special Area -->
                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                            <div class="single-icon">
                                <img src="{{ asset('img/core-img/team.svg') }}" alt="">
                            </div>
                            <h4  class="mb-30">Team<br>Building</h4>
                            <a href="#team-building" class="btn-primary btn-yellow">INFORMAME</a>
                            
                        </div>
                    </div>
                    <!-- Single Special Area -->
                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="single-special text-center wow fadeInUp" data-wow-delay="0.8s">
                            <div class="single-icon">
                                <img src="{{ asset('img/core-img/charlas.svg') }}" alt="">
                            </div>
                            <h4  class="mb-30">Charlas y Conferencias</h4>
                            <a href="#charlas" class="btn-primary btn-yellow">INFORMAME</a>
                            
                        </div>
                    </div>
                </div>

                <div class="row justify-content-between plantas">
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('img/bg-img/planta1.svg') }}" alt="">
                    </div>
                    <div class="col-6 col-md-2 text-right">
                        <img src="{{ asset('img/bg-img/planta2.svg') }}" alt="">
                    </div>
                </div>

            </div>
        </div>
        <!-- Welcome thumb -->
       
    </section>
    <!-- ***** Wellcome Area End ***** -->
     <!-----------------------------------------------------
    ASESORIA
    ------------------------------------------------------>
    <section class="section_padding_100_50 bg-secondary" id="asesoria">
        <div class="container">
            <div class="row">
               

                <div class="col-12 col-md-5 order-1 wow fadeInLeft"  data-wow-delay="0.2s">
                    <img src="{{ asset('img/ilustraciones/asesoria.svg') }}" alt="" class="mb-5">
                </div>
                <div class="col-12 col-md-7 order-2 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="section-heading">
                        <h2 class="mb-4">Asesoría</h2>
                        <p class="">¡Vamos con todo! Te acompañamos en la concreción de tus objetivos organizacionales</p>
                        <!-- <div class="line-shape"></div> -->

                        <button class="btn-acordeon btn-acordeon1" type="button" data-toggle="collapse" data-target="#1" aria-expanded="false" aria-controls="collapseExample">

                        Asesoría Estratégica <i class="fa fa-plus float-right" id="hola1"></i>

                        <div class="collapse" id="1">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <p class="mb-3">Acompañamiento en el análisis, formulación, evaluación y gestión de la estrategia organizacional para lograr los objetivos propuestos centrado en las personas.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/asesoria/estrategica.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>

                        <button class="btn-acordeon btn-acordeon2" type="button" data-toggle="collapse" data-target="#2" aria-expanded="false" aria-controls="collapseExample">
                        Asesoría en Comunicación Interna <i class="fa fa-plus float-right" id="hola2"></i>

                        <div class="collapse" id="2">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <p class="mb-3">Asesoramiento contínuo sobre la planificación y ejecución de la comunicación efectiva entre los participantes dentro de la organización</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/asesoria/comunicacion.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>

                        <button class="btn-acordeon btn-acordeon3" type="button" data-toggle="collapse" data-target="#3" aria-expanded="false" aria-controls="collapseExample">
                        Asesoría en Cultura Organizacional <i class="fa fa-plus float-right" id="hola3"></i>

                        <div class="collapse" id="3">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <p class="mb-3">Acompañamiento en la implementación de acciones que reflejen la misión, visión y valores de la organización, generando un mayor compromiso por parte de los colaboradores con la firma.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/asesoria/cultura.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>

                        <button class="btn-acordeon btn-acordeon4" type="button" data-toggle="collapse" data-target="#4" aria-expanded="false" aria-controls="collapseExample">
                        Asesoría en Procesos Organizacionales <i class="fa fa-plus float-right" id="hola4"></i>

                        <div class="collapse" id="4">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <p class="mb-3">Rediseñamos los procesos de gestión de equipos ajustándolos a las necesidades actuales de la empresa y realizamos la evaluación de resultados correspondiente.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/asesoria/porganizacionales.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>

                        <button class="btn-acordeon btn-acordeon5" type="button" data-toggle="collapse" data-target="#5" aria-expanded="false" aria-controls="collapseExample" id="cursos">
                        Asesoría en Empresas B <i class="fa fa-plus float-right" id="hola5"></i>

                        <div class="collapse" id="5">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <p class="mb-3">Guiamos y acompañamos a la organización en el proceso hacia la certificación de Empresa B.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0" >
                                        <img src="{{ asset('img/servicios/asesoria/empresab.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>
                              
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-----------------------------------------------------
    CURSOS
    ------------------------------------------------------>
    <section class="section_padding_100_50 bg-white" id="cursos">
        <div class="container">
            <div class="row" >
                
                <div class="col-12 col-md-7 order-4 order-md-3 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="section-heading">
                        <h2 class="mb-4">Cursos de Formación</h2>
                        <p class="">¿Querés capacitar de manera diferente a tu organización?</p>
                        <!-- <div class="line-shape"></div> -->
    
                        <button class="btn-acordeon btn-acordeon6" type="button" data-toggle="collapse" data-target="#c1" aria-expanded="false" aria-controls="collapseExample">
                        Atención al cliente <i class="fa fa-plus float-right" id="hola6"></i>
    
                        <div class="collapse" id="c1">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-md-7 col-12">
                                        <p class="mb-3"><b>Diferenciarnos en la atención en los tiempos que corren, es clave.</b> Mejoramos las habilidades de ventas de los vendedores, encontrando conjuntamente soluciones a los desafíos que propone nuestros clientes.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/cursos/atencion.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>

                        <button class="btn-acordeon btn-acordeon7" type="button" data-toggle="collapse" data-target="#c-1" aria-expanded="false" aria-controls="collapseExample">
                        Fortalezas <i class="fa fa-plus float-right" id="hola7"></i>
    
                        <div class="collapse" id="c-1">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-md-7 col-12">
                                        <p class="mb-3"><b>Conocer a nuestro equipo y sus mayores fortalezas es esencial para lograr lo que nos proponemos.</b> Trabajamos en las virtudes del equipo para potenciar su trabajo, la relación interpersonal, la autonomía y la confianza.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/cursos/fortalezas.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>
    
                        <button class="btn-acordeon btn-acordeon8" type="button" data-toggle="collapse" data-target="#c2" aria-expanded="false" aria-controls="collapseExample">
                        Liderazgo <i class="fa fa-plus float-right" id="hola8"></i>
    
                        <div class="collapse" id="c2">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-md-7 col-12">
                                        <p class="mb-3"><b>La forma tradicional de gestionar empresas está llegando a su límite.</b> Acompañamos a los líderes de la organización en su gestión, empoderándolos y aumentando la confianza en sí mismos y en su equipo para que puedan alcanzar los objetivos propuestos.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/cursos/liderazgo.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>
    
                        <button class="btn-acordeon btn-acordeon9" type="button" data-toggle="collapse" data-target="#c3" aria-expanded="false" aria-controls="collapseExample">
                        Comunicación Efectiva <i class="fa fa-plus float-right" id="hola9"></i>
    
                        <div class="collapse" id="c3">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-md-7 col-12">
                                        <p class="mb-3"><b>Necesitamos personas con perspectivas distintas, que propongan cambios y tomen iniciativas.</b> Brindamos herramientas para que los miembros de la organización desarrollen sus habilidades comunicativas y la empatía, mejoren su escucha y comprendan mejor a sus interlocutores.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/cursos/comunicacion.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>
    
                        <button class="btn-acordeon btn-acordeon10" type="button" data-toggle="collapse" data-target="#c4" aria-expanded="false" aria-controls="collapseExample">
                        Negociación Ganar-Ganar <i class="fa fa-plus float-right" id="hola10"></i>
    
                        <div class="collapse" id="c4">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-md-7 col-12">
                                        <p class="mb-3"><b>Del conflicto a la negociación.</b> Capacitamos a equipos de trabajos para mejorar sus habilidades de negociación, otorgando conocimiento de buenas prácticas que nos permitan la resolución de conflictos manteniendo negociaciones efectivas.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/cursos/negociar.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>
    
                        <button class="btn-acordeon btn-acordeon11" type="button" data-toggle="collapse" data-target="#c5" aria-expanded="false" aria-controls="collapseExample">
                        Administración del tiempo <i class="fa fa-plus float-right" id="hola11"></i>
    
                        <div class="collapse" id="c5">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-md-7 col-12">
                                        <p class="mb-3"><b>No trabajes más duro, trabaja más inteligente.</b> Enseñamos técnicas para optimizar el tiempo, organizar reuniones efectivas y cumplir con los objetivos propuestos.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/cursos/tiempo.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>

                        <button class="btn-acordeon btn-acordeon12" type="button" data-toggle="collapse" data-target="#c6" aria-expanded="false" aria-controls="collapseExample">
                        Feedback Efectivo <i class="fa fa-plus float-right" id="hola12"></i>
    
                        <div class="collapse" id="c6">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-md-7 col-12">
                                        <p class="mb-3"><b>Del feedback al Feedforward.</b> Programa para manejar con éxito una comunicación asertiva con técnicas de feedback para permitirnos como equipo alcanzar un máximo compromiso enfocado a encontrar nuevas soluciones a los desafíos propuestos y llegar a objetivos de forma conjunta.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/cursos/feedback.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>

                        <button class="btn-acordeon btn-acordeon13" type="button" data-toggle="collapse" data-target="#c7" aria-expanded="false" aria-controls="collapseExample"  id="team-building">
                        Entrenamiento en Felicidad Organizacional <i class="fa fa-plus float-right" id="hola13"></i>
    
                        <div class="collapse" id="c7">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-md-7 col-12">
                                        <p class="mb-3"><b>Estar bien en el trabajo, también es una necesidad.</b> Curso práctico - teórico intensivo acerca de las nuevas tendencias en gestión de equipos, mapeo del mercado laboral actual y análisis de casos de éxito.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/cursos/felicidad-org') }}.jpg" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>
                              
                    </div>
                </div>
                <div class="col-12 col-md-5 order-3 order-md-4 wow fadeInRight" data-wow-delay="0.3s">
                    <img src="{{ asset('img/ilustraciones/cursos.svg') }}" alt="" class="mb-5">
                </div>
            </div>
        </div>
    </section>

    <!-----------------------------------------------------
    TEAM BUILDING
    ------------------------------------------------------>
    <section class="section_padding_100_50 bg-secondary" id="team-building">
        <div class="container">
            <div class="row">
                
                <div class="col-12 col-md-5 order-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <img src="{{ asset('img/ilustraciones/team.svg') }}" alt="" class="mb-5">
                </div>
                <div class="col-12 col-md-7 order-6 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="section-heading">
                        <h2 class="mb-4">Team building</h2>
                        <p class="">Motivá a tu Equipo con Experiencias únicas. Un día distinto con resultados distintos</p>
                        <!-- <div class="line-shape"></div> -->

                        <button class="btn-acordeon btn-acordeon14" type="button" data-toggle="collapse" data-target="#t1" aria-expanded="false" aria-controls="collapseExample">
                        Entrenando Campeones <i class="fa fa-plus float-right" id="hola14"></i>

                        <div class="collapse" id="t1">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <p class="mb-3">Potenciamos el uso de la inteligencia colectiva para superar los desafíos en equipo. A través  de distintas pruebas se desarrolla la destreza, el trabajo en equipo, la toma de decisiones, el delegar, la cooperación y coordinación, la comunicación, el compartir y la creatividad.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/team/campeones.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>

                        <button class="btn-acordeon btn-acordeon15" type="button" data-toggle="collapse" data-target="#t2" aria-expanded="false" aria-controls="collapseExample">
                        Liderar con swing <i class="fa fa-plus float-right" id="hola15"></i>

                        <div class="collapse" id="t2">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <p class="mb-3">Mediante la incorporación y práctica de los principios básicos del golf se verá la perfecta analogía entre las funciones, actitudes y aptitud del liderazgo. En una serie de pruebas se vislumbra entre los miembros del equipo los distintos tipos de liderazgo, cómo trabajar en conjunto y cómo potenciarse para el bien grupal.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/team/swing.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>

                        <button class="btn-acordeon btn-acordeon16" type="button" data-toggle="collapse" data-target="#t3" aria-expanded="false" aria-controls="collapseExample">
                        Confianza y Liderazgo <i class="fa fa-plus float-right" id="hola16"></i>

                        <div class="collapse" id="t3">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <p class="mb-3">Una apasionante práctica con caballos lleva a los participantes a experimentar distintos niveles de confianza y respeto con uno mismo, hacia los compañeros y con el animal.
                                        Aumenta la seguridad, confianza y auto-motivación, logrando cohesión en el equipo para alcanzar unidad y seguridad.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/team/confianza.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>

                        <button class="btn-acordeon btn-acordeon17" type="button" data-toggle="collapse" data-target="#t4" aria-expanded="false" aria-controls="collapseExample">
                        Construcción de equipo <i class="fa fa-plus float-right" id="hola17"></i>

                        <div class="collapse" id="t4">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <p class="mb-3">Para lograr alcanzar metas comunes es necesario el conocimiento de uno mismo, el control de las fuerzas propias y de las que nos rodean, el desarrollo de habilidades especiales de negociación y el compromiso del equipo.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/team/equipo.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>

                        <button class="btn-acordeon btn-acordeon18" type="button" data-toggle="collapse" data-target="#t5" aria-expanded="false" aria-controls="collapseExample">
                        Una pausa para relajar <i class="fa fa-plus float-right" id="hola18"></i>

                        <div class="collapse" id="t5">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <p class="mb-3">El Yoga es disciplina tradicional que trabaja sobre los 3 ejes del ser humano: físico, mental y espiritual. Mediante ejercicios que requieren un alto nivel de concentración, atención y cuidado, fomentamos el autoconocimiento y gestión de las emociones de las personas.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/team/yoga.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>

                        <button class="btn-acordeon btn-acordeon19" type="button" data-toggle="collapse" data-target="#t6" aria-expanded="false" aria-controls="collapseExample" id="charlas">
                        Desencadenando la Innovación <i class="fa fa-plus float-right" id="hola19"></i>

                        <div class="collapse" id="t6">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <p class="mb-3">Caminar por el mundo de la innovación, del futuro, de la creatividad y la experimentación, fallando rápido y barato, pero aprendiendo mucho más rápido. Ideal para equipos que necesitan generar nuevas ideas para desafíos habituales, o que quieren probar un nuevo producto o servicio.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/team/innovacion.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>
                              
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_padding_100_50 bg-white" id="charlas">
        <div class="container">
            <div class="row">
                <!-----------------------------------------------------
                CHARLAS Y CONFERENCIAS
                ------------------------------------------------------>
                <div class="col-12 col-md-7 order-md-7 order-8 wow fadeInLeft order-4" data-wow-delay="0.2s" >
                    <div class="section-heading">
                        <h2 class="mb-4">Charlas y conferencias</h2>
                        <p class="">Charlas y conferencias In Company</p>
                        <!-- <div class="line-shape"></div> -->
    
                        <button class="btn-acordeon btn-acordeon20" type="button" data-toggle="collapse" data-target="#w1" aria-expanded="false" aria-controls="collapseExample">
                        Flow, fluir en el trabajo <i class="fa fa-plus float-right" id="hola20"></i>
    
                        <div class="collapse" id="w1">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <p class="mb-3">Qué es lo que hace que el trabajo valga la ALEGRÍA de ser trabajado.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/workshops/fluir.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>
    
                        <button class="btn-acordeon btn-acordeon21" type="button" data-toggle="collapse" data-target="#w2" aria-expanded="false" aria-controls="collapseExample">
                        ¿Has descubierto tu verdadera pasión? <i class="fa fa-plus float-right" id="hola21"></i>
    
                        <div class="collapse" id="w2">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <p class="mb-3">Encontrando lo que te apasiona.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/workshops/pasion.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>
    
                        <button class="btn-acordeon btn-acordeon22" type="button" data-toggle="collapse" data-target="#w3" aria-expanded="false" aria-controls="collapseExample">
                        Happy Canvas <i class="fa fa-plus float-right" id="hola22"></i>
    
                        <div class="collapse" id="w3">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <p class="mb-3">Emprender desde la felicidad como modelo de negocios.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/workshops/happy.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>
    
                        <button class="btn-acordeon btn-acordeon23" type="button" data-toggle="collapse" data-target="#w4" aria-expanded="false" aria-controls="collapseExample">
                        Felicidad Organizacional <i class="fa fa-plus float-right" id="hola23"></i>
    
                        <div class="collapse" id="w4">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <p class="mb-3">Nuevas Tendencias en Capital Humano y vPsicología Positiva Organizacional.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/workshops/felicidad.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>
    
                        <button class="btn-acordeon btn-acordeon24" type="button" data-toggle="collapse" data-target="#w5" aria-expanded="false" aria-controls="collapseExample">
                        Diversidad en los equipos de trabajo <i class="fa fa-plus float-right" id="hola24"></i>
    
                        <div class="collapse" id="w5">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <p class="mb-3">la importancia de integrar la diversidad en nuestra cultura, haciendo hincapié en el ámbito laboral.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/workshops/diversidad.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>

                        <button class="btn-acordeon btn-acordeon25" type="button" data-toggle="collapse" data-target="#w6" aria-expanded="false" aria-controls="collapseExample">
                        ¿Qué son las empresas B? <i class="fa fa-plus float-right" id="hola25"></i>
    
                        <div class="collapse" id="w6">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <p class="mb-3">Redefiniendo el sentido del éxito en los negocios.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/workshops/empresab.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>

                        <button class="btn-acordeon btn-acordeon26" type="button" data-toggle="collapse" data-target="#w7" aria-expanded="false" aria-controls="collapseExample">
                        Desafío High-Tech / High-Touch <i class="fa fa-plus float-right" id="hola26"></i>
    
                        <div class="collapse" id="w7">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <p class="mb-3">¿Cómo humanizar lo digital?.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/workshops/desafio.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>

                        <button class="btn-acordeon btn-acordeon27" type="button" data-toggle="collapse" data-target="#w8" aria-expanded="false" aria-controls="collapseExample" id="contact">
                        Pequeños ajustes, GRANDES CAMBIOS <i class="fa fa-plus float-right" id="hola27"></i>
    
                        <div class="collapse" id="w8">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <p class="mb-3">Cómo administrar mejor nuestros esfuerzos al trabajar.</p>
                                        <a href="#contact" class="btn-primary btn-sm">INFORMAME</a>
                                    </div>
                                    <div class="col-md-5 col-12 mt-4 mt-lg-0">
                                        <img src="{{ asset('img/servicios/workshops/pequenos.jpg') }}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </button>
                              
                    </div>
                </div>
                <div class="col-12 col-md-5 order-md-8 order-7 wow fadeInRight order-5" data-wow-delay="0.3s">
                    <img src="{{ asset('img/ilustraciones/charlas.svg') }}" alt="" class="mb-5">
                </div>

            </div>
        </div>
    </section>
    
    <!-- ***** Contact Us Area Start ***** -->
    @include('layouts.contact')
    <!-- ***** Contact Us Area End ***** -->    

@endsection
@section('section-scripts')
<script type="text/javascript">
    $('#service').addClass('active-nuevo');
</script>
@endsection