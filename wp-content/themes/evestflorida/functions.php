<?php
//require_once('class-tgm-plugin-activation.php');
//include ( 'getplugins.php' );
//include ( 'metabox.php' );
//include ( 'cpt.php' );
//include ( 'guide.php' );


/* SIDEBARS */
if ( function_exists('register_sidebar') )

	register_sidebar(array(
	'name' => 'Sidebar',
    'before_widget' => '<li class="sidebox %2$s">',
    'after_widget' => '</li>',
	'before_title' => '<h3 class="sidetitl">',
    'after_title' => '</h3>',
	));

	register_sidebar(array(
	'name' => 'Footer',
	'before_widget' => '<li class="four columns botwid %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h3 class="bothead">',
	'after_title' => '</h3>',
	));		


/* CUSTOM MENUS */	

register_nav_menus( array(
		'primary' => __( 'Primary Navigation', '' ),
	) );

function fallbackmenu(){ ?>
			<div id="submenu">
				<ul><li> Go to Adminpanel > Appearance > Menus to create your menu. You should have WP 3.0+ version for custom menus to work.</li></ul>
			</div>
<?php }	


/* FEATURED THUMBNAILS */

if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'top_feature', 960, 500, true );
	add_image_size( 'index_box', 420, 280, true );
	add_image_size( 'index_wide', 420, 180, true );
	add_image_size( 'news', 420, 180, true );
}

/* CUSTOM EXCERPTS */
	
function wpe_excerptlength_aside($length) {
    return 15;
}
	
function wpe_excerptlength_side($length) {
    return 15;
}
	
function wpe_excerptlength_archive($length) {
    return 60;
}
function wpe_excerptlength_index($length) {
    return 25;
}

/* ADDS A READ MORE WITH LINK TO END OF EXCERPT */
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More >></a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


function wpe_excerpt($length_callback='', $more_callback='') {
    global $post;
    if(function_exists($length_callback)){
        add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>'.$output.'</p>';
    echo $output;
}



/* REMOVES CAT ID 3 (SLIDER) FROM POST QUERIES */

add_action('pre_get_posts', 'block_cat_query' );

function block_cat_query() {
    global $wp_query;   
    if( is_home() ) {
        $wp_query->query_vars['cat'] = '-3,-17';
    }
}


/* REMOVES CAT ID 3 (SLIDER) FROM CATEGORY SEARCH WIDGET */

function exclude_widget_categories($args){
$exclude = "3,17"; // The category ID of the excluding categorie(s), ID 3 = "slider"
$args["exclude"] = $exclude;
return $args;
}
add_filter("widget_categories_args","exclude_widget_categories");

/* PAGE NAVIGATION */

function getpagenavi(){
	?>
	<div id="navigation" class="clearfix">
	<?php if(function_exists('wp_pagenavi')) : ?>
	<?php wp_pagenavi() ?>
	<?php else : ?>
	        <div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries','web2feel')) ?></div>
	        <div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;','web2feel')) ?></div>
	        <div class="clear"></div>
	<?php endif; ?>

	</div>

	<?php
	}

//FLUSH REWRITE RULES

	function custom_flush_rewrite_rules() {
		global $pagenow, $wp_rewrite;
		if ( 'themes.php' == $pagenow && isset( $_GET['activated'] ) )
			$wp_rewrite->flush_rules();
	}

	add_action( 'load-themes.php', 'custom_flush_rewrite_rules' );

//Taxonomy Filter Custom Output

add_filter('uwpqsf_result_tempt', 'customize_output', '', 4);
function customize_output($results , $arg, $id, $getdata ){
	 // The Query
            $apiclass = new uwpqsfprocess();
             $query = new WP_Query( $arg ); ?>
	<div id="results-total">
		<?php  
			$numberOfQueries = $query->found_posts;
			
			if ($numberOfQueries == 1) {?>
				<h2><?php echo $numberOfQueries; ?> contractor was found:</h2>
			<?}elseif ($numberOfQueries == 0){?>
				<h2></h2>
			<?}else{?>
				<h2><?php echo $numberOfQueries; ?> contractors were found:</h2>
			<?}
			
		?> 
	</div>

<?php	ob_start();	$result = '';
	// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
			$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'medium', true);
			$thumb_url = $thumb_url_array[0];
			
			?>
			<div class="result">
				<a href="<?php the_permalink() ?>">
					<div class="contractor-img" style="background-image: url(<?php echo $thumb_url ?>)"></div>
					<h2><?php the_title() ?></h2>
					<hr>
			
		<?php	$all_the_tags = get_the_tags();
					foreach($all_the_tags as $this_tag) {
						switch ($this_tag->name) {
							case "Commercial": ?>
								<img src="<?php bloginfo('stylesheet_directory')?>/images/Evest_Commercial_1.png"/>
								<p><?php echo $this_tag->name?></p>
								
							<?php break;
							
							case "Energy": ?>				
								<img src="<?php bloginfo('stylesheet_directory')?>/images/Evest_Energy_1.png"/>
								<p><?php echo $this_tag->name?></p>
								
							<?php break;
							
							case "HVAC": ?>
								<img src="<?php bloginfo('stylesheet_directory')?>/images/Evest_HVAC_1.png"/>
								<p><?php echo $this_tag->name?></p>
								
							<?php break;
							
							case "Residential": ?>
								<img src="<?php bloginfo('stylesheet_directory')?>/images/Evest_Residential_1.png"/>
								<p><?php echo $this_tag->name?></p>
								
							<?php break;
							
							case "Solar": ?>
								<img src="<?php bloginfo('stylesheet_directory')?>/images/Evest_Solar_1.png"/>
								<p><?php echo $this_tag->name?></p>
								
							<?php break;
							
							case "Wind Mitigation": ?>
								<img src="<?php bloginfo('stylesheet_directory')?>/images/Evest_WindMitigation_1.png"/>
								<p><?php echo $this_tag->name?></p>
								
							<?php break;
								
							default: ?>
								<img src="<?php bloginfo('stylesheet_directory')?>/images/Evest_WindMitigation_2.png"/>
								<p><?php echo $this_tag->name?></p>
								
							<?}
						}?>
				</a>	
			</div>
	<?}

                        echo  $apiclass->ajax_pagination($arg['paged'],$query->max_num_pages, 4, $id, $getdata);
		 } else {
					 echo  '<h1>No contractors found.</h1>';
				}
				/* Restore original Post Data */
				wp_reset_postdata();

		$results = ob_get_clean();		
			return $results;
}?>