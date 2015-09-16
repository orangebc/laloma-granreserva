<!DOCTYPE html>
<html lang="en">
	<head>
		<? include("html/head.php"); ?>
		<? include("php/heatMap.php"); ?>
	</head>
	<body>
	<!-- HEADER -->
	<header class="header">
		<div class="container-fluid">
			<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
				<div class="header__logo">
					<img src="images/logo.png" alt="logo__loma">
				</div>
			</div>
			<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
				<div class="header__info">
					<span class="fa fa-phone header__icon"></span><span class="header__info--phone">Tel (222) 169-17-18</span>
					<span class="fa fa-envelope header__icon"></span><span class="header__info--email">ventas@ideasinmobiliarias.com</span>
					<button class="header__button btn toggle_form">Recibir <br> más información</button><button class="header__button btn toggle_form">Programar <br> Cita</button>
				</div>
			</div>
		</div>
	</header>
	<!-- FORM -->
	<section class="form" id="form">
		<form id="step1" class="text-center">
			<div class="form-group">
		    	<label for="nombreForm" class="custom__label">Nombre</label>
		    	<input type="text" class="form-control custom__input" id="nombre" name="nombre" placeholder="Tu nombre">
		    	<hr class="form__separator">
		  	</div>
		  	<div class="form-group">
		    	<label for="apellidoForm" class="custom__label">Apellido</label>
		    	<input type="text" class="form-control custom__input" id="apellido" name="apellido" placeholder="Tu apellido">
		    	<hr class="form__separator">
		  	</div>
		  	<div class="form-group">
		    	<label for="mailForm" class="custom__label">Mail</label>
		    	<input type="email" class="form-control custom__input" id="email" name="email" placeholder="email@tudominio.com">
		    	<hr class="form__separator">
		  	</div>
		  	<div class="form-group">
		    	<label for="celularForm" class="custom__label">Celular</label>
		    	<input type="tel" class="form-control custom__input" id="telefono" name="telefono" minlength="10" maxlength="10" placeholder="Celular a 10 digitos">
		    	<hr class="form__separator">
		  	</div>
		  	<button type="submit" class="btn form__btn">Enviar</button>
		</form>
		<br>
		<p class="form__close">Cerrar</p>
	</section>
	<!-- SLIDER -->
	<section id="slider" class="slider nivoSlider">
		<img src="images/slide1.jpg" data-transition="boxRandom" alt="slide-1">
		<img src="images/slide2.jpg" data-transition="fold" alt="slide-2">
		<img src="images/slide3.jpg" data-transition="boxRain" alt="slide-3">
	</section>
	<!-- PHRASE -->
	<section class="phrase">
		<div class="container text-center">
			<h1 class="phrase__title">38 Lotes Exclusivos en la zona más exclusiva de Lomas junto a las cascadas. <br> Madera, cantera y acero es nuestro estilo <br>vialidad interior de 4 carriles.</h1>
			<small class="phrase__subtitle">Entrega en Julio 2015</small>
			<small class="phrase__subtitle">Créditos hipotecarios disponibles para compra de terreno, y financiamiento para casa y terreno.</small>
		</div>
	</section>
	<!-- MAP -->
	<div class="map text-center">
		<h2 class="green__title">Ubicación</h2>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3773.323461085965!2d-98.28487200000001!3d18.961316999999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDU3JzQwLjciTiA5OMKwMTcnMDUuNSJX!5e0!3m2!1sen!2smx!4v1434141706786" width="100%" height="450" frameborder="0" style="border:0"></iframe>
	</div>
	<!-- MAIN -->
	<main class="main">
		<div class="container text-center">
			<p class="main__info"><strong>La Loma Gran Reserva,</strong> se encuentra ubicada en <strong>Cascatta</strong> que cuenta con 8 hectáreas de <strong>lagos y áreas verdes</strong> y estará estratégicamente ubicado a unos pasos de parques, bancos, restaurantes, comercios, oficinasy el Centro Comercial..</p>
			<p class="main__info">Su cercanía con el <strong>Parque Cascatta</strong>, las increíbles <strong>vistas a los volcanes</strong>, además de contar con un <strong>plan maestro</strong> único en Puebla, hace a <strong>La Loma Gran Reserva</strong>, <strong>el mejor lugar para vivir</strong> en Lomas de Angelópolis.</p>
		</div>
	</main>
	<!-- AMENIDADES -->
	<section class="amenidades text-center">
		<div class="container">
			<h2 class="green__title">Amenidades</h2>
			<div class="amenidades__icons">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4">
						<figure class="amenidades__icons--icon">
							<img src="images/icon-1.png" class="imagesOnHover" data-img="alberca" alt="icon-1">
						</figure>
						<h5 class="amenidades__icons--info">Alberca semicubierta <br> con chapoteadero</h5>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<figure class="amenidades__icons--icon">
							<img src="images/icon-2.png" class="imagesOnHover" data-img="club" alt="icon-2">
						</figure>
						<h5 class="amenidades__icons--info">Casa <br> Club</h5>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<figure class="amenidades__icons--icon">
							<img src="images/icon-3.png" class="imagesOnHover" data-img="salon" alt="icon-3">
						</figure>
						<h5 class="amenidades__icons--info">Salón de <br> usos múltiples</h5>
					</div>
				</div>
				<div class="amenidades__icons--description">
					<img src="images/amenities/amenities1.jpg" alt="Amenities1" id="alberca">
					<img src="images/amenities/amenities2.jpg" alt="Amenities2" id="club">
					<img src="images/amenities/amenities3.jpg" alt="Amenities3" id="salon">
				</div>
			</div>
		</div>
	</section>
	<!-- LOTES -->
	<section class="lotes text-center">
		<div class="container-fluid">
			<h2 class="green__title">Disponibilidad de Lotes</h2>
			<figure class="lotes__image">
				<a href="images/lotificacion.jpg" class="lightbox" title="Lotificación">
					<img src="images/mapalotes.jpg" alt="Mapa de lotes">
				</a>
				<figcaption><strong>Lotes de 200, 210, 220 M2</strong></figcaption>
			</figure>
		</div>
	</section>
	<!-- HOUSES -->
	<section class="houses">
		<div class="container text-center">
			<h2 class="green__title">Opciones de casa tipo A Desarrollar</h2>

			<div class="col-lg-4 no-space">
				<h4 class="houses__type"><strong>Tipo A</strong></h4>
				<h5 class="houses__meters">271 M2</h5>
				<figure class="houses__thumbnail">
					<a href="images/planocasas.jpg" class="lightbox" title="Plano Casas">
						<img src="images/casas/casa1.jpg" alt="Tipo A">
					</a>
				</figure>
			</div>
			<div class="col-lg-4 no-space">
				<h4 class="houses__type"><strong>Tipo B</strong></h4>
				<h5 class="houses__meters">271 M2</h5>
				<figure class="houses__thumbnail">
					<a href="images/planocasas.jpg" class="lightbox" title="Plano Casas">
						<img src="images/casas/casa2.jpg" alt="Tipo B">
					</a>
				</figure>
			</div>
			<div class="col-lg-4 no-space">
				<h4 class="houses__type"><strong>Tipo C</strong></h4>
				<h5 class="houses__meters">295 M2</h5>
				<figure class="houses__thumbnail">
					<a href="images/planocasas.jpg" class="lightbox" title="Plano Casas">
						<img src="images/casas/casa3.jpg" alt="Tipo C">
					</a>
				</figure>
			</div>

			<h5 class="lotes__info">Vía Atlixcayotl 5423, Col. san Bernardino Tlaxcalancingo, <br> Galerías Aventura Lomas, CP 72830, San Andrés Cholula, Puebla.</h5>
		</div>
	</section>
	<!-- LOGOS -->
	<section class="logos">
		<div class="container-fluid">
			<div class="col-lg-3 col-md-3 col-sm-6 text-center">
				<img src="images/logo1.png" class="logos__logo" alt="logo-1">
			</div>
			<div class="col-lg-2 col-md-3 col-sm-6 text-center">
				<img src="images/logo2.png" class="logos__logo" alt="logo-2">
			</div>
			<div class="col-lg-2 col-md-3 col-sm-6 text-center">
				<img src="images/logo3.png" class="logos__logo" alt="logo-3">
			</div>
			<div class="col-lg-2 col-md-3 col-sm-6 text-center">
				<img src="images/logo4.png" class="logos__logo" alt="logo-4">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 text-center">
				<img src="images/logo5.png" class="logos__logo" alt="logo-4">
			</div>
		</div>
	</section>
	<!-- FOOTER -->
	<footer class="footer">
		<div class="container">
			<h6 class="footer__info">Los precios pueden variar sin previo aviso <br>
			<span id="toggled">Aviso de privacidad</span></h6>
			<div class="footer__privacy" id="privacy">
				<p class="footer__info">
					INMOIDEAS, S.A. DE C.V., con domicilio en MORAS 409, COL. DEL VALLE, DELEGACION BENITO JUAREZ, MÉXICO D.F. C.P.03100. EN PUEBLA (222) 169-17-18 VIA AXTLIXCAYOTL #5208, COL. TLAXCALCINGO (RESERVA TERRITORIAL ANGELOPOLIS), SAN ANDRES CHOLULA, PUEBLA, es responsable de recabar sus datos personales, del uso que se le dé a los mismos y de su protección. Su información personal será utilizada para proveer los servicios y productos que ha solicitado, informarle sobre cambios en los mismos y evaluar la calidad del servicio que le brindamos. Para las finalidades antes mencionadas, requerimos obtener los siguientes datos personales: Nombre completo, dirección, email y teléfonos, considerado como sensible según la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, su dirección y teléfonos. Usted tiene derecho de acceder, rectificar y cancelar sus datos personales, así como de oponerse al tratamiento de los mismos o revocar el consentimiento que para tal fin nos haya otorgado, a través de los procedimientos que hemos implementado. Para conocer dichos procedimientos, los requisitos y plazos, se puede poner en contacto con nuestro departamento de datos personales en MEXICO D.F. (55) 5559-27-00 MORAS 409, COL. DEL VALLE, DELEGACION BENITO JUAREZ, MÉXICO D.F. C.P.03100 PUEBLA (222) 169-17-18 VIA AXTLIXCAYOTL #5208, COL. TLAXCALCINGO (RESERVA TERRITORIAL ANGELOPOLIS), SAN ANDRES CHOLULA, PUEBLA. CONTACTO VIA E-MAIL: protecciondedatos@ideasinmobiliarias.com o visitar nuestra página de Internet www.ideasinmobiliarias.mx Asimismo, le informamos que sus datos personales pueden ser transferidos y tratados dentro y fuera del país, por personas distintas a esta empresa. En ese sentido, su información puede ser compartida con otras agencias inmobiliarias pertenecientes a la Asociación Mexicana de Profesionales Inmobiliarios, A.C., para la oferta de bienes inmuebles. Si usted no manifiesta su oposición para que sus datos personales sean transferidos, se entenderá que ha otorgado su consentimiento para ello. No consiento que mis datos personales sean transferidos en los términos que señala el presente aviso de privacidad. Si usted desea dejar de recibir mensajes promocionales de nuestra parte puede solicitarlo a través de los teléfonos en MEXICO D.F. (55) 5559-27-00, en PUEBLA (222) 169-17-18, o bien al correo electrónico protecciondedatos@ideasinmobiliarias.com . Cualquier modificación a este aviso de privacidad podrá consultarla en www.ideasinmobiliarias.mx Actualización al 01/01/2015
				</p>
			</div>
		</div>
	</footer>
	<!-- no borrar -->
	<div id="conv"></div>
	<!-- no borrar -->
		<? include("html/bottom.php"); ?>
	</body>
</html>