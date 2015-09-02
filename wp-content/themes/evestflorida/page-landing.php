<?php
/*
Template Name: Landing Page
*/
?>

<?php require 'header-landing.php'; ?>
<?php $fields = get_fields();?>

<section class="intro" style="background-image:linear-gradient(rgba(255,255,255,0.7),rgba(255,255,255,0.7)), url(<?=$fields['section_photo_1'] ?>);">
	<div class="container">
		<header>
			<?=htmlspecialchars_decode( $fields['section_1']  ); ?>
		</header>
		<div class="scroll" id="js-arrow-scroll"></div>
	</div>
</section>

<!-- Section 2 -->
<section class="split split-alt" id="js-scrolled-to">
	<div class="split-image" style="background-image:url(<?=$fields['section_photo_2'] ?>)"></div>
	<div class="split-content">
		<div class="split-content-wrap">
			<?=htmlspecialchars_decode( $fields['section_2']  ); ?>
		</div>
	</div>
</section>

<!-- Section 3 -->
<section class="split">
	<div class="split-image" style="background-image:url(<?=$fields['section_photo_3'] ?>)"></div>
	<div class="split-content">
		<div class="split-content-wrap">
			<?=htmlspecialchars_decode( $fields['section_3']  ); ?>
		</div>
	</div>
</section>

<!-- Optional Extra Section -->
<?php if ( $fields['add_extra_full-width_section']): ?>
<section class="full-width-off-centered extra-section" style="background-image:linear-gradient(to top,rgba(0,0,0,0.6),rgba(0,0,0,0.5)),url(<?=$fields['extra_full-width_section_photo'] ?>)">
	<div class="container">
		<div class="full-content impress">
			<?=htmlspecialchars_decode( $fields['extra_full-width_section']  ); ?>
		</div>
	</div>
</section>
<?php endif;?>

<!-- Section 4 -->
<section class="split split-alt">
	<div class="split-image" style="background-image:url(<?=$fields['section_photo_4'] ?>)"></div>
	<div class="split-content">
		<div class="split-content-wrap">
			<?=htmlspecialchars_decode( $fields['section_4']  ); ?>
		</div>
	</div>
</section>

<!-- Section 5 -->
<section class="full-width-off-centered" style="background-image:linear-gradient(to top,rgba(0,0,0,0.6),rgba(0,0,0,0.5)),url(<?=$fields['section_photo_5'] ?>)">
	<div class="container">
		<div class="full-content impress">
			<?=htmlspecialchars_decode( $fields['section_5']  ); ?>
		</div>
	</div>
</section>

<!-- Section 6 -->
<section class="split credit">
	<div class="split-image" style="background-image:url(<?=$fields['section_photo_6'] ?>)"></div>
	<div class="split-content">
		<div class="split-content-wrap">
			<?=htmlspecialchars_decode( $fields['section_6']  ); ?>
		</div>
	</div>
</section>

<!-- Section 7 -->
<section class="full-width-off-centered" style="background-image:linear-gradient(to top,rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(<?=$fields['section_photo_7'] ?>)">
	<div class="container">
		<div class="full-clauses conditions">
			<?=htmlspecialchars_decode( $fields['section_7']  ); ?>
		</div>
	</div>
</section>

<!-- Section 8 -->
<section class="split split-alt">
	<div class="split-image"style="background-image:url(<?=$fields['section_photo_8'] ?>)"></div>
	<div class="split-content">
		<div class="split-content-wrap">
			<?=htmlspecialchars_decode( $fields['section_8']  ); ?>
		</div>
	</div>
</section>

<!-- Quick Application -->
<section class="full-width-off-centered" style="background-image:linear-gradient(to top,rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(<?=$fields['quick_application_photo'] ?>)">
	<div class="container">
		<div class="full-blocks">
			<h3><span>Quick Application Proccess</span></h3>
			<div class="application-grid">
				<div class="block">
					<h4>Step 1</h4>
					<div class="icon"><img src="<?= get_template_directory_uri(); ?>/images/landing/EVEST-1-01.png"/></div>
					<p>Apply To E|VEST</p>
				</div>
				<div class="block">
					<h4>Step 2</h4>
					<div class="icon"><img src="<?= get_template_directory_uri(); ?>/images/landing/EVEST-1-02.png"/></div>
					<p>Submit Project</p>
				</div>
				<div class="block">
					<h4>Step 3</h4>
					<div class="icon"><img src="<?= get_template_directory_uri(); ?>/images/landing/EVEST-1-03.png"/></div>
					<p>Project Review</p>
				</div>
				<div class="block">
					<h4>Step 4</h4>
					<div class="icon"><img src="<?= get_template_directory_uri(); ?>/images/landing/EVEST-1-04.png"/></div>
					<p>Financing Agreement</p>
				</div>
				<div class="block">
					<h4>Step 5</h4>
					<div class="icon"><img src="<?= get_template_directory_uri(); ?>/images/landing/EVEST-1-05.png" class="check-circle"/></div>
					<p>Complete Project</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Finale -->
<section class="full finale">
	<div class="container">
		<div class="full-content impress">
			<?=htmlspecialchars_decode( $fields['finale']  ); ?>
		</div>
	</div>
</section>

<!-- Disclaimer -->
<section class="disclaimer">
	<div class="container">
		<div class="full-content">
			<?=htmlspecialchars_decode( $fields['disclaimer']  ); ?>
		</div>
	</div>
</section>

<?php require 'footer-landing.php'; ?>