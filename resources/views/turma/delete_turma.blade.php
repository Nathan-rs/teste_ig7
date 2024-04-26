<!-- Modal -->
<div class="modal fade" data-bs-backdrop="static" id="modalTurmaDel{{$turma->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmar Deleter Turma</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <h6>Deseja apagar a Turma: {{$turma->nome}}</h6>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Não</button>
            <form action="{{route('turma.delete', $turma->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Sim</button>
            </form>
        </div>
        </div>
    </div>
</div>
