<?php
/**
 * Search template file.
 * @package Jason Debus Heigl Foundation
 * @since Jason Debus Heigl Foundation 1.0
 */
?>
<?php get_header(); ?>

<?php global $wp_query;?>
<div class="wapper">
  <div class="contentarea clearfix">
    <div class="content">
      <h1 class="search-title"> <?php echo $wp_query->found_posts; ?>
        <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>" </h1>

        <?php if ( have_posts() ) : ?>

            <ul>

            <?php while ( have_posts() ) : the_post(); ?>

               <li>
                 <h3><a href="<?php echo get_permalink(); ?>">
                   <?php the_title();  ?>
                 </a></h3>
                 <?php  the_post_thumbnail('medium') ?>
                 <?php echo substr(get_the_excerpt(), 0,200); ?>
                 <div class="h-readmore"> <a href="<?php the_permalink(); ?>">Read More</a></div>
               </li>

            <?php endwhile; ?>

            </ul>

           <?php paginate_links(); ?>

        <?php endif; ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>