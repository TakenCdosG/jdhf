<?php if(get_sub_field('load_news') == 1) :  
	if( get_sub_field('global') == 1):
	    while ( have_rows('page_content', get_id_by_slug('global-modules')) ) : the_row();
	        if( get_row_layout() == 'news_listing' ): 
	        	?>
					<div class="news-listing" style="background:url(<?php the_sub_field('background_image') ?>);">
						<div class="container">
							<div class="row">
								<div class="content col-lg-12">
									<div class="content">
										<?php 
											$args = Array(
											  'post_type' => 'post',
											  'posts_per_page' => '4',
											);
											// The Query
											$the_query = new WP_Query( $args );

											// The Loop
											if ( $the_query->have_posts() ) {
												while ( $the_query->have_posts() ) {
													$the_query->the_post();
												?>
													<div class="col-md-3"> 
														<div class="post">
															<div class="date">
																<?php echo get_the_date() ?> 
															</div>
															<div class="title">
																<?php echo get_the_title() ?> 
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
	        	<?php
	        endif;
	    endwhile;	        				
	else :
	?>
	<div class="news-listing" style="background:url(<?php the_sub_field('background_image') ?>);">
		<div class="container">
			<div class="row">
				<div class="content col-lg-12">
					<div class="content">
						<?php 
							$args = Array(
							  'post_type' => 'post',
							  'posts_per_page' => '4'
							);
							// The Query
							$the_query = new WP_Query( $args );

							// The Loop
							if ( $the_query->have_posts() ) {
								while ( $the_query->have_posts() ) {
									$the_query->the_post();
								?>
									<div class="col-md-3"> 
										<div class="post">
											<div class="date">
												<?php echo get_the_date() ?> 
											</div>
											<div class="title">
												<?php echo get_the_title() ?> 
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
	<?php
	endif;
endif;