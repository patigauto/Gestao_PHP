
<html lang="en">
<head>
	<link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
	<title>Edição de Empresa</title>
</head>

<body> 
	<div class="container"> 
		<div class="col-lg-10"> 
			<fieldset> 
				<legend>Edição de Empresa</legend> 
                <?php foreach ($empresas as $empresa) : ?>
				<form class="form-horizontal" role="form" action="<?php echo base_url() . 'index.php/Empresa/alterar/' . $empresa->idemp; ?>" method="post">
				
					<div class="form-group"> 
						<label for="nome_fantasia" class="col-lg-3 control-label">Nome Fantasia</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" id="nome_fantasia" value="<?php echo $empresa->nome_fantasia; ?>" name="nome_fantasia"> 
						</div> 
					</div> 
					<div class="form-group"> 
						<label for="razao_social" class="col-lg-3 control-label">Razão Social</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" value="<?php echo $empresa->razao_social; ?>" name="razao_social" id="razao_social" placeholder="Jose da Silva Ltda" maxlength=50> 
						</div> 
					</div> 
                    <div class="form-group"> 
						<label for="cnpj" class="col-lg-3 control-label">CNPJ</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" value="<?php echo $empresa->cnpj; ?>" name="cnpj" id="cnpj" placeholder="99.999.999/9999-99" maxlength=14> 
						</div> 
					</div> 
                    <div class="form-group"> 
						<label for="inscricao_estadual" class="col-lg-3 control-label">Inscrição Estadual</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" value="<?php echo $empresa->inscricao_estadual; ?>" name="inscricao_estadual" id="inscricao_estadual" placeholder="Número da Inscrição Estadual" maxlength=25> 
						</div> 
					</div> 
					<div class="form-group"> 
						<label for="inscricao_municipal" class="col-lg-3 control-label">Inscrição Municipal</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" value="<?php echo $empresa->inscricao_municipal; ?>" name="inscricao_municipal" id="inscricao_municipal" placeholder="Número da Inscrição Municipal" maxlength=25> 
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
							<input type="text" class="form-control" value="<?php echo $empresa->telefone; ?>" name="telefone" id="telefone" placeholder="(99) 99999-9999" maxlength=11> 
						</div> 
					</div>
                    <div class="form-group"> 
						<label for="endereco" class="col-lg-3 control-label">Endereço</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" value="<?php echo $empresa->endereco; ?>" name="endereco" id="endereco" placeholder="Rua, número, complemento, bairro" maxlength=70> 
						</div> 
					</div>
					<div class="form-group"> 
						<label for="cidade" class="col-lg-3 control-label">Cidade</label> 
						<div class="col-lg-6"> 
							<input type="text" class="form-control" value="<?php echo $empresa->cidade; ?>" name="cidade" id="cidade" placeholder="Cidade" maxlength=50> 
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