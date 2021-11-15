@extends('layouts.basePlantilla')

@section('contenido')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <a href="/articulos">Articulos </a>
                        <span>{{$articulo->nombre}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__left product__thumb nice-scroll">

                            @if($articulo->foto === 'faker')
                            <a class="pt active" href="#product-1">
                                <img src="{{$articulo->foto_ruta}}" alt="">
                            </a>
                            <a class="pt" href="#product-2">
                                <img src="{{$articulo->foto_ruta}}" alt="">
                            </a>
                            <a class="pt" href="#product-3">
                                <img src="{{$articulo->foto_ruta}}" alt="">
                            </a>
                            @else
                            <a class="pt active" href="#product-1">
                                <img src="{{asset('articulosFotos/' . $articulo->foto_ruta)}}" alt="">
                            </a>
                            <a class="pt" href="#product-2">
                                <img src="{{asset('articulosFotos/' . $articulo->foto_ruta)}}" alt="">
                            </a>
                            <a class="pt" href="#product-3">
                                <img src="{{asset('articulosFotos/' . $articulo->foto_ruta)}}" alt="">
                            </a>
                            @endif

                        </div>
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel">

                                @if($articulo->foto === 'faker')
                                <img data-hash="product-1" class="product__big__img" src="{{$articulo->foto_ruta}}" alt="">
                                <img data-hash="product-2" class="product__big__img" src="{{$articulo->foto_ruta}}" alt="">
                                <img data-hash="product-3" class="product__big__img" src="{{$articulo->foto_ruta}}" alt="">
                                @else
                                <img data-hash="product-1" class="product__big__img" src="{{asset('articulosFotos/' . $articulo->foto_ruta)}}" alt="">
                                <img data-hash="product-2" class="product__big__img" src="{{asset('articulosFotos/' . $articulo->foto_ruta)}}" alt="">
                                <img data-hash="product-3" class="product__big__img" src="{{asset('articulosFotos/' . $articulo->foto_ruta)}}" alt="">
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h3>{{$articulo->nombre}} <span>{{$articulo->artista}}</span></h3>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__details__price mb-2">$ {{$articulo->precio}}</div>
                        <p class="mb-2">{{$articulo->descripcion}}</p>
                        
                        <div class="product__details__widget pt-3 pb-3">
                            <ul>
                                <li>
                                    <span>Disponibles:</span>
                                    <p>{{$articulo->cantidad}} articulos</p>
                                </li>
                                <li>
                                    <span>Lanzamiento:</span>
                                    <p>{{$articulo->lanzamiento}}</p>
                                </li>
                                <li>
                                    <span>Genero:</span>
                                    <p>
                                        @foreach ($articulo->generos as $genero)
                                            {{$genero->nombre_genero}}
                                        @endforeach
                                    </p>
                                </li>
                            </ul>
                        </div>

                        <div class="product__details__button">
                            <div class="quantity">
                                <span>Cantidad:</span>
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                            <a href="#" class="cart-btn"><span class="icon_bag_alt"></span> Agregar al Carrito</a>
                            <ul>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Reviews ( 2 )</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <h6>Usuario</h6>
                                <p> Review Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed
                                    quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt loret.
                                    Neque porro lorem quisquam est, qui dolorem ipsum quia dolor si. Nemo enim ipsam
                                    voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed quia ipsu
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nulla
                                consequat massa quis enim.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="related__title">
                        <h5>RELATED PRODUCTS Poner articulos con el mismo artista o el mismo genero</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('plantilla/img/product/related/rp-1.jpg')}}">
                            <div class="label new">New</div>
                            <ul class="product__hover">
                                <li><a href="{{asset('plantilla/img/product/related/rp-1.jpg')}}" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Buttons tweed blazer</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 59.0</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('plantilla/img/product/related/rp-2.jpg')}}">
                            <ul class="product__hover">
                                <li><a href="{{asset('plantilla/img/product/related/rp-2.jpg')}}" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Flowy striped skirt</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 49.0</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('plantilla/img/product/related/rp-3.jpg')}}">
                            <div class="label stockout">out of stock</div>
                            <ul class="product__hover">
                                <li><a href="{{asset('plantilla/img/product/related/rp-3.jpg')}}" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Cotton T-Shirt</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 59.0</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('plantilla/img/product/related/rp-4.jpg')}}">
                            <ul class="product__hover">
                                <li><a href="{{asset('plantilla/img/product/related/rp-4.jpg')}}" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Slim striped pocket shirt</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 59.0</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->
@endsection