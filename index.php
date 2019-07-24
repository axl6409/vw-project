
			
	<?php get_header(); ?>


		<section id="homeSection intro " class="intro cd-section slide" data-background="#000">

			<div class="home_section_head">
				<h2 class="text-shadow-drop-bottom">La création de votre site web sur mesure !</h2>		
			</div>

			<div class="intro_container">

				<div class="col-md-6">

						<p class="intro_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio assumenda excepturi accusantium dignissimos ad suscipit quisquam minima quasi quaerat vitae. Impedit sapiente saepe, ducimus magni alias odit eaque assumenda molestiae.</p>
					
				</div>
			</div> <!-- container end -->

			<div class="">
				
				<div class="creation_block_l">
					<ul>
						<li></li>
						<li></li>
					</ul>
				</div>

				<div class="creation_block_c">
					<div>
						<img src="" alt="">
					</div>
				</div>

				<div class="creation_block_r">
					<ul>
						<li></li>
						<li></li>
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
