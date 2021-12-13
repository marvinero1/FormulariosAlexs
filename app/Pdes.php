<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pdes extends Model
{
    protected $fillable = ['anio',
                            'eje',
                        'pilar',
                        'meta',
                        'resultado',
                        'accion',
                    ];
}
