@extends('template')

@section('content')
<div class="contact-image">
</div>
<div class="container" style="margin-top:-100px;">
    <div class="row">
        <div class="col m4 s12 azul container-contact">
            <div class="container90">
                <div class="row">
                    <div class="col m12 s4">
                        <br class="hide-on-small-only">
                        <h6 class="white-text font-body hide-on-small-only">@lang('home.form-redes')</h6>
                        <hr class="hide-on-small-only" style="border: 1px solid #fff">
                        <br>
                        <div class="row">
                            <div class="col m3 s12">
                                <a href="" target="_blank">
                                    <div class="circle redes-circle contact" style="margin-left:30%;">
                                        <i class="fab fa-facebook-f contact" style="margin-left:35%;"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col m9 hide-on-small-only">
                                <h6 class="white-text font-body" style="margin-top:20px;">FGB MRO México</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col m12 s4">
                        <br class="hide-on-small-only">
                        <h6 class="white-text font-body hide-on-small-only">@lang('home.form-tel')</h6>
                        <hr class="hide-on-small-only" style="border: 1px solid #fff">
                        <br>
                        <div class="row">
                            <div class="col m3 s12">
                                <a href="" target="_blank">
                                    <div class="circle redes-circle contact" style="margin-left:30%;">
                                        <i class="fas fa-phone contact" style="margin-left:30%;"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col m9 hide-on-small-only">
                                <h6 class="white-text font-body" style="margin-top:20px;">Tel: 01 (222) 231 1972</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col m12 s4">
                        <br class="hide-on-small-only">
                        <h6 class="white-text font-body hide-on-small-only">@lang('home.form-mail')</h6>
                        <hr class="hide-on-small-only" style="border: 1px solid #fff">
                        <br>
                        <div class="row">
                            <div class="col m3 s12">
                                <a href="" target="_blank">
                                    <div class="circle redes-circle contact" style="margin-left:30%;">
                                        <i class="far fa-envelope contact" style="margin-left:30%;"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col m9 hide-on-small-only">
                                <h6 class="white-text font-body" style="margin-top:20px;">E-mail: ventas@fgbmexico.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col m8 s12 white container-contact">
            <div class="container90">
                <h3 class="azul-text font-fgb center">@lang('home.form-contacto')</h3>
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="@lang('home.form-nombre')" type="text" class="validate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m4 s12">
                            <input placeholder="@lang('home.form-tel')" type="tel" class="validate">
                        </div>
                        <div class="input-field col m8 s12">
                            <input placeholder="@lang('home.form-mail')" type="email" class="validate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea placeholder="@lang('home.form-msg')" id="textarea1" class="materialize-textarea"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-large azul white-text">@lang('home.form-enviar')</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div style="height:50px;"></div>
@endsection