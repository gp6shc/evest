<div class='clear'></div>
</div>

<div class="container" id="bottom">
	<ul>

	<?php if ( !function_exists('dynamic_sidebar')
	        || !dynamic_sidebar("Footer") ) : ?>  
	
	<?php endif; ?>
	
	</ul>
	<div class='clear'></div>
</div>

<div class="container" id="footer">
	<div class="fcred">
		All content copyright &copy; <?php echo date('Y');?> <a href="<?php bloginfo('siteurl'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>. <?php bloginfo('description'); ?>All rights reserved. Contact: <a href="mailto:info@evestflorida.com">info@EvestFlorida.com</a> | <a href="<?php echo home_url( '/site-map' ); ?>">Site Map</a><br />
		
	</div>	
<div class='clear'></div>	
<?php wp_footer(); ?>
</div>
<div class='clear'></div>	
</div>
</body>
</html>      