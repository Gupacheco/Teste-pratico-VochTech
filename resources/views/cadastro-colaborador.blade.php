@extends('layouts.main')

@section('title', 'Cadastro Colaborador VochTech')

@section('content')

    <div class="space">
    </div>

    <div class="content">

        <h1 class='titulo'>Cadastro de Colaborador</h1>

        <form action={{ route('store-colaborador') }} method="POST">
            @csrf
            @method('POST')
            <label for="exampleDataList" class="form-label">Nome</label>
            <input class="form-control" name="nome" list="datalistOptions" id="exampleDataList" placeholder="Seu Nome">
            <label for="exampleDataList" class="form-label">CPF</label>
            <input class="form-control" name="cpf" list="datalistOptions" id="exampleDataList" placeholder="Seu CPF">
            <label for="exampleDataList" class="form-label">E-mail</label>
            <input class="form-control" name="email" list="datalistOptions" id="exampleDataList" placeholder="Seu E-mail">
            <label for="exampleDataList" class="form-label">Unidade</label>
            <select class="form-control" name="unidade_id" id="unidade_id">
                @foreach ($unidades as $unidade)
                    <option value={{ $unidade->id }}>{{ $unidade->nome_fantasia }}</option>
                @endforeach
            </select>
            <label for="exampleDataList" class="form-label">Cargo</label>
            <select class="form-control" name="cargo_id" id="cargo_id">
                @foreach ($cargos as $cargo)
                    <option value={{ $cargo->id }}>{{ $cargo->cargo }}</option>
                @endforeach
            </select>

            <div class="enviar">
                <button align='center' type="submit">Enviar</button>
            </div>
        </form>
    </div>

@endsection
