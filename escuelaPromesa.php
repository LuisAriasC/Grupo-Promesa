<?php include 'php/functions.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Grupo Promesa | Escuela</title>

	<meta content="" name="description">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta name="mobile-web-app-capable" content="yes">

	<!-- Libraries CSS Files -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" rel="stylesheet" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
	<!-- Font awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet" />
	<!-- OwlCarousel CSS Files -->
	<link rel="stylesheet" href="css/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owlcarousel/owl.theme.default.min.css">
	<!-- ANIMATE CSS Files -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<!-- MAGNIFIC POPUP -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

	<!-- MAIN CSS FILES -->
	<link href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body class="pushable">

	<div class="pusher">

		<!--==========================
	      MENÚ FLEX RESPONSIVO CON SEMANTIC UI
		============================-->
		<div class="ui grid">

			<div class="wow fadeIn computer only row m2">
				<div id="navbar" class="ui borderless fixed menu">
					<a href="index.php" id="logo-item" class="brand item">
					  <img src="img/logo.png" alt="logo">
					</a>

					<a href="index.php" class="item">INICIO</a>
					<a href="aboutUs.php" class="item">SOBRE NOSOTROS</a>
					<a href="gallery.php" class="item">GALERÍA</a>
					<div class="ui dropdown item">
						<div id="active" class="text">NUESTROS PROGRAMAS</div>
					  <i class="dropdown icon"></i>
					  <div class="menu ui transition hidden">
						<a href="escuelaPromesa.php" class="active item">Escuela</a>
						<a href="empresaPromesa.php" class="item">Empresa</a>
						<a href="universidadPromesa.php" class="item">Universidad</a>
						<a href="viviendaPromesa.php" class="item">Vivienda</a>
						<a href="promesaIAP.php" class="item">Promesa I.A.P</a>
					  </div>
					</div>
					<a href="voluntariado.php" class="item">VOLUNTARIADO</a>
					<a href="sumate.php" class="item">SÚMATE</a>
					<!-- <div class="right menu"></div> -->
				</div>
			</div>

			<div class="wow fadeIn mobile tablet only narrow row m2">
				<div id="navbar" class="ui borderless fixed menu">
					<a href="index.php" id="logo-item" class="brand item">
					  <img src="img/logo.png" alt="logo">
					</a>
					<div class="right menu open">
						<a href="" class="item">
						  <i class="fas fa-bars"></i>
						</a>
					</div>
				</div>

				<div class="ui borderless vertical fixed menu">
					<a href="index.php" class="item">INICIO</a>
					<a href="aboutUs.php" class="item">SOBRE NOSOTROS</a>
					<a href="gallery.php" class="item">GALERÍA</a>

					<div class="ui item">
						<div id="active" class="text">NUESTROS PROGRAMAS</div>

						<div class="menu">
						  <a href="escuelaPromesa.php" class="active item">Escuela</a>
						  <a href="empresaPromesa.php" class="item">Empresa</a>
						  <a href="universidadPromesa.php" class="item">Universidad</a>
						  <a href="viviendaPromesa.php" class="item">Vivienda</a>
						  <a href="promesaIAP.php" class="item">Promesa I.A.P</a>
						  <a href="voluntariado.php" class="item">Voluntariado</a>
						</div>
					</div>
					<a href="voluntariado.php" class="item">VOLUNTARIADO</a>
					<a href="sumate.php" class="item">SÚMATE</a>
				</div>
			</div>

			<!--==========================
	          HEADER IMAGE
	        ============================-->
			<div class="wow fadeIn row menu-height">
				<section id="pintro">
    			    <div class="intro-container">
    			        <img src="img/portadaEscuela.png" alt="Escuela Promesa">
    			    </div>
				</section>
			</div>


			<!--==========================
				DESCRIPCION
          	============================-->
          	<div class="wow fadeIn row">
				<section class="section">
					<div class="ui container">
						<div class="ui stackable two column grid">
							<div class="row">
								<div class="eight wide column">
									<p>
										Buscamos transformar la cultura ambiental en las comunidades escolares a través de la implementación de un programa educativo permanente y de constante crecimiento que promueve el Desarrollo Sostenible desde la sensibilización y la apropiación de conocimientos.
									</p>
									<br>
									<p>
										Integramos a toda la comunidad escolar fomentando el desarrollo ambiental de los alumnos a través de acciones concretas y medibles.
									</p>
								</div>

								<div class="eight wide column" style="margin: auto !important;">
									<img id="publico-promesa" src="img/escuelaPromesa1.png" alt="" class="ui centered fluid image">
								</div>
							</div>
						</div>

						<div class="wow fadeInUp ui one column stackable center aligned page grid">
            	        	<div class="column twelve wide">
								<a href="sumate.php">
            	                	<div id="my-blue" class="ui vertical animated button" tabindex="0">
            	                  		<div class="visible content">SÚMATE</div>
            	                  		<div class="hidden content">
											<i class="fas fa-user-plus"></i>
            	                  		</div>
            	                	</div>
            	              	</a>
            	          	</div>
						</div>
					</div>
				</section>
			  </div>


			<!--==========================
				QUE OFRECEMOS
          	============================-->
			  <div class="wow fadeIn row menu-height">
			  	<section id="green-section"  class="section">
    			    <div class="ui container">
						<h3>¿QUÉ OFRECEMOS?</h3>
						<br>

						<div class="ui stackable two column grid">
							<div class="row">
								<div class="wow fadeIn column" data-wow-delay="0.1s">
									<i class="fas fa-search fa-3x"></i>
									<br>
									<p>	
										Seguimiento personalizado con un Coordinador Promesa.
									</p>
									<br>
								</div>

								<div class="wow fadeIn column" data-wow-delay="0.1s">
									  <i class="fas fa-check-circle fa-3x"></i>
									<br>
									<p>
										Integrar nuevas soluciones ambientales para la escuela.
									</p>	
									<br>
								</div>
							</div>

							<div class="row">
								<div class="wow fadeIn column" data-wow-delay="0.1s">
									<i class="fas fa-user-graduate fa-3x"></i>
									<br>
									<p>
										Fomentar una educación ambiental de calidad.
									</p>	
									<br>
								</div>
								
								<div class="wow fadeIn column" data-wow-delay="0.1s">
									<i class="fas fa-chalkboard-teacher fa-3x"></i>
									<br>
									<p>
										Desarrollar un programa permanente con nuevas tecnologías.
									</p>	
									<br>
								</div>
							</div>
							
							<div class="row">
								<div class="wow fadeIn column" data-wow-delay="0.1s">
									  <i class="fas fa-award fa-3x"></i>
									<br>
									<p>	
										Alcanzar distintivos y premios ambientales.
									</p>	
									<br>
								</div>
								
								<div class="wow fadeIn column" data-wow-delay="0.1s">
									  <i class="fas fa-chart-pie fa-3x"></i>
									<br>
									<p>
										Registrar el Impacto Ambiental obtenido por medio de bitácoras e indicadores.
									</p>	
									<br>
								</div>
							</div>

							<div class="row">
								<i class="fas fa-people-carry fa-3x"></i>
								<div class="wow fadeIn sixteen wide column" data-wow-delay="0.1s">
									<br>
									<p>
										Contribuir para que la comunidad escolar sea: proactiva, sensible y comprometida.
									</p>	
									<br>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			  
			<!--==========================
				COMUNIDAD
          	============================-->
          	<div class="wow fadeIn row">
				<section class="section">
    			    <div class="ui container">
						<h3>¿En qué consiste el programa?</h3>
						<br>

						<h2>Lo que hacemos se desarrolla en 5 etapas</h2>
						<p>Da click en las imágenes para conocer más</p>

						<div class="ui five column grid">
            			  	<div class="row mp-group">

								<a href="img/EscuelaPromesaSecciones/etapa_1.png" class="wow fadeInUp column" data-wow-delay="0.01s">
									<img src="img/EscuelaPromesaSecciones/escuelaPromesa21.png" alt="" class="centered steps image">
								</a>

								<a href="img/EscuelaPromesaSecciones/etapa_2.png" class="wow fadeInUp column" data-wow-delay="0.02s">
									<img src="img/EscuelaPromesaSecciones/escuelaPromesa22.png" alt="" class="centered steps image">
								</a>

								<a href="img/EscuelaPromesaSecciones/etapa_3.png" class="wow fadeInUp column" data-wow-delay="0.03s">
									<img src="img/EscuelaPromesaSecciones/escuelaPromesa23.png" alt="" class="centered steps image">
								</a>

								<a href="img/EscuelaPromesaSecciones/etapa_4.png" class="wow fadeInUp column" data-wow-delay="0.04s">
									<img src="img/EscuelaPromesaSecciones/escuelaPromesa24.png" alt="" class="centered steps image">
								</a>

								<a href="img/EscuelaPromesaSecciones/etapa_5.png" class="wow fadeInUp column" data-wow-delay="0.05s">
									<img src="img/EscuelaPromesaSecciones/escuelaPromesa25.png" alt="" class="centered steps image">
								</a>

								<br>
								<br>
            			  	</div>
						</div>
						<br>
    			    </div>
				</section>
			</div>
          	<div class="wow fadeIn row">
			  	<section id="ComunidadPromesa">
    			    <div class="ui container">

						<div class="ui tow stackable column grid">
							<div class="row">
								<div class="eight wide column mcenter">
									<div class="mchild">
										<h3>¿Estás fuera de CDMX y te interesa nuestro programa?</h3>
									</div>
								</div>

								<div class="eight wide column">
									<img src="img/escuelaPromesaEnLinea.png" alt="" class="ui image" style="margin-top: 35px !important; width: 50%;">
								</div>
							</div>
						</div>

						<br>
						<h2>Inscríbete a Escuela Promesa en Línea</h2>
						<h2>Escribe a <span class="blue-text"> <a href="mailto:contacto@grupopromesa.mx?subject=Escuela Promesa en Linea"> contacto@grupopromesa.mx </a> </span> para más información.</h2>
						<br>
						<div class="wow fadeInUp ui one column stackable center aligned page grid">
            	        	<div class="column twelve wide">
								<a href="sumate.php">
            	                	<div id="my-blue" class="ui vertical animated button" tabindex="0">
            	                  		<div class="visible content">SÚMATE</div>
            	                  		<div class="hidden content">
											<i class="fas fa-user-plus"></i>
            	                  		</div>
            	                	</div>
            	              	</a>
            	          	</div>
						</div>
				</section>
			</div>

			<!--==========================
				TESTIMONIALES
          	============================-->
          	<div class="wow fadeIn row">
			  	<section class="section">
 					<div class="ui container">
						<h3>Testimoniales</h3>
						<br>
 					</div>
				</section>
			</div>

			<div class="wow fadeIn row">
				<div id="customers-testimonials" class="row owl-carousel">
    				<!--TESTIMONIAL 1 -->
    				<div class="column item testimonial">
    				  	<div class="shadow-effect">
					  		<img id="testimonial-img" src="img/aliados/escuelas/9.png" class="testimonial-img" alt="">
							<p>
								<i class="fas fa-quote-left"></i>
								ESCUELA PROMESA ha sido un gran apoyo para nuestro programa de Conciencia Ambiental. Su compromiso, dedicación, innovación y logística han logrado que formemos un excelente equipo en donde la cultura ambiental sea nuestro propósito común. Ellos no son un grupo independiente, ahora forman parte de la familia Anne Sullivan
								<i class="fas fa-quote-right"></i>
							</p>
						</div>
    					<div class="testimonial-name">
							<h2>Ana Borges</h2>
							<p>Maestra de la Escuela <br> Anne Sullivan</p>
						</div>
    				</div>
					<!--END OF TESTIMONIAL 1 -->
				
    				<!--TESTIMONIAL 2 -->
    				<div class="column item testimonial">
    				  	<div class="shadow-effect">
					  		<img id="testimonial-img" src="img/aliados/escuelas/22.png" class="testimonial-img" alt="">
							<p>
								<i class="fas fa-quote-left"></i>
								Escuela Promesa llegó a nuestra escuela hace un año con una propuesta muy interesante. El programa está compuesto por etapas para lleva a la escuela de la mano e ir avanzando primero con pasos pequeños y realistas que en un futuro avanzarán a proyectos de mayor nivel. Me emociona pensar en todo lo que podremos lograr trabajando juntos.
								<i class="fas fa-quote-right"></i>
							</p>  
						</div>
    				  	<div class="testimonial-name">
						  	<h2>Rosa Elena Casais</h2>
							<p>Subdirectora Escuela <br> Sierra Nevada Interlomas</p>
						</div>
    				</div>
					<!--END OF TESTIMONIAL 2 -->
				
    				<!--TESTIMONIAL 3 -->
    				<div class="column item testimonial">
    				  	<div class="shadow-effect">
							<img id="testimonial-img" src="img/aliados/escuelas/8.png" class="testimonial-img" alt="">
							<p>	
								<i class="fas fa-quote-left"></i>
								Como institución educativa ha sido una gran experiencia trabajar con ESCUELA PROMESA durante los últimos dos años. Hemos logrado empezar a generar una conciencia más clara y asertiva en toda la comunidad educativa con respecto a la importancia y responsabilidad ambiental que tenemos ¡¡Me da mucho gusto compartir con esta empresa, que es joven y de jóvenes, para el bien de la sociedad mexicana en general!!!
								<i class="fas fa-quote-right"></i>
							</p>
						</div>
    				  	<div class="testimonial-name">
							<h2>Karina Ojeda</h2>
							<p>Subdirectora Instituto <br> Rosedal México</p>
					  	</div>
    				</div>
					<!--END OF TESTIMONIAL 3 -->
    			</div>
			</div>

			<!--==========================
				ALIADOS
          	============================-->
          	<div class="wow fadeIn row">
			  	<section class="section">
					<div class="ui container">
						<h3>ESCUELAS PROMESA</h3>
						<img src="img/aliados/escuelas/escuelas.png" alt="Escuela Promesa">
					</div>
				</section>
			</div>			
			

			<!--==========================
				FOOTER
          	============================-->
          	<div class="wow fadeIn row">
				<section id="footer" class="section">
					<div class="footer-top">
						<div class="ui container">
							<div class="ui stackable two column grid">
                				<div class="row">
                			  		<div class="column">
                			    		<h4>Contacto</h4>
                			      		Empresa Promesa: ventas@grupopromesa.com<br>
                			      		Escuela Promesa: teresitab@grupopromesa.mx<br>
	      					    		General: contacto@grupopromesa.mx<br>
	      					        	Recursos Humanos: rh@grupopromesa.mx<br>
										<br>
                			      		<strong>Telefono:</strong> +52 1 (55) 7590 7605<br>
                			      		&nbsp&nbspExt 704: Escuelas<br>
                			      		&nbsp&nbspExt 706: Empresas
										<br>
										
										<a id="my-blue" href="https://www.facebook.com/Grupo-Promesa-134442919990717/" class="ui circular icon button" target="_blank">
											<i class="facebook f icon"></i>
										</a>
										<a id="my-green" href="https://www.instagram.com/grupopromesa/?hl=en" class="ui circular icon button" target="_blank">
											<i class="instagram icon"></i>
										</a>
                			  		</div>

                			  		<div class="column">
                			    		<h4>Ubicación</h4>
	      	    			    		Río Hudson 25, Cuauhtémoc <br>
                			    		Ciudad de México, CDMX 06500<br>
										México <br>
                			    		<div id="googleMap">
											<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                				    			<div style='overflow:hidden;height:250px;width:250px;'>
                				    				<div id='gmap_canvas' style='height:250px;width:250px;'>
													</div>
                				    				<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                				    			</div>
                			    				<script type='text/javascript'>
                			    				    function init_map(){
                			    				      	var myOptions = {zoom:10,center:new google.maps.LatLng(19.4261941,-99.17486159999999),mapTypeId: google.maps.MapTypeId.ROADMAP};
                			    				      	var map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                			    				    	var marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(19.4261941,-99.17486159999999)});
                			    				    	var infowindow = new google.maps.InfoWindow({content:'<strong>Grupo Promesa</strong><br>Río Hudson 25, Cuauhtémoc<br>'});
                			    				      	google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);
                			    				    }
                			    				    google.maps.event.addDomListener(window, 'load', init_map);
                			    				  </script>
                			    				</div><!-- MAP -->											
                			    			</div>
	      	    			      			<script async defer
	      	    			      			  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZ3-jELLTX7sMp7kyusDedjN9hGxcVq4g&callback=initMap">
	      	    			      			</script>
                			  			</div>
                					</div>
								</div>

								<div class="row">
                					<div class="ui one column stackable center aligned page grid">
                			  			<div class="column twelve wide">
                			    			<div class="copyright">
                			      				&copy; Copyright <strong>Grupo Promesa</strong>. Todos los derechos reservados
                			  				</div>
                			  			</div>
                					</div>
              					</div>
              				</div>
						</div>
					</div>
				</section>
          	</div>
		</div>
	</div>

    <!-- JQuery 3.4.1-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	
    <!-- SEMANTIC UI JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="js/owlcarousel/owl.carousel.min.js"></script>
	<!-- WOW JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<!-- MAGNIFIC POPUP -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

	<!-- OWL CAROUSEL QUERY --> 
    <script src="js/qwerty/owl/testimoniales-escuela.js"></script>
    <!-- SEMANTIC UI QUERY -->
	<script src="js/qwerty/semantic/menu-mandler.js"></script>
	<!-- WOW QWERTY -->
	<script src="js/qwerty/wow/wow.js"></script>

	<!-- READY QUERTIES -->
	<script>
		$(document).ready(function() {
			$('.mp-group').magnificPopup({
  				delegate: 'a', // child items selector, by clicking on it popup will open
  				type: 'image'
  			// other options
			});
		});
	</script>

</body>
</html>
