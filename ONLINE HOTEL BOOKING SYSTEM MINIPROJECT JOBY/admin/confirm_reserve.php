<?php
include("../db.php");
$obj=new db();
echo $id=$_REQUEST["id"];
$sql="UPDATE reservation set rstatus='Confirmed' where id='$id'";
$obj->exe($sql);
header("location:reservation.php?id=''");
?>