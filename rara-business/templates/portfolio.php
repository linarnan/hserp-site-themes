<?php
/**
 * Template Name: Portfolio
 *
 * @package Rara_Business
 */
get_header('product-intro'); 

while ( have_posts() ) : the_post();

	get_template_part( 'template-parts/content', 'page' );
	
	/**
	 * Comment Template
	 * 
	 * @hooked rara_business_comment
	*/
	do_action( 'rara_business_after_page_content' );

endwhile; // End of the loop.


get_footer();
