<div class="row">
    <br>
    <div class="col-md-12">
        <h3>Editar Produto</h3>
    </div>
    <div class="col-md-12">
        <form action="/categoria/atualizar" method="post">

            <?php foreach($aViewVar['aCategoria'] as $categoria){?>

            <input type="hidden" class="form-control" name="id" id="id" value="<?= $categoria['id'] ?>">
            
            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="text" class="form-control" name="codigo" id="codigo" placeholder="xxx-000" required value="<?= $categoria['codigo'] ?>">
            </div>
            <div class="form-group">
                <label for="categoria">Nome</label>
                <input type="text" class="form-control" name="categoria" id="categoria" placeholder="" required value="<?= $categoria['categoria'] ?>">
            </div>

            <?php }?>

            <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            <a href="/produto" class="btn btn-info btn-sm">Voltar</a>
        </form>
    </div>
</div>