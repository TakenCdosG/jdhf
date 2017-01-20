<?php
if( get_sub_field('global') == 1):
    while ( have_rows('page_content', get_id_by_slug('global-modules')) ) : the_row();
        if( get_row_layout() == 'founders' ): 
        	?>
				<div class="two-column-content founders">
					<div class="container">
						<div class="row">
							<div class="content col-lg-12">
								<div class="content">
									<?php echo the_sub_field('panel_text') ?>
								</div>
							</div>							
						</div>	
						<div class="row">
							<div class="content col-sm-6">
								<div class="image">
									<img src="<?php echo the_sub_field('column_1_image') ?>" alt="">
								</div>
								<div class="content">
									<?php echo the_sub_field('column_1_text') ?>
								</div>
							</div>
							<div class="content col-sm-6">
								<div class="image">
									<img src="<?php echo the_sub_field('column_2_image') ?>" alt="">
								</div>
								<div class="content">
									<?php echo the_sub_field('column_2_text') ?>
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
<div class="two-column-content founders">
	<div class="container">
		<div class="row">
			<div class="content col-lg-12">
				<div class="content">
					<?php echo the_sub_field('panel_text') ?>
				</div>
			</div>							
		</div>	
		<div class="row">
			<div class="content col-sm-6">
				<div class="image">
					<img src="<?php echo the_sub_field('column_1_image') ?>" alt="">
				</div>
				<div class="content">
					<?php echo the_sub_field('column_1_text') ?>
				</div>
			</div>
			<div class="content col-sm-6">
				<div class="image">
					<img src="<?php echo the_sub_field('column_2_image') ?>" alt="">
				</div>
				<div class="content">
					<?php echo the_sub_field('column_2_text') ?>
				</div>
			</div>								
		</div>			
	</div>
</div>
<?php
endif;