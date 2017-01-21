<?php
/**
 * Template Name: Our Work
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
				get_template_part( 'templates/parts/header-ourwork' );
			elseif( get_row_layout() == 'bio_column_right' ):
				get_template_part( 'templates/parts/bio-column-right' );
			elseif( get_row_layout() == 'bio_column_left' ):
				get_template_part( 'templates/parts/bio-column-left' );
			elseif( get_row_layout() == 'button_call_to_action' ):
				get_template_part( 'templates/parts/button_cta' );
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
