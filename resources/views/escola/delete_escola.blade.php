<!-- Modal -->
<div class="modal fade" data-bs-backdrop="static" id="modalEscolaDel{{$escola->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmar Deleter Escola</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <span>{{$escola->nome}}</span>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Não</button>
            <form action="{{route('escola.delete', $escola->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Sim</button>
            </form>
        </div>
        </div>
    </div>
</div>
