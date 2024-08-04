<?php
include("../db.php");
$obj=new db();
echo $id=$_GET["idno"];
$sql="UPDATE taxi set status='0' where id='$id'";
$obj->exe($sql);
header("location:view_alltaxi.php?id=''");
?>