<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;

class SeriesController extends Controller
{

    public function index(Request $request)
    {
        $series = Serie::all();
        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serie = $request->serie;
        $rank = $request->rank;

        $series = Serie::create([
            'series' => $serie,
            'ranks' => $rank
        ]);
        
        echo("{$series->series} Adicionada com sucesso!");

    }
}