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

        $serie = Serie::create([
            'series' => $request->serie,
            'ranks' => $request->rank
        ]);

        $seasons = $request->seasons;
        $episodes = $request->episodes;
        for($i = 1; $i <= $seasons; $i++)
        {
            $season = $serie->seasons()->create(['number' => $i]);

            for($j = 1; $j <= $episodes; $j++)
            {
                $season->episodes()->create(['number' => $j]);
            }
        }

        $request->session()->flash('addMessage', "{$serie->series} Adicionada com Sucesso!");
        
        return redirect('/series');
    }

    public function destroy(Request $request)
    {
        $series = Serie::destroy($request->id);
        $request->session()->flash('destroyMessage', "Série removida com Sucesso!");
        return redirect('/series');
    }
}