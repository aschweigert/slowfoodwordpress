	  <hr>

      <footer id="footer" class="clear source-org vcard copyright">
			<p>&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?></p>
			<p>Designed by <a href="http://mediatoybox.com">Media Toybox</a> and powered by <a href="http://wordpress.org" rel="nofollow">WordPress</a>.</p>
	  </footer>
	  
    </div><!--/.fluid-container-->
    
    <?php wp_footer(); ?>
    
    <script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    
    <script>

	    var _gaq = _gaq || [];
	    _gaq.push(['_setAccount', 'UA-32636110-1']);
	    _gaq.push(['_trackPageview']);

	    (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>
    
  </body>
</html>