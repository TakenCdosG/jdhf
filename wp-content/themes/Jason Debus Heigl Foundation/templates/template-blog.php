<?php
/**
 * Template Name: Blog
 * Page template file.
 * @package Jason Debus Heigl Foundation
 * @since Jason Debus Heigl Foundation 1.0
 */
?>
<?php get_header(); ?>
<div class="white-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="grid">
					<div class="grid-sizer"></div>
					<?php 
						$args = Array(
						  'post_type' => 'post',
						  'posts_per_page' => '7',
						);
						// The Query
						$the_query = new WP_Query( $args );

						// The Loop
						if ( $the_query->have_posts() ) {
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
							?>
								<div class="grid-item"> 
									<div class="post">
										<div class="date">
											<?php echo get_the_date() ?> 
										</div>
										<div class="featured-image">
											<?php echo get_the_post_thumbnail_url() ?> 
										</div>
										<div class="title">
											<?php echo get_the_title() ?> 
										</div>
										<div class="title">
											<?php echo get_the_excerpt() ?> 
										</div>
										<div class="readmore">
											<a href="<?php echo get_the_permalink() ?> ">Read More</a>
										</div>											
									</div>
									
								</div>
							<?php
							}
							/* Restore original Post Data */
							wp_reset_postdata();
						} else {
							// no posts found
						}
					?>
				</div>
			</div>
		</div>
	</div>	
</div>
<?php get_footer(); ?>