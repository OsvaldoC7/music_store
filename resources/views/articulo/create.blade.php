@extends('layouts.basePlantilla')

@section('contenido')
    @auth
        @if(Auth::user()->utype === 'ADM')

            <form action="/articulos" method="post" id="create-form" enctype="multipart/form-data">
                @csrf

                <!-- Breadcrumb Begin -->
                <div class="breadcrumb-option">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="breadcrumb__links">
                                    <a href="/"><i class="fa fa-home"></i> Home</a>
                                    <a href="/articulos">Articulos </a>
                                    <span>Nuevo</span>
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
                                        <a class="pt active" href="#product-1">
                                            <img src="{{asset('articulosFotos/sube_tu_foto.png')}}" alt="">
                                        </a>
                                        <a class="pt" href="#product-2">
                                            <img src="{{asset('articulosFotos/sube_tu_foto.png')}}" alt="">
                                        </a>
                                        <a class="pt" href="#product-3">
                                            <img src="{{asset('articulosFotos/sube_tu_foto.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product__details__slider__content">
                                        <div class="product__details__pic__slider owl-carousel">
                                            <img data-hash="product-1" class="product__big__img" src="{{asset('articulosFotos/sube_tu_foto.png')}}" alt="">
                                            <img data-hash="product-2" class="product__big__img" src="{{asset('articulosFotos/sube_tu_foto.png')}}" alt="">
                                            <img data-hash="product-3" class="product__big__img" src="{{asset('articulosFotos/sube_tu_foto.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <label for="foto" class="form-lavel">Foto</label>
                                    <input type="file" class="form-control" id="foto" name="foto" tabindex="7" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="product__details__text">
                                    <div class="mb-3">
                                        <h2><label for="nombre" class="form-lavel">Nombre:</label></h2>
                                        <input type="text" class="form-control" id="nombre" name="nombre" tabindex="1" required>
                                    </div>

                                    <div class="">
                                        <h4><label for="artista" class="form-lavel">Astista:</label></h4>
                                        <input type="text" class="form-control" id="artista" name="artista" tabindex="1" required>
                                    </div>
                                    
                                    <div class="rating mt-3 mb-1">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__details__price mb-3">
                                        <div class="">
                                            <label for="precio" class="form-lavel">Precio:</label>
                                            <input type="text" class="form-control" id="precio" name="precio" tabindex="2" required>
                                        </div>
                                    </div>
                                    <div class="">
                                        <label for="descripcion" class="form-lavel">Descripcion:</label>
                                        <textarea class="form-control" id="descripcion" rows="3" name="descripcion" tabindex="3" required></textarea>
                                    </div>
                                    
                                    <div class="product__details__widget" style="padding: 20px 0px;">
                                        <ul>
                                            <li class="row">
                                                <div class="col-6">
                                                    <span><label for="lanzamiento" class="form-lavel">Lanzamiento:</label></span>
                                                    <input type="date" class="form-control" id="lanzamiento" name="lanzamiento" tabindex="4" required>
                                                </div>
                                                <div class="col-6">
                                                    <span><label for="cantidad" class="form-lavel">Cantidad:</label></span>
                                                    <input type="text" class="form-control" id="cantidad" name="cantidad" tabindex="5" required>
                                                </div>
                                            </li>
                                            <li tabindex="6">
                                                <span>Generos:</span>
                                                <div class="stock__checkbox row">

                                                    @foreach ($generos as $genero)
                                                        <label for="{{$genero->nombre_genero}}" class="col-3">
                                                            {{$genero->nombre_genero}}
                                                            <input type="checkbox" name="genero_id[]" value="{{$genero->id}}" id="{{$genero->nombre_genero}}">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    @endforeach

                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__details__button" style="display: flex; justify-content:end;">
                                        <a href="/articulos" class="cart-btn" tabindex="8"><span class="icon_bag_alt"></span> Cancelar</a>
                                        <a href="#" class="cart-btn" onclick="event.preventDefault(); document.getElementById('create-form').submit();" tabindex="9"><span class="icon_bag_alt"></span> Guardar</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Product Details Section End -->        
            </form>
            
        @else
            <h2>No tienes permiso para realizar esa accion</h2>

        @endif
    @endauth
@endsection