<?php
/**
 * The 404 template file.
 * @package Jason Debus Heigl Foundation
 * @since Jason Debus Heigl Foundation 1.0
 */
?>
<?php get_header(); ?>
<div class="white-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div>
					<?php
					if (have_posts()) :
						while (have_posts()) :
							the_post();
							the_content();
						endwhile;
					endif;
					?>
				</div>
			</div>
		</div>
	</div>	
</div>
<?php get_footer(); ?>