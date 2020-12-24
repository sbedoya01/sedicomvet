<?php
	$siteTitle="Nosotros | Sedicomvet | Laboratorio de Análisis";
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

			<h1 style="padding-top:100px; color:#333391">QUIENES SOMOS</h1>

		</header>
		<hr class="ml-5 mr-5" style="background-color:#333391; height:1px;">
		<div class="container d-flex justify-content-around cuadroDosResponsive" style="padding-top:50px;">
				
			<div class="fondo-claro contacto p-5 text-justify cuadroIzquierda cajaSombraRedondeadaDer">
				<p style="font-size:18px; color:#444;">SEDICOMVET, C.A. es un laboratorio de servicios dedicado a realizar análisis físico-químicos, microbiológicos y de alta tecnología, dando apoyo al sector industrial y con una política de calidad establecida que proporciona a sus clientes resultados confiables y reproducibles, siempre en búsqueda de la excelencia. Para ello, contamos con infraestructura, equipos adecuados y un personal comprometido altamente calificado, en constante formación interna y externa, permitiéndonos mejorar continuamente nuestros procesos.</p>
			</div>

			<div class="cuadroDerecha text-center p-5">
				<img class="tamano1" src="Imagenes/quienessomos2.jpg" alt="Quienes Somos">
			</div>
				
		</div>

		<br>

		<div class="container d-flex justify-content-around cuadroDosResponsive" style="padding-top:50px;">
				
			<div class="cuadroDerecha text-center p-5">
				<img class="tamano2" src="Imagenes/escatima.jpg" alt="Quienes Somos">
			</div>	
		
			<div class="fondo-azul contacto p-5 text-justify cuadroIzquierda cajaSombraRedondeadaIzq">
				<p style="font-size:18px; color:#fff;">SEDICOMVET, no escatima recursos para el montaje de análisis, utilizando los materiales y utensilios de la mejor calidad, corriendo todos los controles posibles y reglamentados; esto garantiza un resultado legítimo, respetando de este modo el compromiso adquirido con nuestros clientes. SEDICOMVET, trabaja cuando el cliente lo requiera, con el fin de brindar a  nuestros clientes el más alto apoyo y soporte en el cumplimiento de sus objetivos y con absoluta confidencialidad  en todos los niveles del servicio prestado. Es un compromiso de la organización en todos sus niveles, el cumplir con el sistema de calidad según la Norma Internacional ISO/IEC 17025:2017 y NVC 2534:2000.</p>
			</div>

		</div>

		<br>

		<h1 class="mt-5">En búsqueda de la Excelencia</h1>

		<hr class="ml-5 mr-5" style="background-color:#333391; height:1px;">

		<div class="container d-flex justify-content-around cuadroDosResponsive" style="padding-top:50px;">
				
			<div class="fondo-claro contacto p-5 text-justify cuadroIzquierda cajaSombraRedondeadaDer">
				<p style="font-size:18px; color:#444;">SEDICOMVET, en búsqueda de la excelencia y certeza en el reporte de sus análisis, cuenta con equipos modernos de alta tecnología para el procesamiento de las muestras de nuestros clientes, brindando confiabilidad y tiempo corto de respuesta para los resultados. Entre estos equipos tenemos:</p>

				<ul class="p-5" style="font-size:18px;">
					<li>Cromatógrafo Líquido de Alta resolución HPLC UV-Visible, Detector de Fluorescencia, Detector de Índice de Refracción Electroquímica.</li>
					<li>Cromatógrafo de Gases con FID detectores.</li>
					<li>Espectrómetro de Masas.</li>
					<li>Espectroscopía de Absorción Atómica</li>
					<li>Equipos para Microbiología (Campana de Flujo Laminar, Estufas, Autoclaves, Luz UV., microscopio de contraste de fases )</li>
					<li>Equipos de Bromatología (Bidesdestilador-desmineralizador, Bloque de digestión para proteínas, Mufla, Destilador tipo Kjeldhal, extractor de grasas tipo Goldfisch)</li>
				</ul>
			
			</div>

			<div class="cuadroDerecha text-center p-5">
				<img class="tamano2" src="Imagenes/excelencia.jpg" alt="Quienes Somos">
			</div>
				
		</div>

		<div class="p-5 justify-content-around">

			<div class="col-xs-12 col-lg-4">
				<div class="m-2 cajaSombraRedondeadaDer fondo-claro p-4">
					<h2>Nuestra Misión</h2>
					<hr>
					<p class="text-justify" style="font-size:17px;">Ser el centro de servicios de análisis toxicológicos, físico-químicos, microbiológicos para los sectores industrial, estatal y de investigación con equipos de alta tecnología, provistos de personal capacitado en constante formación, comprometidos con la calidad y la competencia técnica necesaria, para asegurar los resultados de nuestros clientes.</p>
				</div>
			</div>
			
			<div class="col-xs-12 col-lg-4">
				<div class="m-2 cajaSombraRedondeadaDer p-4">
					<h2>Nuestra Visión</h2>
					<hr>
					<p class="text-justify" style="font-size:17px;">Es la consolidación como laboratorio líder en competencia técnica a nivel nacional y ser centro de referencia latinoamericano, innovando en tecnología con talento humano técnicamente competente, para la ejecución de análisis, adaptándonos a las necesidades cambiantes de nuestros clientes.</p>
				</div>
			</div>
			
			<div class="col-xs-12 col-lg-4" style="color:#fff;">
				<div class="m-2 fondo-azul cajaSombraRedondeadaDer p-4">
					<h2>Asesoría y servicio técnico en:</h2>
					<hr style="background-color:#fff;">
					<ul class="text-justify p-3" style="font-size:17px;">
						<li>Monitoreo de calidad de ambientes: Industria de Alimento.</li>
						<li>Elaboración de proyectos de investigación, para corroborar efectos de fármacos (y su validación estadística).</li>
						<li>Muestreo de Silos y Buques (Bodegas).</li>
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