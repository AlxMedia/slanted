<!DOCTYPE html> 
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

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
				
				<?php if ( has_nav_menu('mobile') ): ?>
					<nav class="nav-container group" id="nav-mobile">
						<div class="nav-toggle"><i class="fa fa-bars"></i></div>
						<div class="nav-text"><!-- put your mobile menu text here --></div>
						<div class="nav-wrap container"><?php wp_nav_menu(array('theme_location'=>'mobile','menu_class'=>'nav group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>
					</nav><!--/#nav-mobile-->
				<?php endif; ?>
				
				<?php if ( has_nav_menu('header') ): ?>
					<nav class="nav-container group" id="nav-header">
						<div class="nav-toggle"><i class="fa fa-bars"></i></div>
						<div class="nav-text"><!-- put your mobile menu text here --></div>
						<div class="nav-wrap container"><?php wp_nav_menu(array('theme_location'=>'header','menu_class'=>'nav group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>
					</nav><!--/#nav-header-->
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