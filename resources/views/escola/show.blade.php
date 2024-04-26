@extends('layouts.app')

@section('content')

<main class="content px-3 py-2">
    <div class="container-fluid">
    <div class="mb-1">
        <h4>Escola</h4>
    </div>

    <div class="text-end md-5">
        <a href="#" data-bs-toggle="modal" data-bs-target="#modalEscola" class="btn btn-primary mb-2">Novo</a>
    </div>

    <div class="card border-0 shadow p-1 mb-3 bg-body-tertiary rounded">
        <div class="card-header">
            <h5 class="card-title">Escolas cadastradas</h5>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereco</th>
                        <th scope="col">INEP</th>
                        <th scope="col">Status</th>
                        <th scope="col">Config</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($escolas as $escola)
                    <tr>
                        <td>{{ $escola->id }}</td>
                        <td>{{ $escola->nome }}</td>
                        <td>{{ $escola->endereco }}</td>
                        <td>{{ $escola->inep }}</td>
                        <td>{{ $escola->status }}</td>
                        <td>
                            <div class="d-flex p-1 align-items-start">
                                <a href="#modalEscolaEdit{{$escola->id}}" data-bs-toggle="modal" class="btn btn-primary">
                                    Editar
                                </a>
                                <a href="#modalEscolaDel{{$escola->id}}" data-bs-toggle="modal" class="btn btn-danger ms-2">
                                    excluir
                                </a>
                            </div>
                        </td>
                        @include('escola.update_escola')
                        @include('escola.delete_escola')
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{$escolas->onEachSide(5)->links()}}
</div>
</main>
@include('escola.create_escola')
@endsection

<!-- <div class="d-flex p-2 align-items-start">
<button class="btn">
<i class="fa-solid fa-pen-to-square"></i>
</button>
<button class="btn">
<i class="fa-solid fa-trash"></i>
</button>
</div> -->
