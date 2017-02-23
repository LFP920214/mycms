<?php
  include "../public/session.php";
  include "../public/db.php";
  $cid=$_GET["cid"];
  $cname=$_GET["cname"];
  $pid=$_GET["pid"];
  $sql="update category set cname='$cname',pid='$pid' where cid=".$cid;
  $db->query($sql);

  if($db->affected_rows>0){
      $message="修改成功";
      $url="showCategory.php";
      include "message.html";
  }else{
      $message="修改失败或者未做修改";
      $url="showCategory.php";
      include "message.html";
  }
?>