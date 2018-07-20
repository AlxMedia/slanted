<?php 
	$sidebar = slanted_sidebar_primary();
	$layout = slanted_layout_class();
	if ( $layout != 'col-1c'):
?>

	<div class="sidebar s1 dark">
		
		<a class="sidebar-toggle" title="<?php esc_html_e('Expand Sidebar','slanted'); ?>"><i class="fa icon-sidebar-toggle"></i></a>
		
		<div class="sidebar-content">
			
			<?php if ( get_theme_mod( 'post-nav' ) == 's1') { get_template_part('inc/post-nav'); } ?>
			
			<?php if( is_page_template('page-templates/child-menu.php') ): ?>
			<ul class="child-menu group">
				<?php wp_list_pages('title_li=&sort_column=menu_order&depth=3'); ?>
			</ul>
			<?php endif; ?>
			
			<?php dynamic_sidebar($sidebar); ?>
			
		</div><!--/.sidebar-content-->
		
	</div><!--/.sidebar-->
	
<?php endif; ?>