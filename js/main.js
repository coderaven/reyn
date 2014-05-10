$(function() {
    $("img.lazy").lazyload({
    	effect : "fadeIn"
	});
});

$(document).ready(function(){
	$("#scrolltop").click(function(){
		//$('#daytop').ScrollTo();
		$('#thedaytop').animatescroll({scrollSpeed:2000,easing:'easeInBack'});
	});

	$("#scrolldown").click(function(){
		//$('#day2').ScrollTo();
		$('#theday6').animatescroll({scrollSpeed:2000,easing:'easeOutBack'});
	});

	$("html").niceScroll();

	$("#click7 img").click(function(){
		$("#theday7 img").first().attr("src","images/day7and2.png").hide().show(500);
		$("#theday7 .daytext").attr("class","daytext not-so-dark");
		$("#theday7").attr("class","daywrapper color-darkerwhite");
		$("#click7 img").hide();
	});


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