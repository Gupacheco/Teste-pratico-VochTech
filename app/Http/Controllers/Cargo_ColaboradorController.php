<?php

namespace App\Http\Controllers;
use App\Models\Colaborador;
use App\Models\Cargo_Colaborador;

use Illuminate\Http\Request;

class Cargo_ColaboradorController extends Controller
{
    public function index(){
        $colaboradores = Colaborador::get();

        return view('desempenho', ['colaboradores' => $colaboradores]);
    }

    public function show(){
        $colaboradores = Cargo_Colaborador::orderBy('nota_desempenho', 'DESC')->simplePaginate(15);

        return view('ranking', ['colaboradores' => $colaboradores]);
    }
}

