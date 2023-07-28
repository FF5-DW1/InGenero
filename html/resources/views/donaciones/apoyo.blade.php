@extends('layouts.app')

@section('content')
<div class="container">
  <ul class="breadcrumbs-custom-path">
    <li><a href="/">Inicio</a></li>
    <li class="active">Contacto</li>
  </ul>
</div>
<div class="container text-center">
  <h1>Apoya nuestra carrera</h1><br><br>
  <p>¡Acompáñanos en nuestro crowdfunding para impulsar nuestras futuras carreras en el arte dramático!
    Somos un grupo de artistas apasionades por esta profesión, que buscamos recursos para acceder a programas de formación, audiciones y oportunidades profesionales.
    Con tu contribución, podemos perseguir nuestros sueños y llevar nuestras actuaciones a un público más amplio.
    Únete a nuestro emocionante viaje y contribuye a construir un futuro prometedor en el mundo del arte dramático.
  </p>
  <p> ¡Tu colaboración marca la diferencia! Conócenos más en:</p>
  <section class="d-flex flex-column align-items-center">
    <div class="button-container">
      <a href="nosotras" class="button button-xs button-primary button-winona">Nosotr@s</a>
    </div><br>
    <p>Si deseas brindarnos tu apoyo, puedes hacerlo a través de las siguientes opciones:</p>
    <div class="button-container">
      <a href="https://www.patreon.com/tuusuario" class="button button-xs button-primary button-winona">Patreon</a>
    </div>
  </section>
  <div class="falseoNavbarAdmin"></div>
</div>
@endsection
