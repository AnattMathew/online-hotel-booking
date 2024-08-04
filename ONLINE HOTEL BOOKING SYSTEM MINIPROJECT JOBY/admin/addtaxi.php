<?php
include("../db.php");
$obj=new db();
session_start();
extract($_POST);
$img=$_FILES["img"]["name"];
copy($_FILES["img"]["tmp_name"],"../uploads/".$img);
$sql="insert into taxi(name,category,image,rate,status)values('$name','$category','$img','$rate','1')";
$obj->exe($sql);
?>
<script>
alert('INSERTION SUCESSFUL');
window.location.href='taxi.php?id=""';
</script>