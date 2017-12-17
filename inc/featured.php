<?php
// Query featured entries
$featured = new WP_Query(
	array(
		'no_found_rows'				=> false,
		'update_post_meta_cache'	=> false,
		'update_post_term_cache'	=> false,
		'ignore_sticky_posts'		=> 1,
		'posts_per_page'			=> get_theme_mod('featured-posts-count','2'),
		'cat'						=> get_theme_mod('featured-category','')
	)
);
?>

<?php if ( is_home() && !is_paged() && ( get_theme_mod('featured-posts-count','2') !='0') ): ?>
	
	<div class="featured-wrap">
	<?php while ( $featured->have_posts() ): $featured->the_post(); ?>
		<?php get_template_part('content'); ?>
	<?php endwhile; ?>
	</div>
	<h3 class="featured"><?php esc_html_e( 'Featured', 'slanted' ); ?></h3>
	
<?php endif; ?>
<?php wp_reset_postdata(); ?>