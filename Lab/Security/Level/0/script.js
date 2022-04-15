$(document).ready(function(){
    var answer1 = $("#answer1");
    var answer2 = $("#answer2");
    var answerbutton1 = $("#answerbutton1");
    var answerbutton2 = $("#answerbutton2");

    answer1.val(getCookie("answer1"));
    answer2.val(getCookie("answer2"));

    answerbutton1.click(function(){
        if(answer1.val() && answer1.val().toLowerCase() == "hakka.lab"){
            document.cookie = "answer1=Hakka.Lab;"
            answer1.addClass("border-success");
            answer1.addClass("text-center");
            answer1.addClass("disabled");
            answer1.val("คำตอบถูกต้อง !!!");
            setTimeout(function(){
                answer1.removeClass("border-success");
                answer1.removeClass("text-center");
                answer1.removeClass("disabled");
                answer1.val(getCookie("answer1"));
            }, 5000);
        }else{
            answer1.val("");
            answer1.addClass("border-danger");
            answer1.attr("placeholder", "ไม่ถูกต้อง !!!");
            setTimeout(function(){
                answer1.removeClass("border-danger");
                answer1.attr("placeholder", "ใส่คำตอบ...");
            }, 3000);
        }
    });
    answerbutton2.click(function(){
        if(answer2.val() && answer2.val() == "THM{BRUTEFORCING}"){
            document.cookie = "answer2=THM{BRUTEFORCING};"
            answer2.addClass("border-success");
            answer2.addClass("text-center");
            answer2.addClass("disabled");
            answer2.val("คำตอบถูกต้อง !!!");
            setTimeout(function(){
                answer2.removeClass("border-success");
                answer2.removeClass("text-center");
                answer2.removeClass("disabled");
                answer2.val(getCookie("answer2"));
            }, 5000);
        }else{
            answer2.val("");
            answer2.addClass("border-danger");
            answer2.attr("placeholder", "ไม่ถูกต้อง !!!");
            setTimeout(function(){
                answer2.removeClass("border-danger");
                answer2.attr("placeholder", "ใส่คำตอบ...");
            }, 3000);
        }
    });
});

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }