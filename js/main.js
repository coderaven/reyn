$(function() {
    $("img.lazy").lazyload({
    	effect : "fadeIn"
	});
});

$(document).ready(function(){
	$("#scrolltop").click(function(){
		$('#daytop').ScrollTo();
	});

	$("#scrolldown").click(function(){
		$('#day2').ScrollTo();
	});
});