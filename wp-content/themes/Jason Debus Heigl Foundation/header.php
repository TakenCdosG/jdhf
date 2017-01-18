<?php
/**
 * Header template file.
 * @package Jason Debus Heigl Foundation
 * @since Jason Debus Heigl Foundation 1.0
 */
?>

<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title><?php wp_title('&#124;', true, 'right'); ?><?php bloginfo('name'); ?></title>
		<link rel="icon" type="image/png" href="#" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<!-- <?php //global $current_lang; $current_lang = pll_current_language();?> -->
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="<?php get_template_directory_uri();?>/js/html5shiv.js"></script>
		<script src="<?php get_template_directory_uri();?>/js/respond.min.js"></script>
		<![endif]-->
		<script src="https://use.typekit.net/jfw1yzc.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="donate"></div>
		<header class="main-header">
			<div class="container menu">
				<div class="row menu">
					<div class="col-lg-4 ">
						<div class="logo">
							<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt=""></a>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="navigation-container">
							<nav class="navbar navbar-inverse" role="navigation">
								<div class="navbar-header">
							      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							        <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							      </button>
							    </div>
								<?php
							        wp_nav_menu( array(
							            'menu'              => 'main-menu',
							            'theme_location'    => 'main-menu',
							            'depth'             => 2,
							            'container'         => 'div',
							            'container_class'   => 'collapse navbar-collapse',
							            'container_id'      => 'myNavbar',
							            'menu_class'        => 'nav navbar-nav',
							            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							            'walker'            => new wp_bootstrap_navwalker())
							        );
							    ?>
							</nav>
							<div class="clearfix"></div>							
						</div>

					</div>
				</div>
			</div>
			<a href="#"><div class="donate-button">Donate</div></a>
			<script type="text/javascript">			
		</script>
		</header>
	