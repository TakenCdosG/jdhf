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
						<form action="//jasonheiglfoundation.us11.list-manage.com/subscribe/post?u=d57a7d726b51705cc02e045f4&amp;id=68223ebbfe" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						    <div id="mc_embed_signup_scroll">
							
						<div class="mc-field-group">
							<label for="mce-EMAIL">Email Address </label>
							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
						</div>
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d57a7d726b51705cc02e045f4_68223ebbfe" tabindex="-1" value=""></div>
						    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
						    </div>
						</form>
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
						$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
						$args = Array(
						  'post_type' => 'post',
						  'posts_per_page' => '7',
						  'offset' => '1',
  						  'paged' => $paged
						);
						// The Query
						$the_query = new WP_Query( $args );
						$featured_image = get_the_post_thumbnail_url();

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
							'total' => $the_query->max_num_pages,
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