<?php
/*
Template Name: Full-Length Page
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


<?php get_sidebar(); ?>
<?php get_footer(); ?>