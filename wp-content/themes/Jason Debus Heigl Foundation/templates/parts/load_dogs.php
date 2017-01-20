<?php
if( get_sub_field('global') == 1):
    while ( have_rows('page_content', get_id_by_slug('global-modules')) ) : the_row();
        if( get_row_layout() == 'dogs_list' ): 
        	?>
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
										  'posts_per_page' => '6'
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
														<div class="image" style="background-image: url( <?php echo the_post_thumbnail_url( 'medium' ) ?> )"></div>

														<div class="meta-holder">
															<div class="title">
																<?php echo get_the_title() ?> 
															</div>
															<div class="meta">
																Breed: <?php echo the_field('breed') ?>
															</div>
															<div class="meta">
																Gender: <?php echo the_field('gender') ?>
															</div>
															<div class="meta">
																Age: <?php echo the_field('age') ?>
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
        	<?php
        endif;
    endwhile;	        				
else :
?>
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
						  'posts_per_page' => '6'
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
										<div class="image" style="background-image: url( <?php echo the_post_thumbnail_url( 'medium' ) ?> )"></div>

										<div class="meta-holder">
											<div class="title">
												<?php echo get_the_title() ?> 
											</div>
											<div class="meta">
												Breed: <?php echo the_field('breed') ?>
											</div>
											<div class="meta">
												Gender: <?php echo the_field('gender') ?>
											</div>
											<div class="meta">
												Age: <?php echo the_field('age') ?>
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
<?php
endif;

