<?php get_header(); ?>
<div id="left" class="eleven columns" >
<div class="post">
<div class="title">
<h2>Page Not Found: 404</h2>
</div>
<div class="entry">
<p>The page you are looking for has either been deleted or moved. Please try searching below, or click <a href="<?php echo home_url(); ?>">HERE</a> to return home.</p>
<p> <?php get_search_form( ); ?> </p>
</div>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>