<html>
<head>
	<title>Cadastro de Usuário</title>
	<link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
	<script>
		$(function() {
			$( "#calendario" ).datepicker();
		});
	</script>
</head>
<body> 
	
	<div class="container"> 
		<div class="col-lg-10"> 
			<fieldset> 
				
				<legend>Cadastro de Usuário</legend> 
				<form class="form-horizontal" role="form" action="User/create" method="post">
					<div class="form-group"> 
						<label for="nome" class="col-lg-3 control-label">Nome Completo</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="nome" id="nome" placeholder="João da Silva"> 
						</div> 
					</div> 
					<div class="form-group"> 
						<label for="data_nascimento" class="col-lg-3 control-label">Data de Nascimento</label> 
						<div class="col-lg-6"> 
							<input type="date" class="form-control data" name="data_nascimento" id="calendario" placeholder="01/01/1990"> 
						</div> 
					</div> 
                    <div class="form-group"> 
						<label for="cpf" class="col-lg-3 control-label">CPF</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control cpf" name="cpf" id="cpf" placeholder="999.999.999-99"> 
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
						<label for="senha" class="col-lg-3 control-label">Senha</label> 
						<div class="col-lg-6"> 
							<input type="password" class="form-control" name="senha" id="senha" placeholder="******"> 
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
