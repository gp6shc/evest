<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
    
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,800|Roboto:300,700' rel='stylesheet' type='text/css'>
	<style>
		<?php if (is_page(3305)): ?>
		.intro {background-image:url(<?= get_template_directory_uri(); ?>/images/landing/roofing/roofing_bg@2x.jpg);background:linear-gradient(rgba(255,255,255,0.70),rgba(255,255,255,0.70)),url(<?= get_template_directory_uri(); ?>/images/landing/roofing/roofing_bg@2x.jpg);background-size: cover;background-position: center center;}
		<?php endif;?>
	</style>
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/landing-style.css">
	<link rel="icon" type="image/png" href="<?php echo home_url(); ?>/favicon-32x32.png" sizes="32x32">
</head>

<body <?php body_class(); ?>>

<header class="banner" id="js-banner">
	<div class="container">
		<img class="banner-logo" src="<?= get_template_directory_uri(); ?>/images/landing/evest-logo.svg"/>
		<a class="quote-wrap banner-button" href="/residential-application/"><button class="quote-button">Request a Free Quote</button></a>
	</div>
</header>