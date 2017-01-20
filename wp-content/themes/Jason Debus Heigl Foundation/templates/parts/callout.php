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
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="center-block">
									<?php the_sub_field('heading_text');?>
								</div>							
							</div>
						</div>
					</div>
				</div>
			<?php
		endif;
	endwhile;
else :
?>

<div class="callout" style="background:url(<?php the_sub_field('background_image') ?>)">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="center-block">
					<?php the_sub_field('heading_text');?>
				</div>							
			</div>
		</div>
	</div>
</div>
<?php
endif;
