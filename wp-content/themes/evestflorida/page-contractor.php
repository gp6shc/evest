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
	$query = new WP_Query( 'cat=17&posts_per_page=-1');?>
	
	<div id="results-total">
		<?php  
			$numberOfQueries = $query->found_posts;
			
			if($numberOfQueries == 1) {?>
				<h2><?php echo $numberOfQueries; ?> contractor was found:</h2>
			<?}else{?>
				<h2><?php echo $numberOfQueries; ?> contractors were found:</h2>
			<?}
			
		?> 
		
	</div>
	
<?php	if ( $query->have_posts() ) {
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
						if ($this_tag->name == "Renewable Generation" ) { ?>

							<p>Renewable Generation</p>

				<?php 	} else if ($this_tag->name == "Energy Efficiency" ) { ?>
				
							<p>Energy Efficiency</p>
				
				<?php 	} else if ($this_tag->name == "Energy Audits" ) { ?>
				
							<p>Energy Audits</p>

				<?php 	} else if ($this_tag->name == "Wind Resistance" ) { ?>
				
							<p>Wind Resistance</p>
							
				<?php 	} else {}
						}?>
				</a>	
			</div>
	<?}
	}?>		

</div>

<script>
		var inputButton = document.getElementsByTagName('label');
		
		function addClassChecked(i) {
			if(this.classList.contains('-keyword')) {
				return;
			}else{
				this.classList.toggle("input-checked");
			}	
		}
		
		for (var i = 0; i < inputButton.length; i++) {
			inputButton[i].addEventListener('mousedown', addClassChecked, false);
		}
		
</script>

<?php get_sidebar(); ?>
<?php get_footer(); ?>