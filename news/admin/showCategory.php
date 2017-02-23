<?php
  include "../public/session.php";
  include "../public/db.php";
  include "../public/functions.php";

  $tree=new abc();
  $tree->table(0,1,$db,"category");

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
        table{
            width:80%;margin:auto;
            border:1px solid #000;
            border-collapse: collapse;
            text-align: left;
        }
        td,th{
            border:1px solid #000;
        }
    </style>
</head>
<body>
   <table>
       <tr>
           <th>id</th>
           <th>分类名称</th>
           <th>父id</th>
           <th>操作</th>
       </tr>

       <?php
         echo $tree->str;
       ?>




   </table>
</body>
</html>
