		<nav class="navbar">
	    	<div class="navbar-inner">
	          <div class="container">
		          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
			      </a>
			      <ul class="nav">
			      	<li class="hidden-phone"><a href="<?php bloginfo('url'); ?>">Home</a></li>
			      	<li class="dropdown">
		              <a data-toggle="dropdown" class="dropdown-toggle" href="#">Events <b class="caret"></b></a>
		              <ul class="dropdown-menu">
		                <li><a href="<?php bloginfo('url'); ?>/events/">Upcoming Events</a></li>
		                <li>
		                    <a href="<?php bloginfo('url'); ?>/events/2012-events/">Past Events <i class="icon-arrow-right"></i></a>
		                    <ul class="dropdown-menu sub-menu">
		                        <li><a href="<?php bloginfo('url'); ?>/events/2012-events/">2012</a></li>
		                        <li><a href="<?php bloginfo('url'); ?>/events/2011-events/">2011</a></li>
		                        <li><a href="<?php bloginfo('url'); ?>/events/2010-events/">2010</a></li>
		                        <li><a href="<?php bloginfo('url'); ?>/events/2009-events/">2009</a></li>
		                        <li><a href="<?php bloginfo('url'); ?>/events/2008-events/">2008</a></li>
		                    </ul>
		                </li>
		                <li><a href="<?php bloginfo('url'); ?>/events/event-proposal/">Propose an Event</a></li>
		              </ul>
			      	</li>
			      	<li class="dropdown">
		              <a data-toggle="dropdown" class="dropdown-toggle" href="#">Get Involved <b class="caret"></b></a>
		              <ul class="dropdown-menu">
		              	<li><a title="Join Slow Food USA and select OH - Columbus as your local chapter" href="http://slowfoodusa.org/local" target="_blank">Become a Member</a></li>
		                <li>
		                    <a href="<?php bloginfo('url'); ?>/programs-and-committees/">Committees <i class="icon-arrow-right"></i></a>
		                    <ul class="dropdown-menu sub-menu">
		                        <li><a href="<?php bloginfo('url'); ?>/programs-and-committees/#conviviality">Conviviality</a></li>
		                        <li><a href="<?php bloginfo('url'); ?>/programs-and-committees/#education">Taste Education</a></li>
		                        <li><a href="<?php bloginfo('url'); ?>/programs-and-committees/#biodiversity">Biodiversity</a></li>
		                        <li><a href="<?php bloginfo('url'); ?>/programs-and-committees/#policy">Food Policy</a></li>
		                        <li><a href="<?php bloginfo('url'); ?>/programs-and-committees/#schools">Slow Food in Schools</a></li>
		                    </ul>
		                </li>
		                <li>
		                    <a href="<?php bloginfo('url'); ?>/category/projects/">Projects <i class="icon-arrow-right"></i></a>
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
		          		<li><a href="<?php bloginfo('url'); ?>/blog/">Blog</a></li>
			      		<li><a href="<?php bloginfo('url'); ?>/about/">About</a></li>
			      		<li><a href="<?php bloginfo('url'); ?>/contact/">Contact</a></li>
			      	</ul>
		          	<ul class="social-icons pull-right">
		          		<?php slowfood_social_links(); ?>
		          	</ul>
			        <form method="get" name="searchform" id="searchform" action="<?php bloginfo('url'); ?>/" class="navbar-search form-inline pull-right">
				        <input type="text" value="" name="s" id="query" placeholder="Search" />
				    </form>
		          </div>

	          </div>
	        </div>
	    </nav>