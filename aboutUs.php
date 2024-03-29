<?php include 'php/functions.php';?>

<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="utf-8">
    <title>Grupo Promesa | Sobre Nosotros</title>

    <meta content="" name="description">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
    <meta name="mobile-web-app-capable" content="yes">
    
    <!-- SEMANTIC UI CSS FILES -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" rel="stylesheet" />

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <!-- FONT AWESOME CSS FILES -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet" />
	
	<!-- OWLCAROUSEL CSS FILES -->
    <link rel="stylesheet" href="css/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owlcarousel/owl.theme.default.min.css">
	<!-- ANIMATE CSS FILES -->
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

			<div class="wow fadeIn computer only row m2">
				<div id="navbar" class="ui borderless fixed menu">
					<a href="index.php" id="logo-item" class="brand item">
					  <img src="img/logo.png" alt="logo">
					</a>

					<a href="index.php" class="item">INICIO</a>
					<a href="aboutUs.php" id="active" class="item">SOBRE NOSOTROS</a>
					<a href="gallery.php" class="item">GALERÍA</a>
					<div class="ui dropdown item">NUESTROS PROGRAMAS
					  <i class="dropdown icon"></i>
					  <div class="menu ui transition hidden">
						<a href="escuelaPromesa.php" class="item">Escuela</a>
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

				<div class="ui vertical borderless fixed menu">
					<a href="index.php" class="item">INICIO</a>
					<a href="aboutUs.php" id="active" class="item">SOBRE NOSOTROS</a>
					<a href="gallery.php" class="item">GALERÍA</a>

					<div class="ui item">
						<div class="text">NUESTROS PROGRAMAS</div>

						<div class="menu">
						  <a href="escuelaPromesa.php" class="item">Escuela</a>
						  <a href="empresaPromesa.php" class="item">Empresa</a>
						  <a href="universidadPromesa.php" class="item">Universidad</a>
						  <a href="viviendaPromesa.php" class="item">Vivienda</a>
						  <a href="promesaIAP.php" class="item">Promesa I.A.P</a>
						</div>
					</div>
					<a href="voluntariado.php" class="item">VOLUNTARIADO</a>
					<a href="sumate.php" class="item">SÚMATE</a>
				</div>
			</div>

			<!--==========================
	          QUIENES SOMOS
	        ============================-->
			<div id="parallax2" class="wow fadeIn row menu-height">
				<section id="about" class="section">
					<div class="ui container">
						<h3>Promotora de un mejor Ambiente Social y Ambiental
							<br> (PROMESA)
						</h3>
						<br>

        			    <p>
							Iniciamos operaciones en el 2009 con el compromiso de contribuir a la mejora de la realidad social y medioambiental en México a través de una educación ambiental de calidad que fuera más allá de las instituciones educativas e incluyera a todos los sectores de población.
						</p>
						<br>
						<p>
							Es por esto que creamos programas y estrategias que promueven la Responsabilidad Ambiental, Social y de Sustentabilidad tomando en cuenta los contextos y necesidades particulares de cada escuela, empresa, universidad y vivienda generando impactos positivos inmediatos mientras cumplimos con los más altos estándares internacionales.
						</p>
						<br>

						<p>
							Nuestro equipo se esfuerza diariamente por perfeccionar nuestros programas, asegurándonos que se genere el mayor impacto posible contribuyendo a solucionar la carencia de educación ambiental en México.
						</p>
						<br>
					</div>
				</section>
			</div>


			<!--==========================
				RECONOCIMIENTOS
			============================-->
			<div id="parallax2" class="wow fadeIn row">
				<section class="section">
					<div class="ui container">
						<h3>RECONOCIMIENTOS</h3>

					</div>
				</section>
			</div>
			<div id="parallax2" class="wow fadeIn row">
				<div class="ui container">

					<div class='row owl-carousel clients-carousel'>
    				  	<div class='column item'>
    				  		<div class='shadow-effect'>
								<img class="ui small centered image" src="img/premios/1.png" alt="">
								<div class="price-content">
									<h4>
										Certificado Lationoamérica Verde <br>
										2017
									</h4>
								</div>
							</div>
						</div>
						
						<div class='column item'>
    				  		<div class='shadow-effect'>
								<img class="ui small centered image" src="img/premios/2.png" alt="">
								<div class="price-content">
									<h4>
										Fellow de Agora Partnership <br>
										2016
									</h4>
								</div>
							</div>
						</div>
						
						<div class='column item'>
    				  		<div class='shadow-effect'>
								<img class="ui small centered image" src="img/premios/3.png" alt="">
								<div class="price-content">
									<h4>
										Fellow de Ashoka <br>
										Centroamérica y el Caribe <br>
										2018
									</h4>
								</div>
							</div>
						</div>

						<div class='column item'>
    				  		<div class='shadow-effect'>
								<img class="ui small centered image" src="img/premios/4.png" alt="">
								<div class="price-content">
									<h4>
										Reconocimiento Unreasonable <br>
										2016
									</h4>  
								</div>
							</div>
    					</div>
					</div>
				</div>
			</div>

			<!--==========================
				STAFF
			============================-->
			<div class="wow fadeIn row">
				<section class="section">
					<div class="ui container">

						<h3>STAFF</h3>
						<br>
						<br>
						<div class="ui stackable four column grid">
							<div class="row">

								<div class="wow fadeIn column" data-wow-delay="0.1s">
    			    		        <img class="ui small centered circular image" src="img/employees/Julio_Fundador_y_Director_General.jpg">
									<h2 class="green-text">
										Julio
									</h2>
									<p>
										Fundador y <br> director general
									</p>
									<br>
									<br>
								</div>

				  				<div class="wow fadeIn column" data-wow-delay="0.1s">
    			    		        <img class="ui small centered circular image" src="img/employees/Monica_Ingeniera_Ambiental_y_Directora_de_Empresa_Promesa.jpg">
									<h2 class="green-text">
										Mónica
									</h2>
									<p>
										Directora <br> Empresa Promesa
									</p>
									<br>
									<br>
								</div>

    			    		    <div class="wow fadeIn column" data-wow-delay="0.1s">
    			    		        <img class="ui small centered circular image" src="img/employees/Teresita_Directora_de_Escuela_Promesa.jpg">
									<h2 class="green-text">
										Teresita
									</h2>
									<p>
										Directora <br> Escuela Promesa
									</p>
									<br>
									<br>
								</div>

								<div class="wow fadeIn column" data-wow-delay="0.1s">
    			    		        <img class="ui small centered circular image" src="img/employees/Monica_Recursos_Humanos.jpg">
									<h2 class="green-text">
										Mónica
									</h2>
									<p>
										Recursos Humanos
									</p>
									<br>
									<br>
								</div>
    						</div>

							<div class="row">
								<div class="wow fadeIn column" data-wow-delay="0.1s">
    			    		        <img class="ui small centered circular image" src="img/employees/Nallely_Coordinadora_de_Promesa_IAP.jpg"> 
									<h2 class="green-text">
										Nallely
									</h2>
									<p>
										Coordinadora <br> Promesa I.A.P.
									</p>
									<br>
									<br>
								</div>

								<div class="wow fadeIn column" data-wow-delay="0.1s">
    			    		        <img class="ui small centered circular image" src="img/employees/Ximena_Coordinadora_de_Empresa_Promesa.jpg">
									<h2 class="green-text">
										Ximena
									</h2>
									<p>
										Coordinadora <br> Empresa Promesa
									</p>
									<br>
									<br>
								</div>

								<div class="wow fadeIn column" data-wow-delay="0.1s">
    			    		        <img class="ui small centered circular image" src="img/employees/Sergio_Coordinador_de_Proyectos_Escolares.jpg">
									<h2 class="green-text">
										Sergio
									</h2>
									<p>
										Coordinador <br> Proyectos Escolares
									</p>
									<br>
									<br>
								</div>

    			    		    <div class="wow fadeIn column" data-wow-delay="0.1s">
    			    		        <img class="ui small centered circular image" src="img/employees/Larissa_Coordinadora_de_Eventos_Especiales.jpg">
									<h2 class="green-text">
										Larissa
									</h2>
									<p>
										Coordinadora <br> Eventos Especiales
									</p>
									<br>
									<br>
								</div>
    						</div>

							<div class="row">
								<div class="wow fadeIn column" data-wow-delay="0.1s">
    			    		        <img class="ui small centered circular image" src="img/employees/Fernando_Coordinador_Empresa_Promesa.jpg">
									<h2 class="green-text">
										Fernando
									</h2>
									<p>
										Coordinador <br> Empresa Promesa
									</p>
									<br>
									<br>
								</div>

								<div class="wow fadeIn column" data-wow-delay="0.1s">
    			    		        <img class="ui small centered circular image" src="img/employees/Laura_Coordinadora_de_Proyectos_Escolares.jpg">
									<h2 class="green-text">
										Laura
									</h2>
									<p>
										Coordinadora <br> Proyectos Escolares
									</p>
									<br>
									<br>
								</div>

								<div class="wow fadeIn column" data-wow-delay="0.1s">
    			    		        <img class="ui small centered circular image" src="img/employees/Antonio_Logística_y_Operaciones.jpg">
									<h2 class="green-text">
										Antonio
									</h2>
									<p>
										Logística y Operaciones
									</p>
									<br>
									<br>
								</div>

								<div class="wow fadeIn column" data-wow-delay="0.1s">
    			    		        <img class="ui small centered circular image" src="img/employees/Paola_Marketing_y_Comunicación.jpg">
									<h2 class="green-text">
										Paola
									</h2>
									<p>
										Marketing y comunicación
									</p>
									<br>
									<br>
								</div>								
    						</div>

							<div class="row">
								<div class="wow fadeIn column" data-wow-delay="0.1s">
    			    		        <img class="ui small centered circular image" src="img/employees/Paula.jpg">
									<h2 class="green-text">
										Paula
									</h2>
									<p>
										Diseño y Producción
									</p>
									<br>
									<br>
								</div>

				  				<div class="wow fadeIn column" data-wow-delay="0.1s">
    			    		        <img class="ui small centered circular image" src="img/employees/Aldo_Educador.jpg">
									<h2 class="green-text">
										Aldo
									</h2>
									<p>
										Educador Ambiental
									</p>
									<br>
									<br>
								</div>

    			    		    <div class="wow fadeIn column" data-wow-delay="0.1s">
    			    		        <img class="ui small centered circular image" src="img/employees/Romana_Educadora.jpg">
									<h2 class="green-text">
										Romana
									</h2>
									<p>
										Educadora Ambiental
									</p>
									<br>
									<br>
								</div>

    			    		    <div class="wow fadeIn column" data-wow-delay="0.1s">
    			    		        <img class="ui small centered circular image" src="img/employees/Jair_Contenido_Ambiental.jpg">
									<h2 class="green-text">
										Jair
									</h2>
									<p>
										Contenido Ambiental
									</p>
									<br>
									<br>
								</div>
							</div>

							<div class="row">
								<div class="ui wow fadeIn four wide column" data-wow-delay="0.1s">
    			    		        <img class="ui small centered circular image" src="img/employees/Adriana_Voluntaria.jpg">
									<h2 class="green-text">
										Adriana
									</h2>
									<p>
										Voluntaria
									</p>
									<br>
									<br>
								</div>
							</div>
						</div>

						<div class="wow fadeInUp ui one column stackable center aligned page grid">
            	    	  <div class="column twelve wide">
							<a href="">
            	    	        <div id="my-green" class="ui vertical animated button" tabindex="0">
            	    	          <div class="visible content">BOLSA DE TRABAJO</div>
            	    	          <div class="hidden content">
								  <i class="fas fa-briefcase"></i>
            	    	          </div>
            	    	        </div>
            	    	      </a>
            	      	</div>
					</div>
					<br>
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

    <!-- OWL CAROUSEL QUERY --> 
    <script src="js/qwerty/owl/premios.js"></script>
    <!-- SEMANTIC UI QUERY -->
	<script src="js/qwerty/semantic/menu-mandler.js"></script>
    <!-- WOW QWERTY -->
    <script src="js/qwerty/wow/wow.js"></script>

</body>
</html>