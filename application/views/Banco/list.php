
<html>
    <head>
        <link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
        <title>Bancos cadastrados</title>
    </head>
    <body>
        <a class="btn btn-primary" href="<?= base_url();?>index.php/Banco">cadastro</a>

        <table class="table table-bordered">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Número</th>
                <th>Ações</th>
            </tr>
            <tbody>
                 <?php foreach ($bancos as $banco) : ?>
                 <tr>
                 <td><?php echo $banco->id ?></td>
                 <td><?php echo $banco->nome ?></td>
                 <td><?php echo $banco->numero ?></td>
                 <td>
                     <!--<a href="</*?php echo base_url() . 'index.php/Cliente/editar/' . $cliente->id; ?*/>" class="glyphicon glyphicon-pencil" title="Editar"></a>-->
                     <a href="<?php echo base_url() . 'index.php/Banco/excluir/' . $banco->id; ?>" class="glyphicon glyphicon-trash" title="Excluir"></a>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    </body>
</html>