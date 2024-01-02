<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastroUnidadeRequest;
use App\Models\Unidade;
use App\Models\Colaborador;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UnidadeController extends Controller
{
    public function store(CadastroUnidadeRequest $request){        

        $data = $request->all();

        Unidade::create($data);

        return redirect('/');
    }

    public function index(){
        return view('cadastro-unidade');
    }

    public function show(){
        $colaboradores = Colaborador::select(DB::raw('COUNT(nome) as total'), 'unidade_id')->groupBy('unidade_id')->simplePaginate(15);
        
        return view('total-colaboradores', ['colaboradores' => $colaboradores]);
    }
}
