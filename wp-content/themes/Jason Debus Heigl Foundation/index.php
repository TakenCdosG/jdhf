<?php
/**
 * The main template file.
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
	        elseif( get_row_layout() == 'news_listing' ): 
	        	get_template_part( 'templates/parts/load_news' );       	
	        elseif( get_row_layout() == 'button_call_to_action' ): 
	        	get_template_part( 'templates/parts/button_cta' );       	
	        elseif( get_row_layout() == 'general_content' ): 
	        	get_template_part( 'templates/parts/general_content' );
	        elseif( get_row_layout() == 'callout' ):
				get_template_part( 'templates/parts/callout');       	
	        elseif( get_row_layout() == 'two_column_content' ): 
	        	get_template_part( 'templates/parts/two_column_content' );       	
	        elseif( get_row_layout() == 'founders' ): 
	        	get_template_part( 'templates/parts/founders' );       	
	        elseif( get_row_layout() == 'dogs_list' ): 
	        	get_template_part( 'templates/parts/load_dogs' );
			elseif( get_row_layout() == 'bio_column_right' ):
				get_template_part( 'templates/parts/bio-column-right' );
			elseif( get_row_layout() == 'bio_column_left' ):
				get_template_part( 'templates/parts/bio-column-left' );       	
	        elseif( get_row_layout() == 'general_page_content' ): 
	        	get_template_part( 'templates/parts/general_page_content' );
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