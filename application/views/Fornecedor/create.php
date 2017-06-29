-<html lang="en">
<head>
	<link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
	<title>Cadastro de Fornecedores</title>
</head> 
<body> 
	
	<div class="container"> 
		<div class="col-lg-10"> 
			<fieldset> 
				
				<legend>Cadastro de Fornecedores</legend> 
				<form class="form-horizontal" role="form" action="Fornecedor/create" method="post">
					<div class="form-group"> 
						<label for="nome" class="col-lg-3 control-label">Nome</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome da Conta" maxlength=50> 
						</div> 
					</div> 
					  <div class="form-group"> 
						<label for="telefone" class="col-lg-3 control-label">Telefone</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="telefone" id="telefone" placeholder="(99) 99999-9999"> 
						</div> 
					</div> 
					<div class="form-group"> 
						<label for="endereco" class="col-lg-3 control-label">Endereço</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua, Número, Complemento, Bairro"> 
						</div> 
					</div> 
					<div class="form-group"> 
						<label for="cidade" class="col-lg-3 control-label">Cidade</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade"> 
						</div> 
					</div>
					<div class="form-group selectpicker" >
					<label for="id_estado" class="col-lg-3 control-label">Estado</label>	
					<?php echo "<select name='id_estado' id='id_estado'>";
							if (count($estados)) {
								foreach ($estados as $estado) {
									echo "<option value='". $estado['id'] . "'>" . $estado['nome'] . "</option>";
								}
							}
							echo "</select><br/>"; 
							?>
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
