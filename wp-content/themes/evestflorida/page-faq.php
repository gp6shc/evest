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
span {
	color: #219875;
	cursor: pointer;
}

</style>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

<!-- init #accordian for general faq -->
<script>
  $(function() {
    $( "#accordion" ).accordion({
      active: false,
      collapsible: true
    });
  });
</script>

<!-- init #accordian2 for eligibility faq -->
<script>
  $(function() {
    $( "#accordion2" ).accordion({
      active: false,
      collapsible: true
    });
  });
</script>

<!-- init #accordian3 for costs & financing faq -->
<script>
  $(function() {
    $( "#accordion3" ).accordion({
      active: false,
      collapsible: true
    });
  });
</script>

<!-- init #accordian4 for program details faq -->
<script>
  $(function() {
    $( "#accordion4" ).accordion({
      active: false,
      collapsible: true
    });
  });
</script>

<div id="left" class="eleven columns" >
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		
		<div class="post" id="post-<?php the_ID(); ?>">
		
			<div class="entry">
			<?php the_content('Read the rest of this entry &raquo;'); ?>
 
					<div class="clear"></div>
			</div>
		</div>
		
	<?php endwhile; endif; ?>	
</div>

<script type="text/javascript">
	function topQuestion( number, accordion, position ){
		jQuery('#topQ' + number).click( function() {
			jQuery( '#accordion' + accordion ).accordion({
				active: position
			});
			setTimeout( function(){
				jQuery("html, body").animate({scrollTop: (jQuery('#topA'+number).offset().top - 25) });
			}, 450);
		});
	}

	// enter top questions here
	topQuestion("1","2",0); // 1 = the quesition with id="topQ1" and answer with id="topA1"  2 = the Q/A is in the second accordian set, id="accordian2"  0 = the zero based index of the accordian, for this: the first the question in the accordian is opened
	topQuestion("2","2",3);
	topQuestion("3","3",4);
	topQuestion("4","2",2);

</script>

<?php get_sidebar(); ?>
<?php get_footer(); ?>