<?php get_header(); ?>

<section class="content">
	<div class="pad group">
		
		<?php get_template_part('inc/featured'); ?>
				
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