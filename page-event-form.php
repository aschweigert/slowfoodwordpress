<?php
/*
Template Name: Event Submission Form
*/
?>

<?php get_header(); ?>

	<div class="row-fluid">
   		<div class="span8">
   			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

   			<article <?php post_class('hnews hentry item') ?> id="post-<?php the_ID(); ?>">

				<div class="entry-content">
				
					<a name="form1416931561" id="formAnchor1416931561"></a>
						<script type="text/javascript" src="http://fs9.formsite.com/include/form/embedManager.js?1416931561"></script>
						<script type="text/javascript">
						EmbedManager.embed({
							key: "http://fs9.formsite.com/res/showFormEmbed?EParam=jFMIig1ZP559EwzuWKcuRdt7h1SghSJ6&1416931561",
							width: "100%"
						});
						</script>
						<!-- Notes: 
						To control the width of the form, change width: "100%" to any number or percentage.
						To pre-populate fields in the form or to use a custom resize callback, see http://fs9.formsite.com/documentation/embedded-form.html
						-->

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

				</div>
			
				<?php edit_post_link('Edit this entry','','.'); ?>
			
			</article>


			<?php endwhile; endif; ?>
		</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>