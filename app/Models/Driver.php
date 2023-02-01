<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'valoracion',
        'kilometros',
        'trip_id',
    ];

    function trips(){
        return $this->hasMany(User::class);
    }
}
