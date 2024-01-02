@extends('layouts.main')

@section('title', 'Ranking VochTech')

@section('content')

    <h1 class="titulo" align='center'>Ranking dos Colaboradores </h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">E-mail</th>
                <th scope="col">Unidade</th>
                <th scope="col">Cargo</th>
                <th scope="col">Nota de desempenho</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($colaboradores as $colaborador)
                <tr>
                    <th>
                        {{ $colaborador->colaborador->nome }}
                    </th>
                    <td>
                        {{ $colaborador->colaborador->cpf }}
                    </td>
                    <td>
                        {{ $colaborador->colaborador->email }}
                    </td>
                    <td>
                        {{ $colaborador->colaborador->unidade->nome_fantasia }}
                    </td>
                    <td>
                        {{ $colaborador->cargo->cargo }}
                    </td>
                    <td>
                        {{ $colaborador->nota_desempenho }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="container">
        {{ $colaboradores->links() }}
    </div>

@endsection
