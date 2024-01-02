
@extends('layouts.main')

@section('title', 'Desempenho VochTech')

@section('content')

<div class="space">
</div>

    <div class="content">
        <h1 class='titulo'>Alterar Desempenho</h1>

        <form action="{{ route('update-colaborador') }}" method="POST">
            @csrf
            @method('PUT')
            <label for="exampleDataList" class="form-label">Nota de Desempenho</label>
            <input class="form-control" type="number" min="0" max="
            10" name="nota_desempenho"
                list="datalistOptions" id="exampleDataList" placeholder="Nota">
            <label for="exampleDataList" class="form-label">Colaborador</label>
            <select class="form-control" name="colaborador" id="colaborador">
                @foreach ($colaboradores as $colaborador)
                    <option value="{{ $colaborador->id }}">{{ $colaborador->nome }}</option>
                @endforeach
            </select>
            <div class="enviar">
                <button align='center' type="submit">Enviar</button>
            </div>
        </form>
    </div>
@endsection
