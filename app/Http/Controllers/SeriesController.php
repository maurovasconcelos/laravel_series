<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
          'Serie 1',
          'Serie 2',
          'Serie 3',  
        ];
        
        return view('series.index', compact('series'));
    }
}
