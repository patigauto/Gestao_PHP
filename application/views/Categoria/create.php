-<html lang="en">
<head>
	<link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
	<title>Cadastro de Categorias</title>
</head> 
<body> 
	
	<div class="container"> 
		<div class="col-lg-10"> 
			<fieldset> 
				
				<legend>Cadastro de Categorias</legend> 
				<form class="form-horizontal" role="form" action="Categoria/create" method="post">
					<div class="form-group"> 
						<label for="nome" class="col-lg-3 control-label">Nome</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome da Categoria" maxlength=50> 
						</div> 
					</div> 
                    <div class="form-group"> 
                    <label for="id_tipo_categoria" class="col-lg-3 control-label">Categoria</label>	
					<?php echo "<select name='id_tipo_categoria' id='id_tipo_categoria'>";
							if (count($tipo_categoria)) {
								foreach ($tipo_categoria as $tpcategoria) {
									echo "<option value='". $tpcategoria['id'] . "'>"  . $tpcategoria['nome'] . "</option>";
								}
							}
							echo "</select><br/>"; 
							?>
					</div>
					<div class="form-group"> 
						<div class="col-lg-offset-3 col-lg-10"> 
							<button type="submit" class="btn btn-success">Salvar</button> 
							<a href="<?= base_url();?>index.php/Categoria/list_categorias" class="btn btn-primary">Cancelar</a> 
						</div> 
					</div> 
				</form> 
			</fieldset> 
		</div> 
	</div> 
</body>
</html>
