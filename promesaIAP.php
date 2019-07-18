<?php include 'php/functions.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Grupo Promesa | Promesa I.A.P.</title>

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
					<div class="ui dropdown menu-item item">
						<div id="active" class="text">NUESTROS PROGRAMAS</div>
					  	<i class="dropdown icon"></i>
					  	<div class="menu ui transition hidden">
							<a href="escuelaPromesa.php" class="item">Escuela</a>
							<a href="empresaPromesa.php" class="item">Empresa</a>
							<a href="universidadPromesa.php" class="item">Universidad</a>
							<a href="viviendaPromesa.php" class="item">Vivienda</a>
							<a href="promesaIAP.php" class="active item">Promesa I.A.P</a>
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
						  <a href="empresaPromesa.php" class="item">Empresa</a>
						  <a href="universidadPromesa.php" class="item">Universidad</a>
						  <a href="viviendaPromesa.php" class="item">Vivienda</a>
						  <a href="promesaIAP.php" class="active item">Promesa I.A.P</a>
						</div>
					</div>
					<a href="voluntariado.php" class="item">VOLUNTARIADO</a>
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
                          <video controls autoplay>
  						  <source src="video/promesaIAP.mp4" type="video/mp4">
						  Your browser does not support the video tag.
					    </video>
        	  	      <!-- <img src="img/header_voluntariado.png" alt="Voluntario Promesa"> -->
        	  	    </div>
        	  	  </div>
        	  	</section>
			<!-- 
				<iframe 
					width="560" 
					height="315" 
					src="https://www.youtube.com/embed/rdc8bT6k0mU" 
					frameborder="0" 
					allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
					allowfullscreen>
				</iframe>
			-->
			</div>
			
			<!--==========================
				PROMESA IAP
			============================-->
			<div class="wow fadeInUp row">
				<section class="section">
            	    <div class="ui container">
						<h3>PROMESA I.A.P.</h3>
            	        <h2>
							Visita <a href="http://www.promesa.iap.org.mx" target="_blank"> <span class="blue-text"> www.promesa.iap.org.mx </span> </a> 
							para más información sobre <span class="blue-text"> Promesa I.A.P. </span>
						</h2>
					</div>
					<br>
					<br>
					
					<div class="ui stackable two column grid">
						<div class="wow fadeIn row" data-wow-delay="0.3s">

							<div class="wow fadeInUp column" data-wow-delay="0.2s">
								<a href="https://www.facebook.com/PROMESAiap/" target="_blank"> <i class="fab fa-facebook-square fa-5x"></i> </a>
								<h2> <a href="https://www.facebook.com/PROMESAiap/" target="_blank"> <span id="blue-text"> @PROMESAiap </span> </a> </h2>
							</div>

							<div class="wow fadeInUp column" data-wow-delay="0.4s">
								<a href="https://www.instagram.com/promesa.iap/?hl=en" target="_blank"> <i class="fab fa-instagram fa-5x"></i> </a>
								<h2> <a href="https://www.instagram.com/promesa.iap/?hl=en" target="_blank"> <span id="blue-text"> @promesa.iap </span> </a> </h2>
							</div>
						</div>
					</div>
            	</section>
			</div>
			
			<!--==========================
				REDES PROESA IAP
            ============================-->
			<div class="row">

            </div>
			
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
	<!-- WOW JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

	<!-- SEMANTIC UI QUERY -->
	<script src="js/qwerty/semantic/menu-mandler.js"></script>
	<!-- WOW QWERTY -->
	<script src="js/qwerty/wow/wow.js"></script>
	
</body>
</html>