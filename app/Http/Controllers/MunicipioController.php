<?php

namespace App\Http\Controllers;

use App\Municipio;
use Session;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        $nombre = $request->get('buscarpor');
        
        $municipio = Municipio::where('nombre','like',"%$nombre%")->latest()
        ->paginate(10);
        
        return view('municipios.index', compact('municipio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        return view('municipios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $request->all();

        Municipio::create([
            'nombre' => $request->nombre,
            'ciudad' => $request->ciudad,
        ]);
        
        Session::flash('message','Municipio creado exisitosamente!');
        return redirect()->route('municipios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function show(Municipio $municipio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function edit(Municipio $municipio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Municipio $municipio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipio $municipio)
    {
        //
    }
}
