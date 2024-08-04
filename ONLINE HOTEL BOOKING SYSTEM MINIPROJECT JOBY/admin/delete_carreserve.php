<?php
include("../db.php");
$obj=new db();
echo $id=$_REQUEST["id"];
$sql="UPDATE carreservation set status='0' where id='$id'";
$obj->exe($sql);
header("location:view_allbookings.php?id=''");
?>