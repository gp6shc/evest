<?php
/*
Template Name: Landing Page
*/
?>

<?php require 'header-landing.php'; ?>


<section class="intro">
	<div class="container">
		<header>
			<h1>Need a cost-effective way<span>to replace your roof?</span></h1>
			<p class="impress"><b>E|VEST Florida</b> Offers Homeowners an Alternative to Bank Loans & Credit Card Debt</p>
		</header>
		<a href="#js-scrolled-to"><div class="scroll" id="js-arrow-scroll"></div></a>
	</div>
</section>

<!-- Broken Roof -->
<section class="split split-alt" id="js-scrolled-to">
	<div class="split-image broken-roof"></div>
	<div class="split-content">
		<div class="split-content-wrap impress">
			<p>Tired of constantly patching roof leaks?</p>
			<p>Nervous your roof won't protect loved ones during a serious storm or hurricane?</p>
		</div>
	</div>
</section>

<!-- Shiny Roof -->
<section class="split">
	<div class="split-image shiny-roof"></div>
	<div class="split-content">
		<div class="split-content-wrap">
			<h3>It's time for<span>a new roof</span></h3>
			<p>
				<b>Replacing your roof...</b>
				<ul>
					<li>Increases the value of your home</li>
					<li>Decreases your property insurance premium</li>
					<li>Protects your family and investment</li>
				</ul>
			</p>
		</div>
	</div>
</section>

<!-- Whole Home -->
<section class="split split-alt">
	<div class="split-image whole-home"></div>
	<div class="split-content">
		<div class="split-content-wrap">
			<h3>E|VEST Florida<span>A new way to finance roof replacements</span></h3>
			<p>Replace your roof with no out-of-pocket cost. Instead, financing is repaid by a special assessment on your property tax bill.</p>
				<ul class="big-list">
					<li class="nixed">Pay several hundreds every month on a high-interest conventional loan.</li>
					<li class="checked">Select a flexible payment plan that works best for you with E|VEST Florida</li>
				</ul>
			</p>
		</div>
	</div>
</section>

<!-- Darkened Credit, Full -->
<section class="full house-cluster">
	<div class="container">
		<div class="full-content impress">
			<p>Need to make other improvements to your home, like windows, doors, an A/C unit or even a solar panels?<br/>
			<b>E|VEST Florida provides financing for those essentials too.</b></p>
			<a class="quote-wrap" href="/residential-application/"><button class="quote-button white" >Request a Free Quote</button></a>
		</div>
	</div>
</section>

<!-- Credit Card -->
<section class="split">
	<div class="split-image credit"></div>
	<div class="split-content">
		<div class="split-content-wrap">
			<h3>No minimum<span>credit score</span></h3>
			<p>Unlike other financing programs, <b>E|VEST Florida</b> does not base eligibility on credit scores.<small>*</small></p>
		</div>
	</div>
</section>

<!-- Darkened Roof, Full, Clauses -->
<section class="full shingles">
	<div class="container">
		<div class="full-clauses conditions">
			<h3>You must meet the following minimum criteria to be eligible for<span>E|VEST Florida Financing</span></h3>
			<ul>
				<li>Be the owner of record</li>
				<li>Be current and have no missed or late property taxes in the past three (3) years or period ownership, whichever is less</li>
				<li>Be current on mortgage payments and no public notices of delinquency in the past three years or period of ownership, whichever is less</li>
				<li>Have no involuntary liens on the property</li>
				<li>Not in foreclosure and no bankruptcies for the past three years</li>
			</ul>
		</div>
	</div>
</section>

<!-- Roofing Contractor -->
<section class="split split-alt">
	<div class="split-image roofing-contractor"></div>
	<div class="split-content">
		<div class="split-content-wrap">
			<h3>You Choose<span>Your Contractor</span></h3>
			<p>Choose an authorized contractor from our directory of hundreds. Prefer to use your own contractor? Ask them to apply to become an E|VEST Authorized Contractor</p>
			<a class="quote-wrap" href="/residential-application/"><button class="quote-button impress" >Request a Free Quote</button></a>
		</div>
	</div>
</section>

<!-- Darkened Roof, Full, Application -->
<section class="full shingles">
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

<script>
	// Detect request animation frame
	var scroll = window.requestAnimationFrame ||
	             window.webkitRequestAnimationFrame ||
	             window.mozRequestAnimationFrame ||
	             window.msRequestAnimationFrame ||
	             window.oRequestAnimationFrame ||
	             // IE Fallback, you can even fallback to onscroll
	             function(callback){ window.setTimeout(callback, 1000/60) };
	var viewHeight = window.innerHeight;
	var banner = document.getElementById('js-banner');
	var arrowScroll = document.getElementById('js-arrow-scroll');
	
	function loop(){
	    var top = window.pageYOffset;
	
	    // Where the magic goes
	    if (top > viewHeight - 1) { 						// if page is past first full-height block, and banner isn't already visible, show banner 
		    banner.className = "banner visible"; 
	    }else{ 											// otherwise, we're are still in the first full-height block, so if the banner is showing, hide it
		    banner.className = "banner"; 
	    }
	
	    // Recall the loop
	    scroll( loop )
	}
	
	// Call the loop for the first time
	loop();
	
	// scrollTo without jQuery
	function scrollToSmooth(scrollDuration) {
	    var	scrollHeight = window.pageYOffset;
		var toBeScrolledTo = document.getElementById('js-scrolled-to');
	    var distanceToScroll = toBeScrolledTo.offsetTop - scrollHeight;
	    var scrollStep = distanceToScroll / ( scrollDuration / 12 );
	        //cosParameter = scrollHeight / 2;
	    var scrollCurrent = scrollHeight;
	    
	    function step () {
	        setTimeout(function() {
	            if ( (toBeScrolledTo.offsetTop - window.pageYOffset) > 5) {
					
					scrollCurrent = scrollCurrent + scrollStep;
					//scrollMargin = cosParameter - cosParameter * Math.cos( scrollCount * scrollStep );
	                window.scrollTo( 0, ( scrollCurrent ) );
					console.log(scrollCurrent);

	                requestAnimationFrame(step);
	            }
	        }, 12 );
	    }
	    
	    // boot...
	    requestAnimationFrame(step);        
	}

	arrowScroll.addEventListener('click', function() {
		//scrollToSmooth(1000);
	});
	
</script>

<?php require 'footer-landing.php'; ?>