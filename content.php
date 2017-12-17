<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>	
	<div class="post-inner post-hover">
		
		<div class="post-date">
			<div class="post-date-day">
				<?php if ( get_theme_mod('format-icon','on') == 'on' ): ?>
					<div class="format-box"><a href="<?php echo get_post_format_link($format); ?>"><i class="fa fa-icon"></i></a></div>
				<?php endif; ?>
				<?php the_time('d') ?>
			</div>
			<div class="post-date-month"><?php the_time('M') ?></div>
			<div class="post-date-year"><?php the_time('Y') ?></div>
		</div>
		<?php if ( get_theme_mod('comment-count','on') == 'on' ): ?>
			<a class="post-comments" href="<?php comments_link(); ?>"><span><i class="fa fa-comments-o"></i><?php comments_number( '0', '1', '%' ); ?></span></a>
		<?php endif; ?>
		
		<?php if ( has_post_thumbnail() ): ?>
		<div class="post-thumbnail small">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('thumb-list'); ?>
				<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon small"><i class="fa fa-play"></i></span>'; ?>
				<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon small"><i class="fa fa-volume-up"></i></span>'; ?>
				<?php if ( is_sticky() ) echo'<span class="thumb-icon small"><i class="fa fa-star"></i></span>'; ?>
			</a>
		</div><!--/.post-thumbnail-->
		<?php endif; ?>	

		<h2 class="post-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2><!--/.post-title-->
		
		<?php if (get_theme_mod('excerpt-length','20') != '0'): ?>
		<div class="entry excerpt">
			<?php the_excerpt(); ?>
		</div><!--/.entry-->
		<?php endif; ?>	

	</div><!--/.post-inner-->	
</article><!--/.post-->	