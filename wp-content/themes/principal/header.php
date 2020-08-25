<?php
define('RUTATEMA', get_stylesheet_directory_uri());

define('IMAGENES', RUTATEMA);

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="author" content="Sys&Web">
	<meta name="keywords" content="ERP, sistemas, desarrollo de sistemas, sistemas a la medida, desarrollo de software, programación PHP, desarrollo PHP, desarrollo de aplicaciones,
					desarrollo de APPs, desarrollo de redes sociales, desarrollo de portales, desarrollo de CMS, responsive web design, diseño digital, desarrollo paginas web, diseño paginas web,
					diseño web profesional, profesionales en paginas web, empresa diseño web, diseño sitios web, WMS, TMS">
	<meta name="description" content="Sys&Web es una empresa mexicana líder en diseño y soluciones tecnológicas - logistica, desarrollo de sistemas a la medida, diseño y desarrollo de páginas web, ERP, WMS y TMS">
	<meta name='og:image' content='<?php echo IMAGENES ?>/images/home/ogg.png'>
	<!-- Google Site Verification
					================================================== -->
	<meta name="google-site-verification" content="a9hgQ8-s22R3C3ouroCNWPh7_h-To9wtMGcEzkdjFp0" />




	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- For Window Tab Color -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#28224a">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#28224a">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="#28224a">
	<title>Sys&Web : : Design and Development Systems Custom , ERP, Websites, CMS, WMS and TMS</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="20x20" href="<?php echo IMAGENES ?>/images/fav-icon/icon.png">
	<!-- Base Css -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>">
	<!-- Responsive Css -->
	<link rel="stylesheet" type="text/css" href="<?php echo IMAGENES ?>/css/responsive.css">
	
	<link rel="stylesheet" href="https://rawgit.com/atmist/snazzy-info-window/master/dist/snazzy-info-window.css">

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<!-- jQuery -->
	<!--script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFS662TIpavY_kjhzIPMurkD_fN_X8f_0&callback=initMap"></script>
    <script src="https://snazzymaps.com/explore.json?key=7f33e1fe-91b8-4593-a024-822fd518bf2f"></script-->
    
	
	<script src="<?php echo IMAGENES ?>/js/jquery.2.2.3.min.js"></script>
	<!-- Popper js -->
	<script src="<?php echo IMAGENES ?>/js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="<?php echo IMAGENES ?>/js/bootstrap.min.js"></script>
	<!-- menu  -->
	<script src="<?php echo IMAGENES ?>/js/custom.js"></script>
	<!-- AOS js -->
	<script src="<?php echo IMAGENES ?>/js/aos.js"></script>
	<!-- WOW js -->
	<script src="<?php echo IMAGENES ?>/js/wow.min.js"></script>
	<!-- owl.carousel -->
	<script src="<?php echo IMAGENES ?>/js/owl.carousel.min.js"></script>
	<!-- js count to -->
	<script src="<?php echo IMAGENES ?>/js/jquery.appear.js"></script>
	<script src="<?php echo IMAGENES ?>/js/jquery.countTo.js"></script>
	<!-- Fancybox -->
	<script src="<?php echo IMAGENES ?>/js/jquery.fancybox.min.js"></script>


	<!-- Theme js -->
	<script src="<?php echo IMAGENES ?>/js/lang.js"></script>
	<script src="<?php echo IMAGENES ?>/js/theme.js"></script>

	<!-- Agrega las clases al menu -->

	<script src="<?php echo IMAGENES ?>/js/submenus.js"></script>

	<!-- For IExplorer-->
	<!--[if lt IE 9]>
						<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
						<script src="vendor/html5shiv.js"></script>
						<script src="vendor/respond.js"></script>
					<![endif]-->

	<!-- Google Analytics
					================================================== -->

	<script>
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-12847118-1', 'auto');
		ga('send', 'pageview');
	</script>
	<!-- End Google Analytics -->
	
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFS662TIpavY_kjhzIPMurkD_fN_X8f_0"></script>
        
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 4,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(28.153589,-99.103521), 

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#360f5a"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#dadada"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"transit","elementType":"all","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#747474"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(29.760427, -95.369803),
                    map: map,
                    /*icon: {
                        path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
                        strokeColor: "#F436CC",
                    },*/
                    //title: 'Houston'
                });
            }
        </script>
        <style type="text/css">
            /* Set a size for our map container, the Google Map will take up 100% of this container */
            #map {
                width:100%; 
                height:600px;
            }
        </style>
</head>

<body>
	<div class="main-page-wrapper">

		<!-- ===================================================
			Loading Transition
		==================================================== -->
		<!-- Preloader -->
		<section>
			<div id="preloader">
				<div id="ctn-preloader" class="ctn-preloader">
					<div class="animation-preloader">
						<div class="spinner"></div>
						<div class="txt-loading">
							<span data-text-preloader="" class="letters-loading">
								<img src="<?php echo IMAGENES ?>/images/logo/logo-claro.svg" alt="">
							</span>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--
					=============================================
						Theme Main Menu
					==============================================
					-->
		<div class="theme-main-menu theme-menu-one">
			<div class="logo"><a href="<?php echo get_site_url() ?>/index.php/home"><img src="<?php echo IMAGENES ?>/images/logo/logo-claro.svg" alt="Sys&Web Logo"></a></div>
			<nav id="mega-menu-holder" class="navbar navbar-expand-lg">
				<div class="container position-relative nav-container">
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<i class="flaticon-setup"></i>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<?php
						wp_nav_menu(
							array(
								'container' => false,
								'items_wrap' => '<ul class="navbar-nav">
													%3$s
												</ul>',
								'menu_class'      => '',
								"theme_location" => "menu",
							)
						); ?>
					</div>
				</div> <!-- /.container -->
			</nav> <!-- /#mega-menu-holder -->
			<div class="header-right-widget">
				<ul>
					<li><a href="index.php/contact" class="contact-us white-shdw-button">Contact Us. <i class="icon flaticon-next"></i></a></li>
				</ul>
			</div> <!-- /.header-right-widget -->
		</div> <!-- /.theme-main-menu -->