<?php

namespace App\Exports;
use App\Pdes;
use Illuminate\Contracts\View\View;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class PdesExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Pdes::select("anio","pilar","meta","accion")->get();
    // }

    public function view(): View
    {
        return view('pdes.reportes', [
            'pdes' => Pdes::all()
        ]);
    }

}
