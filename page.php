<?php get_header(); ?>

	<div class="row-fluid">
   		<div class="span8">
   			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   			
   				<?php $header_image = get_post_meta($post->ID, 'header_image', true);
   					if (!empty($header_image)) { ?>
   					<img class="header-image" src="<?php echo $header_image; ?>" alt="<?php the_title(); ?>" />
   				<?php } ?>
   				
   			<article <?php post_class('hnews hentry item') ?> id="post-<?php the_ID(); ?>">
			
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