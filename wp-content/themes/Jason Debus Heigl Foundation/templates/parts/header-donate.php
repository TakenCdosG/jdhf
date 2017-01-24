<?php
/**
 * Module Name: Header Donate Template
 * Page template file.
 * @package Jason Debus Heigl Foundation
 * @since Jason Debus Heigl Foundation 1.0
 */

if( get_sub_field('global') == 1):
	while ( have_rows('page_content', get_id_by_slug('global-modules')) ) : the_row();
		if( get_row_layout() == 'header' ):
			?>
				<div class="header" style="background:url(<?php the_sub_field('background_image') ?>)">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="donation-basic">
									<div class="text">
										<?php echo do_shortcode(get_sub_field('heading')) ?>
									</div>
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
<div class="header" style="background:url(<?php echo the_sub_field('background_image') ?>)">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="donation-basic">
					<div class="text">
						<?php echo do_shortcode(get_sub_field('heading')) ?>
					</div>
				</div>
			</div>			
		</div>
	</div>
</div>
<?php
endif;
