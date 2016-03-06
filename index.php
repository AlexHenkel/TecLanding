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
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
			<header>
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
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active carousel-img" style="background-image: url('images/rectoria.jpg');">
						<div id="overlay">
							<div class="container">
								<div class="carousel-caption">
									<h1>Example headline.</h1>
									<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="item carousel-img" style="background-image: url('images/factorTec.png');">
						<div id="overlay">
							<div class="container">
								<div class="carousel-caption">
									<h1>Another example headline.</h1>
									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="item carousel-img" style="background-image: url('images/lab.jpg');">
						<div id="overlay">
							<div class="container">
								<div class="carousel-caption">
									<h1>One more for good measure.</h1>
									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="item carousel-img" style="background-image: url('images/sentidoHumano.png');">
						<div id="overlay">
							<div class="container">
								<div class="carousel-caption">
									<h1>One more for good measure.</h1>
									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a> -->
				<a class="triangle-next" href="#myCarousel" role="button" data-slide="next">
					<div class="triangle-1"></div>
					<div class="triangle-2"></div>
				</a>
				<a class="triangle-prev" href="#myCarousel" role="button" data-slide="prev">
					<div class="triangle-3"></div>
					<div class="triangle-4"></div>	
				</a>
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
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
	<script src="js/vendor/clipboard.min.js"></script>
	<script src="js/ariel.js"></script>
	<script src="js/vendor/uisearch.js"></script>

	<script src="js/functions.js"></script>


</body>

</html>
