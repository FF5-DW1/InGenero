@extends('layouts.app')

@section('content')
{{--
<div class="m-5">
    <div class="flex flex-col lg:flex-row mt-10 mx-auto justify-center px-6 my-12">
        <div class="w-full lg:w-1/2 flex justify-center items-center mb-10 lg:mb-0">
            <img src="{{ asset('img/nosotras2.jpg') }}" alt="Imagem" class="w-full h-auto rounded-lg md:object-cover lg:object-cover lg:scale-75 md:scale-90">
</div>
<div class="lg:w-1/2 flex flex-col justify-center lg:pr-24 w-full">
    <p class="text-xl font-semibold leading-relaxed text-justify md:text-left lg:text-left">Somos un grupo de teatro compuesto por artistas valientes. Uno de nuestros grandes sueños es crecer profesionalmente en el ámbito de la interpretación.
        <br>
        <br>
        Nuestra misión es utilizar el poder del arte para compartir historias auténticas y emocionantes que inspiran, crean conciencia y promueven la transformación social. A través de actuaciones cautivadoras, exploramos temas universales de superación, resiliencia y empoderamiento.
</div>
</div>

<div class="flex flex-col lg:flex-row md:mt-11 mx-auto justify-center px-6 my-12">
    <div class="lg:w-1/2 flex flex-col justify-center lg:pl-24 w-full order-last md:order-first lg:order-first">
        <p class="text-xl font-semibold leading-relaxed text-justify md-text-left lg:text-left">
            Con cada representación, buscamos desafiar estereotipos, fomentar la empatía y promover la igualdad, invitando a la reflexión y al cambio positivo en nuestra sociedad.
            <br>
            <br>
            Somos un grupo de actores y actrices comprometidos con la construcción de un mundo más inclusivo, donde el respeto, la dignidad y la justicia sean los pilares fundamentales.
            <br>
            <br>
            Junt@s, creamos un espacio de expresión creativa, donde nuestras voces se unen para transmitir mensajes de esperanza.
        </p>
    </div>
    <div class="w-full lg:w-1/2 flex justify-center items-center mb-10 lg:mb-0">
        <img src="{{ asset('img/nosotras1.jpg') }}" alt="Imagem" class="w-full h-auto rounded-lg md:object-cover lg:object-cover lg:scale-75 md:scale-90">
    </div>
</div>
</div> --}}


<!-- parallax top-->
<!-- Breadcrumbs -->
<section class="bg-gray-7">
    <div class="breadcrumbs-custom box-transform-wrap context-dark">
        <div class="container">
            <h3 class="breadcrumbs-custom-title">Nosotr@s</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url(img4k/pexels-photo-6896196.jpeg);"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="/">Inicio</a></li>
            <li class="active">Nosotr@s</li>
        </ul>
    </div>
</section>
<section class="section section-lg bg-default">
    <div class="container">
        <div class="tabs-custom row row-50 justify-content-center flex-lg-row-reverse text-center text-md-left" id="tabs-4">
            <div class="col-lg-4 col-xl-3">
                <h5 class="text-spacing-200 text-capitalize">Formación de actrices</h5>
                <ul class="nav list-category list-category-down-md-inline-block">
                    <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay="0s"><a class="active" href="#tabs-4-1" data-toggle="tab">Nuestra historia</a></li>
                    <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay=".2s"><a href="#tabs-4-3" data-toggle="tab">Objetivos y metas a futuro</a></li>
                    <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay=".3s"><a href="#tabs-4-4" data-toggle="tab">Valores</a></li>
                </ul><a class="button button-xl button-primary button-winona" href="contacto">Contacto</a>
            </div>
            <div class="col-lg-8 col-xl-9">
                <!-- Tab panes-->
                <div class="tab-content tab-content-1">
                    <div class="tab-pane fade show active" id="tabs-4-1">
                        <h4>Historia de la compañía</h4>
                        <p>Somos un grupo de teatro compuesto por artistas valientes que persiguen uno de sus grandes sueños: convertirse en actrices y actores.
                            Nuestra pasión por el arte dramático nos ha llevado a formar este colectivo, y juntes, hemos emprendido un viaje lleno de emocionantes
                            y experiencias en el mundo escénico.
                        </p><img src="img4k/HD-wallpaper-people-beside-stage.jpg" alt="" width="835" height="418" />
                    </div>

                    <div class="tab-pane fade" id="tabs-4-3">
                        <h4>Objetivos a futuro</h4>
                        <p>Nuestra misión va más allá de simples representaciones. Buscamos utilizar el poder del arte para compartir historias auténticas y emocionantes que inspiren,
                            creen conciencia y promuevan la transformación social.
                            A través de nuestras actuaciones cautivadoras, exploramos temas universales de superación, resiliencia y empoderamiento.</p>
                        <p>Nos retamos constantemente a desafiar estereotipos, fomentar la empatía y promover la igualdad en cada una de nuestras puestas en escena. 
                            Aspiramos a invitar a la reflexión y al cambio positivo en nuestra sociedad. Como grupo de intérpretes comprometides, 
                            nuestra visión es la construcción de un mundo más inclusivo, donde el respeto, la dignidad y la justicia sean los pilares fundamentales.</p><img src="img4k/free-photo-of-preparando-grupo-chicas-actuacion.jpeg" alt="" width="835" height="418" />
                    </div>
                    <div class="tab-pane fade" id="tabs-4-4">
                        <h4>Valores</h4>
                        <p>En nuestra compañía de teatro, valoramos la creatividad y la pasión que cada une de nosotres aporta a cada actuación. Nos guía el deseo de transmitir mensajes significativos y emocionantes a través del arte escénico.
                            Con dedicación y esfuerzo, trabajamos en equipo para mejorar constantemente y crecer como artistas. Nos enorgullece el ambiente colaborativo que hemos construido y la humildad con la que enfrentamos los desafíos.</p>
                        <p>Creemos en el poder del teatro para impactar positivamente a la sociedad y buscamos involucrarnos en proyectos que reflejen nuestros valores de inclusión y respeto.
                            Aunque nuestra trayectoria es corta, estamos comprometides a seguir adelante con determinación y entusiasmo, aspirando a un futuro prometedor en el mundo del arte dramático.</p>
                            <img src="images/about-1-835x418.jpg" alt="" width="835" height="418" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Our Team-->

<section class="section section-lg bg-gray-100 text-left section-relative">
    <div class="container">
        <div class="row row-60 justify-content-center justify-content-xxl-between">
            <div class="col-lg-6 col-xxl-5 position-static">
                <h3>Línea de vida</h3>
                <div class="tabs-custom" id="tabs-5">
                    <div class="tab-content tab-content-1">
                        <div class="tab-pane fade" id="tabs-5-2">
                            <h5 class="font-weight-normal text-transform-none text-spacing-75">Se fundó el grupo de teatro
                                "Mi vida es puro teatro" </h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="tabs-5-3">
                            <h5 class="font-weight-normal text-transform-none text-spacing-75">Consolidación del grupo de teatro</h5>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                        <div class="tab-pane fade show active" id="tabs-5-4">
                            <h5 class="font-weight-normal text-transform-none text-spacing-75">Crecer y ayudar todo lo
                                que podamos en el desarrollo de nuevas estrellas</h5>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="list-history-wrap">
                        <ul class="nav list-history">

                            <li class="list-history-item" role="presentation"><a href="#tabs-5-2" data-toggle="tab">
                            <li class="list-history-item" role="presentation"><a href="#tabs-5-2" data-toggle="tab">
                                    <div class="list-history-circle"></div>2021
                                </a></li>
                            <li class="list-history-item" role="presentation"><a href="#tabs-5-3" data-toggle="tab">
                                    <div class="list-history-circle"></div>2023
                                </a></li>
                            <li class="list-history-item" role="presentation"><a class="active" href="#tabs-5-4" data-toggle="tab">
                                    <div class="list-history-circle"></div>FUTURO
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-lg-6 position-static index-1">
                <div class="bg-image-right-1 bg-image-right-lg"><img src="images/our_history-1110x710.jpg" alt="" width="1110" height="710" />
                    <div class="link-play-modern"><a class="icon mdi mdi-play" data-lightgallery="item" href="https://www.youtube.com/watch?v=TuOCUU644Jg&t=2s"></a>
                        <div class="link-play-modern-title">Videobook<span>Conjunto</span></div>
                        <div class="link-play-modern-decor"></div>
                    </div>
                    <div class="box-transform" style="background-image: url(img4k/pexels-photo-458379.jpeg);"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our clients-->
<section class="section section-lg bg-default text-md-left">
    <div class="container">
        <div class="row row-60 justify-content-center flex-lg-row-reverse">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="offset-left-xl-70">
                    <h3 class="heading-3">OPINIONES COLABORADORES</h3>
                    <div class="slick-quote">
                        <!-- Slick Carousel-->
                        <div class="slick-slider carousel-parent" data-autoplay="true" data-swipe="true" data-items="1" data-child="#child-carousel-5" data-for="#child-carousel-5" data-slide-effect="true">
                            <div class="item">
                                <!-- Quote Modern-->
                                <article class="quote-modern">
                                    <h5 class="quote-modern-text"><span class="q">Torus accelerares, tanquam
                                            ferox cacula. Fluctuss experimentum in burdigala! Ubi est peritus classis?
                                            Peregrinatione superbe ducunt ad magnum verpa.</span></h5>
                                    <h5 class="quote-modern-author">Ramon Garcia,</h5>
                                    <p class="quote-modern-status">Patreon</p>
                                </article>
                            </div>
                            <div class="item">
                                <!-- Quote Modern-->
                                <article class="quote-modern">
                                    <h5 class="quote-modern-text"><span class="q">Gluten, fluctus, et galatae.
                                            Germanus classiss ducunt ad brodium. Pol, a bene cedrium. Tabess unda in
                                            neuter avenio! Orexiss sunt adelphiss de rusticus parma.</span></h5>
                                    <h5 class="quote-modern-author">Samantha Ruiz,</h5>
                                    <p class="quote-modern-status">Madrina</p>
                                </article>
                            </div>
                            <div class="item">
                                <!-- Quote Modern-->
                                <article class="quote-modern">
                                    <h5 class="quote-modern-text"><span class="q">Pol, silva! Grandis contencios
                                            ducunt ad torus. Monss congregabo in nobilis tectum! Velox, fatalis victrixs
                                            sapienter talem de emeritis, festus torus.</span></h5>
                                    <h5 class="quote-modern-author">Jonathan Perez</h5>
                                    <p class="quote-modern-status">Espectador</p>
                                </article>
                            </div>
                            <div class="item">
                                <!-- Quote Modern-->
                                <article class="quote-modern">
                                    <h5 class="quote-modern-text"><span class="q">Fluctuss sunt eras de neuter
                                            plasmator. Heuretes noster brabeuta est. Nixus, visus, et mensa. Primus,
                                            magnum tatas rare locus de altus, camerarius clabulare.</span></h5>
                                    <h5 class="quote-modern-author">Ana Becerra</h5>
                                    <p class="quote-modern-status">Director</p>
                                </article>
                            </div>
                        </div>
                        <div class="slick-slider child-carousel" id="child-carousel-5" data-arrows="true" data-for=".carousel-parent" data-items="4" data-sm-items="4" data-md-items="4" data-lg-items="4" data-xl-items="4" data-slide-to-scroll="1">
                            <div class="item"><img class="img-circle" src="images/team-5-83x83.jpg" alt="" width="83" height="83" />
                            </div>
                            <div class="item"><img class="img-circle" src="images/team-6-83x83.jpg" alt="" width="83" height="83" />
                            </div>
                            <div class="item"><img class="img-circle" src="images/team-7-83x83.jpg" alt="" width="83" height="83" />
                            </div>
                            <div class="item"><img class="img-circle" src="images/team-8-83x83.jpg" alt="" width="83" height="83" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-7"><img src="images/wp-say-669x447.jpg" alt="" width="669" height="447" />
            </div>
        </div>
    </div>
</section>
@endsection