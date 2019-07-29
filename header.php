<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Exemple de thème WordPress</title>
		<!-- Ajout d'une nouvelle feuille de style qui sera spécifique à notre thème -->
		
		<?php wp_head(); ?>
	</head>

	<body id="body" data-hijacking="off" data-animation="scaleDown">
		


		<!-- LOADER -->
		<?php
		$preloader_display = get_theme_mod( 'vectorweb_disable_preloader' );
		if ( isset( $preloader_display ) && $preloader_display != 1 ) :
		?>

		<div id="loader">
			<div class="home_svg_content svg-attribute-demo">
				<svg width="528" height="528" viewBox="0 0 128 128">
					<filter id="displacementFilter">
						<feTurbulence type="turbulence" baseFrequency=".05" numOctaves="2" result="turbulence" style="transform: scale(1);"></feTurbulence>
						<feDisplacementMap in2="turbulence" in="SourceGraphic" scale="15" xChannelSelector="R" yChannelSelector="G"></feDisplacementMap>
					</filter>
					<polygon points="" style="filter: url('#displacementFilter'); transform: scale(1);"></polygon>
				</svg>
			</div>

		</div>

		<?php endif; ?>


		<header id="header" class="header">
			
			
			<div class="custom_logo">
				<?php

					if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
					}
				?>
			</div>
			

			
			<div id="navigationToggle" class="nav_toggle">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>		

			<nav id="navigationMenu" class="nav_container" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>
				<div class="client">
					<button type="button" class="client_button">
						<a class="account_button_link" href="vw-admin/vw-admin.php">Compte Client</a>
					</button>
				</div>
			</nav>
			
		</header>

		

		<section id="homeSection hero" class="home_hero cd-section slide">
	

			<div class="home_hero_text">
				<h1 class="hero_title text-pop-up-top">Vector Web</h1>

				<p class="hero_description tracking-in-contract-bck">Création de votre site web</p>

			</div>
			
			


			<div class="hero_down_btn">
				
				<a href="#">
					<span class="fa fa-chevron-circle-down"></span>
				</a>
				
			</div>

		</section>

		<!-- HEADER -->

		



