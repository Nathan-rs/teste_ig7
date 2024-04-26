@extends('layouts.app')

@section('content')
<main class="content px-3 py-2">
    <div class="d-flex flex-column p-3">
        <div class="col-md-4 mb-3">
            <h3 class="card-title">Painel Home</h3>
        </div>

        <div class="p-4 d-flex justify-content-evenly">
            {{-- escolas --}}
            <div class="card border-0 shadow p-3 mb-3 bg-body-tertiary rounded" style="max-width: 18rem">
                <div class="card-header">
                    <h5>Escolas Cadastradas</h5>
                </div>

                <div class="card-body text-center">
                    <h1>{{$quantidadeEscolas}}</h1>
                </div>
            </div>

            {{-- turmas --}}
            <div class="card border-0 shadow p-3 mb-3 bg-body-tertiary rounded" style="max-width: 18rem">
                <div class="card-header">
                    <h5>Turmas Cadastradas</h5>
                </div>

                <div class="card-body text-center">
                    <h1>{{$quantidadeTurmas}}</h1>
                </div>
            </div>

            {{-- professores --}}
            <div class="card border-0 shadow p-3 mb-3 bg-body-tertiary rounded" style="max-width: 18rem">
                <div class="card-header">
                    <h5>Professores Cadastradas</h5>
                </div>

                <div class="card-body text-center">
                    <h1>{{$quantidadeProfessores}}</h1>
                </div>
            </div>
        </div>
        {{-- table with last posts --}}
        <div class="card border-0 shadow p-3 bg-body-tertiary rounded">
            <div class="card-header">
                <h5>Últimos registros</h5>
            </div>

            <div class="card-body">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Tabela</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Criado</th>
                            <th scope="col">Atualizado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Turma</td>
                            <td>{{ $lastTurma ? $lastTurma->nome : '-' }}</td>
                            <td>{{ $lastTurma ? \Carbon\Carbon::parse($lastTurma->created_at)->format('d/m/Y') : '-' }}</td>
                            <td>{{ $lastTurma ? \Carbon\Carbon::parse($lastTurma->updated_at)->format('d/m/Y') : '-' }}</td>
                        </tr>
                        <tr>
                            <td>Escola</td>
                            <td>{{ $lastEscola ? $lastEscola->nome : '-' }}</td>
                            <td>{{ $lastEscola ? \Carbon\Carbon::parse($lastEscola->created_at)->format('d/m/Y') : '-' }}</td>
                            <td>{{ $lastEscola ? \Carbon\Carbon::parse($lastEscola->updated_at)->format('d/m/Y') : '-' }}</td>
                        </tr>
                        <tr>
                            <td>Professor</td>
                            <td>{{ $lastProfessor ? $lastProfessor->nome : '-' }}</td>
                            <td>{{ $lastProfessor ? \Carbon\Carbon::parse($lastProfessor->created_at)->format('d/m/Y') : '-' }}</td>
                            <td>{{ $lastProfessor ? \Carbon\Carbon::parse($lastProfessor->updated_at)->format('d/m/Y') : '-' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
