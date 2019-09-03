@extends('template')

@section('content')
<div class="slider">
    <ul class="slides">
        <li>
            <img src="https://lorempixel.com/580/250/nature/1"> <!-- random image -->
            <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
        </li>
        <li>
            <img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->
            <div class="caption left-align">
                <h3>Left Aligned Caption</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
        </li>
        <li>
            <img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
            <div class="caption right-align">
                <h3>Right Aligned Caption</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
        </li>
        <li>
            <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
            <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
        </li>
    </ul>
</div>
<div style="height:50px"></div>
<div class="container90">
    <div class="row">
        <div class="col m5 s12">
            <br class="hide-on-med-and-up">
            <br class="hide-on-med-and-up">
            <div class="hide-on-small-only" style="height:100px"></div>
            <div class="container">
                <div class="center">
                    <img src="{{URL::asset('images/logo.jpg')}}" class="responsive-img" alt="">
                </div>
            </div>
        </div>
        <div class="col m7 s12">
            <h3 class="azul-text font-fgb">@lang('home.quienes_somos')</h3>
            <br>
            <hr style="width: 30%; border-bottom: 2px solid #141939" class="left">
            <br>
            <p class="azul-text font-body" style="text-align: justify">
                FGB es un innovador proveedor de Equipos, Herramientas y Servicios, conocido por brindar soluciones logísticas de productos MRO con calidad, precio y entrega competitiva. Con la finalidad de vincular a usuarios de la industria de manufactura, área comercial, y servicios, con distribuidores y proveedores buscando reducir costos y mejorar el funcionamiento de su operación. Ofrecemos y distribuimos materiales nacionales de calidad e importamos cualquier producto desde, EUA, EUROPA, ASÍA Y LATINOAMERICA, para prácticamente cualquier tarea y necesidad de su empresa.
            </p>
        </div>
    </div>
</div>
<div style="height: 100px"></div>
<div class="marcas">
    <div style="height: 25px"></div>
    <h3 class="white-text center font-fgb">@lang('home.distribuidores')</h3>
    <div class="container90">
        <div class="carousel">
            <a class="carousel-item marcas-img bgs" href="#one!"></a>
            <a class="carousel-item marcas-img urrea" href="#two!"></a>
            <a class="carousel-item marcas-img tuk" href="#three!"></a>
            <a class="carousel-item marcas-img knipex" href="#four!"></a>
            <a class="carousel-item marcas-img colson" href="#five!"></a>
        </div>
        <div class="center">
            <a class="waves-effect waves-light white azul-text btn font-body">@lang('home.ver_mas')</a>
        </div>
    </div>
    <br>
</div>
<div style="height: 50px"></div>
<div class="container90">
    <h3 class="azul-text font-fgb">@lang('home.oferta')</h3>
    <br>
    <hr style="width: 15%; border-bottom: 2px solid #141939" class="left">
    <div style="height:50px"></div>
    <div class="row">
        <div class="col m4 s12">
            <h6 class="font-body">
                <img src="{{URL::asset('images/favicon.png')}}" width="15" alt="">
                HERRAMIENTA PARA CORTE DE METALES
            </h6>
            <h6 class="font-body">
                <img src="{{URL::asset('images/favicon.png')}}" width="15" alt="">
                HERRAMIENTA DE SUJECION
            </h6>
            <h6 class="font-body">
                <img src="{{URL::asset('images/favicon.png')}}" width="15" alt="">
                INSTRUMENTOS DE MEDICION
            </h6>
            <h6 class="font-body">
                <img src="{{URL::asset('images/favicon.png')}}" width="15" alt="">
                EQUIPO DE TALLER
            </h6>
            <h6 class="font-body">
                <img src="{{URL::asset('images/favicon.png')}}" width="15" alt="">
                HERRAMIENTA ELECTRICA
            </h6>
        </div>
        <div class="col m4 s12">
            <h6 class="font-body">
                <img src="{{URL::asset('images/favicon.png')}}" width="15" alt="">
                MAQUINARIA EN GENERAL 
            </h6>
            <h6 class="font-body">
                <img src="{{URL::asset('images/favicon.png')}}" width="15" alt="">
                REFACCIONES Y LLANTAS
            </h6>
            <h6 class="font-body">
                <img src="{{URL::asset('images/favicon.png')}}" width="15" alt="">
                EQUIPO DE LIMPIEZA
            </h6>
            <h6 class="font-body">
                <img src="{{URL::asset('images/favicon.png')}}" width="15" alt="">
                CONSUMIBLES
            </h6>
            <h6 class="font-body">
                <img src="{{URL::asset('images/favicon.png')}}" width="15" alt="">
                ADHESIVOS 
            </h6>
        </div>
        <div class="col m4 s12">
            <h6 class="font-body">
                <img src="{{URL::asset('images/favicon.png')}}" width="15" alt="">
                TORNILLERÍA 
            </h6>
            <h6 class="font-body">
                <img src="{{URL::asset('images/favicon.png')}}" width="15" alt="">
                ABRASIVOS 
            </h6>
            <h6 class="font-body">
                <img src="{{URL::asset('images/favicon.png')}}" width="15" alt="">
                SEÑALAMIENTOS 
            </h6>
            <h6 class="font-body">
                <img src="{{URL::asset('images/favicon.png')}}" width="15" alt="">
                CONTENEDORES
            </h6>
            <h6 class="font-body">
                <img src="{{URL::asset('images/favicon.png')}}" width="15" alt="">
                LUMINARIA Y MATERIAL ELECTRICO
            </h6>
        </div>
    </div>
    <h6 class="font-body">@lang('home.entre_otros')</h6>
</div>
<div style="height: 50px"></div>
@endsection