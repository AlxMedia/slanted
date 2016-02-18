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
				
				<?php echo alx_site_title(); ?>
				<?php if ( ot_get_option('site-description') != 'off' ): ?><p class="site-description"><?php bloginfo( 'description' ); ?></p><?php endif; ?>
				
				<div class="clear"></div>
				
				<?php if ( has_nav_menu('header') ): ?>
					<nav class="nav-container group" id="nav-header">
						<div class="nav-toggle"><i class="fa fa-bars"></i></div>
						<div class="nav-text"><!-- put your mobile menu text here --></div>
						<div class="nav-wrap container"><?php wp_nav_menu(array('theme_location'=>'header','menu_class'=>'nav group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>
					</nav><!--/#nav-header-->
				<?php endif; ?>
				
				<?php if ( ot_get_option('profile-image') ): ?>
					<div class="slant-avatar"><a href="<?php echo home_url(); ?>"><img src="<?php echo ot_get_option('profile-image'); ?>" alt="" /></a></div>
				<?php endif; ?>
				
			</div><!--/.pad-->
		</div><!--/.container-->
		
	</header><!--/#header-->
	
	<div id="subheader">	
		<div class="container">
			<?php alx_social_links() ; ?>
		</div>
	</div><!--/#subheader-->
	
	<?php get_template_part('inc/page-title'); ?>
		
	<div id="page">
		<div class="container group">