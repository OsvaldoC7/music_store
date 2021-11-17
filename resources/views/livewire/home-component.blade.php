@extends('layouts.basePlantilla')

@section('contenido')

<!-- Categories Section Begin -->
<section class="categories">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="categories__item categories__large__item set-bg"
                data-setbg="{{asset('plantilla/img/music/1989.jpg')}}">
                <div class="categories__text">
                    <h1>{{$articulos[13]->artista}} - {{$articulos[13]->nombre}}</h1>
                    <p>{{$articulos[13]->descripcion}}</p>
                    <a href="/articulos">Shop now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                    <div class="categories__item set-bg" data-setbg="{{asset('plantilla/img/music/FutureNostalgia.jpg')}}">
                        <div class="categories__text">
                            <h4>{{$articulos[11]->artista}}</h4>
                            <p>{{$articulos[11]->nombre}}</p>
                            <a href="/articulos">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                    <div class="categories__item set-bg" data-setbg="{{asset('plantilla/img/music/Ultraviolence.jpg')}}">
                        <div class="categories__text">
                            <h4>{{$articulos[10]->artista}}</h4>
                            <p>{{$articulos[10]->nombre}}</p>
                            <a href="/articulos">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                    <div class="categories__item set-bg" data-setbg="{{asset('plantilla/img/music/SOUR.jpg')}}">
                        <div class="categories__text">
                            <h4>{{$articulos[12]->artista}}</h4>
                            <p>{{$articulos[12]->nombre}}</p>
                            <a href="/articulos">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                    <div class="categories__item set-bg" data-setbg="{{asset('plantilla/img/music/Lover.jpg')}}">
                        <div class="categories__text">
                            <h4>{{$articulos[14]->artista}}</h4>
                            <p>{{$articulos[14]->nombre}}</p>
                            <a href="/articulos">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Categories Section End -->

<!-- Services Section Begin -->
<section class="services spad">
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="services__item">
                <i class="fa fa-car"></i>
                <h6>Free Shipping</h6>
                <p>For all oder over $99</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="services__item">
                <i class="fa fa-money"></i>
                <h6>Money Back Guarantee</h6>
                <p>If good have Problems</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="services__item">
                <i class="fa fa-support"></i>
                <h6>Online Support 24/7</h6>
                <p>Dedicated support</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="services__item">
                <i class="fa fa-headphones"></i>
                <h6>Payment Secure</h6>
                <p>100% secure payment</p>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Services Section End -->

@endsection