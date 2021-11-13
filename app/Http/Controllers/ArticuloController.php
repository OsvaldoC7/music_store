<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller {

    public function __construct() {
        
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $articulos = Articulo::all();
        return view('livewire.shop-component')->with('articulos', $articulos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
        return view('articulo.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
        $articulos = new Articulo();
        $articulos->nombre = $request->get('nombre');
        $articulos->artista = $request->get('artista');
        $articulos->lanzamiento = $request->get('lanzamiento');
        $articulos->descripcion = $request->get('descripcion');
        $articulos->cantidad = $request->get('cantidad');
        $articulos->precio = $request->get('precio');
        $articulos->foto = $request->get('foto');
        $articulos->codigo = 'codigo_preuba'; // VER COMO GENERAR UN CODIGO
        $articulos->mime = 'mime_prueba'; // VER COMO GUARDAR MIME

        $articulos->save();
        return redirect('/articulos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

        $articulo = Articulo::find($id);
        return view('articulo.show')->with('articulo', $articulo);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        
        $articulo = Articulo::find($id);
        return view('articulo.edit')->with('articulo', $articulo);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        
        $articulo = Articulo::find($id);
        $articulo->nombre = $request->get('nombre');
        $articulo->artista = $request->get('artista');
        $articulo->lanzamiento = $request->get('lanzamiento');
        $articulo->descripcion = $request->get('descripcion');
        $articulo->cantidad = $request->get('cantidad');
        $articulo->precio = $request->get('precio');
        $articulo->foto = $request->get('foto');
        $articulo->codigo = 'codigo_preuba'; // VER COMO GENERAR UN CODIGO
        $articulo->mime = 'mime_prueba'; // VER COMO GUARDAR MIME

        $articulo->save();
        return redirect('/articulos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        $articulo = Articulo::find($id);
        $articulo->delete();
        return redirect('/articulos');
        
    }
}
