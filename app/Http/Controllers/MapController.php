<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function getGeolocation(){

        return view('map.map');

    }
}
