<div class="row">
    <br>
    <div class="col-md-12">
        <h3>Cadastrar Produto</h3>
    </div>
    <div class="col-md-12">
        <form action="/produto/salvar" method="post">
            <div class="form-group">
                <label for="titulo">Nome</label>
                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="">
            </div>
            <div class="form-group">
                <label for="sku">Sku</label>
                <input type="text" class="form-control" name="sku" id="sku" placeholder="">
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="number" class="form-control" name="quantidade" id="quantidade" placeholder="">
            </div>
            <div class="form-group">
                <label for="valor">Valor R$</label>
                <input type="text" class="form-control" 
                data-affixes-stay="true" data-thousands="." data-decimal="," 
                id="valor" 
                name="valor" 
                placeholder="R$ 10,00">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao" ></textarea>
            </div>

            <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria" class="form-control" style="margin-bottom:2rem;">
                <option value="0"> Selecione </option>
                <?php foreach($aViewVar['aCategoria'] as $categoria){?>
                    <option value="<?= $categoria['id'] ?>"> <?= $categoria['categoria'] ?> </option>
                <?php }?>
            </select>

            <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            <a href="/produto" class="btn btn-info btn-sm">Voltar</a>
        </form>
    </div>
</div>