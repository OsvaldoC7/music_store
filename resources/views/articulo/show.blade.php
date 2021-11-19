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
                                    <p> -
                                        @foreach ($articulo->generos as $genero)
                                            {{$genero->nombre_genero}} -
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
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Reviews ( {{sizeof($comentarios)}} )</a>
                            </li>
                        </ul>
                        <div class="tab-content">

                            @foreach ($comentarios as $comentario)
                                <div class="mt-3 row" id="tabs-1" role="tabpanel" style="border-bottom: 1px solid rgb(131, 131, 131)">
                                    <div class="col-10">
                                        <h6>{{$comentario->user->name}}</h6>
                                        <p>{{$comentario->comentario}}</p>
                                    </div>
                                    
                                    <div class="col-2">
                                        @can('delete', $comentario)
                                            <form action="{{route('comentarios.destroy', $comentario)}}" method="POST" onsubmit="return confirm('¿Estas seguro de eliminar el comentario?')">
                                                @method('DELETE')
                                                @csrf
                                                <input type="submit" value="X" class="btn cart-btn2">
                                            </form>
                                        @endcan
                                    </div>
                                    
                                </div>
                                
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <form action="{{route('comentarios.store')}}" method="POST" id="create-form">
                    @csrf
                    <input type="hidden" name="articulo_id" value="{{ $articulo->id }}">
                    <div class="product__details__text">
                        <div class="">
                            <label for="comentario" class="form-lavel">Comentario:</label>
                            <textarea class="form-control" id="comentario" rows="3" name="comentario" tabindex="3" required></textarea>
                        </div>
                        
                        <div class="product__details__button" style="display: flex; justify-content:end;">
                            <button class="btn btn-primary mt-3">Comentar</button>
                        </div>
                    </div>
                </form>
            </div>


            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="related__title">
                        <h5>ARTICULOS RELACIONADOS (Por Genero)</h5>
                    </div>
                </div>

                @foreach ($articulos as $articulo)

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">

                            @if($articulo->foto === 'faker')
                            <div class="product__item__pic set-bg" data-setbg="{{$articulo->foto_ruta}}">
                            @else
                            <div class="product__item__pic set-bg" data-setbg="{{asset('articulosFotos/' . $articulo->foto_ruta)}}">
                            @endif

                                <ul class="product__hover">

                                    @if($articulo->foto === 'faker')
                                    <li><a href="{{$articulo->foto_ruta}}" class="image-popup"><span class="arrow_expand"></span></a></li>
                                    @else
                                    <li><a href="{{asset('articulosFotos/' . $articulo->foto_ruta)}}" class="image-popup"><span class="arrow_expand"></span></a></li>
                                    @endif

                                    <li><a href="/articulos/{{$articulo->id}}"><span class="icon_heart_alt"></span></a></li>
                                    <li><a href="/articulos/{{$articulo->id}}"><span class="icon_bag_alt"></span></a></li>
                                </ul>

                            </div>
                            <div class="product__item__text">
                                <h6><a href="/articulos/{{$articulo->id}}">{{$articulo->nombre_artista}}</a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ {{$articulo->precio}}</div>
                            </div>
                        </div>
                    </div>

                @endforeach
                
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->
@endsection