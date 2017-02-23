<?php
  include  "../public/session.php";
  include  "../public/db.php";
include  "../public/functions.php";
$tree=new  abc();
$id=$_GET["id"];
$tree->tree(0,1,$db,"category",$id);

$sql="select * from category where cid=".$id;
$result=$db->query($sql);

$row=$result->fetch_assoc();
$cname=$row["cname"];


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
<form action="editCategoryInfo.php" >

    上级分类:  无限极分类
    <select name="pid">
        <option value="0">一级分类</option>
        <?php echo $tree->str ?>;
    </select><br>

    分类名称:<input type="text" name="cname" value="<?php echo $cname ?>"><br>
    <input type="hidden" value="<?php echo $id?>" name="cid">

    <input type="submit" value="提交">
</form>
</body>
</html>
