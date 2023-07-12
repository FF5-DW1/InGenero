@extends('layouts.app')

@section('content')
{{-- 
<div class="m-5">
    <div class="flex flex-col lg:flex-row mt-10 mx-auto justify-center px-6 my-12">
        <div class="w-full lg:w-1/2 flex justify-center items-center mb-10 lg:mb-0">
            <img src="{{ asset('img/nosotras2.jpg') }}" alt="Imagem" class="w-full h-auto rounded-lg md:object-cover lg:object-cover lg:scale-75 md:scale-90">
        </div>
        <div class="lg:w-1/2 flex flex-col justify-center lg:pr-24 w-full">
            <p class="text-xl font-semibold leading-relaxed text-justify md:text-left lg:text-left">Somos un grupo de teatro compuesto por artistas valientes. Uno de  nuestros grandes sueños es crecer profesionalmente en el ámbito de la interpretación. 
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
            Junt@s, creamos un espacio de expresión creativa, donde nuestras voces se unen para transmitir mensajes de esperanza.</p>
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
              <h5 class="text-spacing-200 text-capitalize">10+ years of experience</h5>
              <ul class="nav list-category list-category-down-md-inline-block">
                <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay="0s"><a class="active" href="#tabs-4-1" data-toggle="tab">About us</a></li>
                <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay=".1s"><a href="#tabs-4-2" data-toggle="tab">Our Mission</a></li>
                <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay=".2s"><a href="#tabs-4-3" data-toggle="tab">Our Goals</a></li>
                <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay=".3s"><a href="#tabs-4-4" data-toggle="tab">Our Values</a></li>
              </ul><a class="button button-xl button-primary button-winona" href="contacts.html">Contact us</a>
            </div>
            <div class="col-lg-8 col-xl-9">
              <!-- Tab panes-->
              <div class="tab-content tab-content-1">
                <div class="tab-pane fade show active" id="tabs-4-1">
                  <h4>a few words about us</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p><img src="images/about-1-835x418.jpg" alt="" width="835" height="418"/>
                </div>
                <div class="tab-pane fade" id="tabs-4-2">
                  <h4>Offering the Best Pizza in Los Angeles</h4>
                  <p>Lotus advenas ducunt ad gemna. Ubi est domesticus domina? Heu, barbatus mens! Cum elogium favere, omnes lubaes tractare talis, barbatus adiuratores. Mirabilis hydras ducunt ad danista. Dominas sunt accentors de germanus cacula. Amicitias prarere in alta muta! Ecce, bubo! Nunquam promissio verpa. Talis, primus fugas recte consumere de audax, festus indictio. Nunquam quaestio scutum. Valebats</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><img src="images/about-1-835x418.jpg" alt="" width="835" height="418"/>
                </div>
                <div class="tab-pane fade" id="tabs-4-3">
                  <h4>Providing Top-notch Customer Service</h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                  <p>Lotus advenas ducunt ad gemna. Ubi est domesticus domina? Heu, barbatus mens! Cum elogium favere, omnes lubaes tractare talis, barbatus adiuratores. Mirabilis hydras ducunt ad danista. Dominas sunt accentors de germanus cacula. Amicitias prarere in alta muta! Ecce, bubo! Nunquam promissio verpa. Talis, primus fugas recte consumere de audax, festus indictio. Nunquam quaestio scutum. Valebats</p><img src="images/about-1-835x418.jpg" alt="" width="835" height="418"/>
                </div>
                <div class="tab-pane fade" id="tabs-4-4">
                  <h4>Integrity & Dedication</h4>
                  <p>Albus, dexter particulas grauiter consumere de ferox, bi-color abactus. Impositios studere, tanquam mirabilis hippotoxota. Cur torus manducare? Pol, vox! Cum barcas nocere, omnes specieses contactus</p>
                  <p>Lotus advenas ducunt ad gemna. Ubi est domesticus domina? Heu, barbatus mens! Cum elogium favere, omnes lubaes tractare talis, barbatus adiuratores. Mirabilis hydras ducunt ad danista. Dominas sunt accentors de germanus cacula. Amicitias prarere in alta muta! Ecce, bubo! Nunquam promissio verpa. Talis, primus fugas recte consumere de audax, festus indictio. Nunquam quaestio scutum. Valebats</p><img src="images/about-1-835x418.jpg" alt="" width="835" height="418"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

   

      <!-- Our Team-->
      <section class="section section-lg section-bottom-md-70 bg-default" id="nosotrasOurTeamSobrescrito">
        <div class="container">
          <h3 class="oh"><span class="d-inline-block wow slideInUp" data-wow-delay="0s">our team</span></h3>
          <div class="row row-lg row-40 justify-content-center">
            <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration="1s">
              <!-- Team Modern-->
              <article class="team-modern"><a class="team-modern-figure" href="#"><img src="images/team-01-270x236.jpg" alt="" width="270" height="236"/></a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#">Richard Peterson</a></h6>
                  <div class="team-modern-status">Head Chef</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                  </ul>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay="0s" data-wow-duration="1s">
              <!-- Team Modern-->
              <article class="team-modern"><a class="team-modern-figure" href="#"><img src="images/team-02-270x236.jpg" alt="" width="270" height="236"/></a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#">Amelia Lee</a></h6>
                  <div class="team-modern-status">Manager</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                  </ul>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInRight" data-wow-delay=".1s" data-wow-duration="1s">
              <!-- Team Modern-->
              <article class="team-modern"><a class="team-modern-figure" href="#"><img src="images/team-03-270x236.jpg" alt="" width="270" height="236"/></a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#">Sam Peterson</a></h6>
                  <div class="team-modern-status">Head Baker</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                  </ul>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1s">
              <!-- Team Modern-->
              <article class="team-modern"><a class="team-modern-figure" href="#"><img src="images/team-04-270x236.jpg" alt="" width="270" height="236"/></a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#">Jane Smith</a></h6>
                  <div class="team-modern-status">Pizza Chef</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                  </ul>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-gray-100 text-left section-relative">
        <div class="container">
          <div class="row row-60 justify-content-center justify-content-xxl-between">
            <div class="col-lg-6 col-xxl-5 position-static">
              <h3>Our history</h3>
              <div class="tabs-custom" id="tabs-5">
                <div class="tab-content tab-content-1">
                  <div class="tab-pane fade" id="tabs-5-1">
                    <h5 class="font-weight-normal text-transform-none text-spacing-75">PizzaHouse Establishment and First Happy Clients</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</p>
                  </div>
                  <div class="tab-pane fade" id="tabs-5-2">
                    <h5 class="font-weight-normal text-transform-none text-spacing-75">Organizing a Free Pizza Delivery Service in Los Angeles</h5>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                  </div>
                  <div class="tab-pane fade" id="tabs-5-3">
                    <h5 class="font-weight-normal text-transform-none text-spacing-75">Offering an Extended Range of Pizzas, Burgers, and Salads</h5>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                  </div>
                  <div class="tab-pane fade show active" id="tabs-5-4">
                    <h5 class="font-weight-normal text-transform-none text-spacing-75">Partnering with Organic Farms Located in California</h5>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                  </div>
                </div>
                <div class="list-history-wrap">
                  <ul class="nav list-history">
                   
                    <li class="list-history-item" role="presentation"><a href="#tabs-5-2"  data-toggle="tab">   
                    <li class="list-history-item" role="presentation"><a href="#tabs-5-2" data-toggle="tab">
                        <div class="list-history-circle"></div>2021</a></li>
                    <li class="list-history-item" role="presentation"><a href="#tabs-5-3" data-toggle="tab">
                        <div class="list-history-circle"></div>2023</a></li>
                    <li class="list-history-item" role="presentation"><a class="active" href="#tabs-5-4" data-toggle="tab">
                        <div class="list-history-circle"></div>FUTURO</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-9 col-lg-6 position-static index-1">
              <div class="bg-image-right-1 bg-image-right-lg"><img src="images/our_history-1110x710.jpg" alt="" width="1110" height="710"/>
                <div class="link-play-modern"><a class="icon mdi mdi-play" data-lightgallery="item" href="https://www.youtube.com/watch?v=1UWpbtUupQQ"></a>
                  <div class="link-play-modern-title">How we<span>Work</span></div>
                  <div class="link-play-modern-decor"></div>
                </div>
                <div class="box-transform" style="background-image: url(images/our_history-1110x710.jpg);"></div>
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
                <h3 class="heading-3">What People Say</h3>
                <div class="slick-quote">
                  <!-- Slick Carousel-->
                  <div class="slick-slider carousel-parent" data-autoplay="true" data-swipe="true" data-items="1" data-child="#child-carousel-5" data-for="#child-carousel-5" data-slide-effect="true">
                    <div class="item">
                      <!-- Quote Modern-->
                      <article class="quote-modern">
                        <h5 class="quote-modern-text"><span class="q">Torus accelerares, tanquam ferox cacula. Fluctuss experimentum in burdigala! Ubi est peritus classis? Peregrinatione superbe ducunt ad magnum verpa.</span></h5>
                        <h5 class="quote-modern-author">Stephen Adams,</h5>
                        <p class="quote-modern-status">Regular Client</p>
                      </article>
                    </div>
                    <div class="item">
                      <!-- Quote Modern-->
                      <article class="quote-modern">
                        <h5 class="quote-modern-text"><span class="q">Gluten, fluctus, et galatae. Germanus classiss ducunt ad brodium. Pol, a bene cedrium. Tabess unda in neuter avenio! Orexiss sunt adelphiss de rusticus parma.</span></h5>
                        <h5 class="quote-modern-author">Sam Peterson,</h5>
                        <p class="quote-modern-status">Regular Client</p>
                      </article>
                    </div>
                    <div class="item">
                      <!-- Quote Modern-->
                      <article class="quote-modern">
                        <h5 class="quote-modern-text"><span class="q">Pol, silva! Grandis contencios ducunt ad torus. Monss congregabo in nobilis tectum! Velox, fatalis victrixs sapienter talem de emeritis, festus torus.</span></h5>
                        <h5 class="quote-modern-author">Jane McMillan,</h5>
                        <p class="quote-modern-status">Regular Client</p>
                      </article>
                    </div>
                    <div class="item">
                      <!-- Quote Modern-->
                      <article class="quote-modern">
                        <h5 class="quote-modern-text"><span class="q">Fluctuss sunt eras de neuter plasmator. Heuretes noster brabeuta est. Nixus, visus, et mensa. Primus, magnum tatas rare locus de altus, camerarius clabulare.</span></h5>
                        <h5 class="quote-modern-author">Will Jones,</h5>
                        <p class="quote-modern-status">Regular Client</p>
                      </article>
                    </div>
                  </div>
                  <div class="slick-slider child-carousel" id="child-carousel-5" data-arrows="true" data-for=".carousel-parent" data-items="4" data-sm-items="4" data-md-items="4" data-lg-items="4" data-xl-items="4" data-slide-to-scroll="1">
                    <div class="item"><img class="img-circle" src="images/team-5-83x83.jpg" alt="" width="83" height="83"/>
                    </div>
                    <div class="item"><img class="img-circle" src="images/team-6-83x83.jpg" alt="" width="83" height="83"/>
                    </div>
                    <div class="item"><img class="img-circle" src="images/team-7-83x83.jpg" alt="" width="83" height="83"/>
                    </div>
                    <div class="item"><img class="img-circle" src="images/team-8-83x83.jpg" alt="" width="83" height="83"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-xl-7"><img src="images/wp-say-669x447.jpg" alt="" width="669" height="447"/>
            </div>
          </div>
        </div>
      </section>

@endsection

