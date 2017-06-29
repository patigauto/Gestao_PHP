
<html>
    <head>
        <link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
        <title>Receitas</title>
    </head>
    <body>

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
                 <td><?php echo $receita->idrec ?></td>
                 <td><?php echo $receita->motivo ?></td>
                 <td><?php echo $receita->nome_categoria ?></td>
                 <td><?php echo $receita->numeroconta ?> - <?php echo $receita->nomeconta ?></td>
                 <td><?php echo $receita->data_entrada ?></td>
                 <td><?php echo $receita->data_alteracao ?></td>
            </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    </body>
</html>