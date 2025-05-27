<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ejemploproyecto extends Model
{
    use HasFactory;
    protected $filable =[
        'titulo',
        'descripcion',
    ];
}
