<!-- Modal Cadastrar Categoria -->
<div class="modal fade" id="cadCategoriaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nova Categoria</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ route('store-categoria') }}" method="POST">
                @csrf
                <label for="nome" class="form-label d-none">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Nome da Categoria" class="form-control">
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" name="submit" class="btn btn-success">Salvar</button>
        </div>      
      </form>
       
    </div>
  </div>
</div>