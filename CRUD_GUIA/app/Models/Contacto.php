<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contacto extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
    'user_id',
    'nombre',
    'nacimiento'
    ,'telefono',
    'aficion',
    'sexo',
    'descripcion',
    'terminos'
];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
