<?php
include("../db.php");
$obj=new db();
echo $id=$_GET["idno"];
$sql="UPDATE rooms set status='0' where id='$id'";
$obj->exe($sql);
header("location:view_all_rooms.php?id=''");
?>