<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'slanted', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'slanted' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'slanted' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'slanted' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'slanted' ),
	'button_url'  => 'https://wordpress.org/support/theme/slanted/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'slanted' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'slanted' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'slanted' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'slanted' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'slanted' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'slanted' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'slanted' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'slanted' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'slanted' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Responsive Layout
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'responsive',
	'label'			=> esc_html__( 'Responsive Layout', 'slanted' ),
	'description'	=> esc_html__( 'Mobile and tablet optimizations (responsive.css)', 'slanted' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Mobile Sidebar
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'slanted' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'slanted' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'slanted' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'slanted' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Heading
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'slanted' ),
	'description'	=> esc_html__( 'Your blog heading', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'slanted' ),
	'description'	=> esc_html__( 'Your blog subheading', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'slanted' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> '20',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'checkbox',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts', 'slanted' ),
	'description'	=> esc_html__( 'To show featured posts in the slider AND the content below. Usually not recommended.', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> false,
) );
// Blog: Featured Category
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'slanted' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'slanted' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'slanted' ),
	'description'	=> esc_html__( 'Max number of featured posts to display on the homepage. Set it to 0 to disable.', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> '2',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '5',
		'step'	=> '1',
	),
) );
// Blog: Comment Count
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'slanted' ),
	'description'	=> esc_html__( 'Comment count bubble', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Post Format Icon
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'format-icon',
	'label'			=> esc_html__( 'Post Format Icons', 'slanted' ),
	'description'	=> esc_html__( 'Circle icons', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'slanted' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'slanted' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'slanted' ),
		'categories'=> esc_html__( 'Related by categories', 'slanted' ),
		'tags'		=> esc_html__( 'Related by tags', 'slanted' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'slanted' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'slanted' ),
	'section'		=> 'blog',
	'default'		=> 's1',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'slanted' ),
		's1'		=> esc_html__( 'Sidebar Primary', 'slanted' ),
		'content'	=> esc_html__( 'Below content', 'slanted' ),
	),
) );
// Header: Profile Avatar
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'slanted' ),
	'description'	=> esc_html__( 'Minimum width 400px', 'slanted' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Social Links
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'slanted' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'slanted' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Footer: Widget Columns
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'slanted' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'slanted' ),
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
// Footer: Social Links
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'slanted' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'slanted' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'slanted' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'slanted' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'slanted' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'slanted' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'slanted' ),
	'description'	=> esc_html__( 'Footer credit text', 'slanted' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'slanted' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'slanted' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cl',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'slanted' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'slanted' ),
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
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'slanted' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'slanted' ),
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
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'slanted' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'slanted' ),
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
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'slanted' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'slanted' ),
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
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'slanted' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'slanted' ),
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
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'slanted' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'slanted' ),
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
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'slanted' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'slanted' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );


function slanted_kirki_sidebars_select() { 
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
	Kirki::add_field( 'slanted_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'slanted' ),
		'description'	=> esc_html__( '(is_home) Primary', 'slanted' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'slanted' ),
	) );
	Kirki::add_field( 'slanted_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'slanted' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'slanted' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'slanted' ),
	) );
	Kirki::add_field( 'slanted_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'slanted' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'slanted' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'slanted' ),
	) );
	Kirki::add_field( 'slanted_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'slanted' ),
		'description'	=> esc_html__( '(is_category) Primary', 'slanted' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'slanted' ),
	) );
	Kirki::add_field( 'slanted_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'slanted' ),
		'description'	=> esc_html__( '(is_search) Primary', 'slanted' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'slanted' ),
	) );
	Kirki::add_field( 'slanted_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'slanted' ),
		'description'	=> esc_html__( '(is_404) Primary', 'slanted' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'slanted' ),
	) );
	Kirki::add_field( 'slanted_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'slanted' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'slanted' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'slanted' ),
	) );
	
 } 
add_action( 'init', 'slanted_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'slanted' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'slanted' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'slanted' ) . ' <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank"><strong>' . esc_html__( 'View All', 'slanted' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'slanted' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'slanted' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'slanted' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'slanted' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'slanted' ) . ' <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank"><strong>' . esc_html__( 'View All', 'slanted' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'slanted' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'slanted' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'slanted' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'slanted' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'slanted' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'slanted' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'slanted' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Dark
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dark',
	'label'			=> esc_html__( 'Dark Style', 'slanted' ),
	'description'	=> esc_html__( 'Use dark instead of light base', 'slanted' ),
	'section'		=> 'styling',
	'default'		=> 'of',
) );
// Styling: Font
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'slanted' ),
	'description'	=> esc_html__( 'Select font for the theme', 'slanted' ),
	'section'		=> 'styling',
	'default'		=> 'roboto-condensed',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'slanted' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'slanted' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'slanted' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'slanted' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'slanted' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'slanted' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'slanted' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'slanted' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'slanted' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'slanted' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'slanted' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'slanted' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'slanted' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'slanted' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'slanted' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'slanted' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'slanted' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'slanted' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'slanted' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'slanted' ),
		'arial'					=> esc_html__( 'Arial', 'slanted' ),
		'georgia'				=> esc_html__( 'Georgia', 'slanted' ),
		'verdana'				=> esc_html__( 'Verdana', 'slanted' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'slanted' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'slanted' ),
	'description'	=> esc_html__( 'Max-width of the container', 'slanted' ),
	'section'		=> 'styling',
	'default'		=> '720',
	'choices'     => array(
		'min'	=> '720',
		'max'	=> '1600',
		'step'	=> '1',
	),
) );
// Styling: Sidebar Width
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'sidebar-padding',
	'label'			=> esc_html__( 'Sidebar Width', 'slanted' ),
	'section'		=> 'styling',
	'default'		=> '30',
	'choices'		=> array(
		'30'	=> esc_html__( '280px primary (30px padding)', 'slanted' ),
		'20'	=> esc_html__( '300px primary (20px padding)', 'slanted' ),
	),
) );
// Styling: Primary Color
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_html__( 'Primary Color', 'slanted' ),
	'section'		=> 'styling',
	'default'		=> '#00b2d7',
) );
// Styling: Image Border Radius
Kirki::add_field( 'slanted_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'image-border-radius',
	'label'			=> esc_html__( 'Image Border Radius', 'slanted' ),
	'description'	=> esc_html__( 'Give your thumbnails and layout images rounded corners', 'slanted' ),
	'section'		=> 'styling',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '15',
		'step'	=> '1',
	),
) );