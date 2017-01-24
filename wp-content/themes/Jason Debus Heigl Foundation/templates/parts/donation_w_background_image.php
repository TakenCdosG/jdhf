<div class="donation-w-bg" style="background:url(<?php echo the_sub_field('background_image') ?>);">
<div class="container">
	<div class="row">
		<div class="content col-lg-12">
			<div class="content">
				<?php echo the_sub_field('panel_text') ?>
			</div>
		</div>							
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="text">
				<?php echo do_shortcode(get_sub_field('donation_shortcode')) ?>
			</div>
		</div>
	</div>				
</div>
</div>