<?php include 'php/functions.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Grupo Promesa | Empresa</title>

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

	<!-- MAIN CSS FILES -->
	<link href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body class="pushable">

	<div class="pusher">
		<!--==========================
	      MENÚ FLEX RESPONSIVO CON SEMANTIC UI
		============================-->
		<div class="ui grid">

			<div class="wow fadeIn computer only row">
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
							<a href="escuelaPromesa.php" class="item">Escuela</a>
							<a href="empresaPromesa.php" class="active item">Empresa</a>
							<a href="universidadPromesa.php" class="item">Universidad</a>
							<a href="viviendaPromesa.php" class="item">Vivienda</a>
							<a href="promesaIAP.php" class="item">Promesa I.A.P</a>
					  	</div>
					</div>
					<a href="voluntariado.php" class="item">VOLUNTARIADO</a>
					<a href="sumate.php" class="item">ÚNETE</a>
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
						  <a href="escuelaPromesa.php" class="item">Escuela</a>
						  <a href="empresaPromesa.php" class="active item">Empresa</a>
						  <a href="universidadPromesa.php" class="item">Universidad</a>
						  <a href="viviendaPromesa.php" class="item">Vivienda</a>
						  <a href="promesaIAP.php" class="item">Promesa I.A.P</a>
						</div>
					</div>
					<a href="voluntariado.php" class="item">VOLUNTARIADO</a>
					<a href="sumate.php" class="item">ÚNETE</a>
				</div>
			</div>

          	<!--==========================
	        	INTRO IMAGE
	        ============================-->
			<div class="wow fadeIn row menu-height">
				<section id="pintro">
    			   <div class="intro-container">
    			       <div class="carousel-content">
    			           <img src="img/portadaEmpresa.png" alt="Voluntariado">
    			       </div>
    			   </div>
    			</section>
			</div>

			<!--==========================
				EMPRESA PROMESA
	        ============================-->
			<div class="wow fadeIn row">
				<section class="section">
					<div class="ui container">
						<br>
						<h3>¿QUÉ ES EMPRESA	PROMESA?</h3>
						<br>
						<p>Es un programa que integra a las empresas líderes en México en la formación de una comunidad activa en el cuidado del ambiente.</p>
						<br>
						<br>
						<p>EL programa se desarrolla en cuatro etapas</p>
						<div class="ui stackable four column grid">

            			  	<div class="row">

            			    	<div class="wow fadeInUp column" data-wow-delay="0.01s">
									<img src="img/EmpresaPromesa/1.png" alt="" class="img-fluid">
            			    	</div>

            			    	<div class="wow fadeInUp column" data-wow-delay="0.02s">
									<img src="img/EmpresaPromesa/2.png" alt="" class="img-fluid">
            			    	</div>

            			    	<div class="wow fadeInUp column" data-wow-delay="0.03s">
									<img src="img/EmpresaPromesa/3.png" alt="" class="img-fluid">
            			    	</div>

            			    	<div class="wow fadeInUp column" data-wow-delay="0.04s">
									<img src="img/EmpresaPromesa/4.png" alt="" class="img-fluid">
								</div>
            			  	</div>
						</div>
						<br>
						<br>

					</div>
				</section>
			</div>

			<!--==========================
				BENEFICIOS
			============================-->
			<div class="wow fadeIn row">
				<section class="section">
					<div class="ui container">
						<h3>CUMPLE CON LOS OBJETIVOS <br> DE DESARROLLO SOSTENIBLE 11, 12 y 13</h3>
						<br>
						<div class="ui stackable three column grid">
							<div class="row">
							  	<div class="wow fadeInUp column" data-wow-delay="0.03s">
								  	<img src="img/ods/1.png" alt="">
								</div>
							  	<div class="wow fadeInUp column" data-wow-delay="0.06s">
									<img src="img/ods/2.png" alt="">
								</div>
							  	<div class="wow fadeInUp column" data-wow-delay="0.1s">
									<img src="img/ods/3.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>

			

			<!--==========================
				BENEFICIOS
	        ============================-->
			<div class="wow fadeIn row">
				<section id="green-section"  class="section">
    			    <div class="ui container">
						<h3>BENEFICIOS</h3>
						<br>

						<div class="ui container">

							<div class="ui stackable four column grid">
								<div class="row">

								  	<div class="wow fadeIn column" data-wow-delay="0.1s">
									  	<i class="fas fa-certificate fa-5x"></i>
                    					<br>
										<p>	Obtener registros necesarios para certificaciones (ISO 14001, ESR, GRI, entre otras).</p>
                    					<br>
									</div>

								  	<div class="wow fadeIn column" data-wow-delay="0.1s">
									  	<i class="fas fa-gavel fa-5x"></i>
                    					<br>
										<p> Cumplir la legislación ambiental vigente</p>	
										<br>
									</div>

								  	<div class="wow fadeIn column" data-wow-delay="0.1s">
										<i class="fas fa-chart-line fa-5x"></i>
                    					<br>
										<p>	Incrementar la tasa de reciclaje para mitigar el impacto ambiental negativo</p>	
										<br>
									</div>

									<div class="wow fadeIn column" data-wow-delay="0.1s">
										<i class="fas fa-file-alt fa-5x"></i>
                    					<br>
										<p>	Contar con registros y reportes de impacto ambiental</p>	
										<br>
									</div>
								</div>
							</div>

							<div class="ui stackable four column grid">
								<div class="row">

								  	<div class="wow fadeIn column" data-wow-delay="0.1s">
									  	<i class="fas fa-dollar-sign fa-5x"></i>
                    					<br>
										<p>	Valorizar los residuos para generar ingresos adicionales</p>	
										<br>
									</div>

								  	<div class="wow fadeIn column" data-wow-delay="0.1s">
									  	<i class="fas fa-leaf fa-5x"></i>
                    					<br>
										<p>	Implementar la cultura ambiental empresarial a través de una mejora continua</p>	
										<br>
									</div>

								  	<div class="wow fadeIn column" data-wow-delay="0.1s">
									  	<i class="fas fa-dot-circle fa-5x"></i>
                    					<br>
										<p>	Posicionar a la marca como impulsora de la responsabilidadsocial y ambiental</p>	
										<br>
									</div>

									<div class="wow fadeIn column" data-wow-delay="0.1s">
										<i class="fas fa-globe fa-5x"></i>
                    					<br>
										<p>	Ser parte de una comunidad de Empresas Líderes Ambientales</p>	
										<br>
									</div>
								</div>
							</div>
						</div>					

						<div class="wow fadeInUp ui one column stackable center aligned page grid">
            	          	<div class="column twelve wide">
            	              <a href="sumate.php">
            	                <div class="ui vertical animated inverted button" tabindex="0">
            	                  <div class="visible content">ÚNETE</div>
            	                  <div class="hidden content">
            	                    <i class="fas fa-user-plus green-text"></i>
            	                  </div>
            	                </div>
            	              </a>
            	          	</div>
						</div>
						<br>
    			    </div>
    			</section>
			</div>
			
			<!--==========================
				TESTIMONIALES
	        ============================-->
			<div class="wow fadeIn row">
				<section id="testimonials" class="section-bg wow fadeIn section">
 					<div class="ui container">
						<h3>Testimoniales</h3>
 					</div>
				</section>
			</div>
			<div class="row">
				<div id="customers-testimonials" class="row owl-carousel">
    				<!--TESTIMONIAL 1 -->
    				<div class="wow fadeIn column item">
    				  	<div class="shadow-effect">
					  		<img id="testimonial-img" src="img/aliados/empresas/3.png" alt="">
							<p>
								<i class="fas fa-quote-left"></i>
								En estos proyectos hemos sido atendidos por un equipo joven, dinámico, creativo y con una extraordinaria disposición para trabajar. Este equipo nos ha brindado un servicio puntual y profesional, que ha tenido un alto grado de satisfacción dentro de la empresa, y que mucho nos ha servido en la compleja búsqueda de la manera de minimizar el immpacto ambiental negativo que deriva de nuestra actividad.
								<i class="fas fa-quote-right"></i>
							</p>
						</div>
    					<div class="testimonial-name">
							<h2>Lorena Fabiola Guillé-Laris</h2>
							<p>Directora de Responsabilidad Social <br> Cinépolis</p>
						</div>
    				</div>
					<!--END OF TESTIMONIAL 1 -->

    				<!--TESTIMONIAL 2 -->
    				<div class="wow fadeIn column item">
    				  	<div class="shadow-effect">
					  		<img id="testimonial-img" src="img/aliados/empresas/9.png" class="testimonial-img" alt="">
							<p>
								<i class="fas fa-quote-left"></i>
								Esta experiencia es nueva para mi y para la compañía, ha sido un medio y modo de hacer conciencia de la situación tan crítica que estamos viviendo actualmente en el mundo, esta experiencia me ha permitido informarme a lo que te da una perspectiva distinta para disminuir en el impacto ambiental.
								<i class="fas fa-quote-right"></i>
							</p>  
						</div>
    				  	<div class="testimonial-name">
						  	<h2>Érika Guevara Pérez</h2>
							<p>Coordinadora de Compras y Servicios Generales <br> Ediciones SM</p>
						</div>
    				</div>
					<!--END OF TESTIMONIAL 2 -->

    				<!--TESTIMONIAL 3 -->
    				<div class="wow fadeIn column item">
    				  	<div class="shadow-effect">
							<img id="testimonial-img" src="img/aliados/empresas/13.png" class="testimonial-img" alt="">
							<p>	
								<i class="fas fa-quote-left"></i>
								Fue una experiencia excelente. Consideramos que estos programas son importantes para la empresa porque la mayoría de las personas no saben qué es reciclar ni los beneficios para ellos y las futuras generaciones. Y por ello tenemos que reforzarla para ser mejores. Gracias al Programa de Empresa Promesa tenemos un mejor registro del material que se recicla, se ha generado conciencia en la empresa y hemos reducido nuestro impacto ambiental.
								<i class="fas fa-quote-right"></i>
							</p>
						</div>
    				  	<div class="testimonial-name">
							<h2>Alejandra Guerrero</h2>
							<p>SHE <br> Henkel</p>
					  	</div>
    				</div>
					<!--END OF TESTIMONIAL 3 -->
				</div>
			</div>		
			
			<!--==========================
				EMPRESAS ALIADAS
	        ============================-->
			<div class="wow fadeIn row">
				<section id="nuestrosAliados" class="section">
					<div class="ui container">
						<h3>COMUNIDAD DE EMPRESAS ALIADAS</h3>
						<img class="wow fadeInUp" src="img/aliados/escuelas/escuelas.png" alt="Escuela Promesa">
					</div>
				</section><!-- #clients -->
			</div>

          	<!--==========================

			============================-->
			<!--
			<div class="row">

			</div>
			-->		
		</div>

		<!--==========================
		FOOTER
		============================-->
		<div class="wow fadeIn container">
	      	<footer id="footer">

          		<div class="footer-top">
            		<div class="ui container">

              			<div class="ui stackable two column grid">
                			<div class="row">

                  				<div class="column footer-contact">
                    				<h4>Contacto</h4>
                    				<p>
                      				Empresa Promesa: ventas@grupopromesa.com<br>
                      				Escuela Promesa: teresitab@grupopromesa.mx<br>
	      		    				General: contacto@grupopromesa.mx<br>
	      		        			Recursos Humanos: rh@grupopromesa.mx<br>
                      				<strong>Telefono:</strong> +52 1 (55) 7590 7605<br>
                      				&nbsp&nbspExt 704: Escuelas<br>
                      				&nbsp&nbspExt 706: Empresas
									</p>
									
                    				<div class="social-links" >
                      					<a href="https://www.facebook.com/Grupo-Promesa-134442919990717/" class="ui circular icon button" target="_blank">
                        					<i class="fab fa-facebook-f"></i>  
                      					</a>
                      
                      					<a href="https://www.instagram.com/grupopromesa/?hl=en" class="ui circular icon button" target="_blank">
                        					<i class="fab fa-instagram"></i>
                      					</a>
                    				</div>
                  				</div>

                  				<div class="column footer-newsletter">
                    				<h4>Ubicación</h4>
	      	        				Río Hudson 25, Cuauhtémoc <br>
                    				Ciudad de México, CDMX 06500<br>
									México <br>
									
                    				<div id="googleMap">
	      		    				      <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:200px;width:400px;'><div id='gmap_canvas' style='height:200px;width:400px;'></div><div><small><a href="https://embedgooglemaps.com/">https://embedgooglemaps.com/</a></small></div><div><small><a href="http://eurodisneyaanbiedingen.nl/">hotels near disney paris</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(19.4261941,-99.17486159999999),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(19.4261941,-99.17486159999999)});infowindow = new google.maps.InfoWindow({content:'<strong>Grupo Promesa</strong><br>Río Hudson 25, Cuauhtémoc<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
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
				
				          		<div class="credits">

                  				</div>
                			</div>
              			</div>
            		</div>
          		</div>
        	</footer>
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

	<!-- OWL CAROUSEL TESTIMONIAL QUERY --> 
	<script src="js/qwerty/owl/empresaimg.js"></script>
    <!-- OWL CAROUSEL TESTIMONIAL QUERY --> 
	<script src="js/qwerty/owl/testimoniales-empresa.js"></script>
	<!-- SEMANTIC UI QUERY -->
	<script src="js/qwerty/semantic/menu-mandler.js"></script>
	<!-- WOW QWERTY -->
	<script src="js/qwerty/wow/wow.js"></script>
</body>
</html>
