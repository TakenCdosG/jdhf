<?php
if( get_sub_field('global') == 1):
	while ( have_rows('page_content', get_id_by_slug('global-modules')) ) : the_row();
		if( get_row_layout() == 'header' ):
			?>
				<div class="header" style="background:url(<?php the_sub_field('background_image') ?>)">
					<div class="container">
						<div class="content">	
							<h1 class="heading"><?php the_sub_field('heading') ?></h1>
							<div class="button"><?php echo do_shortcode(get_sub_field('button')) ?></div>
						</div>
					</div>
				</div>
			<?php
		endif;
	endwhile;
else :
?>
<div class="header" style="background:url(<?php the_sub_field('background_image') ?>)">
	<div class="container">
		<div class="content">
			<h1 class="heading"><?php the_sub_field('heading') ?></h1>
			<div class="button"><?php echo do_shortcode(get_sub_field('button')) ?></div>
		</div>
	</div>
</div>
<?php
endif;
