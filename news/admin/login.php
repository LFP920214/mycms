<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--

    -->
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
    </style>
</head>
<body>

<div class="box">
      <h3>登录页</h3>
      <form action="checkLogin.php" method="post">
          用户名:<input type="text" name="username" autocomplete="off"><br><br>
          密&nbsp;&nbsp;&nbsp;码:<input type="text" name="password" autocomplete="off"><br><br>
          <input type="submit" value="登陆">
      </form><br>
    没有用户名,请<a href="reg.php">点击注册</a>
</div>

</body>
</html>