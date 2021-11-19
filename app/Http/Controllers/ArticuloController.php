<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;
use App\Models\Genero;
use Illuminate\Support\Facades\File;

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
        $generos = Genero::All();
        return view('livewire.shop-component', compact('articulos', 'generos'));
        
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
            'genero_id' => 'required'

        ]);

        $nombreFoto = time() . '-' . $request->nombre[0] . $request->artista[0] . $request->cantidad . '.' . $request->foto->extension();
        $request->foto->move(public_path('articulosFotos'), $nombreFoto);
        
        $request->merge([
            'foto_ruta' => $nombreFoto,
            'codigo' => 'codigo_preuba',
        ]);

        $articulo = Articulo::create($request->all());
        $articulo->generos()->attach($request->genero_id);

        return redirect('/articulos')->with('mensaje', 'Publicacion creada')->with('class', 'alert-success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

        /*$articulo = Articulo::find($id);
        $genero = $articulo->generos[0];
        dd(sizeof($articulo->generos));
        $articulos = $genero->articulos->except($id);*/
        $articulo = Articulo::find($id);

        $genero = $articulo->generos[0];
        $articulos = $genero->articulos->except($id);
        
        for($i = 1; $i < sizeof($articulo->generos); $i++) {
            $genero = $articulo->generos[$i];
            foreach($genero->articulos->except($id) as $valor) {
                $articulos->push($valor);
            }
        }

        $comentarios = $articulo->comentarios;

        return view('articulo.show')->with('articulo', $articulo)->with('articulos', $articulos)->with('comentarios', $comentarios);
        
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
            'genero_id' => 'required'

        ]);

        if($request->foto != '') {

            $foto_vieja = "articulosFotos/" . $articulo->foto_ruta;
            if(File::exists($foto_vieja)) {
                File::delete($foto_vieja);
            }

            $nombreFoto = time() . '-' . $request->nombre[0] . $request->artista[0] . $request->cantidad . '.' . $request->foto->extension();
            $request->foto->move(public_path('articulosFotos'), $nombreFoto);

            $request->merge([
                'foto_ruta' => $nombreFoto,
            ]);
            
        }

        Articulo::where('id', $articulo->id)->update($request->except('_token', '_method', 'genero_id'));
        $articulo->generos()->sync($request->genero_id);
        
        return redirect('/articulos')->with('mensaje', 'Publicacion actualizada')->with('class', 'alert-primary');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        $articulo = Articulo::find($id);

        $imagen = "articulosFotos/" . $articulo->foto_ruta;
        if(File::exists($imagen)) {
            File::delete($imagen);
        }

        $articulo->delete();
        return redirect('/articulos')->with('mensaje', 'Publicacion eliminada')->with('class', 'alert-danger');
        
    }
}
