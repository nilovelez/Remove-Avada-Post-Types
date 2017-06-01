<?php
/*
Plugin Name: Remove Avada Post Types
Description: Plugin to deactivate Avada's portfolio and FAQ's post types and thumbnail sizes
Version:     0.1
Author:      Nilo Velez
License:     GPL2
*/

function remove_avada_image_sizes(){
	remove_image_size( 'portfolio-full');
	remove_image_size( 'portfolio-one');
	remove_image_size( 'portfolio-two');
	remove_image_size( 'portfolio-three');
	remove_image_size( 'portfolio-five');
}
add_action( 'init', 'remove_avada_image_sizes');



function unregister_avada_post_types(){
	unregister_taxonomy_for_object_type( 'portfolio_category', 'avada_portfolio' );
	unregister_taxonomy_for_object_type( 'portfolio_skills', 'avada_portfolio' );
	unregister_taxonomy_for_object_type( 'portfolio_tags', 'avada_portfolio' );
	unregister_post_type('avada_portfolio');
	unregister_taxonomy_for_object_type( 'faq_category', 'avada_faq' );
	unregister_post_type('avada_faq');

	
}
add_action( 'init', array( $this, 'unregister_avada_post_types' ) );

/*
add_image_size( 'blog-large', 669, 272, true );
add_image_size( 'blog-medium', 320, 202, true );
add_image_size( 'recent-posts', 700, 441, true );
add_image_size( 'recent-works-thumbnail', 66, 66, true );
// Image sizes used for grid layouts.
add_image_size( '200', 200, '', false );
add_image_size( '400', 400, '', false );
add_image_size( '600', 600, '', false );
add_image_size( '800', 800, '', false );
add_image_size( '1200', 1200, '', false );




// Register custom post-types and taxonomies.
add_action( 'init', array( $this, 'register_post_types' ) );

register_post_type(
				'avada_portfolio',
register_taxonomy(
				'portfolio_category',
				'avada_portfolio',
register_taxonomy(
				'portfolio_skills',
				'avada_portfolio',
register_taxonomy(
				'portfolio_tags',
				'avada_portfolio',

register_post_type(
				'avada_faq',
register_taxonomy(
				'faq_category',



add_action( 'after_setup_theme', array( $this, 'add_image_size' ) );

add_image_size( 'portfolio-full', 940, 400, true );
add_image_size( 'portfolio-one', 540, 272, true );
add_image_size( 'portfolio-two', 460, 295, true );
add_image_size( 'portfolio-three', 300, 214, true );
add_image_size( 'portfolio-five', 177, 142, true );

*/

