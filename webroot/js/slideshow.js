$(document).ready(function() {
	setSlideshowSize();
	setInterval("slideSwitch()", 5000);
	
	$(window).resize(function() {
		setSlideshowSize();
	});
	
});

function slideSwitch() {
	var $active = $('#slideshow img.active');
	if ($active.length == 0)
		$active = $('#slideshow img:last');
	
	var $next = $active.next().length ? $active.next() : $('#slideshow img:first');
		
	$active.addClass('last-active');
	
	$next.css({opacity: 0.0}).addClass('active').animate({opacity: 1.0}, 1000, function() {$active.removeClass('active last-active');});
}

function setSlideshowSize() {
	var $mainFrame = $('div#main');
	var $slideshowFrame = $('div#slideshow');
	var mainWidth = $mainFrame.width();
	//var $slideshowWidth = $slideshowFrame.width();
	
	var widthRatio = 1.3111111111;	// mainFrameWidth 1180 / slideshowFrameWidth 900
	var aspectRatio = 1.5;			// width / height   3:2
	
	var newSlideshowWidth = mainWidth / widthRatio;
	var newSlideshowHeight = newSlideshowWidth / aspectRatio;
	console.log(newSlideshowWidth);
	console.log(newSlideshowHeight);
	$slideshowFrame.css({
		'width' : newSlideshowWidth,
		'height' : newSlideshowHeight
	});
	
}