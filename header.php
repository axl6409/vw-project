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

	<body>

		<header class="header navbar fixed-top navbar-dark bg-dark ss-style-triangles">
			
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
				<?php
					$custom_logo_id = get_theme_mod('custom_logo');
					$image = wp_get_attachment_image_src($custom_logo_id , 'full');
				?>
				<img src="<?php echo $image[0]; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
			</a>

			<nav id="navigation-principale" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>
			</nav>

			<div class="account_button">
				<button type="button" ><a href="vw-admin/vw-admin.php">Mon Compte</a></button>
			</div>
		
		</header>

		<section id="hero" class="home_hero">
			
			<div class="header_img"></div>

			<div class="home_hero_text">
				<h1 class="hero_title">Vector Web</h1>

				<p class="hero_description">Création de votre site web</p>
			</div>

			<?php if( get_theme_mod( 'cd_button_display', 'show' ) == 'show' ) : ?>
			    <a href="" class='button'>Come On In</a>
			<?php endif ?>

			<div id="section1">
			  	<svg width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none">
			  		<path d="M0 0 L50 95 L100 0 V100 H0" fill="rgba(255,255,255,0.3)" />
			    	<path d="M0 20 L50 95 L100 20 V100 H0" fill="rgba(255,255,255,0.5)" />
			    	<path d="M0 40 L50 95 L100 40 V100 H0" fill="rgba(255,255,255,1)" />
			  	</svg>
			</div>

		</section>