<?php
if( get_sub_field('global') == 1):
	while ( have_rows('page_content', get_id_by_slug('global-modules')) ) : the_row();
		if( get_row_layout() == 'form_panel' ):
			?>
				<div class="container-fluid" style="background-color:<?php the_sub_field('background_color')?>">
					<div class="row">
						<h3 class="foster_heading"><?php the_sub_field('form_header')?></h3>
						<div class="col-sm-2"></div>
						<div class="col-sm-8 foster_form_container" style="background-color: #9fd7e3;">
								<p><?php echo do_shortcode(get_sub_field('form_content'))?></p>
						</div>
						<div class="col-sm-2"></div>
					</div>
				</div>
			<?php
		endif;
	endwhile;
else :
?>
<div class="container-fluid" style="background-color:<?php the_sub_field('background_color')?>">
	<div class="row">
		<h3 class="foster_heading"><?php the_sub_field('form_header')?></h3>
		<div class="col-sm-2"></div>
		<div class="col-sm-8 foster_form_container" style="background-color: #9fd7e3;">
				<p><?php echo do_shortcode(get_sub_field('form_content'))?></p>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>
<?php
endif;
