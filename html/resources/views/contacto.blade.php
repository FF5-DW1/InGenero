@extends('layouts.app')

@section('content')
    
    <section class="bg-gray-7" id="containerContacto">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">Contacto</h3>
                <div class="breadcrumbs-custom-decor"></div>
            </div>
            <div class="box-transform" style="background-image: url(images/bg-1.jpg);"></div>
        </div>
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="/">Inicio</a></li>
                <li class="active">Contacto</li>
            </ul>
        </div>
    </section>
    <!-- Contacts-->
    <section class="section section-lg bg-default text-md-left">
        <div class="container">
            <div class="row row-60 justify-content-center">
                <div class="col-lg-8">
                    <h4 class="text-spacing-25 text-transform-none">CONTÁCTANOS</h4>
                    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="POST" action="{{ route('contact.send') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            @error('name')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            @error('email')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="message">Mensaje</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>

                            @error('message')
                            <span class="text-red-500">
                                {{ $message }}
                            </span>
                        @enderror
                        </div>
                        <input type="submit" class="button button-lg button-secondary button-winona wow fadeInRight"></input>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="aside-contacts">
                        <div class="row row-30">
                            <div class="col-sm-6 col-lg-12 aside-contacts-item">
                                <p class="aside-contacts-title">Redes sociales</p>
                                <ul class="list-inline contacts-social-list list-inline-sm">
                                    <li><a class="icon mdi mdi-facebook" href="https://www.facebook.com/asociacionIngenero/?locale=es_ES"></a></li>
                                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-lg-12 aside-contacts-item">
                                <p class="aside-contacts-title">Teléfono</p>
                                <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                                    <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                    <div class="unit-body"><a class="phone" href="tel:#">+34 665786789</a></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
