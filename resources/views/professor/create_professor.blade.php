<div class="modal fade" data-bs-backdrop="static" id="modalProfessor" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Cadastrar Professor</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('professor.create') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nome</label>
              <input type="text" class="form-control" id="recipient-name" name="nome">
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
