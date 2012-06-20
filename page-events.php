<?php
/*
Template Name: Events
*/
?>
<?php get_header(); ?>

<div class="row-fluid">
   		<div class="span8">

   			<img class="header-image" src="<?php echo get_post_meta('1331', 'header_image', true); ?>" alt="<?php the_title(); ?>" />
   					
   			<ul class="nav nav-pills events-nav-1">
		    	<li <?php if (is_page('1331')){ echo " class=\"active\"";} ?>><a href="/events/">Upcoming Events</a></li>
		    	<li <?php if (is_page('1410')){ echo " class=\"active\"";} ?>><a href="/events/event-proposal/">Propose an Event</a></li>
   			</ul>   			
   			<ul class="nav nav-pills events-nav-2">
   				<li class="nav-label">Past Events:</h4>
		    	<span>
			    	<li <?php if (is_page('1394')){ echo " class=\"active\"";} ?>><a href="/events/2012-events/">2012</a></li>
				    <li <?php if (is_page('1357')){ echo " class=\"active\"";} ?>><a href="/events/2011-events/">2011</a></li>
				    <li <?php if (is_page('1351')){ echo " class=\"active\"";} ?>><a href="/events/2010-events/">2010</a></li>
				    <li <?php if (is_page('1342')){ echo " class=\"active\"";} ?>><a href="/events/2009-events/">2009</a></li>
				    <li <?php if (is_page('1333')){ echo " class=\"active\"";} ?>><a href="/events/2008-events/">2008</a></li>
		    	</span>
		    </ul>
   			
   			<?php if (is_page('1331')) { ?>
   			
   				<h1 class="entry-title clear">Upcoming Events</h1>
   				
   				<div class="archive_stories">
   				 <?php $posts = get_posts ("cat=77&showposts=10");
   				 	if ($posts) {
		   				 foreach ($posts as $post):
		   				 setup_postdata($post); ?>

						<div class="story">
							
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p class="meta">
								<?php echo get_post_meta($post->ID, 'event_location', true); ?><br />
								<?php echo get_post_meta($post->ID, 'event_datetime', true); ?>
								<?php edit_post_link('edit post', ' - ', ''); ?>
							</p>
							<?php the_excerpt(); ?>
							<p class="more_link"><a href="<?php the_permalink(); ?>">Continue&nbsp;reading&nbsp;<span class="meta-nav">&rarr;</a></p>
						</div>
						<hr>
					<?php endforeach; } ?>
				</div>
				
   				
   			<?php } else if (have_posts()) : while (have_posts()) : the_post(); ?>

   			<article class="hnews hentry item clear <?php post_class() ?>" id="post-<?php the_ID(); ?>">
			
				<h1 class="entry-title"><?php the_title(); ?></h1>

				<div class="entry-content">
				
					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

				</div>
			
				<?php edit_post_link('Edit this entry','','.'); ?>
			
			</article>


			<?php endwhile; endif; ?>
		</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>