$(document).ready(function (){
    $("#icon-click").click( function (){
        $("#icon").toggleClass('fa-eye-slash');

        let input = $("#password");

        if(input.attr("type")==="password"){
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
})
