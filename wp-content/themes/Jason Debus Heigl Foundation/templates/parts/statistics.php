<?php
if( get_sub_field('global') == 1):
    while ( have_rows('page_content', get_id_by_slug('global-modules')) ) : the_row();
        if( get_row_layout() == 'statistics' ): 
        	?>
				<div class="statistics">
					<div class="container">
						<div class="row">
							<div class="content col-lg-12">
								<div class="content">
									<?php echo the_sub_field('panel_text') ?>
								</div>
							</div>							
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="image" style="background:url(<?php the_sub_field('column_1_image') ?>);"></div>
								<div class="text">
									<?php the_sub_field('column_1_text') ?>
								</div>
							</div>
							<div class="col-md-4">
								<div class="image" style="background:url(<?php echo the_sub_field('column_2_image') ?>);"></div>
								<div class="text">
									<?php the_sub_field('column_2_text') ?>
								</div>
							</div>
							<div class="col-md-4">
								<div class="image" style="background:url(<?php echo the_sub_field('column_3_image') ?>);"></div>
								<div class="text">
									<?php the_sub_field('column_3_text') ?>
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
<div class="statistics">
	<div class="container">	
		<div class="row">
			<div class="content col-lg-12">
				<div class="content">
					<?php echo the_sub_field('panel_text') ?>
				</div>
			</div>							
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="image" style="background:url(<?php echo do_shortcode(the_sub_field('column_1_image')) ?>);"></div>
				<div class="text">
					<?php the_sub_field('column_1_text') ?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="image" style="background:url(<?php echo do_shortcode(the_sub_field('column_2_image')) ?>);"></div>
				<div class="text">
					<?php the_sub_field('column_2_text') ?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="image" style="background:url(<?php echo do_shortcode(the_sub_field('column_3_image')) ?>);"></div>
				<div class="text">
					<?php the_sub_field('column_3_text') ?>
				</div>
			</div>
		</div>						
	</div>
</div>
<?php
endif;