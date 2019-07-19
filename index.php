
			
	<?php get_header(); ?>

		<main id="main" class="main_container">	

			<section id="intro slide" class="intro" data-background="#fff">

				<div class="home_section_head">
					<h2>La création de votre site web sur mesure !</h2>
					
				</div>

				<div class="container">

					<div class="row">
						
						<div class="col-md-6">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio assumenda excepturi accusantium dignissimos ad suscipit quisquam minima quasi quaerat vitae. Impedit sapiente saepe, ducimus magni alias odit eaque assumenda molestiae.</p>
						</div>

						<div class="col-md-6">
							<img src="#" alt="">
						</div>

					</div> <!-- row end -->
				</div> <!-- container end -->

				<div class="col-md-6 offset-md-3">
					
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
	

			<section id="projects slide" class="projects" data-background="#5FFBF1">
				
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


			<section id="services slide" class="services" data-background="#86A8E7">

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

			<section id="contact slide" class="contact" data-background="#D16BA5">
				
				<div class="home_section_head">
					<h2>Pour me contacter</h2>
				</div>

				<div>
				
				</div>

			</section>

		</main>

		

	</div> <!-- /.row -->

	<?php get_footer(); ?>
