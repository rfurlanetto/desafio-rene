<div class="row">
    <br>
    <div class="col-md-12">
        <h3>Cadastrar Categoria</h3>
    </div>
    <div class="col-md-12">
        <form action="/categoria/salvar" method="post">
            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="text" class="form-control" name="codigo" id="codigo" placeholder="xxx-000" required>
            </div>
            <div class="form-group">
                <label for="categoria">Nome</label>
                <input type="text" class="form-control" name="categoria" id="categoria" placeholder="" required>
            </div>

            <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            <a href="/categoria" class="btn btn-info btn-sm">Voltar</a>
        </form>
    </div>
</div>