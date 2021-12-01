<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pdes extends Model
{
    protected $fillable = ['anio',
                        'pilar',
                        'meta',
                        'resultado',
                        'accion',
                    ];
}
