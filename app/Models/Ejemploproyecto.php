<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ejemploproyecto extends Model
{
    use HasFactory;
    protected $fillable =[
        'titulo',
        'descripcion',
    ];
}
