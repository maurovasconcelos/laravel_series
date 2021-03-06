<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = DB::select('SELECT * FROM series');
        dd($series);
        
        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');

        if (DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie])) {
            return  "Inserido com sucesso";
        } else {
            return "Erro ao inserir";
        }
    }
}