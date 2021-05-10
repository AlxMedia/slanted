<!DOCTYPE html> 
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<a class="skip-link screen-reader-text" href="#page"><?php _e( 'Skip to content', 'slanted' ); ?></a>

<div id="wrapper">
	<div id="wrapper-inner">
	<header id="header" class="group">
	
		<div class="slant-left"></div>
		<div class="slant-right"></div>
		
		<div class="container group">
			<div class="group pad">
				
				<?php if ( get_header_image() == '' ) : ?>
					<?php echo slanted_site_title(); ?>
					<?php if ( display_header_text() == true ): ?>
						<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					<?php endif; ?>
				<?php endif; ?>
			
				<?php if ( get_header_image() ) : ?>
					<div class="site-header">
						<a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
							<img class="site-image" src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
						</a>
					</div>
				<?php endif; ?>

				<div class="clear"></div>
				
				<?php if ( has_nav_menu('header') ): ?>
					<div id="wrap-nav-header" class="wrap-nav">
						<?php \Slanted\Nav::nav_menu(array('theme_location'=>'header','menu_id' => 'nav-header','fallback_cb'=> false)); ?>
					</div>
				<?php endif; ?>
				
				<?php if ( has_nav_menu('mobile') ): ?>
					<div id="wrap-nav-mobile" class="wrap-nav">
						<?php \Slanted\Nav::nav_menu(array('theme_location'=>'mobile','menu_id' => 'nav-mobile','fallback_cb'=> false)); ?>
					</div>
				<?php endif; ?>
				
				<?php if ( get_theme_mod('profile-image') ): ?>
					<div class="slant-avatar"><a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url( get_theme_mod('profile-image') ); ?>" alt="" /></a></div>
				<?php endif; ?>
				
			</div><!--/.pad-->
		</div><!--/.container-->
		
	</header><!--/#header-->
	
	<div id="subheader">	
		<div class="container">
			<?php if ( get_theme_mod( 'header-social', 'on' ) == 'on' ): ?>
				<?php slanted_social_links() ; ?>
			<?php endif; ?>
		</div>
	</div><!--/#subheader-->
	
	<?php get_template_part('inc/page-title'); ?>
		
	<div id="page">
		<div class="container group">