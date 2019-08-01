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
		

		<?php get_template_part( 'template-parts/loader/loader', 'main' ); ?>


		<header id="header" class="header">
			
			<?php get_template_part( 'template-parts/header/header', 'main' ); ?>
			
		</header>
