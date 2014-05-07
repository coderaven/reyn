$(function() {
    $("img.lazy").lazyload({
    	effect : "fadeIn"
	});
});

$(document).ready(function(){
	$("#scrolltop").click(function(){
		//$('#daytop').ScrollTo();
		$('#thedaytop').animatescroll({scrollSpeed:2000,easing:'easeOutBack'});
	});

	$("#scrolldown").click(function(){
		//$('#day2').ScrollTo();
		$('#theday2').animatescroll({scrollSpeed:2000,easing:'easeOutBack'});
	});

	$("html").niceScroll();
});