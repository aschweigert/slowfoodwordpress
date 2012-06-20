<?php get_header(); ?>

<div class="row-fluid">
   	<div class="span8">
		
		<div class="archive_stories">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="story">
					<?php the_date( 'F j, Y', '<p class="story_date">', '</p>', true ); ?>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_excerpt(); ?>
					<p class="more_link"><a href="<?php the_permalink(); ?>">Continue&nbsp;reading&nbsp;<span class="meta-nav">&rarr;</a></p>
					<?php edit_post_link('edit post', '', ''); ?>
				</div>
			<?php endwhile; ?>
		</div>
					
		<?php if (  $wp_query->max_num_pages > 1 ) : ?>
		<div id="nav-below" class="navigation">
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
		</div><!-- #nav-below -->
		<?php endif; ?>

	</div><!-- span8 -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>