<?php

function mytheme_customize_register( $wp_customize ) {
	
   	$wp_customize->add_setting( 'my_setting', array(
	'default' => 'some default value for text field',
	'type' => 'theme_mod',
	'capability' => 'edit_theme_options',
	) );

	// Add the controls
	$wp_customize->add_control( 'my_setting', array(
	'label' => __( 'My Text Field', 'translation_domain' ),
	'section' => 'my_section',
	'settings' => 'my_setting',
	'type' => 'text',
	'priority' => 10
	) );
}
add_action( 'customize_register', 'mytheme_customize_register' );



function my_custom_text_settings( $wp_customize ) {

	$wp_customize->add_setting( 'my_setting', array(
	'default' => 'some default value for text field',
	'type' => 'theme_mod',
	'capability' => 'edit_theme_options',
	) );
	// Add the controls
	$wp_customize->add_control( 'my_setting', array(
	'label' => __( 'My Text Field', 'translation_domain' ),
	'section' => 'my_section',
	'settings' => 'my_setting',
	'type' => 'text',
	'priority' => 10
	) );
}

add_action( 'customize_register', 'my_custom_text_settings' );