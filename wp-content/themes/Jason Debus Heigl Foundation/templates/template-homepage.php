<?php
/**
 * Template Name: Homepage
 * Page template file.
 * @package Jason Debus Heigl Foundation
 * @since Jason Debus Heigl Foundation 1.0
 */
?>
<?php get_header(); ?>


	<?php
	// check if the flexible content field has rows of data
	if( have_rows('page_content') ):
	     // loop through the rows of data
	    while ( have_rows('page_content') ) : the_row();
	        if( get_row_layout() == 'header' ): 
				get_template_part( 'templates/parts/header' );        	
	        elseif( get_row_layout() == 'statistics' ): 
	        	get_template_part( 'templates/parts/statistics' );       	
	        elseif( get_row_layout() == 'donation_w_background_image' ): 
	        	get_template_part( 'templates/parts/donation_w_bg' );       	
	        elseif( get_row_layout() == 'general_quote' ): 
	        	get_template_part( 'templates/parts/general_quote' );       	
	        elseif( get_row_layout() == 'programs' ): 
	        	get_template_part( 'templates/parts/programs' );
	        endif;
	    endwhile;
	else :
	    // no layouts found
	endif;

	/*if (have_posts()) :
		while (have_posts()) :
			the_post();
			the_author_posts_link();
			the_content();
		endwhile;
	endif;*/
	?>


<?php get_footer(); ?>