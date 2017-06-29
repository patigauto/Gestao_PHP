<html lang="en">
<head>
	<link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
	<title>Cadastro de Clientes</title>
</head> 
<body> 
	
	<div class="container"> 
		<div class="col-lg-10"> 
			<fieldset> 
				
				<legend>Cadastro de Clientes</legend> 
				<form class="form-horizontal" role="form" action="Cliente/create" method="post">
					<div class="form-group"> 
						<label for="nome" class="col-lg-3 control-label">Nome Completo</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="nome" id="nome" placeholder="João da Silva" required> 
						</div> 
					</div> 
					<div class="form-group"> 
						<label for="data_nascimento" class="col-lg-3 control-label">Data de Nascimento</label> 
						<div class="col-lg-6"> 
							<input type="date" class="form-control" name="data_nascimento" id="data_nascimento" placeholder="01/01/1990"> 
						</div> 
					</div> 
                    <div class="form-group"> 
						<label for="cpf" class="col-lg-3 control-label">CPF</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="cpf" id="cpf" placeholder="999.999.999-99"> 
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
					<label for="estado" class="col-lg-3 control-label">Estado</label>	
					<?php echo "<select name='estado' id='estado'>";
							if (count($estados)) {
								foreach ($estados as $estado) {
									echo "<option value='". $estado['id'] . "'>" . $estado['nome'] . "</option>";
								}
							}
							echo "</select><br/>"; 
							?>
					</div>
					<div class="form-group"> 
						<label for="email" class="col-lg-3 control-label">E-mail</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="email" id="email" placeholder="usuario@gestao.com"> 
						</div> 
					</div> 
					<div class="form-group"> 
						<div class="col-lg-offset-3 col-lg-10"> 
							<button type="submit" class="btn btn-success">Salvar</button> 
							<a href="<?= base_url();?>index.php/Cliente/list_cliente" class="btn btn-primary">Cancel</a> 
						</div> 
					</div> 
				</form> 
			</fieldset> 
		</div> 
	</div> 
</body>
</html>