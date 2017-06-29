
<html>
    <head>
        <link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
        <title>Contas Bancárias</title>
    </head>
    <body>
        <a class="btn btn-primary" href="<?= base_url();?>index.php/Categoria">cadastro</a>

        <table class="table table-bordered">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Ações</th>
            </tr>
            <tbody>
                 <?php foreach ($categorias as $categoria) : ?>
                 <tr>
                 <td><?php echo $categoria->id ?></td>
                 <td><?php echo $categoria->nome ?></td>
                 <td><?php echo $categoria->id_tipo_categoria ?></td>
                 <td>
                     <a href="<?php echo base_url() . 'index.php/Categoria/editar/' . $categoria->id; ?>" class="glyphicon glyphicon-pencil" title="Editar"></a>
                     <a href="<?php echo base_url() . 'index.php/Categoria/excluir/' . $categoria->id; ?>" class="glyphicon glyphicon-trash" title="Excluir"></a>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    </body>
</html>