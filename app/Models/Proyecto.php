<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{ 
    use HasFactory;

    //$fillable: evitamos asignacion masiva.
    protected $fillable=[
        'nombre',
        'descripcion',
    ];
}
