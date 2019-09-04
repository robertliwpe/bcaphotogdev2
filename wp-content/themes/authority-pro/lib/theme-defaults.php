<?php
/**
 * Authority Pro.
 *
 * This file adds the default theme settings to the Authority Pro Theme.
 *
 * @package Authority
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/authority/
 */

add_filter( 'genesis_theme_settings_defaults', 'authority_theme_defaults' );
/**
 * Updates theme settings on reset.
 *
 * Can be removed when Genesis Theme Settings are removed from WP admin.
 *
 * @since 1.0.0
 *
 * @param array $defaults Default theme settings.
 * @return array Modified defaults.
 */
function authority_theme_defaults( $defaults ) {

	$args = genesis_get_config( 'child-theme-settings-genesis' );

	return wp_parse_args( $args, $defaults );

}
