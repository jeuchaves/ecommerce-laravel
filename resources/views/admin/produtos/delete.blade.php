<!-- Modal Structure -->
<div id="delete-{{$produto->id}}" class="modal">
    <div class="modal-content">
        <h4><i class="material-icons">delete</i> Tem certeza?</h4>
        <div class="col s12" >
            <div class="row">
                <p>Tem certeza que deseja excluir {{$produto->nome}}?</p>
            </div> 
            <a href="#!" class="modal-close waves-effect waves-green btn blue right">Cancelar</a>
            <form action="{{route('admin.produto.delete', $produto->id)}}" method="post" enctype="multipart/form-data">
                @method('DELETE')
                @csrf
                <button type="submit" class="waves-effect waves-green btn red right">Excluir</button>
            </form>
        </div>
    </div>
</div>