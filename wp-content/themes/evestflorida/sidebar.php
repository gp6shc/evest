<div id="right" class="five columns" >

<!-- Sidebar widgets -->
<div class="sidebar">
<ul>
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar') ) : else : ?>
	<?php endif; ?>
</ul>
</div>
<div class="clear"></div>

<!-- if we want sidebar sponsors in V 2.0 -->
<!--<?php include (TEMPLATEPATH . '/sponsors.php'); ?>-->

</div>