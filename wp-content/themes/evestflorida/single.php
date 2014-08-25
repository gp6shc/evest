
<?php get_header(); ?>


	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		
		<?php 
			if ( in_category( 'Contractor' )) { ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<div class="contractor-entry">
						<h1><?php the_title()?></h1>
						<h3><?php 
							$category = get_the_category();
							$length = count($category);
							$i = 0;
							foreach($category as $aCat) {
								if ($aCat->cat_name === "Contractor") {
									echo "";
								}elseif ($length <= 2){
									echo $aCat->cat_name . " County";
								}elseif ($i === $length - 1){
									echo "and " . $aCat->cat_name . " Counties";
								}else{
									echo $aCat->cat_name . ", ";
								}
								$i++;
							}
						?></h3>
						<div class="contractor-right">
							<?php 
								the_post_thumbnail('full');
								?><hr><?php
								the_post_tags();
							?>
						</div>
						<div class="entry">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
		
		<?php } else { ?>
	
	<div id="left" class="eleven columns" >
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="title">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="postmeta"> 	<span>Posted by <?php the_author_posts_link(); ?></span> | <span><?php the_time('l, n F Y'); ?></span> | <span><?php the_category(', '); ?></span> </div>
			</div>
		
			<div class="entry">
				<?php the_content('Read the rest of this entry &raquo;'); ?>
				<div class="clear"></div>
				<?php wp_link_pages(array('before' => '<p><strong>Pages: </strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
		</div>
		
		<?php comments_template(); ?>
		<div class="back"><a href="<?php echo home_url( '/news' ); ?>">&larr; Back to News</a></div>
	</div>
		<?php get_sidebar(); ?>
	
		<?}?>
	
	<?php endwhile; endif; ?>	

<?php get_footer(); ?>