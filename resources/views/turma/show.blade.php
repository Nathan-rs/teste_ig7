@extends('layouts.app')

@section('content')

<main class="content px-3 py-2">
    <div class="container-fluid">
    <div class="mb-1">
        <h4>Turmas</h4>
    </div>

    <div class="text-end md-5">
        <a href="#" data-bs-toggle="modal" data-bs-target="#modalTurma" class="btn btn-primary mb-2">Novo</a>
    </div>

    <div class="card border-0 shadow p-1 mb-3 bg-body-tertiary rounded">
        <div class="card-header">
            <h5 class="card-title">Turmas cadastradas</h5>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Escola</th>
                        <th scope="col">Status</th>
                        <th scope="col">Turno</th>
                        <th scope="col">Nome</th>
                        <th class="text-end" scope="col">Config</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($turmas as $turma)
                    <tr>
                        <td>{{ $turma->id }}</td>
                        <td>{{ $turma->escola->nome }}</td>
                        <td>{{ $turma->status }}</td>
                        <td>{{ $turma->turno }}</td>
                        <td>{{ $turma->nome }}</td>
                        <td>
                            <div class="d-flex p-2 align-items-start justify-content-end">
                                <a href="#modalTurmaEdit{{$turma->id}}" data-bs-toggle="modal" class="btn btn-primary">
                                    Editar
                                </a>
                                <a href="#modalTurmaDel{{$turma->id}}" data-bs-toggle="modal" class="btn btn-danger ms-2">
                                    excluir
                                </a>
                            </div>
                            @include('turma.update_turma')
                            @include('turma.delete_turma')
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{$turmas->onEachSide(5)->links()}}
</div>
</main>
@endsection
@include('turma.create_turma')
