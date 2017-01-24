<?php
if( get_sub_field('global') == 1):
	while ( have_rows('page_content', get_id_by_slug('global-modules')) ) : the_row();
		if( get_row_layout() == 'bio_column_right' ):
			?>
			<div class="bio-container" style="background-color:<?php the_sub_field('bio_background_color')?>">
				<div class="left-half-r" style="background-image: url(<?php echo the_sub_field('bio_image')?>"></div>	
				<div class="right-half-r">
					<div class="content">
						<?php the_sub_field('bio_text')?>
					</div>	
				</div>
			</div>
			<?php
		endif;
	endwhile;
else :
?>
<div class="bio-container" style="background-color:<?php the_sub_field('bio_background_color')?>">
	<div class="left-half-r" style="background-image: url(<?php echo the_sub_field('bio_image')?>"></div>	
	<div class="right-half-r">
		<div class="content">
			<?php the_sub_field('bio_text')?>
		</div>	
	</div>
</div>
<?php
endif;
