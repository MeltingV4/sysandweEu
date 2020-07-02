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
	<title>Sys&Web : : Diseño y Desarrollo de Sistemas a la medida, ERP, Sitios Web, CMS, WMS y TMS</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="20x20" href="<?php echo IMAGENES ?>/images/fav-icon/icon.png">
	<!-- Base Css -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>">
	<!-- Responsive Css -->
	<link rel="stylesheet" type="text/css" href="<?php echo IMAGENES ?>/css/responsive.css">

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<!-- jQuery -->
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
			<div class="logo"><a href="<?php echo get_site_url() ?>/index.php/inicio"><img src="<?php echo IMAGENES ?>/images/logo/logo-claro.svg" alt="Sys&Web Logo"></a></div>
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
													<li class="nav-item dropdown active  position-relative">
														<a href="' . get_site_url() . '/index.php/inicio" class="nav-link dropdown-toggle">Inicio.</a>
													</li>
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
					<li><a href="index.php/contacto" class="contact-us white-shdw-button">Contáctanos <i class="icon flaticon-next"></i></a></li>
				</ul>
			</div> <!-- /.header-right-widget -->
		</div> <!-- /.theme-main-menu -->