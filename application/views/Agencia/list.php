
<html>
    <head>
        <link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
        <title>Agências cadastradas</title>
    </head>
    <body>
        <a class="btn btn-primary" href="<?= base_url();?>index.php/Agencia">Cadastrar</a>

        <table class="table table-bordered">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Número</th>
                <th>Banco</th>
                <th>Endereço</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Ações</th>
            </tr>
            <tbody>
                 <?php foreach ($agencias as $agencia) : ?>
                 <tr>
                 <td><?php echo $agencia->id ?></td>
                 <td><?php echo $agencia->nome ?></td>
                 <td><?php echo $agencia->numero ?></td>
                 <td><?php echo $agencia->banco ?></td>
                 <td><?php echo $agencia->endereco ?></td>
                 <td><?php echo $agencia->cidade ?></td>
                 <td><?php echo $agencia->estado ?></td>
                 <td>
                     <!--<a href="</*?php echo base_url() . 'index.php/Cliente/editar/' . $agencia->id; ?*/>" class="glyphicon glyphicon-pencil" title="Editar"></a>-->
                     <a href="<?php echo base_url() . 'index.php/Cliente/excluir/' . $agencia->id; ?>" class="glyphicon glyphicon-trash" title="Excluir"></a>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    </body>
</html>