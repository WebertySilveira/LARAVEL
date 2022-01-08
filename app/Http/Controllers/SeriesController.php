<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;

class SeriesController extends Controller
{

    public function index(Request $request)
    {
        $series = Serie::query()->get();
        $addMessage = $request->session()->get('addMessage');
        $destroyMessage = $request->session()->get('destroyMessage');

        return view('series.index', compact('series', 'addMessage', 'destroyMessage'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'serie' => 'required',
        ]);

        $serie = $request->serie;
        $rank = $request->rank;

        $series = Serie::create([
            'series' => $serie,
            'ranks' => $rank
        ]);
        $request->session()->flash('addMessage', "{$series->series} Adicionada com Sucesso!");
        
        return redirect('/series');
    }

    public function destroy(Request $request)
    {
        $series = Serie::destroy($request->id);
        $request->session()->flash('destroyMessage', "Série removida com Sucesso!");
        return redirect('/series');
    }
}