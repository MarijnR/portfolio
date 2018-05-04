$(document).ready(function(){
	$.localScroll();
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '100%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});

	var clicked = 0;
	$("#nav_wrapper").on("click",function(){
			clicked++;
			if(clicked == 1){
				$(this).animate({left: "0px"},1000);
				$("#twrapper").fadeTo('fast',0.3);
				$("#twrapper").css("width","100%");
				$("#twrapper").css("height","100%");
				$("#btn_menu").fadeTo('slow',0);
			} else if (clicked == 2) {
				$(this).animate({left: "-200px"},1000);
				$("#twrapper").fadeTo('fast',0);
				$("#twrapper").css("width","0%");
				$("#twrapper").css("height","0%");
				$("#btn_menu").fadeTo('slow',1);
				clicked = 0;
			};
	});

});