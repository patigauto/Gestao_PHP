
<html>
    <head>
        <link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
        <title>Contas Bancárias</title>
    </head>
    <body>
        <a class="btn btn-primary" href="<?= base_url();?>index.php/ContaBancaria">cadastro</a>

        <table class="table table-bordered">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Número</th>
                <th>Agência</th>
                <th>Banco</th>
                <th>Titular</th>
                <th>Tipo de Pessoa</th>
                <th>Saldo</th>
                <th>Ações</th>
            </tr>
            <tbody>
                 <?php foreach ($contas as $conta) : ?>
                 <tr>
                 <td><?php echo $conta->id ?></td>
                 <td><?php echo $conta->nome ?></td>
                 <td><?php echo $conta->numero ?></td>
                 <td><?php echo $conta->agencia ?></td>
                 <td><?php echo $conta->banco ?></td>
                 <td><?php echo $conta->cliente ?></td>
                 <td><?php echo $conta->tipo ?></td>
                 <td><?php echo $conta->saldo_inicial ?></td>
                 <td>
                     <a href="<?php echo base_url() . 'index.php/ContaBancaria/editar/' . $conta->id; ?>" class="glyphicon glyphicon-pencil" title="Editar"></a>
                     <a href="<?php echo base_url() . 'index.php/ContaBancaria/excluir/' . $conta->id; ?>" class="glyphicon glyphicon-trash" title="Excluir"></a>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    </body>
</html>