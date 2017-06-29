-<html lang="en">
<head>
	<link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
	<title>filtro por empresa</title>
</head> 
<body> 
	
	<div class="container"> 
		<div class="col-lg-10"> 
			<fieldset> 
				
				<legend>filtro por empresa</legend> 
				<form class="form-horizontal" role="form" action="pesquisaclientes" method="post">
					<div class="form-group selectpicker" >
					<label for="id_empresa" class="col-lg-3 control-label">Empresas</label>	
					<?php echo "<select name='id_empresa' id='id_empresa'>";
							if (count($empresas)) {
								foreach ($empresas as $empresa) {
									echo "<option value='". $empresa['id'] . "'>" . $empresa['nome_fantasia'] . "</option>";
								}
							}
							echo "</select><br/>"; 
							?>
					</div>
					<div class="form-group"> 
						<div class="col-lg-offset-3 col-lg-10"> 
							<button type="submit" class="btn btn-success">Salvar</button> 
						</div> 
					</div> 
				</form> 
			</fieldset> 
		</div> 
	</div> 
</body>
</html>
