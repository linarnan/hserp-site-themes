<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rara_Business
 */


get_header('product-intro'); ?>
<?php
while ( have_posts() ) : the_post();

	get_template_part( 'template-parts/content', 'page' );
	
	/**
	 * Comment Template
	 * 
	 * @hooked rara_business_comment
	*/
	do_action( 'rara_business_after_page_content' );

endwhile; // End of the loop.
?>
<?php
if ( 'full-width' != $sidebar_layout )
get_sidebar();
get_footer();
