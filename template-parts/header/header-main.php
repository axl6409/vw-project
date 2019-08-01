	

	<div class="custom_logo">
		<?php

			if ( function_exists( 'the_custom_logo' ) ) {
				the_custom_logo();
			}
		?>
	</div>

	<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>