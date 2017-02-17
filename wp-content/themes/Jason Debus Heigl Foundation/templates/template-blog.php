<?php
/**
 * Template Name: Blog
 * Page template file.
 * @package Jason Debus Heigl Foundation
 * @since Jason Debus Heigl Foundation 1.0
 */
?>
<?php get_header(); ?>
<div class='no-header'></div>
<div class="white-bg" style="padding-top:0;">
	<div class="blog-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<h1>BLOG</h1>
				</div>
				<div class="col-xs-6">
					<div class="input-container">
						<div class="search">
							<form class="search" action="/" method="get">
							    <input type="text" placeholder="Search" name="s" id="search" value="<?php the_search_query(); ?>" />
							    <input type="submit" alt="Search" value="&#xf002;"/>
							</form>
						</div>
						<div id="categories">
							<?php wp_dropdown_categories( 'show_option_none=Select category' ); ?>
							<script type="text/javascript">
								<!--
								var dropdown = document.getElementById("cat");
								function onCatChange() {
									if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
										location.href = "<?php echo esc_url( home_url( '/' ) ); ?>?cat="+dropdown.options[dropdown.selectedIndex].value;
									}
								}
								dropdown.onchange = onCatChange;
								-->
							</script>
						</div>
						<!-- Begin MailChimp Signup Form -->
						<div id="mc_embed_signup">
						<?php echo '<div class="mail_chimp_pro">'.do_shortcode('[mc4wp_form id="8772"]').'</div>';?>
						<div style="clear:both; width:296px; max-width:100%;">We'll never share your email address and you can opt out at any time.</div>
						</div>
						<!--End mc_embed_signup-->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="blog-list">
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
								$featured_image = get_the_post_thumbnail_url();
							?>
								<div class="last-post">
									<div class="post">
										<?php if(!empty($featured_image)): ?><a href="<?php echo get_the_permalink() ?> "><div class="featured-image" style="background-image: url( <?php echo get_the_post_thumbnail_url(); ?> )"></div></a> <?php endif;?>

										<div class="right-col">
											<div class="date">
												<?php echo get_the_date() ?>
											</div>
											<div class="title">
												<a href="<?php echo get_the_permalink() ?> "><?php echo get_the_title() ?></a>
											</div>
											<div class="content">
												<?php echo get_the_excerpt() ?>
											</div>
											<div class="readmore">
												<a href="<?php echo get_the_permalink() ?> ">Read More</a>
											</div>
										</div>
										<div class="clearfix"></div>
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
			<div class="blog-list">
				<div class="grid">
					<div class="grid-sizer"></div>
					<?php
						$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						$last_post = get_posts("post_type=post&numberposts=1");
						$last_post = array($last_post[0]->ID);
						$args = Array(
						  'post_type' => 'post',
						  'posts_per_page' => '6',
  						  'paged' => $paged,
  						  'post__not_in' => $last_post,
						);
						// The Query
						$the_query2 = new WP_Query( $args );
						// The Loop
						if ( $the_query2->have_posts() ) {
							while ( $the_query2->have_posts() ) {
								$the_query2->the_post();
								$featured_image = get_the_post_thumbnail_url();
							?>
								<div class="grid-item">
									<div class="post">
										<div class="date">
											<?php echo get_the_date() ?>
										</div>
										<?php if(!empty($featured_image)): ?><a href="<?php echo get_the_permalink() ?> "><div class="featured-image" style="background-image: url( <?php echo get_the_post_thumbnail_url(); ?> )"></div></a> <?php endif;?>

										<div class="title">
											<a href="<?php echo get_the_permalink() ?> "><?php echo get_the_title() ?></a>
										</div>
										<div class="content">
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
				<div class="pagination">
					<?php
						$big = 999999999; // need an unlikely integer

						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'current' => max( 1, get_query_var('paged') ),
							'total' => $the_query2->max_num_pages,
							'prev_text'  => __('<'),
							'next_text' => __('>')
						) );
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
