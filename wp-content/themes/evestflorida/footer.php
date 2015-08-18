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
		All content copyright &copy; <?php echo date('Y');?> <a href="<?php bloginfo('siteurl'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>. <?php bloginfo('description'); ?>All rights reserved. Contact: <a href="mailto:info@evestflorida.com">info@EvestFlorida.com</a> | <a href="<?php echo home_url( '/site-map' ); ?>">Site Map</a> | <a href="http://evestflorida.com/wp-content/uploads/2015/04/Privacy_Policy_042315.pdf">Privacy Policy</a><br />
		
	</div>	
<div class='clear'></div>	
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MJ878B"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MJ878B');</script>
<!-- End Google Tag Manager -->

<!-- Latest compiled and minified Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</div>
<div class='clear'></div>	
</div>
</body>
</html>      