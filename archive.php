<?php get_header(); ?>

<div class="row-fluid">
   	<div class="span8">

		<?php
			/* Queue the first post, that way we know
			 * what date we're dealing with (if that is the case).
			 *
			 * We reset this later so we can run the loop
			 * properly with a call to rewind_posts().
			 */
			if ( have_posts() )
				the_post();
		?>
		
					<h2 class="header_bar clear">
		<?php if ( is_day() ) : ?>
						Archives: <?php the_date( 'F j, Y', '', '', true ); ?>
		<?php elseif ( is_month() ) : ?>
						Archives: <?php the_date( 'F Y', '', '', true ); ?>
		<?php elseif ( is_year() ) : ?>
						Archives: <?php the_date( 'Y', '', '', true ); ?>
		<?php elseif ( is_category() ) : ?>
						<?php single_cat_title(); ?>
		<?php elseif ( is_tag() ) : ?>
						Posts tagged <?php single_tag_title(); ?>
		<?php elseif ( is_author() ) : ?>
						Posts by <?php the_author(); ?>
		<?php else : ?>
						Blog Archives
		<?php endif; ?>
					</h2>
		
		<?php
			/* Since we called the_post() above, we need to
			 * rewind the loop back to the beginning that way
			 * we can run the loop properly, in full.
			 */
			rewind_posts();
		?>
		<hr>
		
		<div class="archive_stories">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="story">
					
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p class="meta">
						<i>Posted on:</i> <time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('F jS, Y') ?></time>
						<span class="byline author vcard">
							<i>by</i> <span class="fn"><?php the_author() ?></span>
						</span>
						<?php edit_post_link('edit post', ' - ', ''); ?>
					</p>
					<?php the_excerpt(); ?>
					<p class="more_link"><a href="<?php the_permalink(); ?>">Continue&nbsp;reading&nbsp;<span class="meta-nav">&rarr;</a></p>
				</div>
				<hr>
			<?php endwhile; ?>
		</div>
					
		<?php if (  $wp_query->max_num_pages > 1 ) : ?>
		<div id="nav-below" class="navigation pager">
			<div class="nav-previous previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'bootstrap' ) ); ?></div>
			<div class="nav-next next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'bootstrap' ) ); ?></div>
		</div><!-- #nav-below -->
		<?php endif; ?>

	</div><!-- span8 -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>

