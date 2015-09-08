// Detect request animation frame
var rafScroll = window.requestAnimationFrame ||
             window.webkitRequestAnimationFrame ||
             window.mozRequestAnimationFrame ||
             window.msRequestAnimationFrame ||
             window.oRequestAnimationFrame ||
             // IE Fallback, you can even fallback to onscroll
             function(callback){ window.setTimeout(callback, 1000/60); };
var viewHeight = window.innerHeight;
var banner = document.getElementById('js-banner');
var arrowScroll = document.getElementById('js-arrow-scroll');

function loop(){
    var top = window.pageYOffset;

    // Where the magic goes
    if (top > viewHeight - 1) { 						// if page is past first full-height block, and banner isn't already visible, show banner 
	    banner.className = "banner visible"; 
    }else{ 												// otherwise, we're are still in the first full-height block, so if the banner is showing, hide it
	    banner.className = "banner"; 
    }

    // Recall the loop
	rafScroll( loop );
}

// Call the loop for the first time
loop();

// scrollTo animation without jQuery
function scrollToSmooth() {
	var duration = 450;
	
	var	initialPagePosition = window.pageYOffset;										// How far the top of the window is from the top of the page when the arrow is clicked
	var toBeScrolledTo 		= document.getElementById('js-scrolled-to').offsetTop;		// How far the top of the destination element is from the top of the page
	var scrollDistance		= toBeScrolledTo - initialPagePosition;						// How far the window needs to scroll to have the destination element at the top of the window
	var scrollStep 			= Math.PI / (( scrollDistance / duration ) * 15);			// 
	var scrollCurrent 		= initialPagePosition;										// holds the current scroll position of the window to be added to incrementally each loop
	var scrollCount 		= 0;														// Count for each iteration of the loop
	var cosParameter		= scrollDistance / 2;										//
	
	function step() {
		scrollCurrent = cosParameter - cosParameter * Math.cos( scrollCount * scrollStep );
		window.scrollTo( 0, ( initialPagePosition + scrollCurrent ));
		scrollCount++;
		
		
		if ( (initialPagePosition + scrollCurrent + (scrollStep * 6)) < toBeScrolledTo) {
			requestAnimationFrame(step);
		}else{
			window.scrollTo( 0, toBeScrolledTo );			
		}
	}
    
    // boot...
	requestAnimationFrame(step);
}

arrowScroll.addEventListener('click', scrollToSmooth);