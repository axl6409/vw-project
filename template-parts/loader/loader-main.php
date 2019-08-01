

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