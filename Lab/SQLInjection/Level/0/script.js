$(document).ready(function(){
  var answer1 = $("#answer1");
  var answer2 = $("#answer2");
  var answer3 = $("#answer3");
  var answer4 = $("#answer4");
  var answerbutton1 = $("#answerbutton1");
  var answerbutton2 = $("#answerbutton2");
  var answerbutton3 = $("#answerbutton3");
  var answerbutton4 = $("#answerbutton4");

  answer1.val(getCookie("answer1"));
  answer2.val(getCookie("answer2"));
  answer3.val(getCookie("answer3"));
  answer4.val(getCookie("answer4"));

  answerbutton1.click(function(){
      if(answer1.val() == "HKA{SQL_INJECTION_3840}"){
          document.cookie = "answer1=HKA{SQL_INJECTION_3840};"
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
      if(answer2.val() && answer2.val() == "HKA{SQL_INJECTION_9581}"){
          document.cookie = "answer2=HKA{SQL_INJECTION_9581};"
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
  answerbutton3.click(function(){
      if(answer3.val() && answer3.val() == "HKA{SQL_INJECTION_1093}"){
          document.cookie = "answer3=HKA{SQL_INJECTION_1093};"
          answer3.addClass("border-success");
          answer3.addClass("text-center");
          answer3.addClass("disabled");
          answer3.val("คำตอบถูกต้อง !!!");
          setTimeout(function(){
            answer3.removeClass("border-success");
            answer3.removeClass("text-center");
              answer3.removeClass("disabled");
              answer3.val(getCookie("answer3"));
          }, 5000);
      }else{
        answer3.val("");
          answer3.addClass("border-danger");
          answer3.attr("placeholder", "ไม่ถูกต้อง !!!");
          setTimeout(function(){
              answer2.removeClass("border-danger");
              answer2.attr("placeholder", "ใส่คำตอบ...");
          }, 3000);
      }
  });
  answerbutton4.click(function(){
      if(answer4.val() && answer4.val() == "HKA{SQL_INJECTION_MASTER}"){
          document.cookie = "answer4=HKA{SQL_INJECTION_MASTER};"
          answer4.addClass("border-success");
          answer4.addClass("text-center");
          answer4.addClass("disabled");
          answer4.val("คำตอบถูกต้อง !!!");
          setTimeout(function(){
            answer4.removeClass("border-success");
            answer4.removeClass("text-center");
            answer4.removeClass("disabled");
            answer4.val(getCookie("answer4"));
          }, 5000);
      }else{
        answer4.val("");
        answer4.addClass("border-danger");
        answer4.attr("placeholder", "ไม่ถูกต้อง !!!");
          setTimeout(function(){
            answer4.removeClass("border-danger");
            answer4.attr("placeholder", "ใส่คำตอบ...");
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