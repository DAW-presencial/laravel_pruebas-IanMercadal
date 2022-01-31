<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'descripcion',
        'capacidad',
        'entidad',
        'extraescolar',
        'fundado',
        'terminos'=> 'boolean',
    ];
}
