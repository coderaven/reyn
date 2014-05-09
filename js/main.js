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
		$('#theday5').animatescroll({scrollSpeed:2000,easing:'easeOutBack'});
	});

	$("html").niceScroll();

	$("#messagebutton").click(function(e){
		e.preventDefault();
		$("#message form").hide(500);
		$("#message .messageimg").hide(500);

		var messageBody = $.trim($('#message textarea').val());

		$.post('send.php',{message: messageBody}, function(data){
			if ($.trim(data) == 'error') {
				alert("There has been an error. Please refresh this page and try again.");
				return;
			} else {
				$("#message #messagesent").show(500);
				return;
			}
		});
	});
});