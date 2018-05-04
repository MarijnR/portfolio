$(document).ready(function(){

	$('#afleveringen > ul > li:has(ul)').addClass("has-sub");

	$('#afleveringen > ul > li > a').click(function() {

	var checkElement = $(this).next();

	$('#afleveringen li').removeClass('active');
	$(this).closest('li').addClass('active');	

	if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
		$(this).closest('li').removeClass('active');
		checkElement.slideUp('normal');
		
	}

	if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
		$('#afleveringen ul ul:visible').slideUp('normal');
		$("#afleveringen2 ul ul").slideUp('normal');
		checkElement.slideDown('normal');
	}

	if (checkElement.is('ul')) {
		return false;
	} else {
		return false;	
	}
});

	$('#afleveringen2 > ul > li:has(ul)').addClass("has-sub");

	$('#afleveringen2 > ul > li > a').click(function() {

	var checkElement = $(this).next();

	$('#afleveringen2 li').removeClass('active');
	$(this).closest('li').addClass('active');	

	if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
		$(this).closest('li').removeClass('active');
		checkElement.slideUp('normal');
	}

	if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
		$('#afleveringen2 ul ul:visible').slideUp('normal');
		$("#afleveringen ul ul").slideUp('normal');
		checkElement.slideDown('normal');
	}

	if (checkElement.is('ul')) {
		return false;
	} else {
		return false;	
	}
});


});