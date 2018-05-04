$( document ).ready(function() {

	// INGANG

	$( "#ingang" ).click(function() {
		$('#gym1').fadeIn();
		$('#ingangContainer').fadeOut();
		$('#right').fadeIn();
	});

	$("#finish").click(function(){
		window.location.replace("end.html");
	});

	$( "#CGLogo" ).click(function() {
		$('.textGym').css("top","50%");
	});

	// Bok
	$( "#bok_hover" ).click(function() {
		$('.textBok').css("top","50%");
	});

	$( "#closeBTNbok1" ).click(function() {
		$('.textBok').css("top","1000px");
	});

	// Mac
	$( "#mac_hover" ).click(function() {
		$('.textMac').css("top","50%");
	});

	$( "#closeBTNmac1" ).click(function() {
		$('.textMac').css("top","1000px");
	});

	// Bord
	$( "#bord_hover" ).click(function() {
		$('.textBord').css("top","50%");
	});

	$( "#closeBTNbord1" ).click(function() {
		$('.textBord').css("top","1000px");
	});

	// Lies veldeman
	$( ".lieshover" ).click(function() {
		$('.textLies').css("top","50%");
	});

	$( "#closeBTNlies2" ).click(function() {
		$('.textLies').css("top","1000px");
	});


	$( "#closeBTNgym1" ).click(function() {
		$('.textGym').css("top","1000px");
	});

	// Saharaaaa
	$( "#SarHover" ).click(function() {
		$('.textSara').css("top","50%");
	});

	$( "#closeBTNgym2" ).click(function() {
		$('.textSara').css("top","1000px");
	});

	// Lisa
	$( "#LisaHover" ).click(function() {
		$('.textLisa').css("top","50%");
	});

	$( "#closeBTNgym3" ).click(function() {
		$('.textLisa').css("top","1000px");
	});


	// Designatelier
	$( "#boek_hover" ).click(function() {
		$('.textPortfolio').css("top","50%");
	});

	$( "#closeBTNgym6" ).click(function() {
		$('.textPortfolio').css("top","1000px");
	});

	// Liesbeth
	$( "#liesbeth_hover" ).click(function() {
		$('.textLiesbeth').css("top","50%");
	});

	$( "#closeBTNgym8" ).click(function() {
		$('.textLiesbeth').css("top","1000px");
	});


	// Thais
	$( "#ThaisHover" ).click(function() {
		$('.textThais').css("top","50%");
	});

	$( "#closeBTNgym5" ).click(function() {
		$('.textThais').css("top","1000px");
	});

	
	var currentIndex = 0;


	// INSIDE
	$('#right').click(function() {
		currentIndex++;
		if(currentIndex > 7){
			currentIndex = 7;
		} else if(currentIndex < 0) {
			currentIndex = 0
		}
		if(currentIndex <= 0){
			$("#left").fadeOut();
		} else if(currentIndex >= 7){
			$("#right").fadeOut();
			$("#finish").fadeIn();
		} else {
			$("#right").fadeIn();
			$("#left").fadeIn();
		}
		var left = $('.inside div').eq(currentIndex-1);
		var center = $('.inside div').eq(currentIndex);
		var right = $('.inside div').eq(currentIndex+1);
		left.css("left","-1180px");
		center.css("left","0px");
		right.css("left","1180px");
		console.log(currentIndex);
	});

	$('#left').click(function() {
		currentIndex--;
		if(currentIndex > 7){
			currentIndex = 7;
		} else if(currentIndex < 0) {
			currentIndex = 0
		}
		if(currentIndex <= 1){
			$("#left").fadeOut();
		} else if(currentIndex >= 7){
			$("#right").fadeOut();
		} else {
			$("#right").fadeIn();
			$("#left").fadeIn();
			$("#finish").fadeOut();
		}
		var left = $('.inside div').eq(currentIndex-1);
		var center = $('.inside div').eq(currentIndex);
		var right = $('.inside div').eq(currentIndex+1);
		left.css("left","-1180px");
		center.css("left","0px");
		right.css("left","1180px");
		console.log(currentIndex);
	});



});





$(window).on('load resize rotate', function() {
	$("#gameContainer").css({
		'-moz-transform': 'scale(0.7, 0.7)',
		zoom: '100%'
	});



	var current_width = $(window).width();
	console.log(current_width);
	if ( 1000 >= current_width) {
		$("#gameContainer").css({
			'-moz-transform': 'scale(0.7, 0.7)',
			zoom: '70%'
		});
	} 
	else if ( 1271 >= current_width) {
		$("#gameContainer").css({
			'-moz-transform': 'scale(0.7, 0.7)',
			zoom: '80%'
		});
	} 
	else if ( 1280 <= current_width >= 1910) {
		$("#gameContainer").css({
			'-moz-transform': 'scale(0.7, 0.7)',
			zoom: '100%'
		});
	} 
	else if (current_width >= 1679) {
		$("#gameContainer").css({
			'-moz-transform': 'scale(0.7, 0.7)',
			zoom: '125%'
		});
	} 

	else if (current_width >= 1679) {
		$("#gameContainer").css({
			'-moz-transform': 'scale(0.7, 0.7)',
			zoom: '125%'
		});
	} 

	else if (current_width >= 1911) {
		$("#gameContainer").css({
			'-moz-transform': 'scale(0.7, 0.7)',
			zoom: '125%'
		});
	}

});