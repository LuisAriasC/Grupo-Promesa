<?php
include "php/functions.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Grupo Promesa | Universidad</title>

	<meta content="" name="description">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta name="mobile-web-app-capable" content="yes">

	<!-- SEMANTIC UI CSS Files -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" rel="stylesheet" />
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
	<!-- FONT AWESOME -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet" />
	<!-- ANIMATE CSS Files -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    
	<!-- MAIN CSS Files -->
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
					<div id="active" class="ui dropdown item">NUESTROS PROGRAMAS
					  <i class="dropdown icon"></i>
					  <div class="menu ui transition hidden">
						<a href="escuelaPromesa.php" class="item">Escuela</a>
						<a href="empresaPromesa.php" class="item">Empresa</a>
						<a href="universidadPromesa.php" class="active item">Universidad</a>
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
						  <a href="empresaPromesa.php" class="item">Empresa</a>
						  <a href="universidadPromesa.php" class="active item">Universidad</a>
						  <a href="viviendaPromesa.php" class="item">Vivienda</a>
						  <a href="promesaIAP.php" class="item">Promesa I.A.P</a>
						</div>
					</div>
					<a href="voluntariado.php" class="item">VOLUNTARIADO</a>
					<a href="sumate.php" class="item">ÚNETE</a>
				</div>
			</div>

			<!--==========================
				GALERÍA
          	============================-->
          	<div class="wow fadeIn row menu-height">
				<section id="pintro">
    			    <div class="intro-container">
    			        <div class="carousel-content">
    			            <img src="img/portadaUniversidad.png" alt="Universidad Promesa">
    			        </div>
    			    </div>
    			</section>
          	</div>
			  
			<!--==========================

          	============================-->
			<div class="wow fadeIn row menu-height">
				<section class="section">
				    <div class="ui container">
				    	<br><br>
				    	<h3>¿QUÉ ES UNIVERSIDAD	PROMESA?</h3>
				    	<p>Es un programa sustentable que implementa soluciones ecológicas con el objetivo de crear una verdadera cultura ambiental.</p>

						<div class="row counters">
    			    	    <div class="col-lg-12 text-center" id="ComunidadPromesaTitulo">Lo que hacemos se desarrolla en 5 etapas</div>
    			    	        <div class="text-center wow fadeIn">
    			    	            <img src="img/empresaPromesa.png" alt="" class="img-fluid">
    			    	        </div>
							</div>
						</div>
				    </div>
    			</section>
			</div>

			<!--==========================

          	============================-->
			<div class="wow fadeIn row menu-height">
			  	<section id="green-section"  class="section">
    			    <div class="ui container">
						<h3>¿QUÉ OFRECEMOS?</h3>
						<br>

						<div class="ui stackable two column grid">
							<div class="row">
								<div class="wow fadeIn column" data-wow-delay="0.1s">
									<i class="fas fa-university fa-5x"></i>
									<br>
									<p>	
										Formar una cultura social y ecológica en toda la comunidad universitaria <br> 
										para reducir el impacto ambiental negativo
									</p>
									<br>
								</div>

								<div class="wow fadeIn column" data-wow-delay="0.1s">
									  <i class="fas fa-recycle fa-5x"></i>
									<br>
									<p>
										Incrementar la tasa del reciclaje a través de un programa integral <br>
										dereciclaje y valorización de residuos sólidos.
									</p>	
									<br>
								</div>
							</div>

							<div class="row">
								<div class="wow fadeIn column" data-wow-delay="0.1s">
									<i class="fas fa-chalkboard-teacher fa-5x"></i>
									<br>
									<p>
										Asesoría en manejo de residuos
									</p>	
									<br>
								</div>
								
								<div class="wow fadeIn column" data-wow-delay="0.1s">
									<i class="fas fa-hands-helping fa-5x"></i>
									<br>
									<p>
										Campañas de reciclaje con causa social
									</p>	
									<br>
								</div>
							</div>
							
							<div class="row">
								<div class="wow fadeIn column" data-wow-delay="0.1s">
									  <i class="fas fa-check-double fa-5x"></i>
									<br>
									<p>	
										Cumplir con el marco legal y la normatividad local <br>
										para el manejo de los residuos
									</p>	
									<br>
								</div>
								
								<div class="wow fadeIn column" data-wow-delay="0.1s">
									  <i class="fas fa-users fa-5x"></i>
									<br>
									<p>
										Formación y capacitación de un comité de ecología universitario
									</p>	
									<br>
								</div>
							</div>

							<div class="row">
								<div class="wow fadeIn column" data-wow-delay="0.1s">
									  <i class="fas fa-calendar-check fa-5x"></i>
									<br>
									<p>
										Seguimiento mensual con el comité de ecología universitario
									</p>	
									<br>
								</div>

								<div class="wow fadeIn column" data-wow-delay="0.1s">
									<i class="fas fa-file-image fa-5x"></i>
									<br>
									<p>
										Entrega mensual de boletín ambiental y material multimedia <br>
										para sensibilizar a la comunidad escolar
									</p>	
									<br>
								</div>
							</div>
						</div>
					</div>
					<br>

					<div class="wow fadeInUp ui one column stackable center aligned page grid" data-wow-delay="0.1s">
            	      	<div class="column twelve wide">
            	          <a href="sumate.php">
            	            <div class="ui vertical animated inverted button" tabindex="0">
            	              <div class="visible content">ÚNETE</div>
            	              <div class="hidden content">
            	                <i class="fa fa-user-plus green-text"></i>
            	              </div>
            	            </div>
            	          </a>
            	      	</div>
					</div>
				</section>
			</div>
          	<!-- <div class="row">

          	</div>  -->
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