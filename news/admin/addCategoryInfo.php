<?php
  include "../public/session.php";
  include "../public/db.php";
  $pid=$_GET["pid"];
  $cname=$_GET["cname"];
  $sql="insert into category (cname,pid) VALUES ('$cname',$pid)";

  $db->query($sql);
  if($db->affected_rows>0){
      $message="添加分类成功";
      $url="addCategory.php";
      include "message.html";
  }
?>