
			
	<?php get_header(); ?>

		

		<section id="homeSection intro" class="intro cd-section slide">
			
			<div class="intro_head">

				<div class="container">
					<h1 class="intro_head_title">Titre de la section</h1>
					<p class="intro_head_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas omnis dolore esse impedit magni distinctio, sapiente sit, sequi tempora autem optio in dolorem totam minima odit temporibus quas a fugit.</p>
				</div>
				
			</div>

			<div class="intro_content">

				<div class="intro_img">
				
					<img src="wp-content/themes/vectorweb/assets/images/screens-1.png" alt="">

				</div>

				<div class="intro_content_icons">
					<ul>
						<li class="list_items">
							<a href="#">
								<i class="fas fa-pencil-ruler"></i>
							</a>
							
						</li>
						<li class="list_items">
							<a href="#">
								<i class="fas fa-mobile-alt"></i>
							</a>
							
						</li>
						<li class="list_items">
							<a href="#">
								<i class="fas fa-cog"></i>
							</a>
							
						</li>
					</ul>
				</div>


			</div>
			

		</section>


		<section id="homeSection projects " class="projects cd-section slide" data-background="#fff">
			
			<div class="home_section_head">
				<h2>Mes Derniers Projets</h2>
			</div>
			

		
			<div class="container">
				
				<div class="row">
	
				<?php 
				$args = array( 'post_type' => 'projects', 'posts_per_page' => 10 );
				$the_query = new WP_Query( $args ); 
				?>

				<?php if ( $the_query->have_posts() ) { ?>
					
					<?php while ( $the_query->have_posts() ) { 
						$the_query->the_post(); ?>

						<h2><?php the_title(); ?></h2>
						<div class="entry-content">
							<?php the_content(); ?> 
						</div>
						<?php wp_reset_postdata(); ?>
					
					<?php } ?>

				<?php } else { ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

				<?php } ?>


				</div> <!-- row end -->	

			</div> <!-- container end -->

		</section> <!-- container end -->


		<section id="homeSection services " class="services cd-section slide" data-background="#000">

			<div class="home_section_head">
				<h2>Quels Services ?</h2>
			</div>
			
			<div class="container">

				<div class="row">
					
					<?php 
					$args = array( 'post_type' => 'service', 'posts_per_page' => 10 );
					$the_query = new WP_Query( $args ); 
					?>

					<?php if ( $the_query->have_posts() ) { ?>
						
						<?php while ( $the_query->have_posts() ) { 
							$the_query->the_post(); ?>

							<h2><?php the_title(); ?></h2>
							<div class="entry-content">

								<?php the_content(); ?> 

							</div>

							<?php wp_reset_postdata(); ?>
						
						<?php } ?>

					<?php } else { ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

					<?php } ?>

				</div>

			</div>

		</section>

		<section id="homeSection contact " class="contact cd-section slide" data-background="#fff">
			
			<div class="home_section_head">
				<h2>Pour me contacter</h2>
			</div>

			<div>
			
			</div>

		</section>



	<?php get_footer(); ?>
