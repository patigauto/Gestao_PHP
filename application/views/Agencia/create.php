<html lang="en">
<head>
	<link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
	<title>Cadastro de Agência</title>
</head> 
<body> 
	
	<div class="container"> 
		<div class="col-lg-10"> 
			<fieldset> 
				
				<legend>Cadastro de Agência</legend> 
				<form class="form-horizontal" role="form" action="Agencia/create" method="post">
					<div class="form-group"> 
						<label for="nome" class="col-lg-3 control-label">Nome</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome da Agência" maxlength=30> 
						</div> 
					</div> 
					<div class="form-group"> 
						<label for="numero" class="col-lg-3 control-label">Número</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="numero" id="numero" placeholder="9999" maxlength=15> 
						</div> 
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
                    <div class="form-group"> 
						<label for="endereco" class="col-lg-3 control-label">Endereço</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua, número, complemento, bairro" maxlength=70> 
						</div> 
					</div> 
                    <div class="form-group"> 
						<label for="cidade" class="col-lg-3 control-label">Cidade</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" maxlength=50> 
						</div> 
					</div>
					<div class="form-group" >
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
						<label for="telefone" class="col-lg-3 control-label">Telefone</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="telefone" id="telefone" placeholder="Número da Inscrição Municipal" maxlength=11> 
						</div> 
					</div>
					<div class="form-group"> 
						<div class="col-lg-offset-3 col-lg-10"> 
							<button type="submit" class="btn btn-success">Salvar</button> 
							<a href="<?= base_url();?>" class="btn btn-primary">Cancel</a> 
						</div> 
					</div> 
				</form> 
			</fieldset> 
		</div> 
	</div> 
</body>
</html>
