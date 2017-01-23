<?php
if( get_sub_field('global') == 1):
	while ( have_rows('page_content', get_id_by_slug('global-modules')) ) : the_row();
		if( get_row_layout() == 'bio_column_right' ):
			?>
				<div class="container-fluid">
					<div class="row bio-container">
						<div class="col-sm-6">
							<div class="left-half-r">
								<img src="<?php the_sub_field('bio_image')?>">
							</div>
						</div>
						<div class="col-sm-6 right-half-r" style="background-color:<?php the_sub_field('bio_background_color')?>">
							<p><?php the_sub_field('bio_text')?></p>
						</div>
					</div>
				</div>
			<?php
		endif;
	endwhile;
else :
?>
<div class="container-fluid">
	<div class="row bio-container">
		<div class="col-sm-6">
			<div class="left-half-r">
				<img src="<?php the_sub_field('bio_image')?>">
			</div>
		</div>
		<div class="col-sm-6 right-half-r" style="background-color:<?php the_sub_field('bio_background_color')?>">
			<p><?php the_sub_field('bio_text')?></p>
		</div>
	</div>
</div>
<?php
endif;
