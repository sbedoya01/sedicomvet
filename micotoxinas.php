<?php
	$siteTitle="Micotoxinas | Sedicomvet | Laboratorio de Análisis";
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

			<h1 style="padding-top:100px; color:#333391">NUESTROS SERVICIOS</h1>

		</header>
		<hr class="ml-5 mr-5" style="background-color:#333391; height:1px;">
		
		<div class="p-5">
			<div class="col-xs-12 col-lg-3 text-center p-5"><a href="analisis.php"><h2 class="p-3 cajaSombraRedondeadaDer fondo-azul">Análisis</h2></a></div>
			<div class="col-xs-12 col-lg-3 text-center p-5"><a href="ensayos.php"><h2 class="p-3 cajaSombraRedondeadaDer fondo-blanco">Ensayos</h2></a></div>
			<div class="col-xs-12 col-lg-3 text-center p-5"><a href="micotoxinas.php"><h2 class="p-3 cajaSombraRedondeadaDer fondo-claro">Micotoxinas</h2></a></div>
			<div class="col-xs-12 col-lg-3 text-center p-5"><a href="equipos.php"><h2 class="p-3 cajaSombraRedondeadaDer fondo-azul">Equipos e Instalaciones</h2></a></div>
		</div>

		<div class="p-5 m-5 cajaSombraRedondeadaDer fondo-claro">
			<h2>Micotoxinas</h2>
			<hr>
			<div>
				<div class="col-xs-12 col-lg-6">
					<div class="text-justify">
						<p style="font-size:17px;">Son metabolitos tóxicos producidos por diversos hongos que crecen en los granos de cereales, leguminosas y en los alimentos concentrados. Las micotoxinas pueden causar daños a la salud en diferentes especies de animales cuando son ingeridas, incluyendo el hombre.</p>
						<p style="font-size:17px;">Los alimentos son deteriorados por Hongos cuando sufren cambios inaceptables en su apariencia, textura, olor y gusto o cuando están contaminados con niveles potencialmente.</p>
					</div>
				</div>
				<div class="col-xs-12 col-lg-6">
					<div class="p-5 d-flex justify-content-center">
						<img class="tamano5" src="Imagenes/micotoxinas.jpg" alt="Micotoxinas">
					</div>
				</div>
			</div>
		</div>

		<div class="p-5 m-5 cajaSombraRedondeadaDer fondo-claro">
			<h2 style="text-align:right;">Lista Parcial de Micotoxinas Conocidas</h2>
			<hr>
			<div>
				<div class="col-xs-12 col-lg-6">
					<div class="p-5 d-flex justify-content-center">
						<img class="tamano5" src="Imagenes/mohos-mico.jpg" alt="">
					</div>
				</div>
				<div class="col-xs-12 col-lg-6">
					<div class="text-center">
						<table class="table table-striped tabla table2">
							<tbody class="table2">
								<tr class="table2">
									<td class="table2">Alfatoxinas</td>
									<td class="table2">Monocetoxirspenol</td>
									<td class="table2">Ergo Toxinas</td>
									<td class="table2">Rodirina</td>
									<td class="table2">Diacetoscirpenol</td>
									<td class="table2">Ácido Penicilico</td>
								</tr>
								<tr class="table2">
									<td class="table2">Alternariol</td>
									<td class="table2">Neosolaniol</td>
									<td class="table2">Fumitremorgeno</td>
									<td class="table2">Rubra Toxina</td>
									<td class="table2">Dicumarol</td>
									<td class="table2">Penitreno</td>
								</tr>
								<tr class="table2">
									<td class="table2">Citreoviridina</td>
									<td class="table2">Ocratoxina</td>
									<td class="table2">Fumonisinas</td>
									<td class="table2">Eslaframina</td>
									<td class="table2">Ergotamina</td>
									<td class="table2">Fomopsina</td>
								</tr>
								<tr class="table2">
									<td class="table2">Citrinina</td>
									<td class="table2">Oosporeina</td>
									<td class="table2">Ácido Fusánico</td>
									<td class="table2">Esporidesmina</td>
									<td class="table2">Luterosquirina</td>
									<td class="table2">Tremorgenos</td>
								</tr>
								<tr class="table2">
									<td class="table2">Ácido Ciclopiazoico</td>
									<td class="table2">Paspalitreno</td>
									<td class="table2">Fusariocina</td>
									<td class="table2">Estaquibotrioxinas</td>
									<td class="table2">Moniliformina</td>
									<td class="table2">Zearalenona</td>
								</tr>
								<tr class="table2">
									<td class="table2">Deoxinivalenol</td>
									<td class="table2">Patulina</td>
									<td class="table2">Islanditoxina</td>
									<td class="table2">Toxina T-2</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
			</div>
		</div>

		<div class="p-5 m-5 cajaSombraRedondeadaDer fondo-claro">
				<div class="col-xs-12 col-md-6 col-lg-3">
					<div>
						<h3>Procesamos las siguientes muestras:</h3>
						<ul class="p-3" style="font-size:15px;">
							<li>Agua (todo tipo)</li>
							<li>Alimentos</li>
							<li>Ambientes</li>
							<li>Cereales</li>
							<li>Granos</li>
							<li>Materia Prima en General</li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<div>
						<h3>Este servicio va dirigido a:</h3>
						<ul class="p-3" style="font-size:15px;">
							<li>Plantas de Alimentos Concentrados</li>
							<li>Granjas</li>
							<li>Incubadoras</li>
							<li>Almacenadoras</li>
							<li>Plantas Procesadoras</li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<div>
						<h3>Análisis</h3>
						<ul class="p-3" style="font-size:15px;">
							<li>Bromatológicos</li>
							<li>Vitaminas</li>
							<li>Antibióticos</li>
							<li>Perfil de Carbohidratos</li>
							<li>Perfil de Ácidos Grasos</li>
							<li>Perfil de Aminoácidos</li>
							<li>Ingredientes Activos</li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<div>
						<h3>Análisis Microbiológicos</h3>
						<ul class="p-3" style="font-size:15px;">
							<li>Salmonella</li>
							<li>E. coli</li>
							<li>Coliformes Totales</li>
							<li>Coliformes Fecales</li>
							<li>Mohos y Levaduras</li>
							<li>Aerobios Mesofilos</li>
							<li>Staphylococcus aureus</li>
							<li>Sulfitos Reductores</li>
							<li>Otros</li>
						</ul>
					</div>
				</div>
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
</body>
</html>