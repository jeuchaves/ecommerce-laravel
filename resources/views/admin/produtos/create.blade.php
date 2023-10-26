<!-- Modal Structure -->
<div id="create" class="modal">
    <div class="modal-content">
        <h4><i class="material-icons">playlist_add_circle</i> Novo produto</h4>
        <form action="{{route('admin.produto.store')}}" method="post" enctype="multipart/form-data" class="col s12">
            @csrf
            <input type="hidden" name="id_user" value="{{auth()->user()->id}}">
            <div class="row">
                <div class="input-field col s6">
                    <input id="nome" type="text" name="nome" class="validate">
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field col s6">
                    <input id="preco" type="number" name="preco" class="validate">
                    <label for="preco">Preço</label>
                </div>
                <div class="input-field col s12">
                    <input id="descricao" type="text" name="descricao" class="validate">
                    <label for="descricao">Descrição</label>
                </div>
                <div class="input-field col s12">
                    <select name="id_categoria">
                        <option value="" disabled selected>Escolha uma opção</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                        @endforeach
                    </select>
                    <label>Categoria</label>
                </div>         
                <div class="file-field input-field col s12">
                    <div class="btn">
                        <span>Imagem</span>
                        <input name="imagem" type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                  </div> 
            </div> 
            <button type="submit" class="waves-effect waves-green green btn blue right">Cadastrar</button>
        </form>
        
    </div>
</div>