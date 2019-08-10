<?php include 'php/functions.php';?>
<!DOCTYPE html>
<html lang="es">
  <head>

    <meta charset="utf-8">
    <title>Grupo Promesa</title>

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

          <div class="wow fadeIn computer only row menu-height">
              <div id="navbar" class="ui borderless fixed menu">
                  <a href="index.php" id="logo-item" class="brand item">
                    <img src="img/logo.png" alt="logo">
                  </a>

                  <a href="index.php" id="active" class="item">INICIO</a>
                  <a href="aboutUs.php" class="item">SOBRE NOSOTROS</a>
                  <a href="gallery.php" class="item">GALERÍA</a>
                  <div class="ui dropdown item">NUESTROS PROGRAMAS
                    <i class="dropdown icon"></i>
                    <div class="ui borderless menu transition hidden">
                      <a href="escuelaPromesa.php" class="item">Escuela</a>
                      <a href="empresaPromesa.php" class="item">Empresa</a>
                      <a href="universidadPromesa.php" class="item">Universidad</a>
                      <a href="viviendaPromesa.php" class="item">Vivienda</a>
                      <a href="promesaIAP.php" class="item">Promesa I.A.P</a>
                    </div>
                  </div>
                  <a href="voluntariado.php" class="item item">VOLUNTARIADO</a>
                  <a href="sumate.php" class="item">SÚMATE</a>
                  <!-- <div class="right menu"></div> -->
              </div>
          </div>

          <div class="wow fadeIn mobile tablet only narrow row menu-height">
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
                  <a href="index.php" id="active" class="item">INICIO</a>
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
                  <a href="voluntariado.php" class="item">VOLUNTARIADO</a>
                  <a href="sumate.php" class="item">SÚMATE</a>
              </div>
          </div>

          <!--==========================
	          HEADER IMAGE
	        ============================-->
			    <div class="wow fadeIn row">
			    	<section id="pintro">
    	    		    <div class="intro-container">
    	    		        <img src="img/index/header.jpg" alt="Escuela Promesa">
    	    		    </div>
			    	</section>
			    </div>

          <!--==========================
	          ABOUT US SECTIONL
	        ============================-->
          <div class="wow fadeIn row">
            <section id="parallax" class="section">
              <div class="ui container">
                <h3>¿QUIÉNES SOMOS?</h3>
                  <h2> Somos una empresa social dedicada a desarrollar e implementar programas y estrategias sustentables de alto impacto que solucionen la carencia de educación ambiental en instituciones educativas, empresas, viviendas y organizaciones, entre otras. </h2>
                  <h2> Como parte de los programas impulsamos a la separación de residuos sólidos reciclables para su venta y reinvertimos más del 50% del ingreso generado en nuestro objeto social para fortalecer la educación ambiental en el país. </h2>
              </div>
            </section>
          </div>

          <!--==========================
            IMPACTO AMBIENTAL
	        ============================-->
          <div class="wow fadeIn row">
            <section class="section">
              <div class="ui container">

                <h3>NUESTRO IMPACTO AMBIENTAL</h3>
                <div class="ui stackable four column grid">
                  <div class="row">
                    <div class="wow fadeInUp column">
                      <i class="fa fa-recycle fa-5x"></i>
                      <p id="number-counter" class="counter">2,481,408</p>
                      <p>kg de residuos sólidos reciclados</p>
                    </div>

                    <div class="wow fadeInUp column">
                      <i class="fa fa-tree fa-5x"></i>
                      <p id="number-counter" class="counter">37,546</p>
                      <p>
                        árboles salvados
                      </p>
                    </div>

                    <div class="wow fadeInUp column">
                      <i class="fa fa-tint fa-5x"></i>
                      <p id="number-counter" class="counter">67</p>
                      <p>
                        millones de litros<br>
                        de agua ahorrados
                      </p>
                    </div>

                    <div class="wow fadeInUp column">
                      <i class="fa fa-bolt fa-5x"></i>
                      <p id="number-counter" class="counter">16</p>
                      <p>
                        millones de<br>
                        kW ahorrados
                      </p>
                    </div>
                  </div>
                </div>
                </div>
            </section>
          </div>

          <!--==========================
            IMPACTO SOCIAL
	        ============================-->
          <div class="wow fadeIn row">
            <section id="green-section" class="section">
                <div class="ui container">

                <h3>NUESTRO IMPACTO SOCIAL</h3>

                <div class="ui stackable two column grid">
                  <div class="row">

                    <div class="wow fadeIn column">
                      <i class="fas fa-coins fa-5x"></i>
                      <p id="white-number-counter" class="counter">800</p>
                      <p>
                        kg de tapitas donadas para fondear el tratamiento <br>
                        de niños con cáncer.
                      </p>
                    </div>

                    <div class="wow fadeIn column">
                      <i class="fas fa-home fa-5x"></i>
                      <p id="white-number-counter" class="counter">31</p>
                      <p>
                        techos construidos durante 2018 con la donación de 20 <br> 
                        toneladas de envases Tetra Pak.
                      </p>
                    </div>

                  </div>
                </div>

              </div>
            </section>
          </div>

          <!--==========================
            NUESTRO ALCANCE
	        ============================-->
          <div class="wow fadeIn row">
            <section class="section">
              <div class="ui container">

                <h3>Nuestro alcance</h3>

                <div class="ui stackable four column grid">
                  <div class="row">

                    <div class="wow fadeInUp column">
                      <i class="fas fa-school fa-5x"></i>
                      <p id="number-counter" class="counter">230</p>
                      <h2 class="title">ESCUELAS</h2>
                    </div>

                    <div class="wow fadeInUp column">
                      <i class="fas fa-university fa-5x"></i>
                      <p id="number-counter" class="counter">2</p>
                      <h2 class="title">UNIVERSIDADES</h2>
                    </div>

                    <div class="wow fadeInUp column">
                      <i class="fas fa-home fa-5x"></i>
                      <p id="number-counter" class="counter">6</p>
                      <h2 class="title">VIVIENDAS</h2>
                    </div>

                    <div class="wow fadeInUp column">
                      <i class="fas fa-industry fa-5x"></i>
                      <p id="number-counter" class="counter">33</p>
                      <h2 class="title">EMPRESAS</h2>
                    </div>
                  </div>
                </div>
                
              </div>
            </section>
          </div>

          <!--==========================
            PROGRAMAS
	        ============================-->
          <div class="row">
            <section id="parallax" class="wow fadeIn section">
                <div class="ui container">

                  <h3>PROGRAMAS</h3>

                  <div class="ui two stackable cards">
                    <div class="wow fadeIn card">
                      <div class="image">
                        <img src="img/index/programas/escuela.jpg">
                      </div>
                      <div class="content">
                        <h2 class="title">Escuela</h2>

                        <p>
                          Programa de educación para el desarrollo sostenible que busca transformar la cultura ambiental en las comunidades escolares.
                        </p>
                      </div>
                      <div class="extra content">
                        <div class="ui one column stackable center aligned page grid">
                          <div class="column twelve wide">
                              <a href="escuelaPromesa.php">
                                <div id="my-blue" class="ui vertical animated button" tabindex="0">
                                  <div class="visible content">FORMA PARTE DEL CAMBIO</div>
                                  <div class="hidden content">
                                    <i class="fas fa-school"></i>
                                  </div>
                                </div>
                              </a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="wow fadeIn card">
                      <div class="image">
                        <img src="img/index/programas/empresa.jpg">
                      </div>
                      <div class="content">
                        <h2 class="title">Empresa</h2>

                        <p>
                          Programa que integra a las empresas líderes en México en la formación de una comunidad activa en el cuidado del medio ambiente.
                        </p>

                      </div>
                      <div class="extra content">
                        <div class="ui one column stackable center aligned page grid">
                          <div class="column twelve wide">
                              <a href="empresaPromesa.php">
                                <div id="my-green" class="ui vertical animated button" tabindex="0">
                                  <div class="visible content">FORMA PARTE DEL CAMBIO</div>
                                  <div class="hidden content">
                                    <i class="fa fa-industry"></i>
                                  </div>
                                </div>
                              </a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="wow fadeIn card">
                      <div class="image">
                        <img src="img/index/programas/universidad.jpg">
                      </div>
                      <div class="content">
                        <h2 class="title">Universidad</h2>
                        <p>
                          Programa que promueve el liderazgo y compromiso socio-ambiental en comunidades universitarias a través de generar propuestas de intervención y mejora.
                        </p>
                      </div>
                      <div class="extra content">
                        <div class="ui one column stackable center aligned page grid">
                          <div class="column twelve wide">
                            <a href="universidadPromesa.php">
                              <div id="my-green" class="ui vertical animated button" tabindex="0">
                                  <div class="visible content">FORMA PARTE DEL CAMBIO</div>
                                  <div class="hidden content">
                                    <i class="fas fa-university"></i>
                                  </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="wow fadeIn card">
                      <div class="image">
                        <img src="img/index/programas/vivienda.jpg">
                      </div>
                      <div class="content">
                        <h2 class="title">Vivienda</h2>
                        <p>
                          Programa que implementa soluciones particulares para viviendas, unidades habitacionales y condominios del área metropolitana.
                        </p>
                      </div>
                      <div class="extra content">
                        <div class="ui one column stackable center aligned page grid">
                          <div class="column twelve wide">
                            <a href="viviendaPromesa.php">
                              <div id="my-blue" class="ui vertical animated button" tabindex="0">
                                  <div class="visible content">FORMA PARTE DEL CAMBIO</div>
                                  <div class="hidden content">
                                    <i class="fas fa-home"></i>
                                  </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="wow fadeIn card">
                      <div class="image">
                        <img src="img/index/programas/promesaiap.jpg">
                      </div>
                      <div class="content">

                        <h2 class="title">Promesa I.A.P</h2>
                        <p>
                          Institución sin fines de lucro que busca mejorar la calidad de vida de las personas y transformar la cultura ambiental fomentando estrategias y actividades comunitarias para el mejoramiento del espacio.
                        </p>
                      </div>

                      <div class="extra content">
                        <div class="ui one column stackable center aligned page grid">
                          <div class="column twelve wide">
                            <a href="promesaIAP.php">
                              <div id="my-blue" class="ui vertical animated button" tabindex="0">
                                  <div class="visible content">FORMA PARTE DEL CAMBIO</div>
                                  <div class="hidden content">
                                    <i class="fas fa-hands-helping"></i>
                                  </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="wow fadeIn card">
                      <div class="image">
                        <img src="img/index/programas/voluntariado.jpg">
                      </div>
                      <div class="content">
                        <h2 class="title">Voluntarios</h2>         
                        <p>
                          Programa que busca formar agentes líderes de cambio otorgando las herramientas necesarias para formar parte un cambio en la cultura ambiental de México y dejar una huella positiva en el mundo.
                        </p>
                      </div>
                      <div class="extra content">
                        <div class="ui one column stackable center aligned page grid">
                          <div class="column twelve wide">
                            <a href="voluntariado.php">
                              <div id="my-green" class="ui vertical animated button" tabindex="0">
                                  <div class="visible content">FORMA PARTE DEL CAMBIO</div>
                                  <div class="hidden content">
                                    <i class="fas fa-people-carry"></i>
                                  </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </section>
          </div>



          <!--==========================
            ALIADOS
	        ============================-->
          <div class="row">
            <section id="parallax" class="wow fadeIn section">
              <div class="ui container">

                <h3>Nuestros Aliados</h3>

                <div class="parallax-item">
                  <p>
                    <i class="fas fa-quote-left fa-1x quote-sign-left"></i> Un gran ejército se conforma de pequeñas partes <br> que actúan juntas para lograr un mismo objetivo.
                    <i class="fas fa-quote-right quote-sign-right"></i>
                   </p>
                </div>
              </div>
            </section>
          </div>

          <div id="parallax" class="wow fadeIn row">
            <div class="ui container">
              <?php carousel("img/aliados/organizaciones");?>
            </div>
          </div>

          <div class="wow fadeIn row">
            <section id="parallax" class="section">
              <div class="ui container">
                <h2>Si tienes algún producto o servicio amigable con el ambiente, <br> puedes integrarte a nuestra comunidad de aliados.</h2>
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
            BOLETÍN
	        ============================-->
          <div class="wow fadeIn row">
            <section class="section">
	          	<div class="ui container">
                <h3>Inscríbete a nuestro boletín</h3>

                <h2>
                  Entérate de las noticias y tips más relevantes <br> sobre el medio ambiente y de Grupo Promesa.
                </h2>

                <div class="wow fadeInUp ui one column stackable center aligned page grid">
                  <div class="column twelve wide">
                    <a href="https://forms.gle/D9LXKSXutoiSGBzM6" target="_blank" >
	          			  	<div id="my-green" class="ui vertical animated button" tabindex="0">
            			  			<div class="visible content">BOLETÍN</div>
            			  			<div class="hidden content">
                            <i class="far fa-newspaper"></i>
	          			  		</div>
	          			  	</div>
	          			  </a>
                  </div>
                </div>
                
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

    <!-- GOOGLE MAPS -->
    <script async defer
	    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZ3-jELLTX7sMp7kyusDedjN9hGxcVq4g&callback=initMap">
    </script>
    <!-- SEMANTIC UI JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="js/owlcarousel/owl.carousel.min.js"></script>
    <!-- COUNTER UP -->
    <script src="https://cdn.jsdelivr.net/npm/jquery.counterup@2.1.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
    <!-- WOW JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <!-- OWL CAROUSEL ALIADOS QWERTY --> 
    <script src="js/qwerty/owl/aliados.js"></script>
    <!-- SEMANTIC UI MENU HANDLER QWERTY -->
    <script src="js/qwerty/semantic/menu-mandler.js"></script>
    <!-- COUNTER UP QWERTY -->
    <script src="js/qwerty/counterUp/counterUp.js"></script>
    <!-- WOW QWERTY -->
    <script src="js/qwerty/wow/wow.js"></script>

  </body>
</html>