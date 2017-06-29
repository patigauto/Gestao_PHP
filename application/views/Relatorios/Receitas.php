<html lang="en">
<head>
	<link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
	<title>Relatório de receitas</title>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
	
</head> 
<body> 
	
		<div class="container"> 
		<div class="col-lg-10"> 
			<fieldset> 
				
				<legend>Relatorio de Receitas</legend> 
				<form class="form-horizontal" role="form" action="pesquisareceitas" method="post">
					<div class="form-group"> 
						<label for="id_cliente" class="col-lg-3 control-label">Fornecedor</label>	
						<?php echo "<select name='id_cliente' id='id_cliente'>";
							if (count($clientes)) {
								foreach ($clientes as $cliente) {
									echo "<option value='". $cliente['id'] . "'>" . $cliente['nome'] . "</option>";
								}
							}
							echo "</select><br/>"; 
						?>
						</div>
							<div style="width:20%">
                				<label for="data" class="col-lg-3 control-label" >De</label> 
								<input type="date" class="form-control" name="data1_forn" id="data1_forn" placeholder="01/01/1990"> 
								<label for="ate" class="col-lg-3 control-label" >até</label>
								<input type="date" class="form-control" name="data2_forn" id="data2_forn" placeholder="01/01/1995"> 
							</div>


				<div style="width:20%">
                		<label for="data" class="col-lg-3 control-label" >De</label> 
						<input type="date" class="form-control" name="data_ano" id="data_ano" placeholder="01/01/1990"> 
						<label for="ate" class="col-lg-3 control-label" >até</label>
						<input type="date" class="form-control" name="data_mes" id="data_mes" placeholder="01/01/1995"> 
				</div>
						<button type="submit" class="btn btn-success">Pesquisar</button> 
				</form>
</fieldset>
</div>
</div>


</body>