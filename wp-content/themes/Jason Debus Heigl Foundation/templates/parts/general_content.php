<?php
if( get_sub_field('global') == 1):
    while ( have_rows('page_content', get_id_by_slug('global-modules')) ) : the_row();
        if( get_row_layout() == 'general_quote' ): 
        	?>
				<div class="general-content">
					<div class="container">
						<div class="row">
							<div class="content col-lg-12">
								<div class="content">
									<?php echo the_sub_field('panel_text') ?>
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
<div class="general-content">
	<div class="container">
		<div class="row">
			<div class="content col-lg-12">
				<div class="content">
					<?php echo the_sub_field('panel_text') ?>
				</div>
			</div>							
		</div>			
	</div>
</div>
<?php
endif;