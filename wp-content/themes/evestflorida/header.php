<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
    
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
        
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if gte IE 9 ]><html class="no-js ie9" lang="en"> <![endif]-->
    
   <title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>
        
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Mobile Specific Meta (disabled for now) -->
	<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">-->

	<!-- CSS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href= "<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/disable-responsive-home.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/flexslider.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/layout.css">

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="<?php echo home_url(); ?>/favicon.ico" />

<?php 
	wp_enqueue_script('jquery');
	wp_enqueue_script('custom', get_stylesheet_directory_uri() .'/js/custom.js');
	wp_enqueue_script('superfish', get_stylesheet_directory_uri() .'/js/superfish.js'); 
	wp_enqueue_script('flexslider', get_stylesheet_directory_uri() .'/js/jquery.flexslider-min.js'); 
	wp_enqueue_script('mobilemenu', get_stylesheet_directory_uri() .'/js/jquery.mobilemenu.js'); 
	wp_enqueue_script('fitvid', get_stylesheet_directory_uri() .'/js/fitvid.js'); 
?>


<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
       
</head>

<body <?php body_class(); ?>><!-- the Body  -->
	

<div class="container">
	<div id="head">
	   		<div class="four columns alpha">
				<div id="blogname">	
					<?php if (of_get_option('w2f_logo')== "1") { ?>
					 <a class="logo" href="<?php bloginfo('url'); ?>/"><img src="<?php echo of_get_option('w2f_logopic'); ?>" alt="<?php bloginfo('name');?>" /></a>
				<?php } else { ?>
					<h1 class="logo"><a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a></h1>
				<?php } ?>
					<h2><?php bloginfo( 'description' ); ?> </h2>
				</div>
			</div>
			<div class="twelve columns omega" id="headright">
				<div id="topbar">
					<!--<ul class="social">
						<li> <a href=" https://twitter.com/<?php echo of_get_option('w2f_twitter'); ?> "> <img src="<?php echo get_template_directory_uri(); ?>/images/twit.png"> </a> </li>
						<li> <a href="<?php echo of_get_option('w2f_facebook'); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"> </a> </li>
						<li> <a href="<?php echo of_get_option('w2f_google'); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/images/gplus.png"> </a> </li>
						<li> <a href="<?php bloginfo('rss2_url'); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/images/rss.png"> </a> </li>
						<li> <a href="http://del.icio.us/post?url= <?php echo get_permalink() ?> "> <img src="<?php echo get_template_directory_uri(); ?>/images/del.png"> </a> </li>
						<li> <a href="<?php echo of_get_option('w2f_linkedin'); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/images/in.png"> </a> </li>
					</ul>-->
					
					<div id="find-a-contractor">E|VEST Florida delivered by the <a href="http://www.floridapace.gov/" target="_blank">Florida PACE Funding Agency</a>
						<div class="button1">
    					<a class="txt" href="<?php echo home_url(); ?>/find-a-contractor">For Authorized Contractors</a>
						</div>
    				</div>
					<!-- <?php get_search_form( ); ?> -->
				</div>
				<div id="botmenu">
					<?php wp_nav_menu( array( 'container_id' => 'subnav', 'theme_location' => 'primary','menu_id'=>'web2feel' ,'menu_class'=>'sfmenu','fallback_cb'=> 'fallbackmenu' ) ); ?>
				</div>
			</div>
			</div>
</div>

	
 <div class="container" id="casing">
 
 
	 <!-- INDIV PAGE HEADERS -->
 	<?php if ( is_page( array( 12, 14, 58, 56, 18, 9, 221 ) )  ) : ?>
	<div id="banner" style="background: url('<?php echo home_url( 'wp-content/themes/evestflorida/images/banner_roof.jpg' ); ?>') repeat-x 0 0; max-width:100%; height: auto;">
		<div class="text">
			<h2 class="green"><span class="outline"><?php echo get_the_title(); ?></span></h2>
		</div>
		<div class="shadow bottom"></div>
	</div>
	
	<!-- BANNER_STORM (LONGER TITLE PAGE) HEADER -->
	<?php elseif ( is_page( array( 11, 10, 462 ) )  ) : ?>
	<div id="banner" style="background: url('<?php echo home_url( 'wp-content/themes/evestflorida/images/banner_storm.jpg' ); ?>') repeat-x 0 0; max-width:100%; height: auto;">
		<div class="text">
			<h2 class="green"><span class="outline"><?php echo get_the_title(); ?></span></h2>
		</div>
		<div class="shadow bottom"></div>
	</div>
	
	<!-- BANNER_BUILD (SHORTER TITLE PAGE) HEADER -->
	<?php elseif ( is_page( array( 7, 13, 16 ) )  ) : ?>
	<div id="banner" style="background: url('<?php echo home_url( 'wp-content/themes/evestflorida/images/banner_build.jpg' ); ?>') repeat-x 0 0; max-width:100%; height: auto;">
		<div class="text">
			<h2 class="green"><span class="outline"><?php echo get_the_title(); ?></span></h2>
		</div>
		<div class="shadow bottom"></div>
	</div>
	
	<!-- ABOUT SUB PAGE HEADER -->
	<?php elseif ( is_page( array( 248, 292, 250, 243, 252, 245 ) )  ) : ?>
	<div id="banner" style="background: url('<?php echo home_url( 'wp-content/themes/evestflorida/images/banner_build.jpg' ); ?>') repeat-x 0 0; max-width:100%; height: auto;">
		<div class="text">
			<h2 class="green"><span class="outline">About</span></h2>
		</div>
		<div class="shadow bottom"></div>
	</div>
	
	<!-- QUALIFIED IMPROVEMENTS SUB PAGE HEADER -->
	<?php elseif ( is_page( array( 316, 318, 320 ) )  ) : ?>
	<div id="banner" style="background: url('<?php echo home_url( 'wp-content/themes/evestflorida/images/banner_storm.jpg' ); ?>') repeat-x 0 0; max-width:100%; height: auto;">
		<div class="text">
			<h2 class="green"><span class="outline">Qualifying Improvements</span></h2>
		</div>
		<div class="shadow bottom"></div>
	</div>
	
	<!-- APPLY NOW SUB PAGE HEADER -->
	<?php elseif ( is_page( array( 240, 231, 235, 304 ) )  ) : ?>
	<div id="banner" style="background: url('<?php echo home_url( 'wp-content/themes/evestflorida/images/banner_roof.jpg' ); ?>') repeat-x 0 0; max-width:100%; height: auto;">
		<div class="text">
			<h2 class="green"><span class="outline">Apply Now</span></h2>
		</div>
		<div class="shadow bottom"></div>
	</div>
	
	<!-- ABOUT SUBPAGE HEADERS -->
	<?php elseif ( is_page( array( 243, 248, 250, 252, 245 ) )  ) : ?>
	<div id="banner" style="background: url('<?php echo home_url( 'wp-content/themes/evestflorida/images/banner_roof.jpg' ); ?>') repeat-x 0 0; max-width:100%; height: auto;">
		<div class="text">
			<h2 class="green"><span class="outline">About</span></h2>
		</div>
		<div class="shadow bottom"></div>
	</div>
	
	<!-- APPLY NOW SUBPAGE HEADERS -->
	<?php elseif ( is_page( array( 231, 240, 235 ) )  ) : ?>
	<div id="banner" style="background: url('<?php echo home_url( 'wp-content/themes/evestflorida/images/banner_roof.jpg' ); ?>') repeat-x 0 0; max-width:100%; height: auto;">
		<div class="text">
			<h2 class="green"><span class="outline">Apply Now</span></h2>
		</div>
		<div class="shadow bottom"></div>
	</div>
	
	<!-- NEWS ARCHIVE HEADER -->
	<?php elseif ( is_archive() ) : ?>
	<div id="banner" style="background: url('<?php echo home_url( 'wp-content/themes/evestflorida/images/banner_build.jpg' ); ?>') repeat-x 0 0; max-width:100%; height: auto;">
		<div class="text">
			<h2 class="green"><span class="outline">Archives</span></h2>
		</div>
		<div class="shadow bottom"></div>
	</div>
	
	<!-- INDIVIDUAL CONTRACTOR PAGE HEADER -->		
	<?php elseif ( in_category( 'Contractor' ) ) : ?>
	<div id="banner" style="background: url('<?php echo home_url( 'wp-content/themes/evestflorida/images/banner_storm.jpg' ); ?>') repeat-x 0 0; max-width:100%; height: auto;">
		<div class="text">
			<h2 class="green"><a style="color: white"href="<?php the_permalink()?>/find-a-contractor"><span class="outline">Find a Contractor</span></a></h2>
		</div>
		<div class="shadow bottom"></div>
	</div>
	
	<!-- SINGLE NEWS PAGE HEADER -->
	<?php elseif ( is_single() ) : ?>
	<div id="banner" style="background: url('<?php echo home_url( 'wp-content/themes/evestflorida/images/banner_build.jpg' ); ?>') repeat-x 0 0; max-width:100%; height: auto;">
		<div class="text">
			<h2 class="green"><span class="outline">News</span></h2>
		</div>
		<div class="shadow bottom"></div>
	</div>
	
	<!-- DEFAULT PAGE HEADER -->
	<?php elseif ( is_singular() ) : ?>
	<div id="banner" style="background: url('<?php echo home_url( 'wp-content/themes/evestflorida/images/banner_roof.jpg' ); ?>') repeat-x 0 0; max-width:100%; height: auto;">
		<div class="text">
			<h2 class="green"><span class="outline"><?php echo get_the_title(); ?></span></h2>
		</div>
		<div class="shadow bottom"></div>
	</div>	
	
	<!-- 404 PAGE HEADER -->		
	<?php elseif ( is_404() ) : ?>
	<div id="banner" style="background: url('<?php echo home_url( 'wp-content/themes/evestflorida/images/banner_roof.jpg' ); ?>') repeat-x 0 0; max-width:100%; height: auto;">
		<div class="text">
			<h2 class="green"><span class="outline">Page Not Found</span></h2>
		</div>
		<div class="shadow bottom"></div>
	</div>
	
	<!-- SEARCH RESULTS PAGE HEADER -->		
	<?php elseif ( is_search() ) : ?>
	<div id="banner" style="background: url('<?php echo home_url( 'wp-content/themes/evestflorida/images/banner_roof.jpg' ); ?>') repeat-x 0 0; max-width:100%; height: auto;">
		<div class="text">
			<h2 class="green"><span class="outline">No Results Found</span></h2>
		</div>
		<div class="shadow bottom"></div>
	</div>
	
	<?php endif; ?>
