<?php include 'php/functions.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Grupo Promesa | Voluntariado</title>

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

			<div class="wow fadeIn computer only row m2">
				<div id="navbar" class="ui borderless fixed menu">
					<a href="index.php" id="logo-item" class="brand item">
					  <img src="img/logo.png" alt="logo">
					</a>

					<a href="index.php" class="item">INICIO</a>
					<a href="aboutUs.php" class="item">SOBRE NOSOTROS</a>
					<a href="gallery.php" class="item">GALERÍA</a>
					<div class="ui dropdown item">
						<div class="text">NUESTROS PROGRAMAS</div>
					  	<i class="dropdown icon"></i>
					  	<div class="menu ui transition hidden">
							<a href="escuelaPromesa.php" class="item">Escuela</a>
							<a href="empresaPromesa.php" class="item">Empresa</a>
							<a href="universidadPromesa.php" class="item">Universidad</a>
							<a href="viviendaPromesa.php" class="item">Vivienda</a>
							<a href="promesaIAP.php" class="item">Promesa I.A.P</a>
					  	</div>
					</div>
					<a id="active" href="voluntariado.php" class="item">VOLUNTARIADO</a>
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
						<div class="text">NUESTROS PROGRAMAS</div>

						<div class="menu">
						  <a href="escuelaPromesa.php" class="item">Escuela</a>
						  <a href="empresaPromesa.php" class="item">Empresa</a>
						  <a href="universidadPromesa.php" class="item">Universidad</a>
						  <a href="viviendaPromesa.php" class="item">Vivienda</a>
						  <a href="promesaIAP.php" class="item">Promesa I.A.P</a>
						</div>
					</div>
					<a id="active" href="voluntariado.php" class="item">VOLUNTARIADO</a>
					<a href="sumate.php" class="item">ÚNETE</a>
				</div>
            </div>
            
        	<!--==========================
	    	    IMAGE HEADER
	    	  ============================-->
        	<div class="wow fadeIn row menu-height">
        	  <section id="pintro">
        	    <div class="intro-container">
        	        <div class="carousel-content">
        	            <img src="img/header_voluntariado.png" alt="Voluntario Promesa">
        	        </div>
        	    </div>
        	  </section>
			</div>
			
			<!--==========================
				VOLUNTARIADO
			============================-->
			<div class="wow fadeInIn row">
				<section class="section">
            	    <div class="ui container">
            	        <h3>¿Qué hace un voluntario PROMESA?</h3>
						<br>

						<div class="wow fadeIn" data-wow-delay="0.2s">
            	        	<i class="fas fa-tools fa-5x"></i>
            	        	<br>
            	        	<p style="color: black">Te damos las herramientas para que puedas generar un cambio desde tu comunidad.</p>
            	        	<br>
							<br>
						</div>

						<div class="wow fadeIn" data-wow-delay="0.2s">
            	        	<i class="fas fa-school fa-5x"></i>
            	        	<br>
            	        	<p style="color: black">Ayúdanos a que más empresas y escuelas adopten una Educación Ambiental como parte fundamental de sus procesos de enseñanza.</p>
            	        	<br>
							<br>							
						</div>

						<div class="wow fadeIn" data-wow-delay="0.2s">
							<i class="fas fa-people-carry fa-5x"></i>
            	        	<br>
            	        	<p style="color: black">Involúcrate en actividades ambientales con escuelas, empresas y comunidades de atencion prioritaria.</p>
							<br>
							<br>
						</div>

            	    </div>
            	</section>
			</div>
			
			<!--==========================
				RAZONES
	    	============================-->
			<div class="wow fadeIn row">
            	<section id="green-section" class="section">
            	    <div class="ui container">
            	            <h3>3 RAZONES PARA INVOLUCRARTE CON NOSOTROS</h3>

						<br>
						
						<div class="wow fadeIn" data-wow-delay="0.2s">
							<i class="fas fa-chalkboard-teacher fa-5x"></i>
            	        	<p >Contar con capacitaciones en temas ambientales de acuerdo a los programas en los que te involucres.</p>
            	        	<br>
            	        	<br>
						</div>

						<div class="wow fadeIn" data-wow-delay="0.2s">
            	        	<i class="fas fa-level-up-alt fa-5x"></i>
            	        	<p>Adquirir experiencia como un agente de cambio ambiental.</p>
            	        	<br>
            	        	<br>
						</div>
						
						<div class="wow fadeIn" data-wow-delay="0.2s">
							<i class="fas fa-globe-americas fa-5x"></i>
            	        	<p>Formar parte de la red de Educación Ambiental más grande del mundo.</p>
							<br>
							<br>
						</div>

            	        <div class="wow fadeInUp ui one column stackable center aligned page grid" data-wow-delay="0.3s">
            	          <div class="column twelve wide">
            	            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdKDzVmPytCz8lShg0342CG2j0VvDdU_GfOzyihEHVzK_Wa2Q/viewform" target="_blank">
            	                <div class="ui vertical animated inverted button" tabindex="0">
            	                  <div class="visible content">INVOLÚCRATE</div>
            	                  <div class="hidden content">
            	                    <i class="fas fa-hands-helping green-text"></i>
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
				mas info
	    	============================-->
			<div class="wow fadeIn row">
				<section class="section">
            	    <div class="ui container">
            	        <h3>APRENDE Y CONVIERTETE EN EL LIDER AMBIENTAL QUE NUESTRO PAÍS TANTO NECESITA</h3>
            	        <br>

						<div class="wow fadeInUp ui one column stackable center aligned page grid" data-wow-delay="0.3s">
            	          <div class="column twelve wide">
            	            <a href="img/carta_voluntariado.png" target="_blank">
            	                <div id="my-green" class="ui vertical animated button" tabindex="0">
            	                  <div class="visible content">MÁS INFORMACIÓN</div>
            	                  <div class="hidden content">
            	                    <i class="fas fa-info"></i>
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
    <script src="js/jquer.js"></script>
	<!-- SEMANTIC UI QUERY -->
	<script src="js/qwerty/semantic/menu-mandler.js"></script>
	<!-- WOW QWERTY -->
	<script src="js/qwerty/wow/wow.js"></script>
	
</body>
</html>