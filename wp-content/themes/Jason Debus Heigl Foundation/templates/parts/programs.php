<?php
if( get_sub_field('global') == 1):
    while ( have_rows('page_content', get_id_by_slug('global-modules')) ) : the_row();
        if( get_row_layout() == 'programs' ): 
        	?>
				<div class="programs">
					<div class="container">
						<div class="row">
							<div class="content col-lg-12">
								<div class="content">
									<?php echo the_sub_field('panel_text') ?>
								</div>
							</div>							
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="item">
									<div class="image" style="background:url(<?php the_sub_field('column_1_image') ?>);"></div>
									<div class="text">
										<?php echo the_sub_field('column_1_text') ?>
									</div>
									<div class="button">
										<a href="<?php the_sub_field('column_1_learn_more_url') ?>">Learn More</a>
									</div>									
								</div>
							</div>
							<div class="col-sm-4">
								<div class="item">
									<div class="image" style="background:url(<?php the_sub_field('column_2_image') ?>);"></div>
									<div class="text">
										<?php echo the_sub_field('column_2_text') ?>
									</div>
									<div class="button">
										<a href="<?php the_sub_field('column_2_learn_more_url') ?>">Learn More</a>
									</div>									
								</div>
							</div>
							<div class="col-sm-4">
								<div class="item">
									<div class="image" style="background:url(<?php the_sub_field('column_3_image') ?>);"></div>
									<div class="text">
										<?php echo the_sub_field('column_3_text') ?>
									</div>
									<div class="button">
										<a href="<?php the_sub_field('column_3_learn_more_url') ?>">Learn More</a>
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
<div class="programs">
	<div class="container">
		<div class="row">
			<div class="content col-lg-12">
				<div class="content">
					<?php echo the_sub_field('panel_text') ?>
				</div>
			</div>							
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="item">
					<div class="image" style="background:url(<?php the_sub_field('column_1_image') ?>);"></div>
					<div class="text">
						<?php echo the_sub_field('column_1_text') ?>
					</div>
					<div class="button">
						<a href="<?php the_sub_field('column_1_learn_more_url') ?>">Learn More</a>
					</div>									
				</div>
			</div>
			<div class="col-sm-4">
				<div class="item">
					<div class="image" style="background:url(<?php the_sub_field('column_2_image') ?>);"></div>
					<div class="text">
						<?php echo the_sub_field('column_2_text') ?>
					</div>
					<div class="button">
						<a href="<?php the_sub_field('column_2_learn_more_url') ?>">Learn More</a>
					</div>									
				</div>
			</div>
			<div class="col-sm-4">
				<div class="item">
					<div class="image" style="background:url(<?php the_sub_field('column_3_image') ?>);"></div>
					<div class="text">
						<?php echo the_sub_field('column_3_text') ?>
					</div>
					<div class="button">
						<a href="<?php the_sub_field('column_3_learn_more_url') ?>">Learn More</a>
					</div>									
				</div>
			</div>
		</div>				
	</div>
</div>
<?php
endif;