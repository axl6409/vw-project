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

		<section id="hero" class="home_hero slide" data-background="rgba(132,94,194,0.5)">		

			<div class="home_hero_text">
				<h1 class="hero_title text-pop-up-top">Vector Web</h1>

				<p class="hero_description tracking-in-contract-bck">Création de votre site web</p>
			</div>

			<div id="section1" class="slide" data-background="#845EC2">
			  	<svg width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none">
			  		<path d="M0 0 L50 95 L100 0 V100 H0" fill="rgba(0,0,0,0.0)" />
			    	<path d="M0 20 L50 95 L100 20 V100 H0" fill="rgba(0,0,0,0.0)" />
			    	<path d="M0 40 L50 95 L100 40 V100 H0" fill="rgba(0,0,0,0.0)" />
			  	</svg>
			</div>

			<div class="hero_down_btn">
				
				<a href="#">
					<span class="fas fa-chevron-circle-down"></span>
				</a>
				
			</div>

		</section>