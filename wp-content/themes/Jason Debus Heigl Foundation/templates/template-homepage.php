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
	        	if( get_sub_field('global') == 1):
				    while ( have_rows('page_content', 14) ) : the_row();
				        if( get_row_layout() == 'header' ): 
				        	
				        	?>
								<div class="header" style="background:url(<?php the_sub_field('background_image') ?>)">
									<div class="container">	
										<div class="content col-lg-12">	
											<h1 class="heading"><?php the_sub_field('heading') ?></h1>
											<div class="button"><?php echo do_shortcode(the_sub_field('button')) ?></div>
										</div>					
									</div>
								</div>
				        	<?php
				        elseif( get_row_layout() == 'otro_mas' ): 
				        	the_sub_field('texts');
				        endif;
				    endwhile;	        				
	        	else :
	        	?>
				<div class="header" style="background:url(<?php the_sub_field('background_image') ?>)">
					<div class="container">	
						<div class="content">	
							<h1 class="heading"><?php the_sub_field('heading') ?></h1>
							<div class="button"><?php echo do_shortcode(the_sub_field('button')) ?></div>
						</div>					
					</div>
				</div>
	        <?php
	        	endif;
	        	
	        	
	        elseif( get_row_layout() == 'otro_mas' ): 
	        	the_sub_field('texts');
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