
<html>
    <head>
        <link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
        <title>Receitas</title>
    </head>
    <body>
        <a class="btn btn-primary" href="<?= base_url();?>index.php/Receita">cadastro</a>

        <table class="table table-bordered">
            <tr>
                <th>Código</th>
                <th>Motivo</th>
                <th>Categoria</th>
                <th>Conta Bancária</th>
                <th>Data de Entrada</th>
                <th>Data de Alteração</th>
                <th>Ações</th>
            </tr>
            <tbody>
                 <?php foreach ($receitas as $receita) : ?>
                 <tr>
                 <td><?php echo $receita->id ?></td>
                 <td><?php echo $receita->motivo ?></td>
                 <td><?php echo $receita->id_categoria ?></td>
                 <td><?php echo $receita->id_conta_bancaria ?></td>
                 <td><?php echo $receita->data_entrada ?></td>
                 <td><?php echo $receita->data_alteracao ?></td>
                 <td>
                     <a href="<?php echo base_url() . 'index.php/Receita/editar/' . $receita->id; ?>" class="glyphicon glyphicon-pencil" title="Editar"></a>
                     <a href="<?php echo base_url() . 'index.php/Receita/excluir/' . $receita->id; ?>" class="glyphicon glyphicon-trash" title="Excluir"></a>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    </body>
</html>