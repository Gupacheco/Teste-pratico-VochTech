@extends('layouts.main')

@section('title', 'Relatório Colaboradores VochTech')

@section('content')
    <h1 class="titulo" align='center'>Relatório dos Colaboradores </h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">E-mail</th>
                <th scope="col">Unidade</th>
                <th scope="col">Cargo</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="container">
        {{ $colaboradores->links() }}
    </div>
@endsection
