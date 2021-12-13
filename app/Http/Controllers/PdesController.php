<?php

namespace App\Http\Controllers;

use App\Pdes;
use Session;
use Illuminate\Http\Request;

class PdesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        $anio = $request->get('buscarpor');

        $pdes = Pdes::where('anio','like',"%$anio%")->latest()->paginate(10);

        return view('pdes.index', compact('pdes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pdes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $data = $request->all();
        $eje = $request->eje;
        $anio = $request->anio;
        $resultado = $request->resultado;
        $accion = $request->accion;

        $pdes = Pdes::create($data);

        Session::flash('message','Pdes creado exisitosamente!');
        return redirect()->route('pdes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pdes  $pdes
     * @return \Illuminate\Http\Response
     */
    public function show(Pdes $pdes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pdes  $pdes
     * @return \Illuminate\Http\Response
     */
    public function edit(Pdes $pdes, $id){
        return view('pdes.edit', ['pdes' =>Pdes::findOrFail($id)]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pdes  $pdes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $requestData = $request->all();

        $pdes = Pdes::find($id);

        $pdes->accion = $request->get('accion');
        $pdes->resultado = $request->get('resultado');


        $pdes->update();

        Session::flash('message','PEDES Editado a Accion o Resultado Exisitosamente!');
        return redirect()->route('pdes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pdes  $pdes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pdes $pdes)
    {
        //
    }
}
