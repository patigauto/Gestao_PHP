
<html>
    <head>
        <link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
        <title>Clientes cadastrados</title>
    </head>
    <body>

        <table class="table table-bordered">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>E-mail</th>
                <th>Empresa</th>
            </tr>
            <tbody>
                 <?php foreach ($clientes as $cliente) : ?>
                 <tr>
                 <td><?php echo $cliente->id ?></td>
                 <td><?php echo $cliente->nome ?></td>
                 <td><?php echo $cliente->cpf ?></td>
                 <td><?php echo $cliente->data_nasc ?></td>
                 <td><?php echo $cliente->email ?></td>
                 <td><?php echo $cliente->nomeempresa ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    </body>
</html>