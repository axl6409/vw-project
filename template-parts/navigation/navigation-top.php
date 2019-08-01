	

	<div id="navigationToggle" class="nav_toggle">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>		

	<nav id="navigationMenu" class="nav_container" role="navigation">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'top',
				'menu_id'        => 'top',
			)
		);
		?>
		<div class="client">
			<button type="button" class="client_button">
				<a class="account_button_link" href="vw-admin/vw-admin.php">Compte Client</a>
			</button>
		</div>
	</nav>