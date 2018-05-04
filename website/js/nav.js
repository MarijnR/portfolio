$(document).ready(function(){
		$.localScroll();
		var bgh = $("bg_wrapper").height();
		var wh = $(window).height();
		var tot = (bgh - bgh)+wh;
		
		/*$('#barst').css("margin-left",""+($("#container").width()-30)+"px")*/

		if(960 > $(window).width()){
			$("nav span").css("width", " "+($("#container").width()-20)+"px");
			$("nav").css("width", " "+$("#container").width()+"px");
		}
		$("nav").css("top"," -"+$("nav").height()+"px")

		var click = 0;
		$("#cssmenu").on("click", function(){
			click++;
			if(click == 1){
				$(this).animate({top: "0px"},1000);
				$("nav span").css("display", "none");
				$("nav span").animate({opacity: "0"},1000);
			} else if (click == 2){
				$(this).animate({top: "-"+($(this).height())+"px"},1000);
				$("nav span").animate({opacity:"1"},1000);
				$("nav span").css("display", "block");
				click = 0;
			}
		});

});