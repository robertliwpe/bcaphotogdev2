<?php
/**
 * Block Editor settings specific to Authority Pro.
 *
 * @package Authority
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/authority/
 */

$authority_link_color            = get_theme_mod( 'authority_primary_color', authority_customizer_get_default_primary_color() );
$authority_link_color_contrast   = authority_color_contrast( $authority_link_color );
$authority_link_color_brightness = authority_color_brightness( $authority_link_color, '+', 35 );

return array(
	'admin-fonts-url'              => 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:600,700,900|Libre+Baskerville:400,400italic,700',
	'content-width'                => 1200,
	'default-button-bg'            => $authority_link_color,
	'default-button-color'         => $authority_link_color_contrast,
	'default-button-outline-hover' => $authority_link_color_brightness,
	'default-link-color'           => $authority_link_color,
	'editor-color-palette'         => array(
		array(
			'name'  => __( 'Primary color', 'authority-pro' ),
			'slug'  => 'theme-primary',
			'color' => $authority_link_color,
		),
	),
	'editor-font-sizes'            => array(
		array(
			'name' => __( 'Small', 'authority-pro' ),
			'size' => 12,
			'slug' => 'small',
		),
		array(
			'name' => __( 'Normal', 'authority-pro' ),
			'size' => 16,
			'slug' => 'normal',
		),
		array(
			'name' => __( 'Large', 'authority-pro' ),
			'size' => 20,
			'slug' => 'large',
		),
		array(
			'name' => __( 'Larger', 'authority-pro' ),
			'size' => 24,
			'slug' => 'larger',
		),
	),
);
