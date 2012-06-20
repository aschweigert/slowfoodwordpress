<?php get_header(); ?>

   	 <div id="main" class="row-fluid span12">
     	
     	<?php get_template_part( 'carousel' ); ?>
     	
       <div class="row-fluid">
         <div class="span4">
         	<div class="well spotlight">
         		<p><strong>Welcome to Slow Food Columbus</strong>&mdash;the Columbus, Ohio convivium of Slow Food USA.</p>
            	<p><a class="btn btn-success btn-large" title="Join Slow Food USA and select OH - Columbus as your local chapter" href="http://slowfoodusa.org/local" target="_blank">Become a Member &raquo;</a></p>
         	</div>
         	<div class="well">
            	<p><strong>Our mission</strong> is to bring people together to enjoy the pleasures of the table while carrying out the Slow Food mission at the local level: to defend biodiversity in our food supply, spread taste education and connect producers of excellent foods with co-producers through events and initiatives.</p>
            	<p class="more_link"><a href="/about/">Learn&nbsp;More&nbsp;<span class="meta-nav">&rarr;</a></p>
         	</div>
         </div><!--/span-->
         <div class="span4">
           <h2>Upcoming Events</h2>
           <ul class="unstyled">
           	<?php
				$new_query = new WP_Query(array(
				'posts_per_page'	=> 3,
				'post__not_in' 		=> $ids,
				'cat'               => '77',
				'orderby'    		=> 'date',
				'order'    			=> 'ASC'
				//'paged'				=> $paged
				));
			?>
           <?php if (have_posts()) : ?>
           <?php
					while ($new_query->have_posts()) : $new_query->the_post(); update_post_caches($posts); $ids[] = get_the_ID();
			?>
			
           <li>
           <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
           <p><?php echo get_post_meta($post->ID, 'event_location', true); ?><br />
           <?php echo get_post_meta($post->ID, 'event_datetime', true); ?></p>
           
           </li>
           
           <?php endwhile; ?>
           <?php endif; ?>
           </ul>
           <p class="more_link"><a href="/events/">More&nbsp;Events&nbsp;<span class="meta-nav">&rarr;</a></p>
         </div><!--/span-->
         <div class="span4">
         	<div class="well">
         	<h2>Keep In Touch</h2>
         	<form action="http://slowfoodcolumbus.us2.list-manage1.com/subscribe/post?u=3c2ae7fb348654dd13a49e078&amp;id=e526484f3d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
				<label for="mce-EMAIL">Subscribe to our mailing list</label>
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
				<div class="clear"></div>
				<input type="submit" value="Subscribe &raquo;" name="subscribe" id="mc-embedded-subscribe" class="btn btn-success">
			</form>
         	</div>
           	<h2>On Our Blog</h2>
          
           	<?php
				$new_query = new WP_Query(array(
				'posts_per_page'	=> 1,
				'post__not_in' 		=> $ids,
				//'cat'               => '10527',
				//'paged'				=> $paged
				));
			?>
			<?php if (have_posts()) : ?>
			<?php
					while ($new_query->have_posts()) : $new_query->the_post(); update_post_caches($posts); $ids[] = get_the_ID();
			?>
			
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?>
			<p class="more_link"><a href="<?php the_permalink(); ?>">Continue&nbsp;Reading&nbsp;<span class="meta-nav">&rarr;</a></p>
           
			<?php endwhile; ?>
			<?php endif; ?>
                      
           
         </div><!--/span-->
       </div><!--/row-->

<?php get_footer(); ?>
