<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add config
/* ------------------------------------ */
Kirki::add_config( 'slanted', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_attr__( 'Theme Options', 'slanted' ),
    'description' => esc_attr__( '', 'slanted' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_attr__( 'General', 'slanted' ),
    'description' => esc_attr__( '', 'slanted' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_attr__( 'Blog', 'slanted' ),
    'description' => esc_attr__( '', 'slanted' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_attr__( 'Header', 'slanted' ),
    'description' => esc_attr__( '', 'slanted' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_attr__( 'Footer', 'slanted' ),
    'description' => esc_attr__( '', 'slanted' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_attr__( 'Layout', 'slanted' ),
    'description' => esc_attr__( '', 'slanted' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_attr__( 'Sidebars', 'slanted' ),
    'description' => esc_attr__( '', 'slanted' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_attr__( 'Social Links', 'slanted' ),
    'description' => esc_attr__( '', 'slanted' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_attr__( 'Styling', 'slanted' ),
    'description' => esc_attr__( '', 'slanted' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Custom CSS
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'switch',
	'settings'		=> 'custom',
	'label'			=> esc_attr__( 'Custom Stylesheet', 'slanted' ),
	'description'	=> esc_attr__( 'Load custom stylesheet (custom.css)', 'slanted' ),
	'section'		=> 'general',
	'default'		=> 'off',
) );
// General: Responsive Layout
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'switch',
	'settings'		=> 'responsive',
	'label'			=> esc_attr__( 'Responsive Layout', 'slanted' ),
	'description'	=> esc_attr__( 'Mobile and tablet optimizations (responsive.css)', 'slanted' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Mobile Sidebar
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_attr__( 'Mobile Sidebar Content', 'slanted' ),
	'description'	=> esc_attr__( 'Sidebar content on low-resolution mobile devices (320px)', 'slanted' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: RSS Feed
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'text',
	'settings'		=> 'rss-feed',
	'label'			=> esc_attr__( 'FeedBurner URL', 'slanted' ),
	'description'	=> esc_attr__( 'Enter your full FeedBurner URL (or any other preferred feed URL) if you wish to use FeedBurner over the standard WordPress feed e.g. http://feeds.feedburner.com/yoururlhere', 'slanted' ),
	'section'		=> 'general',
	'default'		=> '',
) );
// General: Post Comments
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'switch',
	'settings'		=> 'post-comments',
	'label'			=> esc_attr__( 'Post Comments', 'slanted' ),
	'description'	=> esc_attr__( 'Comments on posts', 'slanted' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Page Comments
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'switch',
	'settings'		=> 'page-comments',
	'label'			=> esc_attr__( 'Page Comments', 'slanted' ),
	'description'	=> esc_attr__( 'Comments on pages', 'slanted' ),
	'section'		=> 'general',
	'default'		=> 'off',
) );
// General: Recommended Plugins
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_attr__( 'Recommended Plugins', 'slanted' ),
	'description'	=> esc_attr__( 'Enable or disable the recommended plugins notice', 'slanted' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Heading
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_attr__( 'Heading', 'slanted' ),
	'description'	=> esc_attr__( 'Your blog heading', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_attr__( 'Subheading', 'slanted' ),
	'description'	=> esc_attr__( 'Your blog subheading', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_attr__( 'Excerpt Length', 'slanted' ),
	'description'	=> esc_attr__( 'Max number of words. Set it to 0 to disable.', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> '20',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'checkbox',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_attr__( 'Featured Posts', 'slanted' ),
	'description'	=> esc_attr__( 'To show featured posts in the slider AND the content below. Usually not recommended.', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> false,
) );
// Blog: Featured Category
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_attr__( 'Featured Category', 'slanted' ),
	'description'	=> esc_attr__( 'By not selecting a category, it will show your latest post(s) from all categories', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_attr__( 'Select a category', 'slanted' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_attr__( 'Featured Post Count', 'slanted' ),
	'description'	=> esc_attr__( 'Max number of featured posts to display on the homepage. Set it to 0 to disable.', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> '2',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '5',
		'step'	=> '1',
	),
) );
// Blog: Comment Count
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_attr__( 'Comment Count', 'slanted' ),
	'description'	=> esc_attr__( 'Comment count bubble', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Post Format Icon
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'switch',
	'settings'		=> 'format-icon',
	'label'			=> esc_attr__( 'Post Format Icons', 'slanted' ),
	'description'	=> esc_attr__( 'Circle icons', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Sharrre
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'switch',
	'settings'		=> 'sharrre',
	'label'			=> esc_attr__( 'Single - Share Bar', 'slanted' ),
	'description'	=> esc_attr__( 'Social sharing buttons for each article', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Twitter Username
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'text',
	'settings'		=> 'twitter-username',
	'label'			=> esc_attr__( 'Single - Share Bar - Twitter Username', 'slanted' ),
	'description'	=> esc_attr__( 'Your @username will be added to share-tweets of your posts (optional)', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_attr__( 'Single - Author Bio', 'slanted' ),
	'description'	=> esc_attr__( 'Shows post author description, if it exists', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_attr__( 'Single - Related Posts', 'slanted' ),
	'description'	=> esc_attr__( 'Shows randomized related articles below the post', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_attr__( 'Disable', 'slanted' ),
		'categories'=> esc_attr__( 'Related by categories', 'slanted' ),
		'tags'		=> esc_attr__( 'Related by tags', 'slanted' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_attr__( 'Single - Post Navigation', 'slanted' ),
	'description'	=> esc_attr__( 'Shows links to the next and previous article', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> 's1',
	'choices'		=> array(
		'disable'	=> esc_attr__( 'Disable', 'slanted' ),
		's1'		=> esc_attr__( 'Sidebar Primary', 'slanted' ),
		'content'	=> esc_attr__( 'Below content', 'slanted' ),
	),
) );
// Header: Custom Logo
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'image',
	'settings'		=> 'custom-logo',
	'label'			=> esc_attr__( 'Custom Logo', 'slanted' ),
	'description'	=> esc_attr__( 'Upload your custom logo image, 120px height recommended', 'slanted' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Site Description
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'switch',
	'settings'		=> 'site-description',
	'label'			=> esc_attr__( 'Site Description', 'slanted' ),
	'description'	=> esc_attr__( 'The description that appears next to your logo', 'slanted' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Profile Avatar
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_attr__( 'Profile Image', 'slanted' ),
	'description'	=> esc_attr__( 'Minimum width 400px', 'slanted' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Footer: Widget Columns
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_attr__( 'Footer Widget Columns', 'slanted' ),
	'description'	=> esc_attr__( 'Select columns to enable footer widgets. Recommended number: 3', 'slanted' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Copyright
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_attr__( 'Footer Copyright', 'slanted' ),
	'description'	=> esc_attr__( 'Replace the footer copyright text', 'slanted' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_attr__( 'Footer Credit', 'slanted' ),
	'description'	=> esc_attr__( 'Footer credit text', 'slanted' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_attr__( 'Global Layout', 'slanted' ),
	'description'	=> esc_attr__( 'Other layouts will override this option if they are set', 'slanted' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cl',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_attr__( 'Home', 'slanted' ),
	'description'	=> esc_attr__( '(is_home) Posts homepage layout', 'slanted' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_attr__( 'Single', 'slanted' ),
	'description'	=> esc_attr__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'slanted' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_attr__( 'Archive', 'slanted' ),
	'description'	=> esc_attr__( '(is_archive) Category, date, tag and author archive layout', 'slanted' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_attr__( 'Archive - Category', 'slanted' ),
	'description'	=> esc_attr__( '(is_category) Category archive layout', 'slanted' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_attr__( 'Search', 'slanted' ),
	'description'	=> esc_attr__( '(is_search) Search page layout', 'slanted' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_attr__( 'Error 404', 'slanted' ),
	'description'	=> esc_attr__( '(is_404) Error 404 page layout', 'slanted' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_attr__( 'Default Page', 'slanted' ),
	'description'	=> esc_attr__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'slanted' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Sidebars: Create Sidebars
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'repeater',
	'label'			=> esc_attr__( 'Create Sidebars', 'slanted' ),
	'description'	=> esc_attr__( 'You must save and refresh the page to see your new sidebars.', 'slanted' ),
	'tooltip'		=> esc_attr__( 'Make sure that you save and refresh the page if you can not see the sidebars you have created.', 'slanted' ),
	'section'		=> 'sidebars',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_attr__('sidebar', 'slanted' ),
	),
	'settings'		=> 'sidebar-areas',
	'default'		=> '',
	'fields'		=> array(
		'title'	=> array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Sidebar Title', 'slanted' ),
			'description' => esc_attr__( 'The widget box title', 'slanted' ),
			'default'     => '',
		),
		'id'	=> array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Sidebar ID', 'slanted' ),
			'description' => esc_attr__( 'This ID must be unique', 'slanted' ),
			'default'     => 'sidebar-',
		),
	)
) );


function alx_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'alx_slanted', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_attr__( 'Home', 'slanted' ),
		'description'	=> esc_attr__( '(is_home) Primary', 'slanted' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'slanted' ),
	) );
	Kirki::add_field( 'alx_slanted', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_attr__( 'Single', 'slanted' ),
		'description'	=> esc_attr__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'slanted' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'slanted' ),
	) );
	Kirki::add_field( 'alx_slanted', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_attr__( 'Archive', 'slanted' ),
		'description'	=> esc_attr__( '(is_archive) Primary', 'slanted' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'slanted' ),
	) );
	Kirki::add_field( 'alx_slanted', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_attr__( 'Archive - Category', 'slanted' ),
		'description'	=> esc_attr__( '(is_category) Primary', 'slanted' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'slanted' ),
	) );
	Kirki::add_field( 'alx_slanted', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_attr__( 'Search', 'slanted' ),
		'description'	=> esc_attr__( '(is_search) Primary', 'slanted' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'slanted' ),
	) );
	Kirki::add_field( 'alx_slanted', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_attr__( 'Error 404', 'slanted' ),
		'description'	=> esc_attr__( '(is_404) Primary', 'slanted' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'slanted' ),
	) );
	Kirki::add_field( 'alx_slanted', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_attr__( 'Default Page', 'slanted' ),
		'description'	=> esc_attr__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'slanted' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'slanted' ),
	) );
	
 } 
add_action( 'init', 'alx_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'repeater',
	'label'			=> esc_attr__( 'Create Social Links', 'slanted' ),
	'description'	=> esc_attr__( 'Create and organize your social links', 'slanted' ),
	'section'		=> 'social',
	'tooltip'		=> esc_attr__( 'Font Awesome names:', 'slanted' ) . ' <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank"><strong>' . esc_attr__( 'View All', 'slanted' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_attr__('social link', 'slanted' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_attr__( 'Title', 'slanted' ),
			'description'	=> esc_attr__( 'Ex: Facebook', 'slanted' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_attr__( 'Icon Name', 'slanted' ),
			'description'	=> esc_attr__( 'Font Awesome icons. Ex: fa-facebook ', 'slanted' ) . ' <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank"><strong>' . esc_attr__( 'View All', 'slanted' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_attr__( 'Link', 'slanted' ),
			'description'	=> esc_attr__( 'Enter the full url for your icon button', 'slanted' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_attr__( 'Icon Color', 'slanted' ),
			'description'	=> esc_attr__( 'Set a unique color for your icon (optional)', 'slanted' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_attr__( 'Open in new window', 'slanted' ),
			'description'	=> esc_attr__( '', 'slanted' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_attr__( 'Dynamic Styles', 'slanted' ),
	'description'	=> esc_attr__( 'Turn on to use the styling options below', 'slanted' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Dark
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'switch',
	'settings'		=> 'dark',
	'label'			=> esc_attr__( 'Dark Style', 'slanted' ),
	'description'	=> esc_attr__( 'Use dark instead of light base', 'slanted' ),
	'section'		=> 'styling',
	'default'		=> 'of',
) );
// Styling: Font
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_attr__( 'Font', 'slanted' ),
	'description'	=> esc_attr__( 'Select font for the theme', 'slanted' ),
	'section'		=> 'styling',
	'default'		=> 'roboto-condensed',
	'choices'     => array(
		'titillium-web'			=> esc_attr__( 'Titillium Web, Latin (Self-hosted)', 'slanted' ),
		'titillium-web-ext'		=> esc_attr__( 'Titillium Web, Latin-Ext', 'slanted' ),
		'droid-serif'			=> esc_attr__( 'Droid Serif, Latin', 'slanted' ),
		'source-sans-pro'		=> esc_attr__( 'Source Sans Pro, Latin-Ext', 'slanted' ),
		'lato'					=> esc_attr__( 'Lato, Latin', 'slanted' ),
		'raleway'				=> esc_attr__( 'Raleway, Latin', 'slanted' ),
		'ubuntu'				=> esc_attr__( 'Ubuntu, Latin-Ext', 'slanted' ),
		'ubuntu-cyr'			=> esc_attr__( 'Ubuntu, Latin / Cyrillic-Ext', 'slanted' ),
		'roboto'				=> esc_attr__( 'Roboto, Latin-Ext', 'slanted' ),
		'roboto-cyr'			=> esc_attr__( 'Roboto, Latin / Cyrillic-Ext', 'slanted' ),
		'roboto-condensed'		=> esc_attr__( 'Roboto Condensed, Latin-Ext', 'slanted' ),
		'roboto-condensed-cyr'	=> esc_attr__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'slanted' ),
		'roboto-slab'			=> esc_attr__( 'Roboto Slab, Latin-Ext', 'slanted' ),
		'roboto-slab-cyr'		=> esc_attr__( 'Roboto Slab, Latin / Cyrillic-Ext', 'slanted' ),
		'playfair-display'		=> esc_attr__( 'Playfair Display, Latin-Ext', 'slanted' ),
		'playfair-display-cyr'	=> esc_attr__( 'Playfair Display, Latin / Cyrillic', 'slanted' ),
		'open-sans'				=> esc_attr__( 'Open Sans, Latin-Ext', 'slanted' ),
		'open-sans-cyr'			=> esc_attr__( 'Open Sans, Latin / Cyrillic-Ext', 'slanted' ),
		'pt-serif'				=> esc_attr__( 'PT Serif, Latin-Ext', 'slanted' ),
		'pt-serif-cyr'			=> esc_attr__( 'PT Serif, Latin / Cyrillic-Ext', 'slanted' ),
		'arial'					=> esc_attr__( 'Arial', 'slanted' ),
		'georgia'				=> esc_attr__( 'Georgia', 'slanted' ),
		'verdana'				=> esc_attr__( 'Verdana', 'slanted' ),
		'tahoma'				=> esc_attr__( 'Tahoma', 'slanted' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_attr__( 'Website Max-width', 'slanted' ),
	'description'	=> esc_attr__( 'Max-width of the container', 'slanted' ),
	'section'		=> 'styling',
	'default'		=> '720',
	'choices'     => array(
		'min'	=> '720',
		'max'	=> '1600',
		'step'	=> '1',
	),
) );
// Styling: Sidebar Width
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'radio',
	'settings'		=> 'sidebar-padding',
	'label'			=> esc_attr__( 'Sidebar Width', 'slanted' ),
	'description'	=> esc_attr__( '', 'slanted' ),
	'section'		=> 'styling',
	'default'		=> '30',
	'choices'		=> array(
		'30'	=> esc_attr__( '280px primary (30px padding)', 'slanted' ),
		'20'	=> esc_attr__( '300px primary (20px padding)', 'slanted' ),
	),
) );
// Styling: Primary Color
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_attr__( 'Primary Color', 'slanted' ),
	'description'	=> esc_attr__( '', 'slanted' ),
	'section'		=> 'styling',
	'default'		=> '#00b2d7',
) );
// Styling: Image Border Radius
Kirki::add_field( 'alx_slanted', array(
	'type'			=> 'slider',
	'settings'		=> 'image-border-radius',
	'label'			=> esc_attr__( 'Image Border Radius', 'slanted' ),
	'description'	=> esc_attr__( 'Give your thumbnails and layout images rounded corners', 'slanted' ),
	'section'		=> 'styling',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '15',
		'step'	=> '1',
	),
) );