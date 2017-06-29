
<html>
    <head>
        <link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
        <title>Usuários cadastrados</title>
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
                 <?php foreach ($usuarios as $usuario) : ?>
                 <tr>
                 <td><?php echo $usuario->id ?></td>
                 <td><?php echo $usuario->nome ?></td>
                 <td><?php echo $usuario->cpf ?></td>
                 <td><?php echo $usuario->data_nasc ?></td>
                 <td><?php echo $usuario->email ?></td>
                 <td>
                     <!--<a href="</*?php echo base_url() . 'index.php/User/editar/' . $usuario->id; ?>" class="glyphicon glyphicon-pencil" title="Editar"></a>-->
                     <a href="<?php echo base_url() . 'index.php/User/excluir/' . $usuario->id; ?>" class="glyphicon glyphicon-trash" title="Excluir"></a>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    </body>
</html>