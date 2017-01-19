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
						<div class="content col-lg-12">
							<h1 class="heading"><?php the_sub_field('heading') ?></h1>
							<div class="button"><?php echo do_shortcode(the_sub_field('button')) ?></div>
						</div>
					</div>
				</div>
			<?php
		elseif( get_row_layout() == 'otro_mas' ):
			the_sub_field('texts');
		endif;
	endwhile;
else :
?>
<div class="header" style="background:url(<?php the_sub_field('background_image') ?>)">
	<!-- <div class="donation-w-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="text">
						<?php //echo do_shortcode(get_sub_field('heading')) ?>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<div class="container">
		<div class="content">
			<h1 class="heading"><?php do_shortcode(get_sub_field('heading'));?></h1>
			<div class="heading-donate-bar">
				<p>HELP SAVE THE ANIMALS</p>
			</div>
			<div class="heading-donate">
				<?php echo do_shortcode('[give_form id="47"]'); ?>
			</div>

			<div class="button"><?php echo do_shortcode(the_sub_field('button')) ?></div>
		</div>
	</div>
</div>
<?php
endif;
