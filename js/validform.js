var iets = function(p_Id){
	return document.getElementById(p_Id);
};

iets("myform").onsubmit = function(){
	var emailval = iets("email").value;
	var at = emailval.indexOf("@");
	var suffix = emailval.substring(at, emailval.length);
	var userval = iets("username").value;

	if(at == -1){
		iets("email").style.border ="2px solid red";
		iets("error").innerText = "e-mail is unvalid!";
		iets("error").style.color = "red";		
	} else {
		iets("email").style.border ="2px solid green";
		iets("error").innerText ="";
	}

	if(userval == ""){
		iets("username").style.border ="2px solid red";
		iets("error").innerText = "Enter a name!";
		iets("error").style.color = "red";
	} else {
		iets("username").style.border ="2px solid green";
	}

	if(userval != "" && at != -1){
		iets("error").style.color = "white";
		iets("error").innerText = "message send";
	}

	return(false);
}
