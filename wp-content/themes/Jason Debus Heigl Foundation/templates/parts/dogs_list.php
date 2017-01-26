<div class="dog-list">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php echo the_sub_field('panel_text') ?>
			</div>
			<div class="content col-lg-12">
				<div class="content">
					<?php 
						$args = Array(
						  'post_type' => 'dog',
						  /*'posts_per_page' => '6',*/
						  'orderby' => 'title',
						  'order'   => 'ASC',
						  'tax_query' => array(
							    array(
							    'taxonomy' => 'dog_status',
							    'field' => 'slug',
							    'terms' => 'available'
							    )
							)
						);
						// The Query
						$the_query = new WP_Query( $args );

						// The Loop
						if ( $the_query->have_posts() ) {
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
							?>
								<div class="col-sm-4"> 
									<div class="dog">
										<div class="image" style="background-image: url( <?php echo the_field('list_image'); ?> )"></div>
										<div class="meta-holder">
											<div class="title">
												<?php echo get_the_title() ?> 
											</div>
											<div class="meta">
												<?php  if(get_field('breed')): echo 'Breed: ' . get_field('breed'); endif; ?>
											</div>
											<div class="meta">
												<?php  if(get_field('gender')): echo 'Gender: ' . get_field('gender'); endif; ?>
											</div>
											<div class="meta">
												<?php  if(get_field('age')): echo 'Age: ' . get_field('age'); endif; ?>
											</div>
											<div class="readmore">
												<a href="<?php echo get_the_permalink() ?> ">Learn More</a>
											</div>											
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