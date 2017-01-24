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
	<div class="blog-header">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h1>BLOG</h1>
				</div>
				<div class="col-md-4">
					<input type="text">
					<input type="text">
					<input type="text">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<?php
						$args = Array(
						  'post_type' => 'post',
						  'posts_per_page' => '1',
						);
						// The Query
						$the_query = new WP_Query( $args );

						// The Loop
						if ( $the_query->have_posts() ) {
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
							?>
								<div class="last-post"> 
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
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="grid">
					<div class="grid-sizer"></div>
					<?php
						$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
						$args = Array(
						  'post_type' => 'post',
						  'posts_per_page' => '2',
						  'offset' => '1',
  						  'paged' => $paged
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
										<div class="featured-image" style="background-image: url( <?php echo get_the_post_thumbnail_url(); ?> )">
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
				<?php
					$big = 999999999; // need an unlikely integer

					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $the_query->max_num_pages
					) ); 
				?>
			</div>
		</div>
	</div>	
</div>
<?php get_footer(); ?>