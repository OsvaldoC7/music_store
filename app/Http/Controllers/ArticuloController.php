<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;
use App\Models\Genero;

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
        
        $generos = Genero::all();
        return view('articulo.create')->with('generos', $generos);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $request->validate([

            'nombre' => 'required|max:255',
            'artista' => 'required|max:255',
            'lanzamiento' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'foto' => 'required|image',

        ]);

        $nombreFoto = time() . '-' . $request->nombre[0] . $request->artista[0] . $request->cantidad . '.' . $request->foto->extension();
        $request->foto->move(public_path('articulosFotos'), $nombreFoto);
        
        $request->merge([
            'foto_ruta' => $nombreFoto,
            'codigo' => 'codigo_preuba',
        ]);

        $articulo = Articulo::create($request->all());
        $articulo->generos()->attach($request->genero_id);

        /*$articulos = new Articulo();

        $articulos->generos()->attach($request->genero_id);

        $articulos->nombre = $request->get('nombre');
        $articulos->artista = $request->get('artista');
        $articulos->lanzamiento = $request->get('lanzamiento');
        $articulos->descripcion = $request->get('descripcion');
        $articulos->cantidad = $request->get('cantidad');
        $articulos->precio = $request->get('precio');
        $articulos->foto = $request->get('foto');
        $articulos->codigo = 'codigo_preuba'; // VER COMO GENERAR UN CODIGO
        $articulos->mime = 'mime_prueba'; // VER COMO GUARDAR MIME

        $articulos->save();*/
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
    public function edit(Articulo $articulo) {
        
        $generos = Genero::All();
        return view('articulo.edit', compact('articulo', 'generos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articulo $articulo) {
        
        $request->validate([

            'nombre' => 'required|max:255',
            'artista' => 'required|max:255',
            'lanzamiento' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',

        ]);

        if($request->foto != '')
        {
            $nombreFoto = time() . '-' . $request->nombre[0] . $request->artista[0] . $request->cantidad . '.' . $request->foto->extension();
            $request->foto->move(public_path('articulosFotos'), $nombreFoto);

            $request->merge([
                'foto_ruta' => $nombreFoto,
            ]);
            
        }

        $request->merge([
            'codigo' => 'codigo_preuba',
        ]);

        Articulo::where('id', $articulo->id)->update($request->except('_token', '_method', 'genero_id'));
        $articulo->generos()->sync($request->genero_id);
        
        /*$articulo = Articulo::find($id);
        $articulo->nombre = $request->get('nombre');
        $articulo->artista = $request->get('artista');
        $articulo->lanzamiento = $request->get('lanzamiento');
        $articulo->descripcion = $request->get('descripcion');
        $articulo->cantidad = $request->get('cantidad');
        $articulo->precio = $request->get('precio');
        $articulo->foto = $request->get('foto');
        $articulo->codigo = 'codigo_preuba'; // VER COMO GENERAR UN CODIGO
        $articulo->mime = 'mime_prueba'; // VER COMO GUARDAR MIME

        $articulo->save();*/
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
