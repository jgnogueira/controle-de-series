<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series   = Serie::orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('series.index', ['series' => $series, 'mensagem' => $mensagem]);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serie = Serie::create($request->all());
        $request->session()->flash('mensagem', 'Série ' . $serie->nome . ' adicionada com sucesso!');
        return redirect('/series');
    }
}
