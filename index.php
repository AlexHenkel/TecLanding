<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ITESM</title>
	<meta name="description" content="Instituto Tecnológico y de Estudios Superiores de Monterrey" />
	<meta name="keywords" content="universidad, tec, itesm, university" />
	<meta name="author" content="Alejandro Henkel" />
	<link rel="shortcut icon" href="favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<script src="js/modernizr-custom.js"></script>
</head>

<body>
	<!-- navigation -->
	<nav class="pages-nav">
		<div class="pages-nav__item"><a class="link link--page" href="#page-home">Inicio</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-about">Nosotros</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-offer">Oferta Educativa</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-research">Investigación</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-global">Visión Global</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-human">Sentido Humano</a></div>
		<div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-library">Biblioteca Digital</a></div>
		<div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-news">Noticias</a></div>
		<div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-contact">Contacto</a></div>
		<div class="pages-nav__item pages-nav__item--social">
			<a class="link link--social link--faded" href="#"><i class="fa fa-twitter"></i><span class="text-hidden">Twitter</span></a>
			<a class="link link--social link--faded" href="#"><i class="fa fa-linkedin"></i><span class="text-hidden">LinkedIn</span></a>
			<a class="link link--social link--faded" href="#"><i class="fa fa-facebook"></i><span class="text-hidden">Facebook</span></a>
			<a class="link link--social link--faded" href="#"><i class="fa fa-youtube-play"></i><span class="text-hidden">YouTube</span></a>
		</div>
	</nav>
	<!-- /navigation-->
	<!-- pages stack -->
	<div class="pages-stack">
		<!-- page -->
		<div class="page" id="page-home">
			<header class="header-main">
				<section class="section section--menu hidden-xs" id="Ariel">
					<span class="link-copy"></span>
					<nav class="menu menu--ariel">
						<ul class="menu__list">
							<li class="menu__item menu__item--current"><a href="#" class="menu__link">Alumnos</a></li>
							<li class="menu__item"><a href="#" class="menu__link">Padres</a></li>
							<li class="menu__item"><a href="#" class="menu__link">Egresados</a></li>
							<li class="menu__item"><a href="#" class="menu__link">Profesores</a></li>
							<li class="menu__item">
								<div id="sb-search" class="sb-search">
									<form>
										<input class="sb-search-input" placeholder="Escribe tu búsqueda..." type="text" value="" name="search" id="search">
										<input class="sb-search-submit" type="submit" value="">
										<span class="sb-icon-search"></span>
									</form>
								</div>
							</li>
						</ul>
					</nav>
				</section>
				<section class="menu-phone visible-xs-block">
					<div id="sb-search-phone" class="sb-search">
						<form>
							<input class="sb-search-input" placeholder="Escribe tu búsqueda..." type="text" value="" name="search" id="search">
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search"></span>
						</form>
					</div>
					<nav id="menu">
				    		
			    		<span id="toggle-nav-label">Comunidad Tec</span>
			    		
			    		<div class="box">
				    		<ul>
				    			<li><a href="#">Alumnos</a></li>
				    			<li><a href="#">Padres</a></li>
				    			<li><a href="#">Egresados</li>
				    			<li><a href="#">Profesores</li>
				    		</ul>
			    		</div>
			    	</nav>
				</section>
			</header>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
				<div class="logo">
					<img class="logo-img" src="images/logo.png" alt="">
				</div>
				<div class="carousel-inner" role="listbox">
					<div class="item active carousel-img bg-img bg-cover" style="background-image: url('images/rectoria.jpg');">
						<div class="overlay">
							<div class="container">
								<div class="carousel-caption-new">
									<h1>El éxito es <span class="title-colored first">todos los días</span></h1>
								</div>
							</div>
						</div>
					</div>
					<div class="item carousel-img bg-img bg-cover" style="background-image: url('images/lab.jpg');">
						<div class="overlay">
							<div class="container">
								<div class="carousel-caption-new">
									<h1>Crear para <span class="title-colored second">inspirar</span></h1>
								</div>
							</div>
						</div>
					</div>
					<div class="item carousel-img bg-img bg-cover" style="background-image: url('images/factorTec.png');">
						<div class="overlay">
							<div class="container">
								<div class="carousel-caption-new">
									<h1>Ante la duda, <span class="title-colored third">hazlo</span></h1>
								</div>
							</div>
						</div>
					</div>
					<div class="item carousel-img bg-img bg-cover" style="background-image: url('images/sentidoHumano.png');">
						<div class="overlay">
							<div class="container">
								<div class="carousel-caption-new">
									<h1>Ante la duda, <span class="title-colored fourth">hazlo</span></h1>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a class="triangle-next" href="#myCarousel" role="button" data-slide="next">
					<div class="triangle-1"></div>
					<div class="triangle-2"></div>
				</a>
				<a class="triangle-prev" href="#myCarousel" role="button" data-slide="prev">
					<div class="triangle-3"></div>
					<div class="triangle-4"></div>	
				</a>
		    </div>
		    <div class="container-fluid container-custom">
		    	<div class="row">
		    		<div class="col-md-4">
		    			<div class="custom-card blue">
		    				<div class="card-header">Campus</div>
		    				<div class="card-body">
		    					<section>
									<select class="cs-select cs-skin-overlay">
										<option value="" disabled selected>Selecciona tu campus</option>
										<optgroup label="Rectoría de la Zona Metropolitana de Monterrey">
											<option value="1">Monterrey</option>
											<option value="2">Cumbres</option>
											<option value="3">Eugenio Garza Lagüera</option>
											<option value="4">Eugenio Garza Sada</option>
											<option value="5">Santa Catarina</option>
											<option value="6">Valle Alto</option>
										</optgroup>
										<optgroup label="Rectoría de la Zona Occidente">
											<option value="11">Ciudad Obregón</option>
											<option value="12">Guadalajara</option>
											<option value="13">Irapuato</option>
											<option value="14">Querétaro</option>
											<option value="15">Sinaloa</option>
											<option value="16">Sonora Norte</option>
											<option value="17">León</option>
										</optgroup>
										<optgroup label="Rectoría de la Zona Norte">
											<option value="18">Aguascalientes</option>
											<option value="19">Chihuahua</option>
											<option value="20">Ciudad Juárez</option>
											<option value="21">Laguna</option>
											<option value="22">Saltillo</option>
											<option value="23">San Luis Potosí</option>
											<option value="24">Tampico </option>
											<option value="25">Zacatecas</option>
										</optgroup>
										<optgroup label="Rectoría de la Zona Metropolitana de la Ciudad de México">
											<option value="7">Ciudad de México</option>
											<option value="8">Estado de México</option>
											<option value="9">Santa Fe</option>
											<option value="10">Toluca</option>
										</optgroup>
										<optgroup label="Rectoría de la Zona Sur">
											<option value="26">Central de Veracruz</option>
											<option value="27">Chiapas</option>
											<option value="28">Cuernavaca</option>
											<option value="29">Hidalgo</option>
											<option value="30">Morelia</option>
											<option value="31">Puebla</option>
										</optgroup>

									</select>
								</section>
		    				</div>
		    			</div>
		    		</div>
		    		<div class="col-md-4">
		    			<div class="custom-card light-blue">
		    				<div class="card-header">Admisiones</div>
				    			<div class="card-body bg-img bg-scroll" style="background-image: url('images/admisiones.jpg'); background-position: 50% 50%;">
				    				<div class="overlay">
				    					<form id="nl-form" class="nl-form">
											Estoy interesad@ en estudiar la
											<select>
												<option value="1">Preparatoria</option>
												<option value="2" selected>Carrera Profesional</option>
												<option value="3">Maestría o Doctorado</option>
											</select>
											<br />en Campus
											<select>
												<option value="1">Aguascalientes</option>
												<option value="2">Central de Veracruz</option>
												<option value="3">Chiapas</option>
												<option value="4">Chihuahua</option>
												<option value="5">Ciudad de México</option>
												<option value="6">Ciudad Juárez</option>
												<option value="7">Ciudad Obregón</option>
												<option value="8">Navojoa</option>
												<option value="9">Cuernavaca</option>
												<option value="10">Estado de México</option>
												<option value="11">Esmeralda (Preparatoria)</option>
												<option value="12">Guadalajara</option>
												<option value="13">Hidalgo</option>
												<option value="14">Irapuato</option>
												<option value="15">Laguna</option>
												<option value="16">León</option>
												<option value="17" selected>Monterrey</option>
												<option value="18">Cumbres (Preparatoria)</option>
												<option value="19">Eugenio Garza Lagüera (Preparatoria)</option>
												<option value="20">Eugenio Garza Sada (Preparatoria)</option>
												<option value="21">Santa Catarina (Preparatoria)</option>
												<option value="22">Valle Alto (Preparatoria)</option>
												<option value="23">Morelia</option>
												<option value="24">Puebla</option>
												<option value="25">Querétaro</option>
												<option value="26">Saltillo</option>
												<option value="27">San Luis Potosí</option>
												<option value="28">Santa Fe</option>
												<option value="29">Sinaloa</option>
												<option value="30">Sonora Norte</option>
												<option value="31">Matamoros (Preparatoria)</option>
												<option value="32">Toluca</option>
												<option value="33">Zacatecas</option>
											</select>
											
											<div class="nl-submit-wrap">
											<button class="button button--wayra button--border-thick button--text-upper button--size-s" style="color: #000">Busca tu lugar</button>
											</div>
											<div class="nl-overlay"></div>
										</form>
				    				</div>
				    			</div>
		    			</div>
		    		</div>
		    		<div class="col-md-4">
		    			<div class="custom-card cyan">
		    				<div class="card-header">Escuelas</div>
		    				<div class="card-body"></div>
		    			</div>
		    		</div>
		    	</div>
		    </div>
		</div>
		<!-- /page -->
		<div class="page" id="page-docu">
			
		</div>
		<div class="page" id="page-manuals">
		</div>
		<div class="page" id="page-software">
			
		</div>
		<div class="page" id="page-custom">
			
		</div>
		<div class="page" id="page-training">
			
		</div>
		<div class="page" id="page-buy">
			
		</div>
		<div class="page" id="page-blog">
			
		</div>
		<div class="page" id="page-contact">
			
		</div>
	</div>
	<!-- /pages-stack -->
	<button class="menu-button"><span>Menu</span></button>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/vendor/classie.js"></script>
	<script src="js/main.js"></script>
	<script src="js/vendor/clipboard.min.js"></script>
	<script src="js/vendor/ariel.js"></script>
	<script src="js/vendor/uisearch.js"></script>
	<script src="js/vendor/nlform.js"></script>
	<script src="js/vendor/selectFx.js"></script>

	<script src="js/functions.js"></script>


</body>

</html>
