
<html>
    <head>
        <link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
        <title>Despesas</title>
    </head>
    <body>
        <a class="btn btn-primary" href="<?= base_url();?>index.php/Despesa">cadastro</a>

        <table class="table table-bordered">
            <tr>
                <th>Código</th>
                <th>Motivo</th>
                <th>Categoria</th>
                <th>Conta Bancária</th>
                <th>Valor</th>
                <th>Data de Entrada</th>
                <th>Data de Alteração</th>
                <th>Ações</th>
            </tr>
            <tbody>
                 <?php foreach ($despesas as $despesa) : ?>
                 <tr>
                 <td><?php echo $despesa->id ?></td>
                 <td><?php echo $despesa->motivo ?></td>
                 <td><?php echo $despesa->categoria ?></td>
                 <td><?php echo $despesa->conta ?></td>
                 <td><?php echo $despesa->valor ?></td>
                 <td><?php echo $despesa->data_entrada ?></td>
                 <td><?php echo $despesa->data_alteracao ?></td>
                 <td>
                     <!--<a href="</*?php echo base_url() . 'index.php/Despesa/editar/' . $despesa->id; ?>" class="glyphicon glyphicon-pencil" title="Editar"></a>-->
                     <a href="<?php echo base_url() . 'index.php/Despesa/excluir/' . $despesa->id; ?>" class="glyphicon glyphicon-trash" title="Excluir"></a>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    </body>
</html>