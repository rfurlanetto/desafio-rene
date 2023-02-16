<div class="row">
    <br>
    <div class="col-md-12">
        <a href="/produto/cadastrar" class="btn btn-success btn-sm">Adicionar</a>
        <hr>
    </div>
    <div class="col-md-12">
        <?php
            if(!count($aViewVar['aListaProduto'])){
        ?>
            <div class="alert alert-info" role="alert">Nenhum produto encontrado</div>
        <?php
            } else {
        ?>
            <table class="table table-bordered table-hover">
                <tr>
                    <td class="info">Nome</td>
                    <td class="info">Valor</td>
                    <td class="info">Sku</td>
                    <td class="info">Quantidade</td>
                    <td class="info">Categoria</td>
                    <td class="info"></td>
                </tr>
                <?php
                    foreach($aViewVar['aListaProduto'] as $aProduto) {
                ?>
                    <tr>
                        <td><?= $aProduto['titulo']; ?></td>
                        <td><?= $aProduto['valor']; ?></td>
                        <td><?= $aProduto['sku']; ?></td>
                        <td><?= $aProduto['quantidade']; ?></td>
                        <td><?= $aProduto['categoria_id']; ?></td>
                        <td>
                            <a href="/produto/editar/<?= $aProduto['id']; ?>" class="btn btn-info btn-sm">Editar</a>
                            <a href="/produto/excluir/<?= $aProduto['id']; ?>" class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </table>
        <?php
            }
        ?>
    </div>
</div>