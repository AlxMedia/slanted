<?php
// Query featured entries
$featured = new WP_Query(
	array(
		'no_found_rows'				=> false,
		'update_post_meta_cache'	=> false,
		'update_post_term_cache'	=> false,
		'ignore_sticky_posts'		=> 1,
		'posts_per_page'			=> ot_get_option('featured-posts-count'),
		'cat'						=> ot_get_option('featured-category')
	)
);
?>

<?php if ( is_home() && !is_paged() && ( ot_get_option('featured-posts-count') !='0') ): ?>
	
	<div class="featured-wrap">
	<?php while ( $featured->have_posts() ): $featured->the_post(); ?>
		<?php get_template_part('content'); ?>
	<?php endwhile; ?>
	</div>
	<h3 class="featured"><?php esc_html_e( 'Featured', 'slanted' ); ?></h3>
	
<?php endif; ?>
<?php wp_reset_postdata(); ?>