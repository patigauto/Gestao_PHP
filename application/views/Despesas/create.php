-<html lang="en">
<head>
	<link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
	<title>Cadastro de Despesas</title>
</head> 
<body> 
	
	<div class="container"> 
		<div class="col-lg-10"> 
			<fieldset> 
				
				<legend>Cadastro de Despesas</legend> 
				<form class="form-horizontal" role="form" action="Despesas/create" method="post">
					<div class="form-group"> 
						<label for="motivo" class="col-lg-3 control-label">Motivo</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="motivo" id="motivo" placeholder="Motivo da inclusão da receita" maxlength=100> 
						</div> 
					</div> 
					<div class="form-group" >
					<label for="id_categoria" class="col-lg-3 control-label">Categorias</label>	
					<?php echo "<select name='id_categoria' id='id_categoria'>";
							if (count($categorias)) {
								foreach ($categorias as $categoria) {
									echo "<option value='". $categoria['id'] . "'>" . $categoria['nome'] . "</option>";
								}
							}
							echo "</select><br/>"; 
							?>
					</div>
					<div class="form-group" >
					<label for="id_conta_bancaria" class="col-lg-3 control-label">Conta Bancária</label>	
					<?php echo "<select name='id_conta_bancaria' id='id_conta_bancaria'>";
							if (count($contas_bancarias)) {
								foreach ($contas_bancarias as $conta) {
									echo "<option value='". $conta['id'] . "'>" . $conta['numero'] . " - ". $conta['id_agencia'] ."</option>";
								}
							}
							echo "</select><br/>"; 
							?>
					</div>
					<div class="form-group"> 
						<div class="col-lg-offset-3 col-lg-10"> 
							<button type="submit" class="btn btn-success">Salvar</button> 
							<a href="<?= base_url();?>index.php/Despesas/list_despesas" class="btn btn-primary">Cancelar</a> 
						</div> 
					</div> 
				</form> 
			</fieldset> 
		</div> 
	</div> 
</body>
</html>
