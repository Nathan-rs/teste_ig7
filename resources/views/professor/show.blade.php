@extends('layouts.app')

@section('content')

<main class="content px-3 py-2">
    <div class="container-fluid">
    <div class="mb-1">
        <h4>Professores</h4>
    </div>

    <div class="text-end md-5">
        <a href="#" data-bs-toggle="modal" data-bs-target="#modalProfessor" class="btn btn-primary mb-2">Novo</a>
    </div>

    <div class="card border-0 shadow p-3 mb-3 bg-body-tertiary rounded">
        <div class="card-header">
            <h5 class="card-title">Professores cadastradas</h5>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th class="text-end" scope="col">Config</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($professores as $professor)
                    <tr>
                        <td>{{ $professor->id }}</td>
                        <td>{{ $professor->nome }}</td>
                        <td>
                            <div class="d-flex p-2 align-items-start justify-content-end">
                                <a href="#modalProfessorEdit{{$professor->id}}" data-bs-toggle="modal" class="btn btn-primary">
                                    Editar
                                </a>
                                <a href="#modalProfessorDel{{$professor->id}}" data-bs-toggle="modal" class="btn btn-danger ms-2">
                                    excluir
                                </a>
                            </div>
                            @include('professor.update_professor')
                            @include('professor.delete_professor')
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{$professores->onEachSide(5)->links()}}
</div>
</main>
@endsection
@include('professor.create_professor')

