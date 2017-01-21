<div class="general-content page">
	<div class="container">
		<div class="row">
			<div class="content col-lg-12">
				<?php
				if (have_posts()) :
					while (have_posts()) :
						the_post();
				?>
						<div class="title">
							<h2><?php echo get_the_title(); ?></h2>
						</div> 
						<div class="featured-image">
							<img src="<?php echo the_post_thumbnail_url() ?>">
						</div>
						<div class="content">
							<?php echo the_sub_field('panel_text') ?>
						</div>
						
				<?php
					endwhile;
				endif;
				?>

			</div>							
		</div>			
	</div>
</div>
