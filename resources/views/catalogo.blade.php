@extends('template')

@section('content')
<div class="contalog-image">
    <br>
    <br>
    <h2 class="white-text font-fgb center">Somos distribuidores autorizados de:</h2>
</div>
<div class="container90 white" style="margin-top:-150px;">
    <div style="height:50px"></div>
    <div class="container90">
        <div class="row">
            <div class="col m3">
                <div class="container90">
                    <div class="row">
                        <div class="card white darken-1">
                            <div class="card-content">
                                <div class="center">
                                    <img src="{{URL::asset('/images/catalogo/bgs.png')}}"  class="responsive-img" alt="">
                                </div>
                            </div>
                            <div class="card-action">
                                <a style="cursor:pointer" onclick="myFunction(event,'bgs1')" class="azul-text font-body"><i class="far fa-file-pdf"></i> Ver catalogos</a>
                            </div>
                            <div id="bgs1" style="padding:10px; display:none">
                                <a href="#" class="azul-text"><i class="far fa-file-pdf"></i> Ver catalogos</a>
                                <br>
                                <a href="#" class="azul-text"><i class="far fa-file-pdf"></i> Ver catalogos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col m3">
                <div class="container90">
                    <div class="row">
                        <div class="card white darken-1">
                            <div class="card-content">
                                <div class="center">
                                    <img src="{{URL::asset('/images/catalogo/bgs.png')}}"  class="responsive-img" alt="">
                                </div>
                            </div>
                            <div class="card-action">
                                <a style="cursor:pointer" onclick="myFunction(event,'bgs')" class="azul-text font-body"><i class="far fa-file-pdf"></i> Ver catalogos</a>
                            </div>
                            <div id="bgs" style="padding:10px; display:none">
                                <a href="#" class="azul-text"><i class="far fa-file-pdf"></i> Ver catalogos</a>
                                <br>
                                <a href="#" class="azul-text"><i class="far fa-file-pdf"></i> Ver catalogos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col m3"></div>
            <div class="col m3"></div>
        </div>
    </div>
</div>
<script>
    function myFunction(event,marca) {
    var x = document.getElementById(marca);
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
@endsection