<html lang="en">
<head>
	<link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
	<title>Cadastro de Banco</title>
</head> 
<body> 
	
	<div class="container"> 
		<div class="col-lg-10"> 
			<fieldset> 
				
				<legend>Cadastro de Banco</legend> 
				<form class="form-horizontal" role="form" action="Banco/create" method="post">
					<div class="form-group"> 
						<label for="nome" class="col-lg-3 control-label">Nome do Banco</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="nome" id="nome" placeholder="Santander S.A." maxlength=35> 
						</div> 
					</div> 
                    <div class="form-group"> 
						<label for="numero" class="col-lg-3 control-label">Número do Banco</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="numero" id="numero" placeholder="9999"> 
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
