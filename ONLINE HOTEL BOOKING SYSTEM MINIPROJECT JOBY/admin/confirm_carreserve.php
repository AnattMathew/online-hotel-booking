<?php
include("../db.php");
$obj=new db();
echo $id=$_REQUEST["id"];
$sql="UPDATE carreservation set rstatus='Confirmed' where id='$id'";
$obj->exe($sql);
header("location:view_allbookings.php?id=''");
?>