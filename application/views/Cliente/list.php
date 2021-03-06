
<html>
    <head>
        <link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
        <title>Clientes cadastrados</title>
    </head>
    <body>
        <a class="btn btn-primary" href="<?= base_url();?>index.php/Cliente">cadastro</a>

        <table class="table table-bordered">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
            <tbody>
                 <?php foreach ($clientes as $cliente) : ?>
                 <tr>
                 <td><?php echo $cliente->id ?></td>
                 <td><?php echo $cliente->nome ?></td>
                 <td><?php echo $cliente->cpf ?></td>
                 <td><?php echo $cliente->data_nasc ?></td>
                 <td><?php echo $cliente->email ?></td>
                 <td>
                     <a href="<?php echo base_url() . 'index.php/Cliente/editar/' . $cliente->id; ?>" class="glyphicon glyphicon-pencil" title="Editar"></a>
                     <a href="<?php echo base_url() . 'index.php/Cliente/excluir/' . $cliente->id; ?>" class="glyphicon glyphicon-trash" title="Excluir"></a>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    </body>
</html>