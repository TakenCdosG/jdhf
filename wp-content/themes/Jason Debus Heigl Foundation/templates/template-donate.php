<?php
/**
 * Template Name: Donate
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
				get_template_part( 'templates/parts/header-donate');
			elseif( get_row_layout() == 'callout' ):
				get_template_part( 'templates/parts/callout');
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
