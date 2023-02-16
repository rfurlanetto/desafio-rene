<div class="row">
    <br>
    <div class="col-md-12">
        <h3>Editar Produto</h3>
    </div>
    <div class="col-md-12">
        <form action="/produto/atualizar" method="post">
            <?php foreach($aViewVar['aProduto'] as $produto){?>
                <input type="hidden" class="form-control" name="id" id="id" value="<?= $produto['id']?>">
                <div class="form-group">
                    <label for="titulo">Nome</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="" value="<?= $produto['titulo'] ?>">
                </div>
                <div class="form-group">
                    <label for="sku">Sku</label>
                    <input type="text" class="form-control" name="sku" id="sku" placeholder="" value="<?= $produto['sku'] ?>">
                </div>
                <div class="form-group">
                    <label for="quantidade">Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" id="quantidade" placeholder="" value="<?= $produto['quantidade'] ?>">
                </div>
                <div class="form-group">
                    <label for="valor">Valor R$</label>
                    <input type="text" class="form-control" 
                    data-affixes-stay="true" data-thousands="." data-decimal="," 
                    id="valor" 
                    name="valor" 
                    placeholder="R$ 10,00"
                    value="<?= $produto['valor'] ?>">
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea class="form-control" id="descricao" name="descricao" ><?= $produto['descricao'] ?></textarea>
                </div>

                <label for="categoria">Categoria</label>
                <select name="categoria" id="categoria" class="form-control" style="margin-bottom:2rem;">
                    <option value="0"> Selecione </option>
                    <?php foreach($aViewVar['aCategoria'] as $categoria){?>
                        <?php if($categoria['id'] == $produto['categoria_id']){?>
                            <option value="<?= $categoria['id'] ?>" selected> <?= $categoria['categoria'] ?> </option>
                        <?php }else{?>
                            <option value="<?= $categoria['id'] ?>"> <?= $categoria['categoria'] ?> </option>
                        <?php }?>
                    <?php }?>
                </select>
                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                <a href="/produto" class="btn btn-info btn-sm">Voltar</a>
            <?php }?>
        </form>
    </div>
</div>