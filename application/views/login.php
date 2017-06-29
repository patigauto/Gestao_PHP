<html lang="en">
<head>
	<link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
	<title>Login</title>
</head> 
<body> 
	
	<div class="container"> 
		<div class="col-lg-10" style="margin:5%"> 
			<fieldset > 
				
				<legend>Acesse sua conta</legend> 
				<form class="form-horizontal" role="form" action="index.php/Login/login" method="post">
		<div class="form-group">
			<label>E-mail:</label>
			<input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail" required>
		</div>
		<div class="form-group">
			<label>Senha:</label>
			<input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha" required>
		</div>
		<div class="form-group" align="center" >
			<input type="submit" class="btn btn-primary" value="entrar" id="entrar" name="entrar">
		</div>
		</div> 
				</form> 
			</fieldset> 
		</div> 
	</div> 
</body>
</html>
