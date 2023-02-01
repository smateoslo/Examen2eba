<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministracionController extends Controller
{
    function listaConductores(){

        $drivers = DB::table('drivers')->where('trip_id')->get();

        return view('listaConductores')->with($drivers);
    }
}
