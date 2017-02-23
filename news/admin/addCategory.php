<?php
 include  "../public/session.php";
 include "../public/db.php";
 include  "../public/functions.php";
 $tree=new  abc();
 $tree->tree(0,1,$db,"category");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="addCategoryInfo.php" >

    上级分类:  无限极分类
    <select name="pid">
        <option value="0">一级分类</option>
       <?php echo $tree->str ?>;
    </select><br>

    分类名称:<input type="text" name="cname" >

    <br>

    <input type="submit" value="提交">
</form>
</body>
</html>