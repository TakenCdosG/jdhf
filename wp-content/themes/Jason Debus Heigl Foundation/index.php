<?php
/**
 * The main template file.
 * @package Jason Debus Heigl Foundation
 * @since Jason Debus Heigl Foundation 1.0
 */
?>
<?php get_header(); ?>
	<?php
	function renderPart($part){
		if( get_sub_field('global') == 1):
			while ( have_rows('page_content', get_id_by_slug('global-modules')) ) : the_row();
				if( get_row_layout() == $part ):
					get_template_part( 'templates/parts/'.$part );
				endif;
			endwhile;
		else :
			get_template_part( 'templates/parts/'.$part );
		endif;
	}
	// check if the flexible content field has rows of data

	if( have_rows('page_content') ):
	     // loop through the rows of data

		$page_content = get_field('page_content');
		$key = array_search('header', array_column($page_content, 'acf_fc_layout'));
		if(!is_int($key)):
			echo "<div class='no-header'></div>";
		endif;

	    while ( have_rows('page_content') ) : the_row();
	    	if( get_row_layout() == 'header' ):
				renderPart('header');
	        elseif( get_row_layout() == 'statistics' ):
	        	renderPart('statistics');
	        elseif( get_row_layout() == 'donation_w_background_image' ):
	        	renderPart('donation_w_background_image');
	        elseif( get_row_layout() == 'general_quote' ):
	        	renderPart( 'general_quote' );
	        elseif( get_row_layout() == 'programs' ):
	        	renderPart( 'programs' );
	        elseif( get_row_layout() == 'news_listing' ):
	        	renderPart( 'news_listing' );
	        elseif( get_row_layout() == 'button_call_to_action' ):
	        	renderPart( 'button_call_to_action' );
	        elseif( get_row_layout() == 'general_content' ):
	        	renderPart( 'general_content' );
	        elseif( get_row_layout() == 'partner_content' ):
	        	renderPart( 'partner_content' );
	        elseif( get_row_layout() == 'callout' ):
				renderPart( 'callout');
	        elseif( get_row_layout() == 'two_column_content' ):
	        	renderPart( 'two_column_content' );
	        elseif( get_row_layout() == 'contact' ):
	        	renderPart( 'contact' );
	        elseif( get_row_layout() == 'founders' ):
	        	renderPart( 'founders' );
	        elseif( get_row_layout() == 'dogs_list' ):
	        	renderPart( 'dogs_list' );
	        elseif( get_row_layout() == 'adopted_dogs_list' ):
	        	renderPart( 'adopted_dogs_list' );
			elseif( get_row_layout() == 'bio_column_right' ):
				renderPart( 'bio_column_right' );
			elseif( get_row_layout() == 'bio_column_left' ):
				renderPart( 'bio_column_left' );
	        elseif( get_row_layout() == 'general_page_content' ):
	        	renderPart( 'general_page_content' );
	        elseif( get_row_layout() == 'form_panel' ):
	        	renderPart( 'form_panel' );
	        elseif( get_row_layout() == 'profile' ):
	        	renderPart( 'profile' );
	        endif;
	    endwhile;
	else :
		?>
		<div class='no-header'></div>
		<div class="general-content page">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<?php
						    // no layouts found
							if (have_posts()) :
								while (have_posts()) :
									the_post();
									echo "<h2>".get_the_title()."</h2>";
									the_content();
								endwhile;
							endif;
						?>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
<?php get_footer(); ?>
