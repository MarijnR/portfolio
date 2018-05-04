
$( document ).ready(function() {

	    $( "#datepicker" ).datepicker({ dateFormat: 'dd/mm/yy' });
        $("#btn_edit_profile").on('click', function(){
            $(".profile_edit").toggleClass("displayOn");
            $(".profile_on").toggleClass("displayOff");
        });


});


