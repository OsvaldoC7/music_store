@extends('layouts.basePlantilla')

@section('contenido')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-9 col-md-9 col-lg-9">
                <div class="breadcrumb__links" style="aling-items: center;">
                    <a href="/"><i class="fa fa-home"></i> Home</a>
                    <span>Shop</span>
                </div>
            </div>

            @auth
                @if(Auth::user()->utype === 'ADM')
                    <div class="col-12 col-sm-3 col-md-3 col-lg-3">
                        <div class="" style="display: flex; justify-content:end;"><a href="articulos/create" class="btn btn-primary">Nuevo Articulo</a></div>
                    </div>
                @endif
            @endauth
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Section Begin -->
<section class="shop spad" style="padding-top: 40px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="shop__sidebar">

                    <div class="sidebar__categories">
                        <div class="section-title">
                            <h4>Categorias</h4>
                        </div>
                        <div class="categories__accordion">
                            <div class="accordion" id="accordionExample">

                                <div class="card">
                                    <div class="card-heading active">
                                        <a data-toggle="collapse" data-target="#collapseOne">Genero</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul>
                                                <li><a href="/articulos">Todos</a></li>
                                                @foreach ($generos as $genero)
                                                    <li>
                                                        <a href="{{ route('articulos.articulos_genero', $genero) }}">
                                                            {{ $genero->nombre_genero }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="row">
                    
                    @for ($i = sizeof($articulos)-1; $i >= 0; $i--)
                        
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="product__item">
                            
                            @if($articulos[$i]->foto === 'faker')
                            <div class="product__item__pic set-bg" data-setbg="{{$articulos[$i]->foto_ruta}}">
                            @else
                            <div class="product__item__pic set-bg" data-setbg="{{asset('articulosFotos/' . $articulos[$i]->foto_ruta)}}">
                            @endif

                            

                                @if($i === sizeof($articulos)-1 or $i === sizeof($articulos)-2)
                                    <div class="label new">New</div>
                                @endif
                                
                                @if($articulos[$i]->cantidad <= 0)
                                    <div class="label stockout stockblue">Out Of Stock</div>
                                @endif
                                

                                <ul class="product__hover">
                                    <li><a href="{{asset('plantilla/img/shop/shop-1.jpg')}}" class="image-popup"><span class="arrow_expand"></span></a></li>
                                    
                                    @if(Route::has('login'))
                               
                                        @auth
                                            @if(Auth::user()->utype === 'ADM')
                                                <!--Boton Eliminar articulo-->
                                                <li>
                                                    <form id="delete-item-form" action="{{route('articulos.destroy', $articulos[$i]->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="" style="background: transparent; border: none !important;">
                                                            <a href="#"><span class="icon_minus_alt2"></span></a>
                                                        </button>
                                                    </form>
                                                </li>

                                                <li><a href="/articulos/{{$articulos[$i]->id}}/edit"><span class="icon_pencil-edit"></span></a></li>
                                                
                                            @else
                                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                            @endif
                                        @else
                                            <li><a href="#">login</a></li>
                                        
                                        @endif

                                    @endif

                                    <!--<li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>-->
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="/articulos/{{$articulos[$i]->id}}">{{$articulos[$i]->nombre_artista}}</a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ {{$articulos[$i]->precio}}</div>
                            </div>
                        </div>
                    </div>
                    
                    @endfor

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section End -->
@endsection