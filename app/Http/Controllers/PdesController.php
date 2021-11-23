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
        
        $pdes = Pdes::where('anio','like',"%$anio%")->latest()
        ->paginate(10);
        
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

        Pdes::create([
            'anio' => $request->anio,
            'pilar' => $request->pilar,
            'meta' => $request->meta,
            'accion' => $request->accion,
        ]);
        
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
    public function edit(Pdes $pdes)
    {
        //
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

        $pdes->update();

        Session::flash('message','PEDES Editado a Accion Exisitosamente!');
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
