<?php
include("../db.php");
$obj=new db();
session_start();
extract($_POST);
$img=$_FILES["img"]["name"];
copy($_FILES["img"]["tmp_name"],"../uploads/".$img);
$sql="insert into rooms(name,category,photo,rate,avalstatus,features,status)values('$name','$category','$img','$rate','$status','$features','1')";
$obj->exe($sql);
?>
<script>
alert('INSERTION SUCESSFUL');
window.location.href='view_all_rooms.php?id=""';
</script>