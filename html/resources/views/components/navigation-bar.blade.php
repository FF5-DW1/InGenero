<!-- Page Header -->

<header class="section page-header">
  <!-- RD Navbar -->
  <div class="rd-navbar-wrap">
    <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="56px" data-xl-stick-up-offset="56px" data-xxl-stick-up-offset="56px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
      <div class="rd-navbar-inner-outer">
        <div class="rd-navbar-inner">
          <!-- RD Navbar Panel-->
          <div class="rd-navbar-panel">
            <!-- RD Navbar Toggle -->
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
            <!-- RD Navbar Brand -->
            <div class="rd-navbar-brand"><a class="brand" href="/"><img class="brand-logo-dark logo" src="{{ asset('imgnav/logo_verde.svg') }}" alt="imagen logo, mi vida es puro teatro" width="198" height="66"/></a></div>
          </div>
          <div class="rd-navbar-right rd-navbar-nav-wrap">
            <div class="rd-navbar-aside">
              <ul class="rd-navbar-contacts-2">
                <li>
                  <div class="unit unit-spacing-xs">
                    <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                    <div class="unit-body"><a class="phone" href="tel:#">+34 667564756</a></div>
                  </div>
                </li>
                
              </ul>
              <ul class="list-share-2">
                <li><a target="en _blank" class="icon mdi mdi-facebook" href="https://www.facebook.com/asociacionIngenero/?locale=es_ES"></a></li>
                <li><a target="en _blank" class="icon mdi mdi-twitter" href="#"></a></li>
                <li><a target="en _blank" class="icon mdi mdi-instagram" href="#"></a></li>
              </ul>
            </div>
            <div class="rd-navbar-main">
              <!-- RD Navbar Nav-->
              <ul class="rd-navbar-nav">
                
                @if (Auth::guest())
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="/">Inicio</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('profiles') }}">Perfiles</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('nosotras') }}">Nosotr@s</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('contacto') }}">Contacto</a>
                  </li> 
                @endif
                  
                @auth
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('gestionadmin') }}">Gestion Perfiles</a>
                    </li> 
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('formprofile') }}">Crear Estrella</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('formmadrinas') }}">Crear Madrine</a>
                    </li>
                    </li>
                  <li class="rd-nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <span>{{ Auth::user()->name }}</span>
                        <button type="submit" class="button button-sm button-primary button-winona button-shadow-2 fadeInUp animated">Cerrar sesión</button>
                    </form>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('register') }}">Registrar</a>
                  </li>
                @endauth
              </ul>
            </div>
          </div>
          <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-open rd-navbar-fixed-element-1" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
            <div class="project-hamburger"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
            </div>
          </div>
          <div class="rd-navbar-project">
            <div class="rd-navbar-project-header">
              <h5 class="rd-navbar-project-title">Galeria</h5>
              <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-close" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
                <div class="project-close"><span></span><span></span></div>
              </div>
            </div>
            <div class="rd-navbar-project-content rd-navbar-content">
              <div>
                <div class="row gutters-20" data-lightgallery="group">
                  <div class="col-6">
                    <!-- Thumbnail Creative-->
                    <article class="thumbnail thumbnail-creative"><a href="images/project-1-1200x800-original.jpg" data-lightgallery="item">
                        <div class="thumbnail-creative-figure"><img src="images/project-1-195x164.jpg" alt="" width="195" height="164"/>
                        </div>
                        <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                  </div>
                  <div class="col-6">
                    <!-- Thumbnail Creative-->
                    <article class="thumbnail thumbnail-creative"><a href="images/project-2-1200x800-original.jpg" data-lightgallery="item">
                        <div class="thumbnail-creative-figure"><img src="images/project-2-195x164.jpg" alt="" width="195" height="164"/>
                        </div>
                        <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                  </div>
                  <div class="col-6">
                    <!-- Thumbnail Creative-->
                    <article class="thumbnail thumbnail-creative"><a href="images/project-3-1200x800-original.jpg" data-lightgallery="item">
                        <div class="thumbnail-creative-figure"><img src="images/project-3-195x164.jpg" alt="" width="195" height="164"/>
                        </div>
                        <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                  </div>
                  <div class="col-6">
                    <!-- Thumbnail Creative-->
                    <article class="thumbnail thumbnail-creative"><a href="images/project-4-1200x800-original.jpg" data-lightgallery="item">
                        <div class="thumbnail-creative-figure"><img src="images/project-4-195x164.jpg" alt="" width="195" height="164"/>
                        </div>
                        <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                  </div>
                  <div class="col-6">
                    <!-- Thumbnail Creative-->
                    <article class="thumbnail thumbnail-creative"><a href="images/project-5-1200x800-original.jpg" data-lightgallery="item">
                        <div class="thumbnail-creative-figure"><img src="images/project-5-195x164.jpg" alt="" width="195" height="164"/>
                        </div>
                        <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                  </div>
                  <div class="col-6">
                    <!-- Thumbnail Creative-->
                    <article class="thumbnail thumbnail-creative"><a href="images/project-6-1200x800-original.jpg" data-lightgallery="item">
                        <div class="thumbnail-creative-figure"><img src="images/project-6-195x164.jpg" alt="" width="195" height="164"/>
                        </div>
                        <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>
