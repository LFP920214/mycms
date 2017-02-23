<?php
  include "../public/session.php";
  include "../public/db.php";

  $cid=$_GET["cid"];
  $stitle=$_GET["stitle"];
  $scon=$_GET["scon"];
  $username=$_SESSION["username"];

  $sql="insert into shows (stitle,scon,cid,username) VALUES ('$stitle','$scon',$cid,'$username')";

  $db->query($sql);

  if($db->affected_rows>0){
    $message="添加内容成功";
    $url="addCon.php";
    include "message.html";
  }else{
      $message="添加内容失败";
      $url="addCon.php";
      include "message.html";
  }





?>