<?php get_header(); ?>

	<div class="row-fluid">
   		<div class="span8">
   			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

   			<article class="hnews hentry item <?php post_class() ?>" id="post-<?php the_ID(); ?>">
			
				<h1 class="entry-title"><?php the_title(); ?></h1>
				
				<p class="meta">
					<i>Posted on:</i> <time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('F jS, Y') ?></time>
					<span class="byline author vcard">
						<i>by</i> <span class="fn"><?php the_author_posts_link() ?></span><?php edit_post_link('Edit this entry',' - ','.'); ?>
					</span>
				</p>
				
				<hr>

				<div class="entry-content">
				
					<?php the_content(); ?>
					
					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
					<?php the_tags( 'Tags: ', ', ', ''); ?>
					
					<hr>
				</div>
			
			</article>
			
			<div id="nav-below" class="navigation pager">
				<div class="previous nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'bootstrap' ) . '</span> %title' ); ?></div>
				<div class="next nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'bootstrap' ) . '</span>' ); ?></div>
			</div><!-- #nav-below -->
			
			<hr>

			<?php comments_template(); ?>

			<?php endwhile; endif; ?>
		</div>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>