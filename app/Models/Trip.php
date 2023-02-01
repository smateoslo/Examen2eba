<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'origen',
        'destino',
        'plazas',
    ];

    function user(){
        return $this->belongsToMany(User::class);
    }
    function driver(){
        return $this->belongsTo(Driver::class);
    }

}
