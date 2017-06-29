
<html lang="en">
<head>
	<link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
	<title>Edição de Cliente</title>
</head>

<body> 
	<div class="container"> 
		<div class="col-lg-10"> 
			<fieldset> 
				<legend>Edição de Cliente</legend> 
                <?php foreach ($clientes as $cliente) : ?>
				<form class="form-horizontal" role="form" action="<?php echo base_url() . 'index.php/Cliente/alterar/' . $cliente->idcliente; ?>" method="post">
				<div class="form-group" hidden> 
						<label for="idcliente" class="col-lg-3 control-label">ID</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" id="idcliente" value="<?php echo $cliente->idcliente; ?>" name="idcliente"> 
						</div> 
					</div> 
					<div class="form-group"> 
						<label for="nome" class="col-lg-3 control-label">Nome</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" id="nome" value="<?php echo $cliente->nome; ?>" name="nome"> 
						</div> 
					</div> 
					<div class="form-group"> 
						<label for="telefone" class="col-lg-3 control-label"> Telefone</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" value="<?php echo $cliente->telefone; ?>" name="telefone" id="telefone" maxlength=11> 
						</div> 
					</div> 
                    <div class="form-group"> 
						<label for="endereco" class="col-lg-3 control-label">Endereço</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" value="<?php echo $cliente->endereco; ?>" name="endereco" id="endereco">
						</div> 
					</div>
					<div class="form-group"> 
						<label for="cidade" class="col-lg-3 control-label">Cidade</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" value="<?php echo $cliente->cidade; ?>" name="cidade" id="cidade" placeholder="Cidade" maxlength=50> 
						</div> 
					</div>
					<div class="form-group" >
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
						<label for="email" class="col-lg-3 control-label">E-mail:</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" value="<?php echo $cliente->email; ?>" name="email" id="email"> 
						</div> 
					</div>
					<div class="form-group"> 
						<div class="col-lg-offset-3 col-lg-10"> 
							<button type="submit" class="btn btn-success">Salvar</button> 
							<a href="<?= base_url();?>" class="btn btn-primary">Cancel</a> 
						</div> 
					</div> 
				</form> 
				<?php endforeach; ?>
			</fieldset> 
		</div> 
	</div> 
</body>
</html>