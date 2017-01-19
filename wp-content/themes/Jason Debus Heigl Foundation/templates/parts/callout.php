<?php
/**
 * Module Name: Callout Donate Page Template
 * Page template file.
 * @package Jason Debus Heigl Foundation
 * @since Jason Debus Heigl Foundation 1.0
 */

if( get_sub_field('global') == 1):
	while ( have_rows('page_content', get_id_by_slug('global-modules')) ) : the_row();
		if( get_row_layout() == 'callout' ):
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
