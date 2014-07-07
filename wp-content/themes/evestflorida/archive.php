<?php get_header(); ?>

<div id="left" class="eleven columns" >

<?php
global $wp_query;
$args = array_merge( $wp_query->query, array( 'cat' => '-3' ) ); //all categories except ID 3 (slider)
query_posts( $args );
?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	
	<div class="post" id="post-<?php the_ID(); ?>">
		<div class="title">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<div class="postmeta"> 	<span>Posted by <?php the_author_posts_link(); ?></span> | <span><?php the_time('l, n F Y'); ?></span> | <span><?php the_category(', '); ?></span> </div>
		</div>
	
		<div class="entry">
				<?php wpe_excerpt('wpe_excerptlength_archive', ''); ?>
				<div class="clear"></div>
			
		</div>
	</div>

<?php endwhile; ?>

<?php getpagenavi(); ?>

<?php else : ?>
<div id="left" class="eleven columns" >
<div class="post">
<div class="title">
<h2>No News Articles Found</h2>
</div>
<div class="entry">
<p>There are no news articles for that particular month/year. Try searching for the article below, or click <a href="<?php echo home_url(); ?>/news">HERE</a> to return back to News.</p>
<p> <?php get_search_form( ); ?> </p>
</div>
</div>
</div>


<?php endif; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>