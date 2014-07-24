<?php
/*
Template Name: Find a Contractor
*/
?>

<?php get_header(); ?>

<!--override eleven columns to stretch to container width -->
<style>
.container .eleven.columns {
width: 98% !important;
}
</style>

<div id="left" class="eleven columns" >
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="title">
				<h2><a title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			</div>
		
			<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
					<div class="clear"></div>
			</div>
		</div>
		
	<?php endwhile; endif; ?>
</div>

<?php echo do_shortcode('[ULWPQSF id=860 formtitle="0" button=0]'); ?>

<div id="results">
<?php
	// Near copy of customize_output for UWPQSF to replicate its results since no query is sent in first load
	$custom_query_args = array(
    	'cat' => 17,
		'posts_per_page' => 5,
		'orderby' => 'title',
		'order' => 'ASC',
	);
	
	$custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
	$custom_query = new WP_Query( $custom_query_args );
	
	// Pagination fix
	$temp_query = $wp_query;
	$wp_query   = NULL;
	$wp_query   = $custom_query;?>

	<div id="results-total">
		<?php  
			$numberOfQueries = $custom_query->found_posts;
			
			if ($numberOfQueries == 1) {?>
				<h2><?php echo $numberOfQueries; ?> contractor was found:</h2>
			<?}elseif ($numberOfQueries == 0){?>
				<h2></h2>
			<?}else{?>
				<h2><?php echo $numberOfQueries; ?> contractors were found:</h2>
			<?}
			
		?> 
		
	</div>
	
<?php	if ( $custom_query->have_posts() ) {
			while ( $custom_query->have_posts() ) {
				$custom_query->the_post();
				
				$thumb_id = get_post_thumbnail_id();
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'medium', true);
				$thumb_url = $thumb_url_array[0];
				
				?>
			
			<div class="result">
				<a href="<?php the_permalink() ?>">
					<div class="contractor-img" style="background-image: url(<?php echo $thumb_url ?>)"></div>
					<h2><?php the_title() ?></h2>
					<hr>
					<?php the_post_tags(); ?>
				</a>	
			</div>
		<?  }
		}

wp_reset_postdata();

wp_pagenavi();

// Reset main query object
$wp_query = NULL;
$wp_query = $temp_query;
?>

</div>

<script>
		
jQuery(document).ready(
	function($) {
		$('div.uwpqsf_class label').mouseup(
			function(e){ 
				jQuery(this).toggleClass('input-checked'); 
			});
	});

	var contractorOptions = document.getElementById('tdp-0').options;
		for (var i = 0; i < contractorOptions.length; i++) {
			if (contractorOptions[i].value === 'contractor') {
				contractorOptions[i].parentElement.removeChild(contractorOptions[i]);
			}
		};
</script>

<?php get_sidebar(); ?>
<?php get_footer(); ?>