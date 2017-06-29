<html lang="en">
<head>
	<link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
 	<link href="<?= base_url();?>bootstrap/css/bootstrap-theme.css" rel="stylesheet">
   <link href="<?= base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head> 
<body> 
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?= base_url();?>">Gestão financeira</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?= base_url();?>index.php/User">Usuário</a></li>
      <li><a href="<?= base_url();?>index.php/Empresa/list_empresa">Empresas</a></li>
      <li><a href="<?= base_url();?>index.php/ContaBancaria/list_contas">Conta Bancária</a></li>
      <li><a href="<?= base_url();?>index.php/Banco">Banco</a> </li>
      <li><a href="<?= base_url();?>index.php/Agencia">Agência</a> </li>
      <li><a href="<?= base_url();?>index.php/Cliente/list_cliente">Cliente</a> </li>
      <li><a href="<?= base_url();?>index.php/Categoria/list_categorias">Categoria</a> </li>
      <li><a href="<?= base_url();?>index.php/Fornecedor/list_fornecedores">Fornecedor</a> </li>
      <li><a href="<?= base_url();?>index.php/Receita/list_receitas">Receitas</a> </li>
      <li><a href="<?= base_url();?>index.php/Despesa/list_despesas">Despesas</a> </li>
      <li><a href="<?= base_url();?>index.php/Relatorio/Index">Relatorios</a> </li>

    </ul>
  </div>
</nav>




</body>