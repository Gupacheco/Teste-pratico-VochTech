<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastroColaboradorRequest;
use App\Http\Requests\UpdateDesempenhoRequest;
use App\Models\Colaborador;
use App\Models\Unidade;
use App\Models\Cargo;
use App\Models\Cargo_Colaborador;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    public function store(CadastroColaboradorRequest $request){        

        $data = $request->all();

        $colaborador = Colaborador::create([
            'unidade_id' => $data['unidade_id'],
            'nome' => $data['nome'],
            'cpf' => $data['cpf'],
            'email' => $data['email']
        ]);

        Cargo_Colaborador::create([
            'cargo_id' => $data['cargo_id'],
            'colaborador_id' => $colaborador->id
        ]);

        return redirect('/');
    }

    public function index(){
        $cargos = Cargo::get();
        $unidades = Unidade::get();

        return view('cadastro-colaborador', ['unidades' => $unidades, 'cargos' => $cargos]);
    }

    public function edit(){
        $colaboradores = Colaborador::get();
        return view('desempenho', ['colaboradores' => $colaboradores]);
    }

    public function update(UpdateDesempenhoRequest $request){
        $data = $request->all();
        Cargo_Colaborador::where('colaborador_id', $data['colaborador'])->update(['nota_desempenho' => $data['nota_desempenho']]);

        return redirect('/');
    }

    public function show(){
        $colaboradores = Cargo_Colaborador::cursorPaginate(15);
        return view('relatorio-colaboradores', ['colaboradores' => $colaboradores]);
    }

    // public function total(){
    //     return view('total-colaboradores');
    // }

}

