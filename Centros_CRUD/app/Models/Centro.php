<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Centro extends Model
{
    use SoftDeletes;
    
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
