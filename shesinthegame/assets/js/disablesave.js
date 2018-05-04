$(document).ready(function(){

    ajaxMailChimpForm($("#mc-embedded-subscribe-form"), $("#message"));
    // Turn the given MailChimp form into an ajax version of it.
    // If resultElement is given, the subscribe result is set as html to
    // that element.
    function ajaxMailChimpForm($form, $resultElement){
        // Hijack the submission. We'll submit the form manually.
        $form.submit(function(e) {
            e.preventDefault();
            if (!isValidEmail($form)) {
                var error =  "Onjuist e-mailadres";
                $resultElement.html(error);
                $resultElement.css("color", "white");
            } else {
                $resultElement.css("color", "white");
                $resultElement.html("Inschrijven...");
                submitSubscribeForm($form, $resultElement);
            }
        });
    }
    // Validate the email address in the form
    function isValidEmail($form) {
        // If email is empty, show error message.
        // contains just one @
        var email = $form.find("input[type='email']").val();
        if (!email || !email.length) {
            return false;
            $("input#mce-EMAIL").css("border","1px solid red");
        } else if (email.indexOf("@") == -1) {
            return false;
            $("input#mce-EMAIL").css("border","1px solid red");
        }
        return true;
        $("input#mce-EMAIL").css("border","none");
    }
    // Submit the form with an ajax/jsonp request.
    // Based on http://stackoverflow.com/a/15120409/215821
    function submitSubscribeForm($form, $resultElement) {
        $.ajax({
            type: "GET",
            url: $form.attr("action"),
            data: $form.serialize(),
            cache: false,
            dataType: "jsonp",
            jsonp: "c", // trigger MailChimp to return a JSONP response
            contentType: "application/json; charset=utf-8",
            error: function(error){
                // According to jquery docs, this is never called for cross-domain JSONP requests
            },
            success: function(data){
                if (data.result != "success") {
                    var message = data.msg || "Sorry, Inschrijven is niet mogelijk. Probeer later opnieuw";
                    $resultElement.css("color", "white");
                    if (data.msg && data.msg.indexOf("already subscribed") >= 0) {
                        message = "Je bent al ingeschreven voor de nieuwsbrief";
                        $resultElement.css("color", "#fff");
                    }
                    $resultElement.html(message);
                } else {
                    $resultElement.css("color", "#fff");
                    $resultElement.html("Bedankt voor het Inschrijven!");
                    setTimeout(function() {
                     window.location.href = "instructies.html"
                 }, 3000);
                   
                }
            }
        });
}
});