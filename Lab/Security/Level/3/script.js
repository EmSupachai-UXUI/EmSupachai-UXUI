$(document).ready(function(){
    var form = $("#form");
    var form_send = $("#form_send");
    var name = $("#name");
    var resetpasswordButton = $("#resetpassword");
    var text1 = $("#text1");
    var text2 = $("#text2");
    var nextlevel = $("#nextlevel");

    resetpasswordButton.click(function(){
        if(name.val().toLowerCase() == "hakka.lab"){
            text1.addClass("hide");
            text2.removeClass("hide");
            form.addClass("hide");
            form_send.removeClass("hide");
            nextlevel.removeClass("disabled");
        }else{
            name.val("");
            name.addClass("border-danger");
        }
    })
});