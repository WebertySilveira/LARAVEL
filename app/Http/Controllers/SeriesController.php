<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;

class SeriesController extends Controller
{

    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('ranks', 'DESC')->get();
        $message = $request->session()->get('message');

        return view('series.index', compact('series', 'message'));
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
        $request->session()->flash('message', "{$series->series} Adicionada com Sucesso!");
        
        return redirect('/series');
    }
}