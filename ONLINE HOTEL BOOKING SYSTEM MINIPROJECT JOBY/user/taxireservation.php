<?php
include("../db.php");
$obj=new db();
session_start();
$un=$_SESSION["un"];
extract($_POST);
$sql="insert into carreservation(rid,username,in_date,out_date,rstatus,status)values('$rid','$un','$dayin','$dayout','Waiting','1')";
$obj->exe($sql);
?>
<script>
alert('INSERTION SUCESSFUL');
window.location.href='index.php';
</script>