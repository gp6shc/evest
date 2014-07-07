<?php
/*
Template Name: FAQs
*/
?>


<?php get_header(); ?>
<!-- override some styling -->
<style>
.container .eleven.columns {
width: 98% !important;
}
.ui-accordion-content{
	height: auto !important; 
}
.ui-widget-content {
color: #555 !important;
}
.ui-accordion .ui-accordion-icons {
font-family: Arial,Century gothic, sans-serif;
}
.entry p {
margin-bottom: 10px;
font-family: Arial,Century gothic, sans-serif;
}

</style>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

<!-- init #accordian for property owner faq -->
<script>
  $(function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  });
</script>

<!-- init #accordian2 for contractor faq -->
<script>
  $(function() {
    $( "#accordion2" ).accordion({
      collapsible: true
    });
  });
</script>

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