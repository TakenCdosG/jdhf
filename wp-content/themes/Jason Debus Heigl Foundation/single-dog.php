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
								<div class="button"> <?php echo do_shortcode(get_field('button')) ?> </div>											
							</div>
							<div class="content">
								<?php the_content(); ?>
							</div>
							<div class="video">
								<?php 
									$embed = get_field('video_url');
									$str = str_replace("watch?v=", "embed/", $embed);					
									echo '<iframe width="100%" src="'.$str.'" frameborder="0" allowfullscreen></iframe>';
								?>
							</div>
							<div class="gallery">
								<?php 

								$images = get_field('gallery');

								if( $images ): ?>
								    <div class="row">
								        <?php foreach( $images as $image ): ?>
								            <div class="col-xs-4 image">
								                <a class="group" href="<?php echo $image['url']; ?>" rel="group">
								                     <img src="<?php echo $image['sizes']['medium_custom']; ?>" alt="<?php echo $image['alt']; ?>" />
								                </a>
								                <p><?php echo $image['caption']; ?></p>
								            </div>
								        <?php endforeach; ?>
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