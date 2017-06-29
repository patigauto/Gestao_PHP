
<html>
    <head>
        <link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
        <title>Despesas</title>
    </head>
    <body>

        <table class="table table-bordered">
            <tr>
                <th>Código</th>
                <th>Motivo</th>
                <th>Categoria</th>
                <th>Conta Bancária</th>
                <th>Data de Entrada</th>
                
            </tr>
            <tbody>
                 <?php foreach ($despesas as $despesa) : ?>
                 <tr>
                 <td><?php echo $despesa->id ?></td>
                 <td><?php echo $despesa->motivo ?></td>
                 <td><?php echo $despesa->id_categoria ?></td>
                 <td><?php echo $despesa->id_conta_bancaria ?></td>
                 <td><?php echo $despesa->data_entrada ?></td>
                
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    </body>
</html>