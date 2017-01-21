<?php
if( get_sub_field('global') == 1):
	while ( have_rows('page_content', get_id_by_slug('global-modules')) ) : the_row();
		if( get_row_layout() == 'bio_column_right' ):
			?>
				<section class="bio-container">
					<div class="left-half-r" >
						<article>
							<img src="<?php the_sub_field('bio_image') ?>">
						</article>
					</div>
					<div class="right-half-r" style="background-color:<?php the_sub_field('bio_background_color')?>">
						<article class="bio-text">
							<p><?php the_sub_field('bio_text')?></p>
						</article>
					</div>
				</section>
			<?php
		endif;
	endwhile;
else :
?>
<section class="bio-container">
	<div class="left-half-r" >
		<article>
			<img src="<?php the_sub_field('bio_image') ?>">
		</article>
	</div>
	<div class="right-half-r" style="background-color:<?php the_sub_field('bio_background_color')?>">
		<article class="bio-text">
			<p><?php the_sub_field('bio_text')?></p>
			<p><?php echo do_shortcode(get_sub_field('bio_button')) ?></p>
		</article>
	</div>
</section>
<?php
endif;
