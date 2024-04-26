<div class="modal fade" data-bs-backdrop="static" id="modalTurmaEdit{{$turma->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Atualizar Turma</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('turma.update', $turma->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="recipient-escola" class="col-form-label">Selecione a Escola</label>
                <select class="form-select" id="recipient-escola" name="id_escola">
                    <option value="{{$turma->escola->id}}">{{$turma->escola->nome}}</option>
                        @foreach($escolas as $escola)
                            @if($escola->id !== $escola->id)
                                <option value="{{ $escola->id }}">{{ $escola->nome }}</option>
                            @endif
                        @endforeach
                </select>
            </div>
            <div class="mb-3">
              <label for="recipient-turno" class="col-form-label">Selecione o Turno</label>
                <select class="form-select" id="recipient-turno" name="turno">
                    <option value="{{$turma->id}}" selected>{{$turma->turno}}</option>
                    <option value="Manhã">Manhã</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noite">Noite</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="recipient-nome" class="col-form-label">Nome</label>
              <input type="text" class="form-control" id="recipient-nome" name="nome" value="{{$turma->nome}}">
            </div>
            <div class="mb-3">
                <label for="recipient-status" class="col-form-label">Status</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" {{ $turma->status == 'ativa' ? 'checked' : '' }} name="status" id="status-ativa" value="ativa">
                    <label class="form-check-label" for="status-ativa">Ativa</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" {{ $turma->status == 'inativa' ? 'checked' : '' }} name="status" id="status-inativa" value="inativa">
                    <label class="form-check-label" for="status-inativa">Inativa</label>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-success">Salvar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
