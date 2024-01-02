@extends('layouts.main')

@section('title', 'Relatório Unidade VochTech')

@section('content')
    <h1 class="titulo" align='center'>Ranking dos Colaboradores </h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome fantasia</th>
                <th scope="col">Razão Social</th>
                <th scope="col">CNPJ</th>
                <th scope="col">Total de colaboradores</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($colaboradores as $colaborador)
                <tr>
                    <th>
                        {{ $colaborador->unidade->nome_fantasia }}
                    </th>
                    <td>
                        {{ $colaborador->unidade->razao_social }}
                    </td>
                    <td>
                        {{ $colaborador->unidade->cnpj }}
                    </td>
                    <td>
                        {{ $colaborador->total }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="container">
        {{ $colaboradores->links() }}
    </div>

@endsection
