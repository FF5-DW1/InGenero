@extends('layouts.app')

@section('content')
    @php
        function getImage($stringImage)
        {
            if ($stringImage) {
                $image = explode('*', $stringImage);
                return $image[0];
            }
            return 'avatar.jpg';
        }
    @endphp

    <!-- What We Offer-->
    <section class="section swiper-container swiper-slider swiper-slider-2 swiper-slider-3" data-loop="true"
        data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
            <div class="swiper-slide context-dark" data-slide-bg="img4k/pexels-photo-6899776_recorte.jpeg">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-9 col-md-8 col-lg-7 col-xl-7 offset-lg-1 offset-xxl-0">
                                <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp"
                                        data-caption-delay="0">Vivir es puro teatro</span></h1>
                                <p class="big swiper-text" data-caption-animate="fadeInLeft" data-caption-delay="300">Únete
                                    al proyecto para que todos juntos podamos crecer y desarrollar nuestro arte</p><a
                                    class="button button-lg button-primary button-winona button-shadow-2" href="nosotras"
                                    data-caption-animate="fadeInUp" data-caption-delay="300">Mas información</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide context-dark" data-slide-bg="img4k/free-photo-of-mujer-vintage-vestido-retro.jpeg">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-lg-7 offset-lg-1 offset-xxl-0">
                                <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInDown"
                                        data-caption-delay="0">nuestras actrices</span></h1>
                                <p class="big swiper-text" data-caption-animate="fadeInRight" data-caption-delay="300">Date
                                    una vuelta por la galería de talentos, seguro que te sorprenderá</p>
                                <div class="button-wrap oh"><a
                                        class="button button-lg button-primary button-winona button-shadow-2"
                                        href="profiles" data-caption-animate="slideInUp" data-caption-delay="0">Perfiles</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination" data-bullet-custom="true"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev">
            <div class="preview">
                <div class="preview__img"></div>
            </div>
            <div class="swiper-button-arrow"></div>
        </div>
        <div class="swiper-button-next">
            <div class="swiper-button-arrow"></div>
            <div class="preview">
                <div class="preview__img"></div>
            </div>
        </div>
    </section>
    <section class="section section-md bg-default">
        <div class="container">
            <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Asociación In Genero</span></h3>
            <div class="row row-md row-30">
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Services Terri-->
                        <article class="services-terri wow slideInDown">
                            <div class="services-terri-figure"><img src="images/menu-2-370x278.jpg" alt=""
                                    width="370" height="278" />
                            </div>
                            <div class="services-terri-caption">
                                <h5 class="services-terri-title"><a href="#">igualdad</a></h5>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Services Terri-->
                        <article class="services-terri wow slideInUp">
                            <div class="services-terri-figure"><img src="images/menu-2-370x278.jpg" alt=""
                                    width="370" height="278" />
                            </div>
                            <div class="services-terri-caption">
                                <h5 class="services-terri-title"><a target="en_blank" href="https://www.ingenero.es/">Web In
                                        Genero</a></h5>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Services Terri-->
                        <article class="services-terri wow slideInUp">
                            <div class="services-terri-figure"><img src="images/menu-2-370x278.jpg" alt=""
                                    width="370" height="278" />
                            </div>
                            <div class="services-terri-caption">
                                <h5 class="services-terri-title"><a target="en_blank" href="https://nosotras.app/">Nosotras
                                        App</a></h5>
                            </div>
                        </article>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section CTA-->
    <section class="primary-overlay section parallax-container" data-parallax-img="img4k/pexels-photo-7234276.jpeg">
        <div class="parallax-content section-xl context-dark text-md-left">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-8 col-md-7 col-lg-5">
                        <div class="cta-modern">
                            <h3 class="cta-modern-title wow fadeInRight">APOYA EL PROYECTO</h3>
                            <p class="lead">Desde aquí te animamos a que con tu aportación ayudes a financiar la formación
                                de nuestras estrellas para que puedan conseguir sus metas profesionales</p>
                            <p class="cta-modern-text oh-desktop" data-wow-delay=".1s"><span
                                    class="cta-modern-decor wow slideInLeft"></span><span
                                    class="d-inline-block wow slideInDown">Donación segura con PayPal</span></p><a
                                class="button button-md button-secondary-2 button-winona wow fadeInUp" href="apoyo"
                                data-wow-delay=".2s">aportar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--carusel estrellas-->
    {{-- <section class="section section-xl bg-default">
    <div class="container">
      <h3 class="wow fadeInLeft">Nuestras estrellas</h3>
    </div>
    <div class="container container-style-1">
      <div class="owl-carousel owl-style-12" data-items="1" data-sm-items="2" data-lg-items="3" data-margin="30" data-xl-margin="45" data-autoplay="true" data-nav="true" data-center="true" data-smart-speed="400">
        <!-- Quote Tara-->
        <article class="quote-tara">
          <div class="quote-tara-caption">
            <div class="quote-tara-text">
              <p class="q">Una joven actriz llena de talento y carisma que está cautivando al público con su actuación en cada papel que interpreta</p>
            </div>
            <div class="quote-tara-figure">
              <img src="images/user-8-115x115.jpg" alt="" width="115" height="115"/>
            </div>
          </div>
          <h6 class="quote-tara-author">Ashley Fitzgerald</h6>
        </article>
        <!-- Quote Tara-->
        <article class="quote-tara">
          <div class="quote-tara-caption">
            <div class="quote-tara-text">
              <p class="q">Una prometedora actriz con una presencia magnética en el escenario, cuyo talento innato la está llevando a destacar en el mundo de la actuación.</p>
            </div>
            <div class="quote-tara-figure"><img src="images/user-8-115x115.jpg" alt="" width="115" height="115"/>
            </div>
          </div>
          <h6 class="quote-tara-author">Stephanie Williams</h6>
        </article>
        <!-- Quote Tara-->
        <article class="quote-tara">
          <div class="quote-tara-caption">
            <div class="quote-tara-text">
              <p class="q">Una actriz versátil y apasionada que se destaca por su habilidad para dar vida a personajes complejos y emocionalmente cautivadores.</p>
            </div>
            <div class="quote-tara-figure"><img src="images/user-7-115x115.jpg" alt="" width="115" height="115"/>
            </div>
          </div>
          <h6 class="quote-tara-author">Billy Johnson</h6>
        </article>
        <!-- Quote Tara-->
        <article class="quote-tara">
          <div class="quote-tara-caption">
            <div class="quote-tara-text">
              <p class="q">Una talentosa actriz en ascenso que impresiona con su dedicación y entrega en cada proyecto, dejando una huella imborrable en la audiencia.</p>
            </div>
            <div class="quote-tara-figure"><img src="images/user-9-115x115.jpg" alt="" width="115" height="115"/>
            </div>
          </div>
          <h6 class="quote-tara-author">Aarona Wilson</h6>
        </article>
      </div>
    </div>
  </section>
   --}}

    <!--carusel estrellas-->
    <section class="section section-xl bg-default">
        <div class="container">
            <h3 class="wow fadeInLeft">Nuestras estrellas</h3>
        </div>
        <div class="container container-style-1">
            <div class="owl-carousel owl-style-12" data-items="1" data-sm-items="2" data-lg-items="3" data-margin="30"
                data-xl-margin="45" data-autoplay="true" data-nav="true" data-center="true" data-smart-speed="400">
                @foreach ($profiles as $profile)
                    <!-- Card para el carrusel -->
                    <a href="">
                        <article class="quote-tara">
                            <div class="quote-tara-caption">
                                
                                    <img class="wow fadeIn" data-wow-delay="0.3s" src="{{ asset('img/' . getImage($profile->profile_media)) }}"
                                        alt="imagen estrellas" width="300" height="300" />
                                        
                                
                            </div>
                            <h6 class="quote-tara-author">{{ $profile->name }}</h6>
                        </article>
                    </a>
                @endforeach
            </div>
        </div>
    </section>



    <!-- Section CTA-->
    <section class="primary-overlay section parallax-container"
        data-parallax-img="img4k/pexels-pavel-danilyuk-72342556.jpg">
        <div class="parallax-content section-xxl context-dark text-md-left">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-9 col-md-7 col-lg-5">
                        <div class="cta-modern">
                            <h3 class="cta-modern-title cta-modern-title-2 oh-desktop"><span
                                    class="d-inline-block wow fadeInLeft">AMADRINA UNA ESTRELLA</span></h3>
                            <p class="cta-modern-text cta-modern-text-2 oh-desktop" data-wow-delay=".1s"><span
                                    class="cta-modern-decor cta-modern-decor-2 wow slideInLeft"></span><span
                                    class="d-inline-block wow slideInUp">Puedes emparejarte con una o más actrices para ver
                                    su evolución de manera más personal,<br>PUEDES SER UN GRAN APOYO PARA ELLAS</span></p><a
                                class="button button-lg button-secondary button-winona wow fadeInRight" href="contacto"
                                data-wow-delay=".2s">AMADRINA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- god mothers-->
    <section class="section section-lg bg-default">
        <div class="container">
            <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Madrinas habituales</span></h3>
            <div class="row row-lg row-30">
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- godmother-->
                    <article class="product wow fadeInLeft" data-wow-delay=".15s">
                        <div class="product-figure"><img src="images/product-1-161x162.png" alt=""
                                width="161" height="162" />
                        </div>

                        <h6 class="product-title">Inma Cuesta</h6>
                        <div class="product-price-wrap">
                            <div>Leyenda del cine con una increíble versatilidad y tres premios de la Academia.</div>
                        </div>
                        <div class="product-button">
                            <div class="button-wrap"><a class="button button-xs button-primary button-winona"
                                    target="en _blank" href="https://es.wikipedia.org/wiki/Inma_Cuesta">info</a></div>
                            <div class="button-wrap"><a class="button button-xs button-secondary button-winona"
                                    target="en _blank" href="https://www.instagram.com/inmakum/?hl=es">instagram</a></div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- godmother-->
                    <article class="product wow fadeInLeft" data-wow-delay=".15s">
                        <div class="product-figure"><img src="images/product-1-161x162.png" alt=""
                                width="161" height="162" />
                        </div>

                        <h6 class="product-title">Inma Cuesta</h6>
                        <div class="product-price-wrap">
                            <div>Leyenda del cine con una increíble versatilidad y tres premios de la Academia.</div>
                        </div>
                        <div class="product-button">
                            <div class="button-wrap"><a class="button button-xs button-primary button-winona"
                                    target="en _blank" href="https://es.wikipedia.org/wiki/Inma_Cuesta">info</a></div>
                            <div class="button-wrap"><a class="button button-xs button-secondary button-winona"
                                    target="en _blank" href="https://www.instagram.com/inmakum/?hl=es">instagram</a></div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- godmother-->
                    <article class="product wow fadeInLeft" data-wow-delay=".15s">
                        <div class="product-figure"><img src="images/product-1-161x162.png" alt=""
                                width="161" height="162" />
                        </div>

                        <h6 class="product-title">Inma Cuesta</h6>
                        <div class="product-price-wrap">
                            <div>Leyenda del cine con una increíble versatilidad y tres premios de la Academia.</div>
                        </div>
                        <div class="product-button">
                            <div class="button-wrap"><a class="button button-xs button-primary button-winona"
                                    target="en _blank" href="https://es.wikipedia.org/wiki/Inma_Cuesta">info</a></div>
                            <div class="button-wrap"><a class="button button-xs button-secondary button-winona"
                                    target="en _blank" href="https://www.instagram.com/inmakum/?hl=es">instagram</a></div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- godmother-->
                    <article class="product wow fadeInLeft" data-wow-delay=".15s">
                        <div class="product-figure"><img src="images/product-1-161x162.png" alt=""
                                width="161" height="162" />
                        </div>

                        <h6 class="product-title">Inma Cuesta</h6>
                        <div class="product-price-wrap">
                            <div>Leyenda del cine con una increíble versatilidad y tres premios de la Academia.</div>
                        </div>
                        <div class="product-button">
                            <div class="button-wrap"><a class="button button-xs button-primary button-winona"
                                    target="en _blank" href="https://es.wikipedia.org/wiki/Inma_Cuesta">info</a></div>
                            <div class="button-wrap"><a class="button button-xs button-secondary button-winona"
                                    target="en _blank" href="https://www.instagram.com/inmakum/?hl=es">instagram</a></div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-last bg-default">
        <div class="container-fluid container-inset-0 isotope-wrap">
            <div class="row row-10 gutters-10 isotope" data-isotope-layout="masonry" data-isotope-group="gallery"
                data-lightgallery="group">
                <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
                    <!-- Thumbnail Mary-->
                    <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInLeft"><a
                            class="thumbnail-mary-figure" href="img4k/pexels-photo-3644048.jpeg"
                            data-lightgallery="item"><img src="img4k/pexels-photo-3644048.jpeg" alt=""
                                width="310" height="585" /></a>
                        <div class="thumbnail-mary-caption">
                            <div>
                                <h6 class="thumbnail-mary-title"><a href="#">Don Juan Tenorio</a></h6>
                                <div class="thumbnail-mary-location">Patricia y Yolanda</div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-6 col-sm-8 col-xl-4 isotope-item oh-desktop">
                    <!-- Thumbnail Mary-->
                    <article class="thumbnail thumbnail-mary thumbnail-mary-big wow slideInRight"><a
                            class="thumbnail-mary-figure" href="images/gallery-2-1200x800-original.jpg"
                            data-lightgallery="item"><img src="images/gallery-2-631x587.jpg" alt=""
                                width="631" height="587" /></a>
                        <div class="thumbnail-mary-caption">
                            <div>
                                <h6 class="thumbnail-mary-title"><a href="#">Comfortable interior</a></h6>
                                <div class="thumbnail-mary-location">Modern Design</div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
                    <!-- Thumbnail Mary-->
                    <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInDown"><a
                            class="thumbnail-mary-figure" href="images/gallery-3-1200x800-original.jpg"
                            data-lightgallery="item"><img src="images/gallery-3-311x289.jpg" alt=""
                                width="311" height="289" /></a>
                        <div class="thumbnail-mary-caption">
                            <div>
                                <h6 class="thumbnail-mary-title"><a href="#">quality Dishware</a></h6>
                                <div class="thumbnail-mary-location">Top-notch utensils</div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-6 col-sm-8 col-xl-4 isotope-item oh-desktop">
                    <!-- Thumbnail Mary-->
                    <article class="thumbnail thumbnail-mary wow slideInUp"><a class="thumbnail-mary-figure"
                            href="images/gallery-4-1200x800-original.jpg" data-lightgallery="item"><img
                                src="images/gallery-4-631x289.jpg" alt="" width="631" height="289" /></a>
                        <div class="thumbnail-mary-caption">
                            <div>
                                <h6 class="thumbnail-mary-title"><a href="#">Refreshing cocktails</a></h6>
                                <div class="thumbnail-mary-location">Exclusive selection</div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
                    <!-- Thumbnail Mary-->
                    <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInUp"><a
                            class="thumbnail-mary-figure" href="images/gallery-5-1200x800-original.jpg"
                            data-lightgallery="item"><img src="images/gallery-5-311x289.jpg" alt=""
                                width="311" height="289" /></a>
                        <div class="thumbnail-mary-caption">
                            <div>
                                <h6 class="thumbnail-mary-title"><a href="#">Exotic Salads</a></h6>
                                <div class="thumbnail-mary-location">Summer Taste</div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
                    <!-- Thumbnail Mary-->
                    <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInRight"><a
                            class="thumbnail-mary-figure" href="images/gallery-6-1200x800-original.jpg"
                            data-lightgallery="item"><img src="images/gallery-6-311x289.jpg" alt=""
                                width="311" height="289" /></a>
                        <div class="thumbnail-mary-caption">
                            <div>
                                <h6 class="thumbnail-mary-title"><a href="#">All Types of pizza</a></h6>
                                <div class="thumbnail-mary-location">Special Recipes</div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
                    <!-- Thumbnail Mary-->
                    <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInLeft"><a
                            class="thumbnail-mary-figure" href="images/gallery-7-1200x800-original.jpg"
                            data-lightgallery="item"><img src="images/gallery-7-311x289.jpg" alt=""
                                width="311" height="289" /></a>
                        <div class="thumbnail-mary-caption">
                            <div>
                                <h6 class="thumbnail-mary-title"><a href="#">Diverse menu</a></h6>
                                <div class="thumbnail-mary-location">Pick Your Favorite dish</div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
