@extends('layouts.main')

@section('title', 'Cadastro Unidade VochTech')

@section('content')

    <div class="space">
    </div>

    <div class="content">

        <h1 class='titulo'>Cadastro de Unidade</h1>

        <form action="{{ route('store-unidade') }}" method="POST">
            @csrf
            @method('POST')
            <label for="exampleDataList" class="form-label">Nome Fantasia</label>
            <input class="form-control" list="datalistOptions" id="exampleDataList" name="nome_fantasia"
                placeholder="nome fantasia">
            <label for="exampleDataList" class="form-label">Razao Social</label>
            <input class="form-control" list="datalistOptions" id="exampleDataList" name="razao_social"
                placeholder="razao social">
            <label for="exampleDataList" class="form-label">CNPJ</label>
            <input class="form-control" list="datalistOptions" id="exampleDataList" name="cnpj" placeholder="cnpj">

            <div class="enviar">
                <button align='center' type="submit">Enviar</button>
            </div>

        </form>
    </div>

@endsection
