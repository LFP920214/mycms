<?php
  include "../public/session.php";
  include "../public/db.php";
  include "../public/functions.php";

  $id=$_GET["id"];
  $obj=new abc();
  $obj->del($id,$db,"category");
?>