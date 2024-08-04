<?php
include("../db.php");
$obj=new db();
echo $id=$_GET["idno"];
$sql="UPDATE gallery set status='0' where id='$id'";
$obj->exe($sql);
header("location:gallery.php?id=''");
?>