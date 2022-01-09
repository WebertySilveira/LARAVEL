<?php

namespace App\Http\Controllers;
use App\Models\Serie;

use Illuminate\Http\Request;

class SeasonsController extends Controller
{
    public function index(int $serieId)
    {
        $seasons = Serie::find($serieId)->seasons;
        
        return view('seasons.index', compact('seasons'));
    }
}
