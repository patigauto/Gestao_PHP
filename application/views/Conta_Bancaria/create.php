-<html lang="en">
<head>
	<link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
	<title>Cadastro de Conta Bancária</title>
</head> 
<body> 
	
	<div class="container"> 
		<div class="col-lg-10"> 
			<fieldset> 
				
				<legend>Cadastro de Conta Bancária</legend> 
				<form class="form-horizontal" role="form" action="ContaBancaria/create" method="post">
					<div class="form-group"> 
						<label for="nome" class="col-lg-3 control-label">Nome</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome da Conta" maxlength=50> 
						</div> 
					</div> 
					<div class="form-group"> 
						<label for="numero" class="col-lg-3 control-label">Número da Conta</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="numero" id="numero" placeholder="99999999-9" maxlength=10> 
						</div> 
					</div> 
                    <div class="form-group"> 
                    <label for="id_agencia" class="col-lg-3 control-label">Agência</label>	
					<?php echo "<select name='id_agencia' id='id_agencia'>";
							if (count($agencias)) {
								foreach ($agencias as $agencia) {
									echo "<option value='". $agencia['id'] . "'>"  . $agencia['numero']. ' - '.$agencia['nome'] . "</option>";
								}
							}
							echo "</select><br/>"; 
							?>
					</div>
					<div class="form-group" >
					<label for="id_banco" class="col-lg-3 control-label">Banco</label>	
					<?php echo "<select name='id_banco' id='id_banco'>";
							if (count($bancos)) {
								foreach ($bancos as $banco) {
									echo "<option value='". $banco['id'] . "'>". $banco['numero']. ' - ' . $banco['nome'] . "</option>";
								}
							}
							echo "</select><br/>"; 
							?>
					</div>
					<div class="form-group" >
					<label for="id_titular" class="col-lg-3 control-label">Titular</label>	
					<?php echo "<select name='id_titular' id='id_titular'>";
							if (count($clientes)) {
								foreach ($clientes as $cliente) {
									echo "<option value='". $cliente['id'] . "'>". $cliente['nome']. ' - ' . $cliente['cpf'] . "</option>";
								}
							}
							if (count($fornecedores)) {
								foreach ($fornecedores as $fornecedor) {
									echo "<option value='". $fornecedor['id'] . "'>". $fornecedor['nome'] . "</option>";
								}
							}
							echo "</select><br/>"; 
							?>
					</div>
					<div class="form-group" >
					<label for="id_tipo_pessoa" class="col-lg-3 control-label">Tipo de Pessoa</label>	
					<?php echo "<select name='id_tipo_pessoa' id='id_tipo_pessoa'>";
							if (count($tipo_pessoa)) {
								foreach ($tipo_pessoa as $tp_pessoa) {
									echo "<option value='". $tp_pessoa['id'] . "'>". $tp_pessoa['nome'] . "</option>";
								}
							}
							echo "</select><br/>"; 
							?>
					</div>
					<div class="form-group"> 
						<label for="saldo_inicial" class="col-lg-3 control-label">Saldo Inicial</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="saldo_inicial" id="saldo_inicial" placeholder="102.32" maxlength=23> 
						</div> 
					</div>
					<div class="form-group"> 
						<div class="col-lg-offset-3 col-lg-10"> 
							<button type="submit" class="btn btn-success">Salvar</button> 
							<a href="<?= base_url();?>index.php/ContaBancaria/list_contas" class="btn btn-primary">Cancelar</a> 
						</div> 
					</div> 
				</form> 
			</fieldset> 
		</div> 
	</div> 
</body>
</html>
