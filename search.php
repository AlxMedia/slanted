<?php get_header(); ?>

<section class="content">
	<div class="pad group">
	
		<div class="notebox">
			<?php _e('For the term','slanted'); ?> "<span><?php echo get_search_query(); ?></span>".
			<?php if ( !have_posts() ): ?>
				<?php _e('Please try another search:','slanted'); ?>
			<?php endif; ?>
			<div class="search-again">
				<?php get_search_form(); ?>
			</div>
		</div>
		
		<?php if ( have_posts() ) : ?>
			
			<?php while ( have_posts() ): the_post(); ?>
				<?php get_template_part('content'); ?>
			<?php endwhile; ?>
			
			<?php get_template_part('inc/pagination'); ?>
			
		<?php endif; ?>
	
	</div><!--/.pad-->
</section><!--/.content-->

<?php get_sidebar(); ?>
	
<?php get_footer(); ?>