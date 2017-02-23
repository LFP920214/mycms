<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .box{
            width:300px;
            height:200px;
            border:1px solid #000;
            position: fixed;
            left:0;right:0;top:0;bottom: 0;
            margin:auto;
            text-align: center;
        }
        .message{
            font-size: 14px;
        }
    </style>
    <script src="../js/jquery.js"></script>
    <script>
      $(function(){
            var btn=$("input[type=submit]");
            // 1.  用户名
             var reg=/^\w{5,10}$/;
             $("input[name=username]").keyup(function(){
                 var val=($(this).val());
                 if(!reg.test(val)){
                    $(".message:eq(0)").html("格式有误").css("color","red");
                    btn.attr("disabled","true");
                         $("input[name=username]").removeAttr("ok");
                 }else{
                     $.ajax({
                         url:"selectUser.php",
                         data:{username:val},
                         success:function(e){
                            if(e=="ok"){

                                $("input[name=username]").attr("ok","ok");

                                $(".message:eq(0)").html("用户名可用").css("color","green");
                    if($("input[name=password]").attr("ok")=="ok") {
                        btn.removeAttr("disabled");
                    }
                            }else if(e=="error"){
                                $(".message:eq(0)").html("用户名已经存在").css("color","red");
                                btn.attr("disabled","true");
                                $("input[name=username]").removeAttr("ok");

                            }
                         }
                     })

                 }
             })



          //2. 密码

          $("input[name=password]").keyup(function(){
              var val=($(this).val());
              if(!reg.test(val)){
                  $(".message:eq(1)").html("格式有误").css("color","red");
                  btn.attr("disabled","true");
                  $("input[name=password]").removeAttr("ok");
              }else{

                  $("input[name=password]").attr("ok","ok");
                  $(".message:eq(1)").html("格式正确").css("color","green");
                  if($("input[name=username]").attr("ok")=="ok") {
                      btn.removeAttr("disabled")
                  }
              }
          })




      })
    </script>
</head>
<body>

<div class="box">
      <h3>注册页</h3>
      <form action="addReg.php" method="post">
          用户名:<input type="text" name="username"><br>
          <span class="message"></span>
          <br>


          密&nbsp;&nbsp;&nbsp;码:<input type="text" name="password"><br>
          <span class="message"></span>
          <br>

          <input type="submit" value="注册" disabled="disabled">
      </form><br>
    已有用户名,请<a href="login.php">点击登陆</a>
</div>

</body>
</html>