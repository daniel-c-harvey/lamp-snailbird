$(document).ready(function() {
    sizeVideo();
});

$(window).resize(function() {
    sizeVideo();
});

function sizeVideo()
{
    let videoIdentifier = ".youtubeframe";
    let frame = $(videoIdentifier);
	if(frame.length) {
		let minWidth = 483;
		let w = Math.max(frame.parent().width(), minWidth);
		let h = w * 0.5625; // keep aspect ratio
		
        console.log("Setting video size: " + w + " x " + h);

		frame.css({
			'width' : w,
			'height' : h
		});
    }
}