<?php
/**
 * Dog template file.
 * @package Jason Debus Heigl Foundation
 * @since Jason Debus Heigl Foundation 1.0
 */
?>
<?php get_header(); ?>
<div class="white-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 dog-detail">
				<div>
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
							<div class="meta-holder">
								<div class="meta">
									Breed: <?php echo the_field('breed') ?>
								</div>
								<div class="meta">
									Gender: <?php echo the_field('gender') ?>
								</div>
								<div class="meta">
									Age: <?php echo the_field('age') ?>
								</div>
								<div class="button"> <?php echo do_shortcode(get_field('application_button')) ?> </div>											
							</div>
							<div class="content">
								<?php the_content(); ?>
							</div>
							<?php 
								$embed = get_field('video_url');
								$row_count = count($embed);
								if($row_count > 1) : $width = '47%'; $margin = '50px 1.5% 25px'; $padding = '34.25%'; $margin_minus = '0 -15px'; else : $width = '100%'; $padding = '56.25%'; $margin = '50px 0 25px'; $margin_minus = '0'; endif;
							?>
							<div class="clearfix" style="margin:<?php echo $margin_minus; ?>">
								<?php	
								// check if the repeater field has rows of data
								if( have_rows('video_url') ):

								 	// loop through the rows of data
								    while ( have_rows('video_url') ) : the_row();

								        // display a sub field value
								        
								        $str = str_replace("watch?v=", "embed/", get_sub_field('url'));					
										echo '<div class="video" style="float:left; margin:'.$margin.'; padding-bottom:'.$padding.' ; width:'.$width.';"><iframe src="'.$str.'" frameborder="0" allowfullscreen></iframe></div>';

								    endwhile;

								else :

								    // no rows found

								endif;
								?>
							</div>
							
							<div class="gallery">
								<?php 

								$images = get_field('gallery');

								if( $images ): ?>
								    <div class="row">
								    	<div class="grid">
									    	<div class="grid-sizer"></div>
									        <?php foreach( $images as $image ): ?>
									            <div class="grid-item image">
									                <a class="group" href="<?php echo $image['url']; ?>" rel="group">
									                     <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
									                </a>
									                <p><?php echo $image['caption']; ?></p>
									            </div>
									        <?php endforeach; ?>
								    	</div>
								    </div>
								<?php endif; ?>								
							</div>
					<?php
						endwhile;
					endif;
					?>
				</div>
			</div>
		</div>
	</div>	
</div>
<?php get_footer(); ?>