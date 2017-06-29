
<html>
    <head>
        <link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
        <title>Empresas cadastradas</title>
    </head>
    <body>
        <a class="btn btn-primary" href="<?= base_url();?>index.php/Empresa">cadastro</a>

        <table class="table table-bordered">
            <tr>
                <th>Código</th>
                <th>Razão Social</th>
                <th>Nome Fantasia</th>
                <th>CNPJ</th>
                <th>Estado</th>
                <th>Tipo de Atividade</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
            <tbody>
                 <?php foreach ($empresas as $empresa) : ?>
                 <tr>
                 <td><?php echo $empresa->idemp ?></td>
                 <td><?php echo $empresa->razao_social ?></td>
                 <td><?php echo $empresa->nome_fantasia ?></td>
                 <td><?php echo $empresa->cnpj ?></td>
                 <td><?php echo $empresa->estado ?></td>
                 <td><?php echo $empresa->tipo_atividade ?></td>
                 <td><?php echo $empresa->status ?></td>
                 <td>
                     <a href="<?php echo base_url() . 'index.php/Empresa/editar/' . $empresa->idemp; ?>" class="glyphicon glyphicon-pencil" title="Editar"></a>
                     
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    </body>
</html>