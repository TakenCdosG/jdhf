<?php
/**
 * Module Name: Header Donate Template
 * Page template file.
 * @package Jason Debus Heigl Foundation
 * @since Jason Debus Heigl Foundation 1.0
 */

if( get_sub_field('global') == 1):
	while ( have_rows('page_content', get_id_by_slug('global-modules')) ) : the_row();
		if( get_row_layout() == 'callout' ):
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

<div class="callout" style="background:url(<?php the_sub_field('background_image') ?>)">
	<div class="row">
		<div class="center-block">
			<h1><?php the_sub_field('heading_text');?></h1>
		</div>
	</div>
	<div class="row">
		<div class="center-block">
			<p class="text"><?php the_sub_field('text');?></p>
		</div>
	</div>
</div>
<?php
endif;
