<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="mediatoybox-com" data-template-set="bootstrap-wordpress-theme" profile="http://gmpg.org/xfn/11">
    <meta charset="<?php bloginfo('charset'); ?>">
    
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	 <?php global $ids, $page, $paged; ?>
    
    <meta name="title" content="<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>">
	
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    
    <meta name="author" content="Adam Schweigert, http://mediatoybox.com">

    <link href="<?php bloginfo( 'template_directory' ); ?>/assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
       
    <script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/modernizr.custom.js"></script>

    <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/ico/apple-touch-icon-57-precomposed.png">
    
    <?php wp_enqueue_script("jquery"); ?>
    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php $url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>

	<?php if ( is_single() ) { ?>
	    <meta property="og:title" content="<?php the_title(); ?>" />
	    <meta property="og:type" content="article" />
	    <meta property="og:url" content="<?php the_permalink(); ?>"/>
	    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	    <meta property="og:description" content="<?php echo get_the_excerpt(); ?>" />
	<?php } elseif ( is_home() ) { ?>
		<meta property="og:title" content="<?php bloginfo('name'); ?>" />
	    <meta property="og:type" content="website" />
	    <meta property="og:url" content="<?php bloginfo('url'); ?>"/>
	    <meta property="og:image" content="<?php bloginfo( 'template_directory' ); ?>/assets/img/snail-180-120.png" />
	    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<?php } else { ?>
		<meta property="og:title" content="<?php bloginfo('name'); ?> <?php wp_title(); ?>" />
	    <meta property="og:type" content="article" />
	    <meta property="og:url" content="<?php echo $url; ?>"/>
	    <meta property="og:image" content="<?php bloginfo( 'template_directory' ); ?>/assets/img/snail-180-120.png" />
	    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<?php } ?>
	
	
	

    <?php wp_head(); ?>
  
  </head>

  <body>
  
    
    <div class="container-fluid wrapper">
    	
    	<?php if(is_home()) { ?>
    		<h1 class="visuallyhidden">Slow Food Columbus</h1>
    	<?php } else { ?>
    		<h2 class="visuallyhidden">Slow Food Columbus</h2>
    	<?php } ?>
    	
    	<div class="header-grp visible-desktop">
    		<a href="/"><img class="logo" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/SFC-banner-web.png" /></a>
    	</div>
    	<div class="header-grp hidden-desktop">
	    	<a href="/"><img class="logo" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/snail-180-120.png" />
	    	<div class="header-text">
	    		<img class="slowfood" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/slow-food-768-124.png" />
	    		<img class="columbus" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/columbus-541-124.png" />
	    	</div></a>
    	</div>
    	
    	<nav class="navbar" role="main">
	    	<div class="navbar-inner">
	          <div class="container">
		          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
			      </a>
			      <ul class="nav">
			      	<li class="hidden-phone"><a href="/">Home</a></li>
			      	<li class="dropdown">
		              <a data-toggle="dropdown" class="dropdown-toggle" href="#">Events <b class="caret"></b></a>
		              <ul class="dropdown-menu">
		                <li><a href="/events/">Upcoming Events</a></li>
		                <li>
		                    <a href="/events/2012-events/">Past Events <i class="icon-arrow-right"></i></a>
		                    <ul class="dropdown-menu sub-menu">
		                        <li><a href="/events/2012-events/">2012</a></li>
		                        <li><a href="/events/2011-events/">2011</a></li>
		                        <li><a href="/events/2010-events/">2010</a></li>
		                        <li><a href="/events/2009-events/">2009</a></li>
		                        <li><a href="/events/2008-events/">2008</a></li>
		                    </ul>
		                </li>
		                <li><a href="/events/event-proposal/">Propose an Event</a></li>
		              </ul>
			      	</li>
			      	<li class="dropdown">
		              <a data-toggle="dropdown" class="dropdown-toggle" href="#">Get Involved <b class="caret"></b></a>
		              <ul class="dropdown-menu">
		              	<li><a title="Join Slow Food USA and select OH - Columbus as your local chapter" href="http://slowfoodusa.org/local" target="_blank">Become a Member</a></li>
		                <li>
		                    <a href="/programs-and-committees/">Committees <i class="icon-arrow-right"></i></a>
		                    <ul class="dropdown-menu sub-menu">
		                        <li><a href="/programs-and-committees/#conviviality">Conviviality</a></li>
		                        <li><a href="/programs-and-committees/#education">Taste Education</a></li>
		                        <li><a href="/programs-and-committees/#biodiversity">Biodiversity</a></li>
		                        <li><a href="/programs-and-committees/#policy">Food Policy</a></li>
		                        <li><a href="/programs-and-committees/#schools">Slow Food in Schools</a></li>
		                    </ul>
		                </li>
		                <li>
		                    <a href="/category/projects/">Projects <i class="icon-arrow-right"></i></a>
		                    <ul class="dropdown-menu sub-menu">
		                        <?php
			                        $new_query = new WP_Query(array(
			                        'posts_per_page'	=> 4,
			                        'cat'				=> 15,
			                        )); ?>

			                        <?php while ($new_query->have_posts()) : $new_query->the_post(); update_post_caches($posts); ?>
			                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>		
			                        <?php endwhile; ?>
		                    </ul>
		                </li>
		                
		              </ul>	
			      	</li>
			      </ul>
		          <div class="nav-collapse">
		          	<ul class="nav">
		          		<li class="visible-phone"><a href="/">Home</a></li>
		          		<li><a href="/blog/">Blog</a></li>
			      		<li><a href="/about/">About</a></li>
			      		<li><a href="/contact/">Contact</a></li>
			      	</ul>
		          	<ul class="social-icons pull-right">
		          		<li><a href="/feed/" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/social-icons/rss.png" alt="" /></a>
		          		<li><a href="https://www.facebook.com/pages/Slow-Food-Columbus/139992052698940" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/social-icons/facebook.png" alt="" /></a>
		          		<li><a href="https://twitter.com/SlowFoodCMH" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/social-icons/twitter.png" alt="" /></a>
		          		<li><a href="http://pinterest.com/cbusadventures/slow-food-columbus/" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/social-icons/pinterest.png" alt="" /></a>
		          	</ul>
			        <form method="get" name="searchform" id="searchform" action="<?php bloginfo('url'); ?>/" class="navbar-search form-inline pull-right">
				        <input type="text" value="" name="s" id="query" placeholder="Search" />
				    </form>
		          </div>
		          
	          </div>
	        </div>
	    </nav>