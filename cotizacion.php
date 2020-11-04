<?php
	$siteTitle="Cotización | Sedicomvet | Laboratorio de Análisis";
	$siteDescription = "Análisis físico-químicos, microbiológicos y de alta tecnología";
	$rutaImagenLogo = "Imagenes/Logo-Sedicomvet-Sm.png";
?>

<!DOCTYPE html>
<html lang=es>
<head>
<meta charset="UTF-8">
	<title><?php echo $siteTitle ?></title>
	<meta name="description" content="<?php echo $siteDescription ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="Imagenes/logo-icono-sedicomvet.png">
	<link rel="stylesheet" href="css/estilos.css">

		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="https://kit.fontawesome.com/ca94763753.js" crossorigin="anonymous"></script>
	<!-- jQuery library -->
	<script src="js/jquery.min.js"></script>

	<!-- jsPDF library -->
	<script src="js/jsPDF/dist/jspdf.min.js"></script>
</head>
<body>
	
	<div class="padre">
	<header>
			<div style="height:0px;" class="container-fluid d-flex">
				<h1 class="site-title text-hide"><a href="index.php" rel="home"><?php echo $siteTitle?></a></h1>
				<h2 class="site-description text-hide"><?php echo $siteDescription?></h2>	
			</div>

			<nav class="navbar navbar-toggleable-md navbar-light navbar-fixed-top" style="background:rgba(255,255,255,0.7);position:fixed;">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
  				</button>
		
				<a class="navbar-brand" href="index.php">
				<img src="Imagenes/Logo-Sedicomvet-Sm.png" width="auto" height="40" class="d-inline-block align-top" alt="Logo Sedicomvet">
				</a>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					
				<div class="d-flex justify-content-around mr-auto letra-menu">
					<a class="nav-item nav-link active" href="index">Inicio</a>
					<a class="nav-item nav-link" href="nosotros">Nosotros</a>
					<a class="nav-item nav-link" href="servicios">Servicios</a>
					<a class="nav-item nav-link" href="contacto">Contacto</a>
					<a class="nav-item nav-link" href="formularios">Formularios</a>
				</div>

					<div class="text-center paddTop" style="font-size:25px;">
						<a href="https://www.facebook.com/sedicomvet.ve" target="_blank"><i class="fa fa-facebook-square" style="color:#333391;" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/sedicomvet/" target="_blank"><i class="fa fa-instagram" style="color:#333391;" aria-hidden="true"></i></a>
						<a href="contacto.php#whatsapp"><i class="fa fa-whatsapp" style="color:#333391;" aria-hidden="true"></i></a>
					</div>
				</div> 
			</nav>

			<h1 class="m-2" style="padding-top:100px; color:#333391">Formulario para solicitar cotización</h1>

		</header>
		<hr class="ml-5 mr-5" style="background-color:#333391; height:1px;">
		
		<div class="p-5 text-center">
			<h2>Favor diligenciar el formulario con los datos solicitados</h2>
		</div>

		<div class="container p-5" id="muestras">
			<form action="recibido.php" name="muestras" method="post" class="formulario">
				
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="protocolo">Protocolo Sedicomvet:</label>
							<input type="text" class="form-control" id="protocolo" placeholder="Ingrese el código" name="protocolo">
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<label for="fechaRecepcion">*Fecha de Recepción:</label>
							<input type="date" class="form-control" id="fechaRecepcion" placeholder="Ingrese la fecha" name="fechaRecepcion" required>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<h3>Datos de la empresa</h3>
				</div>

				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="empresa">*Empresa:</label>
							<input type="text" class="form-control" id="empresa" placeholder="Ingrese el nombre de la empresa" name="empresa" required>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 d-flex">
						<div class="form-group" style="margin-right:10px;">
							<label for="codArea">*Código de Área:</label>
							<select class="form-control" id="codArea" name="codArea" required>
								<option value="0255">0255 Acarigua</option>
								<option value="0248">0248 Amazonas</option>
								<option value="0296">0296 Amazonas</option>
								<option value="0281">0281 Anzoátegui</option>
								<option value="0282">0282 Anzoátegui</option>
								<option value="0283">0283 Anzoátegui</option>
								<option value="0243">0243 Aragua</option>
								<option value="0244">0244 Aragua</option>
								<option value="0273">0273 Barinas</option>
								<option value="0278">0278 Barinas</option>
								<option value="0285">0285 Bolívar</option>
								<option value="0286">0286 Bolívar</option>
								<option value="0288">0288 Bolívar</option>
								<option value="0241">0241 Carabobo</option>
								<option value="0242">0242 Carabobo</option>
								<option value="0245">0245 Carabobo</option>
								<option value="0249">0249 Carabobo</option>
								<option value="0259">0259 Carabobo</option>
								<option value="0212">0212 Caracas</option>
								<option value="0258">0258 Cojedes</option>
								<option value="0287">0287 Delta Amacuro</option>
								<option value="0237">0237 Dependencias Federales</option>
								<option value="0274">0274 Estado Mérida</option>
								<option value="0268">0268 Falcón</option>
								<option value="0269">0269 Falcón</option>
								<option value="0235">0235 Guárico</option>
								<option value="0238">0238 Guárico</option>
								<option value="0246">0246 Guárico</option>
								<option value="0247">0247 Guárico</option>
								<option value="0251">0251 Lara</option>
								<option value="0252">0252 Lara</option>
								<option value="0212">0212 Miranda</option>
								<option value="0232">0232 Miranda</option>
								<option value="0234">0234 Miranda</option>
								<option value="0236">0236 Miranda</option>
								<option value="0239">0239 Miranda</option>
								<option value="0291">0291 Monagas</option>
								<option value="0292">0292 Monagas</option>
								<option value="0295">0295 Nueva Esparta</option>
								<option value="0255">0255 Portuguesa</option>
								<option value="0256">0256 Portuguesa</option>
								<option value="0257">0257 Portuguesa</option>
								<option value="0272">0272 Portuguesa</option>
								<option value="0293">0293 Sucre</option>
								<option value="0294">0294 Sucre</option>
								<option value="0271">0271 Trujillo</option>
								<option value="0272">0272 Trujillo</option>
								<option value="0276">0276 Táchira</option>
								<option value="0277">0277 Táchira</option>
								<option value="0212">0212 Vargas</option>
								<option value="0253">0253 Yaracuy</option>
								<option value="0254">0254 Yaracuy</option>
								<option value="0261">0261 Zulia</option>
								<option value="0262">0262 Zulia</option>
								<option value="0263">0263 Zulia</option>
								<option value="0264">0264 Zulia</option>
								<option value="0265">0265 Zulia</option>
								<option value="0266">0266 Zulia</option>
								<option value="0267">0267 Zulia</option>
								<option value="0275">0275 Zulia</option>
								<option value="0279">0279 Zulia</option>
							</select>
						</div>
						<div class="form-group" style="flex-grow:2;">
							<label for="telefono">*Teléfono:</label>
							<input type="text" class="form-control" id="telefono" placeholder="Ingrese el número de teléfono" name="telefono" required>
						</div>
				</div>
					<div class="col-xs-12 col-md-6 d-flex">
						<div class="form-group" style="margin-right:10px;">
							<label for="operadora">*Operador:</label>
							<select class="form-control" id="operadora" name="operadora" required>
								<option value="0412">0412</option>
								<option value="0416">0416</option>
								<option value="0414">0414</option>
								<option value="0424">0424</option>
								<option value="0426">0426</option>
							</select>
						</div>
						<div class="form-group" style="flex-grow:2;">	
							<label for="cel">*Celular:</label>
							<input type="text" class="form-control" id="cel" placeholder="Ingrese el número de celular" name="cel" required>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="form-group">
							<label for="direccionPostal">*Dirección Postal:</label>
							<input type="text" class="form-control" id="direccionPostal" placeholder="Ingrese la dirección" name="direccionPostal" required>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 d-flex">
						<div class="form-group" style="margin-right:10px;">
							<label for="tipoRIF">*RIF:</label>
							<select class="form-control" id="tipoRIF" name="tipoRIF" required>
								<option value="J-">J</option>
								<option value="G-">G</option>
								<option value="V-">V</option>
								<option value="E-">E</option>
								<option value="">Otro</option>
							</select>
						</div>
						<div class="form-group" style="flex-grow:2;">
							<label for="rif">*Número:</label>
							<input type="text" class="form-control" id="rif" placeholder="Ingrese el R.I.F." name="rif" required>
						</div>
					</div>

				</div>

				<div class="form-group">
					<h3>Persona de contacto:</h3>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-4">
						<div class="form-group">
							<label for="nombre">*Nombre:</label>
							<input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre" name="nombre" required>
						</div>
					</div>
					<div class="col-xs-12 col-md-4 d-flex">
						<div class="form-group" style="margin-right:10px;">
							<label for="operador">*Operador:</label>
							<select class="form-control" id="operador" name="operador" required>
								<option value="0412">0412</option>
								<option value="0416">0416</option>
								<option value="0414">0414</option>
								<option value="0424">0424</option>
								<option value="0426">0426</option>
							</select>
						</div>
						<div class="form-group" style="flex-grow:2;">	
							<label for="celular">*Celular:</label>
							<input type="text" class="form-control" id="celular" placeholder="Ingrese el número de celular" name="celular" required>
						</div>
					</div>
					<div class="col-xs-12 col-md-4">
						<div class="form-group">
							<label for="email">*Email:</label>
							<input type="email" class="form-control" id="email" placeholder="Ingrese el email" name="email" required>
						</div>
					</div>
				</div>

				<div class="form-group">
					<h3>Recepción de muestras</h3>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-4">
						<div class="form-group">
							<label for="identificacion">Identificación / Muestra:</label>
							<input type="text" class="form-control" id="identificacion" placeholder="" name="identificacion">
						</div>
					</div>
					<div class="col-xs-12 col-md-4">
						<div class="form-group"><h3>*Forma de envío</h3></div>
						<div class="form-group">
							<div class="form-group"><input class="m-2" type="radio" id="courier" name="formaEnvio" value="Courier" required><label for="courier">Courier</label></div>
							<div class="form-group"><input class="m-2" type="radio" id="personalmente" name="formaEnvio" value="Personalmente" required><label for="personalmente">Personalmente</label></div>
						</div>
					</div>
					<div class="col-xs-12 col-md-4">
						<div class="form-group"><h3>*Día y hora de recepción</h3></div>
						<div class="form-group">
							<label for="dia">Día:</label>
							<input type="date" class="form-control" id="dia" placeholder="Ingrese el día" name="dia" required>
						</div>	
						<div class="form-group">
							<label for="hora">*Hora:</label>
							<input type="time" class="form-control" id="hora" placeholder="Ingrese la hora" name="hora" required>
						</div>
						<div class="form-group">
							<label for="persona">*Persona que recibe:</label>
							<input type="text" class="form-control" id="persona" placeholder="" name="persona" required>
						</div>
					</div>
				</div>

				<div class="form-group"><h3>Características de la muestra</h3></div>

				<div class="row">
					<div class="col-xs-12 col-md-3">
						<div class="form-group"><h3>*Textura</h3></div>
						<div class="form-group">
							<div class="form-group"><input class="m-2" type="radio" id="solido" name="textura" value="Sólido" required><label for="solido">Sólido</label></div>
							<div class="form-group"><input class="m-2" type="radio" id="liquido" name="textura" value="Líquido" required><label for="liquido">Líquido</label></div>
						</div>
					</div>
					<div class="col-xs-12 col-md-3">
						<div class="form-group"><h3>*Tipo de envase</h3></div>
						<div class="form-group">
							<div class="form-group"><input class="m-2" type="radio" id="refrigerado" name="tipoEnvase" value="Refrigerado" required><label for="refrigerado">Refrigerado</label></div>
							<div class="form-group"><input class="m-2" type="radio" id="enlatado" name="tipoEnvase" value="Enlatado" required><label for="enlatado">Enlatado</label></div>
							<div class="form-group"><input class="m-2" type="radio" id="caja" name="tipoEnvase" value="Caja" required><label for="caja">Caja</label></div>
							<div class="form-group"><input class="m-2" type="radio" id="bolsa" name="tipoEnvase" value="Bolsa" required><label for="bolsa">Bolsa</label></div>
							<div class="form-group"><input class="m-2" type="radio" id="vidrio" name="tipoEnvase" value="Vidrio" required><label for="vidrio">Vidrio</label></div>
							<div class="form-group"><input class="m-2" type="radio" id="plastico" name="tipoEnvase" value="Plástico" required><label for="plastico">Plástico</label></div>
						</div>
					</div>
					<div class="col-xs-12 col-md-3">
						<div class="form-group">
							<label for="cantidad">Cantidad:</label>
							<input type="text" class="form-control" id="cantidad" placeholder="" name="cantidad">
						</div>
					</div>

					<div class="col-xs-12 col-md-3">
						<div class="form-group">
							<label for="temperatura">Temperatura:</label>
							<input type="text" class="form-control" id="temperatura" placeholder="" name="temperatura">
						</div>
					</div>
					
					

				</div>

				<div class="form-group"><h3>Análisis requeridos</h3></div>

				<div class="row">
					<div class="col-xs-12 col-md-3">
						<div class="form-group"><h3>Físico-Químicos</h3></div>
						<div class="form-group" id="fisicoQuimicos">
							<div class="form-group"><input class="m-2" type="checkbox" id="0000" name="0000" value="Humedad"><label for="0000">Humedad</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0001" name="0001" value="Proteína"><label for="0001">Proteína</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0002" name="0002" value="Grasa"><label for="0002">Grasa</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0003" name="0003" value="Fibra"><label for="0003">Fibra</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0004" name="0004" value="Ceniza"><label for="0004">Ceniza</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0005" name="0005" value="Carbohidratos"><label for="0005">Carbohidratos</label></div>
						</div>
					</div>
					<div class="col-xs-12 col-md-3">
						<div class="form-group"><h3>Macroelementos (Lea nota)</h3></div>
						<div class="form-group" id="macroelementos">
							<div class="form-group"><input class="m-2" type="checkbox" id="0006" name="0006" value="Calcio"><label for="0006">Calcio</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0007" name="0007" value="Fósforo"><label for="0007">Fósforo</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0008" name="0008" value="Sodio"><label for="0008">Sodio</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0009" name="0009" value="Potasio"><label for="0009">Potasio</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0010" name="0010" value="Magnesio"><label for="0010">Magnesio</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0011" name="0011" value="Cloro"><label for="0011">Cloro</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0012" name="0012" value="Azufre"><label for="0012">Azufre</label></div>
						</div>
					</div>
					<div class="col-xs-12 col-md-3">	
						<div class="form-group"><h3>Microelementos (Lea nota)</h3></div>
						<div class="form-group" id="microelementos">
							<div class="form-group"><input class="m-2" type="checkbox" id="0013" name="0013" value="Hierro"><label for="0013">Hierro</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0014" name="0014" value="Fluor"><label for="0014">Fluor</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0015" name="0015" value="Yodo"><label for="0015">Yodo</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0016" name="0016" value="Arsénico"><label for="0016">Arsénico</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0017" name="0017" value="Cobalto"><label for="0017">Cobalto</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0018" name="0018" value="Cobre"><label for="0018">Cobre</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0019" name="0019" value="Zinc"><label for="0019">Zinc</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0020" name="0020" value="Manganeso"><label for="0020">Manganeso</label></div>
						</div>
					</div>	
					<div class="col-xs-12 col-md-3">	
						<div class="form-group"><h3>Oligoelementos</h3></div>
						<div class="form-group" id="oligoelementos">
							<div class="form-group"><input class="m-2" type="checkbox" id="0021" name="0021" value="Silicio"><label for="0021">Silicio</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0022" name="0022" value="Níquel"><label for="0022">Níquel</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0023" name="0023" value="Cromo"><label for="0023">Cromo</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0024" name="0024" value="Litio"><label for="0024">Litio</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0025" name="0025" value="Molibeno"><label for="0025">Molibeno</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0026" name="0026" value="Selenio"><label for="0026">Selenio</label></div>
						</div>
					</div>

				</div>	

				<div class="row">
					<div class="col-xs-12 col-md-3">
						<div class="form-group"><h3>Otros análisis</h3></div>
						<div class="form-group" id="otrosAnalisis">
							<div class="form-group"><input class="m-2" type="checkbox" id="0027" name="0027" value="pH"><label for="0027">pH</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0028" name="0028" value="Densidad"><label for="0028">Densidad</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0029" name="0029" value="Solubilidad"><label for="0029">Solubilidad</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0030" name="0030" value="Espuma Persistente"><label for="0030">Espuma persistente</label></div>
						</div>
					</div>
					<div class="col-xs-12 col-md-3">
						<div class="form-group"><h3>Microbiología</h3></div>
						<div class="form-group" id="microbiologia">
							<div class="form-group"><input class="m-2" type="checkbox" id="0031" name="0031" value="Salmonella"><label for="0031">Salmonella</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0032" name="0032" value="Aerobios Mesofilos"><label for="0032">Aerobios mesofilos</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0033" name="0033" value="Staphilococcus Aureus"><label for="0033">Staphilococcus aureus</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0034" name="0034" value="Escherichia Coli"><label for="0034">Escherichia coli</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0035" name="0035" value="Coliformes Totales"><label for="0035">Coliformes totales</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0036" name="0036" value="Coliformes Fecales"><label for="0036">Coliformes fecales</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0037" name="0037" value="Sulfitos Reductores"><label for="0037">Sulfitos reductores</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0038" name="0038" value="Mohos"><label for="0038">Mohos</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0039" name="0039" value="Levaduras"><label for="0039">Levaduras</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0040" name="0040" value="Esterilidad Comercial"><label for="0040">Esterilidad comercial</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0041" name="0041" value="Acidez"><label for="0041">Acidez</label></div>
						</div>
					</div>
					<div class="col-xs-12 col-md-3">	
						<div class="form-group"><h3>Análisis de Agua</h3></div>
						<div class="form-group" id="agua">
							<div class="form-group"><input class="m-2" type="checkbox" id="0042" name="0042" value="Dureza"><label for="0042">Dureza</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0043" name="0043" value="Pseudomona Aeruginosa"><label for="0043">Pseudomona aeruginosa</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0044" name="0044" value="Cloro Residual"><label for="0044">Cloro residual</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0045" name="0045" value="Coliformes Fecales"><label for="0045">Coliformes fecales</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0046" name="0046" value="Coliformes Totales"><label for="0046">Coliformes totales</label></div>							
						</div>
					</div>	
					<div class="col-xs-12 col-md-3">	
						<div class="form-group"><h3>Metales Pesados</h3></div>
						<div class="form-group" id="metalesPesados">
							<div class="form-group"><input class="m-2" type="checkbox" id="0047" name="0047" value="Plomo"><label for="0047">Plomo</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0048" name="0048" value="Mercurio"><label for="0048">Mercurio</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0049" name="0049" value="Cadmio"><label for="0049">Cadmio</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0050" name="0050" value="Estaño"><label for="0050">Estaño</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0051" name="0051" value="Aluminio"><label for="0051">Aluminio</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0052" name="0052" value="Plata"><label for="0052">Plata</label></div>
						</div>
					</div>

				</div>

				<div class="form-group"><h3>Toxicológicos</h3></div>

				<div class="row">
					<div class="col-xs-12 col-md-4">
						<div class="form-group"><h3>Micotoxinas HPLC</h3></div>
						<div class="form-group" id="micotoxinasHPLC">
							<div class="form-group"><input class="m-2" type="checkbox" id="0053" name="0053" value="Aflatoxinas"><label for="0053">Aflatoxinas</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0054" name="0054" value="Vomitoxina"><label for="0054">Vomitoxina</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0055" name="0055" value="Toxina T-2"><label for="0055">Toxina T-2</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0056" name="0056" value="Zearalenona"><label for="0056">Zearalenona</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0057" name="0057" value="Fumonisina"><label for="0057">Fumonisina</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0058" name="0058" value="Ocratoxina"><label for="0058">Ocratoxina</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0059" name="0059" value="Patulina"><label for="0059">Patulina</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0060" name="0060" value="Aflatoxina M1"><label for="0060">Aflatoxina M1</label></div>
						</div>
					</div>
					<div class="col-xs-12 col-md-4">
						<div class="form-group"><h3>Residuos de Plaguicidas</h3></div>
						<div class="form-group" id="plaguicidas">
							<div class="form-group"><input class="m-2" type="checkbox" id="0061" name="0061" value="Organo Clorados"><label for="0061">Organo clorados</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0062" name="0062" value="Organo Fosforados"><label for="0062">Organo fosforados</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0063" name="0063" value="Piretrinas"><label for="0063">Piretrinas</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0064" name="0064" value="Cumarinas"><label for="0064">Cumarinas</label></div>
						</div>
					</div>
					<div class="col-xs-12 col-md-4">	
						<div class="form-group"><h3>Vitaminas</h3></div>
						<div class="form-group" id="vitaminas">
							<div class="form-group"><input class="m-2" type="checkbox" id="0065" name="0065" value="Vitamina A"><label for="0065">Vitamina A</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0066" name="0066" value="Vitamina B1"><label for="0066">Vitamina B1</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0067" name="0067" value="Vitamina B2"><label for="0067">Vitamina B2</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0068" name="0068" value="Vitamina B3"><label for="0068">Vitamina B3</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0069" name="0069" value="Vitamina B6"><label for="0069">Vitamina B6</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0070" name="0070" value="Vitamina B12"><label for="0070">Vitamina B12</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0071" name="0071" value="Vitamina C"><label for="0071">Vitamina C</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0072" name="0072" value="Vitamina E"><label for="0072">Vitamina E</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0073" name="0073" value="Vitamina D"><label for="0073">Vitamina D</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0074" name="0074" value="Vitamina D2"><label for="0074">Vitamina D2</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0075" name="0075" value="Vitamina D3"><label for="0075">Vitamina D3</label></div>
							<div class="form-group"><input class="m-2" type="checkbox" id="0076" name="0076" value="Ácido Fólico"><label for="0076">Ácido Fólico</label></div>							
						</div>
					</div>	

				</div>	

				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="tiempoDeEntrega">Tiempo de entrega:</label>
							<input type="text" class="form-control" id="tiempoDeEntrega" placeholder="" name="tiempoDeEntrega">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="otrosAnalisis">Otros análisis:</label>
							<input type="text" class="form-control" id="otrosAnalisis" placeholder="" name="otrosAnalisis">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="observaciones2">Observaciones (Indicar sintomatología que presentan los animales):</label>
							<input type="text" class="form-control" id="observaciones2" placeholder="" name="observaciones2">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="p-5">
						<h2>Nota:</h2>
						<ul class="p-3">
							<li style="font-size:15px">Los elementos marcados con asterisco (*) son obligatorios</li>
							<li style="font-size:15px">Indicar elementos asociados</li>
							<li style="font-size:15px">Enviar certificado de calidad de la premezcla</li>
						</ul>
					</div>
				</div>
				
				<div class="text-center p-5">
					<button onClick = "generatePDF3();" type="submit" class="btn btn-primary btn-lg">Crear Archivo</button>
				</div>

				
			</form>
		</div>

		<div class="footer margen-interno fondo-claro pie">
			<div  class="col-xs-12 col-md-6 p-5">
				<div >
					<img src="Imagenes/LogoSedicomvet.png" alt="Logo Sedicomvet Blanco" style="height:70px;">
				</div>
				<br>
				<div class="text-left pie-pagina">
					<p style="font-size:25px;">Ubicación</p>
					<p>Venezuela: </p>
					<i class="fa fa-map-marker" aria-hidden="true"></i><span class="ml-3">Urb. Mario Briceño Iragorry, Calle Carabobo c/c Venezuela, Nº 14, Maracay – Edo. Aragua.</span>
					<br>
					<br>
					<p>Panamá:</p>
					<i class="fa fa-map-marker" aria-hidden="true"></i><span class="ml-3">Amelia Denis de Icaza. Urb Moya. Calle Primera Pan de Azúcar. Local PB</span>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 text-right pie-pagina p-5">
				
				<p style="font-size:25px;">Contacto</p>
				
				<p>Venezuela: </p>
				<i class="fa fa-phone" aria-hidden="true"></i><span class="ml-3">+58 243 236 13 12 | 236 20 25 | 615 38 84</span>
				<br>
				<i class="fa fa-mobile" aria-hidden="true"></i><span class="ml-3">+58 412-7554641 | 416-3438335</span>
				<br>
				<i class="fa fa-envelope-o" aria-hidden="true"></i><span class="ml-3">sedicomvet@hotmail.com</span>
				<br>
				<br>
				<p>Panamá:</p>
				<i class="fa fa-phone" aria-hidden="true"></i><span class="ml-3">+507 267 37 27 | 267 41 10</span>
				<br>
				<i class="fa fa-mobile" aria-hidden="true"></i><span class="ml-3">+507 6705-9974</span>
				<br>
				<i class="fa fa-envelope-o" aria-hidden="true"></i><span class="ml-3">sedicomvet@gmail.com</span>
				
			</div>
			
			<div class="text-center">
					<p style="font-size:1px; color:#333391">Sedicomvet</p>
			</div>
			<div>
				<hr style="background-color:#333391; height:1px;">
			</div>
			<div class="col-xs-12 text-center">
				<p>&copy; Sedicomvet. 2020</p>					
			</div>

		</div>
	</div>
	<div class="go-top-container">
		<div class="go-top-button">
			<i class="fas fa-chevron-up"></i>
		</div>
	</div>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
	<script src="js/gotop.js"></script>
	<script src="js/genPDF3.js"></script>
</body>
</html>