<div class="row">
    <br>
    <div class="col-md-12">
        <a href="/categoria/cadastrar" class="btn btn-success btn-sm">Adicionar</a>
        <hr>
    </div>
    <div class="col-md-12">
        <?php
            if(!count($aViewVar['aListaCategoria'])){
        ?>
            <div class="alert alert-info" role="alert">Nenhuma categoria encontrada</div>
        <?php
            } else {
        ?>
            <table class="table table-bordered table-hover">
                <tr>
                    <td class="info">Codigo</td>
                    <td class="info">Categoria</td>
                    <td class="info"></td>
                </tr>
                <?php
                    foreach($aViewVar['aListaCategoria'] as $categoria) {
                ?>
                    <tr>
                        <td><?= $categoria['codigo'] ?></td>
                        <td><?= $categoria['categoria'] ?></td>
                        <td>
                            <a href="/categoria/editar/<?= $categoria['id'] ?>" class="btn btn-info btn-sm">Editar</a>
                            <a href="/categoria/excluir/<?= $categoria['id'] ?>" class="btn btn-danger btn-sm">Excluir</a>
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