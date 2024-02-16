$(document).ready(function(){
	setClassTextSize();
	setVideoSize();
	checkLayoutSwitch();
	
	$(window).resize(function () {
		setClassTextSize();
		setVideoSize();
		checkLayoutSwitch();
	});
});

function setVideoSize() {
	
	if($("#video").length) {
		
		var minSize = 483;
		var $frame = $("#video");
		var w = $frame.parent().width();
		console.log("Setting video size");
//		w /= 2.11;
		if (w < minSize)
			w = minSize;
		var h = w * 0.5625; // keep aspect ratio
		$frame.css({
			'width' : w,
			'height' : h
		});
	}
	console.log($("#video").length);
}

function setClassTextSize() {
	console.log("Setting text size");
	var mainWidth = $("#main").css("width");
	var imageWidth = $("#classImage").css("width");
	var textWidth = (1 - (imageWidth / mainWidth)) * mainWidth;  // calculates the opposite percentage
	$("section.classText").css("width", textWidth);
}

function checkLayoutSwitch() {  // try to clean this up, not efficient
//	console.log($(".classText").css("width"));
	console.log("Checking screen orientation");
	// check for small screen and switch to small layout
	if ($(".classText").css("width") <= $(".classText").css("min-width")) {
		$("section").css({
							'clear': 'both',
							'float' : 'none',
							'margin-left' : 'auto',
							'margin-right' : 'auto'
						});
		$(".equal").css('min-width', '483px');
		$(".single").css('width', $(".classText").css("min-width"));
		$("#hrImage").hide();
		console.log("switched to small layout");
	}
	// check for big screen and switch to big layout
	else {
		$("section").css({
							'clear': 'none',
							'margin-left' : '0px',
							'margin-right' : '0px',
							'float' : 'left'
						});
		$(".single").css({
							'width' : '70%',
							'clear': 'both',
							'float' : 'none',
							'margin-left' : 'auto',
							'margin-right' : 'auto'
						});
		$(".equal").css('min-width', '250px');
		$("#hrImage").show();
		console.log("switched to big layout");
	}
}