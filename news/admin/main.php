<?php
session_start();
if(!isset($_SESSION["is_login"])){
    $message="请登录";
    $url="login.php";
    include  "message.html";
    exit;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /*
         http  无状态协议(不会帮你记录任何客户端和服务器的链接状态)
         cookie
         session
         三次握手
         四次挥手
        */
        *{
            box-sizing: border-box;
        }
        html,body{
            width:100%;height:100%;
            padding:0;margin: 0;
        }
        .header{
            width:100%;height:20%;
            border-bottom: 2px solid #000;
            text-align: center;
        }
        .main{
            width:100%;height:80%;
        }
        .left{
            float:left;width:20%;height:100%;
            border-right:2px solid #000;
        }
        .right{
            float:left;width:80%;height:100%;
        }
        iframe{
            width:100%;height:100%;
        }
        .opt{
            cursor: pointer;
        }
    </style>
    <script src="../js/jquery.js"></script>
    <script>
        $(function(){
            $(".opt").click(function(){
                $(this).find(".son").toggle(100);
            })

            $("a").click(function(e){
                e.stopPropagation();
            })
        })
    </script>
</head>
<body>
   <div class="header">
     <h1>
         <?php echo $_SESSION["username"]?> 欢迎来到内容管理系统<br>

         <a href="logout.php">退出</a>
     </h1>
   </div>
   <div class="main">
       <div class="left">
           <ul class="menu">
               <li class="opt">
                   用户管理
                   <ul class="son">
                       <li><a href="" target="right">添加用户</a></li>
                       <li><a href="" target="right">管理用户</a></li>
                   </ul>
               </li>

               <li class="opt">
                   分类管理
                   <ul class="son">
                       <li><a href="addCategory.php" target="right">添加分类</a></li>
                       <li><a href="showCategory.php" target="right">管理分类</a></li>
                   </ul>
               </li>

               <li class="opt">
                   内容管理
                   <ul class="son">
                       <li><a href="addCon.php" target="right">添加内容</a></li>
                       <li><a href="" target="right">管理内容</a></li>
                   </ul>
               </li>

           </ul>
       </div>
       <div class="right">
           <iframe src="" frameborder="0" name="right">

           </iframe>
           
       </div>
   </div>
</body>

