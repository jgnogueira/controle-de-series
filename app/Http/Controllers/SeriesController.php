<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = ['Arrow', 'Flash'];
        return view('series.index', ['series' => $series]);
    }
}
