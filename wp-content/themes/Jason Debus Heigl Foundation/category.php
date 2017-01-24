<?php
/**
 * Search template file.
 * @package Jason Debus Heigl Foundation
 * @since Jason Debus Heigl Foundation 1.0
 */
?>
<?php get_header(); ?>

<?php 
$args = array ( 'category' => ID, 'posts_per_page' => 5);
$myposts = get_posts( $args );
foreach( $myposts as $post ) :  setup_postdata($post);
 ?>
//Style Posts here
<?php endforeach; ?>

<?php get_footer(); ?>