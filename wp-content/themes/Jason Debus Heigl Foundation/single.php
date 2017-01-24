<?php
/**
 * Single template file.
 * @package Jason Debus Heigl Foundation
 * @since Jason Debus Heigl Foundation 1.0
 */
?>
<?php get_header(); ?>
<div class="grey-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>BLOG</h1>
			</div>
		</div>
	</div>
</div>
<div class="blog-toolbar">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
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
				</div>
				<div class="clearfix"></div>				
			</div>
		</div>
	</div>
</div>
<div class="single-blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div>
					<?php
					if (have_posts()) :
						while (have_posts()) :

							the_post();
							echo "<div class='date'>".get_the_date()."</div>";
							echo "<div class='title'><h2>".get_the_title()."</h2></div>";
							echo "<div class='featured-image' style='background-image: url( ". get_the_post_thumbnail_url()." )'></div>";
							echo "<div class='content'>".wpautop(get_the_content())."</div>";
							$categories = get_categories( array(
							    'orderby' => 'name',
							    'parent'  => 0
							) );
							echo "<div class='cat-tags-container'><div class='cat-tags'>Categories:</div>"; 
							foreach ( $categories as $category ) {
							    printf( '<a href="%1$s">%2$s</a>',
							        esc_url( get_category_link( $category->term_id ) ),
							        esc_html( $category->name )
							    );
							}
							echo("</div>");
							$tags= get_tags( array(
							    'orderby' => 'name',
							    'parent'  => 0
							) );
							echo "<div class='cat-tags-container'><div class='cat-tags'>Tags:</div>";
							foreach ( $tags as $tag ) {
							    printf( '<a href="%1$s">%2$s</a>',
							        esc_url( get_tag_link( $tag->term_id ) ),
							        esc_html( $tag->name )
							    );
							}
							echo("</div>");
						endwhile;
					endif;
					?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="mail-chimp-subscribe">
					<h3>Keep up with all the latest Blog posts</h3>
					<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
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
					</div>
					<!--End mc_embed_signup-->
					<div style="clear:both; max-width:100%;">We'll never share your email address and you can opt out at any time.</div>	
				</div>				
			</div>
		</div>
	</div>	
</div>
<?php get_footer(); ?>