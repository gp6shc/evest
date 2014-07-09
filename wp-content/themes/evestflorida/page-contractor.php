<?php
/*
Template Name: Find a Contractor
*/
?>

<?php get_header(); ?>

<!--override eleven columns to strech to container width -->
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

<?php echo do_shortcode("[ULWPQSF id=860 button=0]"); ?>

<div id="test">
<?php
	$query = new WP_Query( 'cat=17&posts_per_page=-1');
	
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
				echo  '<header><h1><a href="'.get_permalink().'">'.get_the_title().'</a></h1></header>';
				}
			}
?>
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>