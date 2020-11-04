<?php
	$siteTitle="Contacto | Sedicomvet | Laboratorio de Análisis";
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

			<h1 style="padding-top:100px; color:#333391">CONTÁCTANOS</h1>

		</header>

		<hr class="ml-5 mr-5" style="background-color:#333391; height:1px;">
		
		<div class="container" style="padding-top:50px;">
				
			<div class="fondo-claro contacto p-5">
				
				<p style="font-size:25px; color:#333391;">Teléfonos</p>
			
				<div class="d-flex justify-content-between cuadroDosResponsive">
				
					<div class="pb-5 cuadroIzquierda">
						<p>Venezuela: </p>
						<i class="fa fa-phone" aria-hidden="true"></i><span class="ml-3">+58 243 236 13 12   |   236 20 25   |   615 38 84</span>
						<br>
						<i class="fa fa-mobile" aria-hidden="true"></i><span class="ml-3">+58 412-7554641   |   416-3438335</span>
					</div>

					<div class="cuadroDerecha">
						<p>Panamá:</p>
						<i class="fa fa-phone" aria-hidden="true"></i><span class="ml-3">+507 267 37 27   |   267 41 10</span>
						<br>
						<i class="fa fa-mobile" aria-hidden="true"></i><span class="ml-3">+507 6705-9974</span>
					</div>

				
				</div>
				<br>
				<p style="font-size:25px; color:#333391;" id="whatsapp">Correo Electrónico </p>
				<p style="font-size:18px; color:#333391;">Venezuela:</p><i class="ml-3 fa fa-envelope-o" aria-hidden="true"></i><span class="ml-3">sedicomvet@hotmail.com</span>
				<br>
				<br>
				<p style="font-size:18px; color:#333391;">Panamá:</p><i class="ml-3 fa fa-envelope-o" aria-hidden="true"></i><span class="ml-3">sedicomvet@gmail.com</span>

			</div>
			


			<div class="fondo-claro contacto p-5">
				
				<p style="font-size:25px; color:#333391;">WhatsApp</p>
			
				<div class="row">
				
					<div class="col-xs-12 col-lg-4">
						<p>Servicio Técnico 1: </p>
						<p>José Riera (Venezuela)</p>
						<a  href="https://api.whatsapp.com/send?phone=584127554641&text=Quiero%20obtener%20mas%20información%20de%20sus%20servicios" target="_blank"><i class="fa fa-whatsapp" style="color:#333391; font-size:40px;" aria-hidden="true"></i></a>
					</div>

					<div class="col-xs-12 col-lg-4">
						<p>Servicio Técnico 2:</p>
						<p>William Matute (Venezuela)</p>
						<a href="https://api.whatsapp.com/send?phone=584163438335&text=Quiero%20obtener%20mas%20información%20de%20sus%20servicios" target="_blank"><i class="fa fa-whatsapp" style="color:#333391; font-size:40px;" aria-hidden="true"></i></a>
					</div>

					<div class="col-xs-12 col-lg-4">
						<p>Servicio Técnico 3:</p>
						<p>José Riera (Panamá)</p>
						<a href="https://api.whatsapp.com/send?phone=50767059974&text=Quiero%20obtener%20mas%20información%20de%20sus%20servicios" target="_blank"><i class="fa fa-whatsapp" style="color:#333391; font-size:40px;" aria-hidden="true"></i></a>
					</div>

				
				</div>

			</div>
			
			

			<div  class="fondo-claro justify-content-between p-5 contacto">	
				<div>
					<p style="font-size:25px; color:#333391;">Ubicación</p>
					<p>Venezuela: </p>
					<div class="d-flex justify-content-around cuadroDosResponsive">
						<div style="width:400px;">
							<i class="fa fa-map-marker" aria-hidden="true"></i><span class="ml-3">Urb. Mario Briceño Iragorry, Calle Carabobo c/c Venezuela, Nº 14, Maracay – Edo. Aragua.</span>
						</div>
						<div class="p-5">
							<iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.297542442236!2d-67.5871586858874!3d10.237569271709216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e803cba27d09ccf%3A0x30d990dd14cca9b0!2sLaboratorio%20Sedicomvet!5e0!3m2!1ses-419!2spa!4v1599716582431!5m2!1ses-419!2spa" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
				</div>
				
				<br>
				<br>

				<div>
					<p>Panamá:</p>
					<div class="d-flex justify-content-around cuadroDosResponsive">
						<div style="width:400px;">
							<i class="fa fa-map-marker" aria-hidden="true"></i><span class="ml-3">Amelia Denis de Icaza. Urb Moya. Calle Primera Pan de Azúcar. Local PB</span>
						</div>
						<div class="p-5">
							<iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.1652077669596!2d-79.5095435858948!3d9.048690591173381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fab57bd07c10f7d%3A0x14b3d7ff8a05133d!2sLab.%20Sedicomvet%20Int%20Corp!5e0!3m2!1ses-419!2spa!4v1599716718959!5m2!1ses-419!2spa" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
				</div>	
			</div>
				
		</div>

		<div class="footer margen-interno fondo-azul pie">
			
			<div class="text-center">
				<p class="mb-1">&copy; Sedicomvet. 2020</p>					
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