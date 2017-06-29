<html lang="en">
<head>
	<link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
	<title>Cadastro de Empresa</title>
</head> 
<body> 
	
	<div class="container"> 
		<div class="col-lg-10"> 
			<fieldset> 
				
				<legend>Cadastro de Empresa</legend> 
				<form class="form-horizontal" role="form" action="Empresa/create" method="post">
					<div class="form-group"> 
						<label for="nome_fantasia" class="col-lg-3 control-label">Nome Fantasia</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="nome_fantasia" id="nome_fantasia" placeholder="Bar do Zé" maxlength=50> 
						</div> 
					</div> 
					<div class="form-group"> 
						<label for="razao_social" class="col-lg-3 control-label">Razão Social</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="razao_social" id="razao_social" placeholder="Jose da Silva Ltda" maxlength=50> 
						</div> 
					</div> 
                    <div class="form-group"> 
						<label for="cnpj" class="col-lg-3 control-label">CNPJ</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="cnpj" id="cnpj" placeholder="99.999.999/9999-99" maxlength=14> 
						</div> 
					</div> 
                    <div class="form-group"> 
						<label for="inscricao_estadual" class="col-lg-3 control-label">Inscrição Estadual</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="inscricao_estadual" id="inscricao_estadual" placeholder="Número da Inscrição Estadual" maxlength=25> 
						</div> 
					</div> 
					<div class="form-group"> 
						<label for="inscricao_municipal" class="col-lg-3 control-label">Inscrição Municipal</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="inscricao_municipal" id="inscricao_municipal" placeholder="Número da Inscrição Municipal" maxlength=25> 
						</div> 
					</div>
                    <div class="form-group"> 
                    <label for="tipo_atividade" class="col-lg-3 control-label">Tipo de Atividade</label>	
					<?php echo "<select name='tipo_atividade' id='tipo_atividade'>";
							if (count($tipo_atividade)) {
								foreach ($tipo_atividade as $tp_atividade) {
									echo "<option value='". $tp_atividade['id'] . "'>" . $tp_atividade['nome'] . "</option>";
								}
							}
							echo "</select><br/>"; 
							?>
					</div>
                    <div class="form-group"> 
						<label for="telefone" class="col-lg-3 control-label">Telefone</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" name="telefone" id="telefone" placeholder="(99) 99999-9999" maxlength=11> 
						</div> 
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
						<div class="col-lg-offset-3 col-lg-10"> 
							<button type="submit" class="btn btn-success">Salvar</button> 
							<a href="<?= base_url();?>index.php/Empresa/list_empresa" class="btn btn-primary">Cancelar</a> 
						</div> 
					</div> 
				</form> 
			</fieldset> 
		</div> 
	</div> 
</body>
</html>
