<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>First Global Broker</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="icon" href="{{URL::asset('images/favicon.png')}}" type="image/x-icon"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    </head>
    <body>
        <div id="top" class="info-nav">
            <div class="container90">
                <div class="row margin-bottom0">
                    <div class="col m3 s12 hide-on-small-only">
                        <img src="{{URL::asset('images/logo.jpg')}}" width="250" style="margin-top:10px" alt="">
                    </div>
                    <div class="col m3 s3">
                        <div class="row margin-bottom0">
                            <div class="col m2 s12">
                                <a href="tel:2222311972">
                                    <div class="circle redes-circle center">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col m10">
                                <p class="">Tel: 01 (222) 231 1972</p>
                            </div>
                        </div>
                    </div>
                    <div class="col m3 s3">
                        <div class="row margin-bottom0">
                            <div class="col m2 s12">
                                <a href="mailto:ventas@fgbmexico.com">
                                    <div class="circle redes-circle center">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col m10">
                                <p class="">E-mail: ventas@fgbmexico.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col m3 s3">
                        <div class="row margin-bottom0">
                            <div class="col m2 s12">
                                <a href="" target="_blank">
                                    <div class="circle redes-circle center">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col m6">
                                <p class="">FGB MRO México</p>
                            </div>
                            <div class="col m4 hide-on-small-only">
                                <div class="right" style="margin-top:15px">
                                    <a class='dropdown-trigger btn white azul-text' href='#' data-target='dropdown1' style="padding-left: 5px;padding-right: 5px;">
                                        <p style="margin-top:0"><i class="fas fa-globe"></i> @lang('home.buttom')</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s3 hide-on-med-and-up">
                        <div class="right" style="margin-top:15px">
                            <a class='dropdown-trigger btn white azul-text' href='#' data-target='dropdown2'>@lang('home.buttom')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="white">
            <div class="container90">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo hide-on-med-and-up azul-text">
                        <img src="{{URL::asset('images/logo.jpg')}}" width="110" style="margin-top:5px;" alt="">
                    </a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons azul-text">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="azul-text" href="/">@lang('home.home_menu')</a></li>
                        <li><a class="azul-text" href="/Catalogo">@lang('home.catalogue_menu')</a></li>
                        <li><a class="azul-text" href="/Contacto">@lang('home.contact_menu')</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li><a class="azul-text font-fgb" href="/">Inicio</a></li>
            <li><a class="azul-text font-fgb" href="/Catalogo">Catálogo</a></li>
            <li><a class="azul-text font-fgb" href="/Contacto">Contacto</a></li>
        </ul>

        <ul id='dropdown1' class='dropdown-content'>
            <li><a href="locale/es">Es</a></li>
            <li><a href="locale/en">En</a></li>
        </ul>
        <ul id='dropdown2' class='dropdown-content'>
            <li><a href="locale/es">Es</a></li>
            <li><a href="locale/en">En</a></li>
        </ul>

        <div class="fixed-action-btn">
            <a href="#top" class="btn-floating btn-large white">
                <i class="large material-icons black-text">arrow_upward</i>
            </a>
        </div>

        @yield('content')

        <footer class="page-footer grey lighten-4">
            <div class="container">
                <div class="row">
                <div class="col l6 s12">
                    <h5 class="azul-text">Firts Global Broker</h5>
                    <br>
                    <p class="azul-text"><i class="fas fa-phone"></i> Tel: 01 (222) 231 1972</p>
                    <p class="azul-text"><i class="far fa-envelope"></i> E-mail: ventas@fgbmexico.com</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="azul-text">@lang('home.siguenos')</h5>
                    <br>
                    <div class="circle redes-circle center">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <span class="azul-text">© 2019 Copyright First Global Broker</span>
                    <div class="right">
                        
                    </div>
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script type="text/javascript" src="{{ URL::asset('js/materialize.js')}} "></script>
    </body>
</html>
