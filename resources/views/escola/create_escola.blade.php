<div class="modal fade" data-bs-backdrop="static" id="modalEscola" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Escola</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('escola.create') }}" method="POST">
            @csrf <!-- Adiciona o token CSRF -->
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nome</label>
              <input type="text" class="form-control" id="recipient-name" name="nome">
            </div>
            <div class="mb-3">
              <label for="recipient-endereco" class="col-form-label">Endereço</label>
              <input type="text" class="form-control" id="recipient-endereco" name="endereco">
            </div>
            <div class="mb-3">
              <label for="recipient-inep" class="col-form-label">INEP</label>
              <input type="number" class="form-control" id="recipient-inep" min="0" name="inep">
            </div>
            <div class="mb-3">
              <label for="recipient-status" class="col-form-label">Status</label><br>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" checked name="status" id="status-ativa" value="ativa">
                  <label class="form-check-label" for="status-ativa">Ativa</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status" id="status-inativa" value="inativa">
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
