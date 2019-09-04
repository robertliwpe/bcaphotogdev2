<?php
/**
 * Authority Pro.
 *
 * Onboarding config to load plugins, homepage content, and menus on theme activation.
 *
 * @package Authority
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/authority/
 */

$authority_onboarding_config = array(
	'dependencies'     => array(
		'plugins' => array(
			array(
				'name'       => __( 'Atomic Blocks', 'authority-pro' ),
				'slug'       => 'atomic-blocks/atomicblocks.php',
				'public_url' => 'https://atomicblocks.com/',
			),
			array(
				'name'       => __( 'Genesis eNews Extended (Third Party)', 'authority-pro' ),
				'slug'       => 'genesis-enews-extended/plugin.php',
				'public_url' => 'https://wordpress.org/plugins/genesis-enews-extended/',
			),
			array(
				'name'       => __( 'WPForms Lite (Third Party)', 'authority-pro' ),
				'slug'       => 'wpforms-lite/wpforms.php',
				'public_url' => 'https://wordpress.org/plugins/wpforms-lite/',
			),
		),
	),
	'content'          => array(
		'homepage' => array(
			'post_title'     => 'Homepage',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/homepage.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/blocks.php',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		),
		'blocks'   => array(
			'post_title'     => 'Block Content Examples',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/block-examples.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/blocks.php',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		),
		'about'    => array(
			'post_title'     => 'About Us',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/about.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/blocks.php',
			'featured_image' => CHILD_URL . '/config/import/images/about.jpg',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		),
		'contact'  => array(
			'post_title'     => 'Contact Us',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/contact.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		),
		'landing'  => array(
			'post_title'     => 'Landing Page',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/landing-page.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/landing.php',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		),
		'pricing'  => array(
			'post_title'     => 'Pricing Page',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/pricing-page.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/blocks.php',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		),
	),
	'navigation_menus' => array(
		'primary' => array(
			'homepage' => array(
				'title' => 'Home',
			),
			'about'    => array(
				'title' => 'About Us',
			),
			'contact'  => array(
				'title' => 'Contact Us',
			),
			'blocks'   => array(
				'title' => 'Block Examples',
			),
			'landing'  => array(
				'title' => 'Landing Page',
			),
			'pricing'  => array(
				'title' => 'Pricing Page',
			),
		),
	),
);

// Import sample posts if the site is fresh.
if ( get_option( 'fresh_site' ) ) {
	$authority_onboarding_config['content']['sample-post-1'] = array(
		'post_title'     => 'Why White Space and Typography Matter in Minimal Design',
		'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'featured_image' => CHILD_URL . '/config/import/images/post1.jpg',
		'comment_status' => 'closed',
		'ping_status'    => 'closed',
	);
	$authority_onboarding_config['content']['sample-post-2'] = array(
		'post_title'     => 'The Secret Method to Creating the Perfect Amount of Simple',
		'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'featured_image' => CHILD_URL . '/config/import/images/post2.jpg',
		'comment_status' => 'closed',
		'ping_status'    => 'closed',
	);
	$authority_onboarding_config['content']['sample-post-3'] = array(
		'post_title'     => 'Understanding the Differences of Good (and Great) Design',
		'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'featured_image' => CHILD_URL . '/config/import/images/post3.jpg',
		'comment_status' => 'closed',
		'ping_status'    => 'closed',
	);
}

return $authority_onboarding_config;
