
<html>
    <head>
        <link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
        <title>Contas Bancárias</title>
    </head>
    <body>
        <a class="btn btn-primary" href="<?= base_url();?>index.php/Fornecedor">cadastro</a>

        <table class="table table-bordered">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Data de Cadastro</th>
                <th>Ações</th>
            </tr>
            <tbody>
                 <?php foreach ($fornecedores as $fornecedor) : ?>
                 <tr>
                 <td><?php echo $fornecedor->id ?></td>
                 <td><?php echo $fornecedor->nome ?></td>
                 <td><?php echo $fornecedor->endereco ?></td>
                 <td><?php echo $fornecedor->cidade ?></td>
                 <td><?php echo $fornecedor->id_estado ?></td>
                 <td><?php echo $fornecedor->data_cadastro ?></td>
                 <td>
                     <a href="<?php echo base_url() . 'index.php/Fornecedor/editar/' . $fornecedor->id; ?>" class="glyphicon glyphicon-pencil" title="Editar"></a>
                     <a href="<?php echo base_url() . 'index.php/Fornecedor/excluir/' . $fornecedor->id; ?>" class="glyphicon glyphicon-trash" title="Excluir"></a>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    </body>
</html>