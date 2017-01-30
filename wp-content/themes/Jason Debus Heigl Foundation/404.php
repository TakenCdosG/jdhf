<?php
/**
 * The 404 template file.
 * @package Jason Debus Heigl Foundation
 * @since Jason Debus Heigl Foundation 1.0
 */
?>
<?php get_header(); ?>
<div class='no-header'></div>
<div class="general-content page notfound">
	<div class="container">
		<div class="row">
			<div class="content col-lg-12">
				<div>
					<h1>Page Not Found</h1>
					<h2>Apologies, but the page you have requested could not be found.</h2>
					<p><a href="<?php echo site_url(); ?>">Back to home</p></a>
				</div>
			</div>
		</div>
	</div>	
</div>
<?php get_footer(); ?>