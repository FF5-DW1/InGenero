@extends('layouts.app')

@section('content')
<div class="container">
    <ul class="breadcrumbs-custom-path">
        <li><a href="/">Inicio</a></li>
        <li class="active">Contacto</li>
    </ul>
</div>
  <div class="container">
    <h1>Financia nuestros estudios</h1><br><br>
    <p>Somos un grupo de actrices que estamos buscando apoyo para poder continuar nuestros estudios y desarrollar nuestras habilidades artísticas. Tu ayuda será fundamental para alcanzar nuestros sueños y perseguir nuestra pasión.</p>
    <p>Si deseas brindarnos tu apoyo, puedes hacerlo a través de las siguientes opciones:</p>
    <div class="button-container">
      <a href="https://www.patreon.com/tuusuario" class="button button-xs button-primary button-winona">Patreon</a>
      <a href="https://www.paypal.com/tuusuario" class="botonPaypal button button-xs button-primary button-winona">PayPal</a>
    </div>
  </div>
@endsection