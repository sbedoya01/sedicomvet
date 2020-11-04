<?php
	$siteTitle="Análisis | Sedicomvet | Laboratorio de Análisis";
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

		<br>					

		<div class="p-5">
			<div class="col-xs-12 col-lg-6">
				<div class="p-5 m-2 fondo-claro cajaSombraRedondeadaDer">
					<h2>Análisis Microbiológicos:</h2>
					<hr>
					<ul class="p-3" style="font-size:17px;">
		 				<li>Aerobios Mesófilos</li>
						<li>Coliformes Totales / E. Coli.</li>
						<li>Mohos y Levaduras</li>
						<li>Salmonella</li>
						<li>Staphylococcus Aureus</li>
						<li>Sulfitos Reductores</li>
					</ul>					
				</div>
			</div>
			<div class="col-xs-12 col-lg-6">
				<div class="p-5 m-2 fondo-claro cajaSombraRedondeadaDer">
					<h2>Análisis Plaguicidas:</h2>
					<hr>
					<ul class="p-3" style="font-size:17px;">
						<li>Residuos de Plaguicidas Organoclorados</li>
						<li>Residuos de Plaguicidas Organofosforados</li>
						<li>Residuos de Plaguicidas Piretroides Sintéticos</li>
					</ul>
				</div>
			</div>					
		</div>
		<div class="p-5">
			<div class="col-xs-12 col-lg-6">
				<div class="p-5 m-2 fondo-claro cajaSombraRedondeadaDer">
					<h2>Análisis Macro-elementos:</h2>
					<hr>
					<ul class="p-3" style="font-size:17px;">
		 				<li>Calcio</li>
						<li>Fósforo</li>
					</ul>					
				</div>
			</div>
			<div class="col-xs-12 col-lg-6">
				<div class="p-5 m-2 fondo-claro cajaSombraRedondeadaDer">
					<h2>Análisis Toxicológicos:</h2>
					<hr>
					<ul class="p-3" style="font-size:17px;">
 						<li>Micotoxinas (Aflatoxina, Ocratoxina, Vomitoxina, Zearalenona, Fumonisina).  Método HPLC.</li>
					</ul>
				</div>
			</div>					
		</div>
		<div class="p-5">
			<div class="col-xs-12 col-lg-6">
				<div class="p-5 m-2 fondo-claro cajaSombraRedondeadaDer">
					<h2>Análisis Bromatológicos:</h2>
					<hr>
					<ul class="p-3" style="font-size:17px;">
	 					<li>Bromatología completa (Humedad, Materia Seca, Fibra, Ceniza, Proteína, Grasa)</li>
					</ul>					
				</div>
			</div>
			<div class="col-xs-12 col-lg-6">
				<div class="p-5 m-2 fondo-claro cajaSombraRedondeadaDer">
					<h2>Análisis Vitaminas:</h2>
					<hr>
					<ul class="p-3" style="font-size:17px;">
						<li>Vitaminas Liposolubles e Hidrosoluble c/u</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="p-5 m-5 m-2 fondo-claro cajaSombraRedondeadaDer">
			
				<h2 style="margin-bottom:20px;">Otros Análisis:</h2>
				<hr>
				<div>
					<div class="col-xs-12 col-md-6">
						<ul style="font-size:17px; padding: 0 10px 0 10px;">
							<li>Cloruro de Sodio</li>
							<li>Cloruro de Potasio</li>
							<li>Densidad</li>
							<li>Digestibilidad de Proteína</li>
							<li>Índice de Peroxido</li>
							<li>Perfil de Ácidos Grasos  (GC-FID)</li>
							<li>pH</li>						
						</ul>
					</div>
					<div class="col-xs-12 col-md-6">
						<ul style="font-size:17px; padding: 0 10px 0 10px;">
							<li>Antioxidantes</li>
							<li>Anticoccidiales  (Salinomicina. Monensina, Maduramicina, Diclazuril)</li>
							<li>Metales x Absorción Atómica</li>
							<li>Escaneo de residuos tóxicos por Cromatografía de Gases Acoplados a detector de Masas.</li>
							<li>Perfil Carbohidratos.</li>
							<li>Perfil Aminoácidos.</li>
							<li>Antibióticos.</li>
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