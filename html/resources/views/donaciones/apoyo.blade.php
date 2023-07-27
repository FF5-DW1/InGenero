@extends('layouts.app')

@section('content')
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="/">Inicio</a></li>
            <li class="active">Apoyo</li>
        </ul>
    </div>
    <div class="breadcrumbs-custom box-transform-wrap context-dark">
        <div class="container">
            <h3 class="breadcrumbs-custom-title">Financia nuestros estudios</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url(img4k/apoyo.jpg);"></div>
    </div>
    <div class="container" id="containerApoyo">
        <br>
        <p>Somos un grupo de actrices que estamos buscando apoyo para poder continuar nuestros estudios y desarrollar
            nuestras habilidades artísticas. Tu ayuda será fundamental para alcanzar nuestros sueños y perseguir nuestra
            pasión.</p>
        <h6>Si deseas brindarnos tu apoyo, puedes hacerlo a través de las siguientes opciones:</h6>
        <div class="button-container">
            <a href="https://www.patreon.com/tuusuario" class="button button-xs button-primary button-winona">Patreon</a>
            <a href="https://www.paypal.com/tuusuario"
                class="botonPaypal button button-xs button-primary button-winona">PayPal</a>
        </div>
    </div>
@endsection
