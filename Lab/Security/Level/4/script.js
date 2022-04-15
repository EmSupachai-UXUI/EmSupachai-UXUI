$(document).ready(function(){
    var form = $("#form");
    var form_send = $("#form_send");
    var input = $("#input");
    var buttom = $("#buttom");
    var text1 = $("#text1");
    var text2 = $("#text2");
    var nextlevel = $("#nextlevel");
    var web_request = $("#web_request");
    var textunderinput = $("#textunderinput");
    var reset_code = $("#reset_code");
    var stop_request = $("#stop_request");
    var help_request = $("#help_request");

    buttom.click(function(){
        if(input.val()){
            /** Command */
            text1.addClass("hide");
            text2.removeClass("hide");
            help_request.addClass("hide");
            web_request.removeClass("hide");
            form_send.removeClass("hide");
            nextlevel.removeClass("disabled");
            textunderinput.html("<h5><b style='color:#EB8145; '>Code "+input.val()+"</b> ไม่ถูกต้อง !!</h5>")
            reset_code.text("reset_code="+input.val()+"&username=Hakka.Lab");
            document.cookie = "code="+input.val()+"; path=/;";
        }else{
            /** Command */
        }
    })

    stop_request.click(function(){
        text1.removeClass("hide");
        text2.addClass("hide");
        web_request.addClass("hide");
        help_request.removeClass("hide");

    });

    
});