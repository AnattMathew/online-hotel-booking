<?php
include("../db.php");
$obj=new db();
session_start();
extract($_POST);
$img=$_FILES["img"]["name"];
copy($_FILES["img"]["tmp_name"],"../uploads/".$img);
$sql="insert into staff(name,image,gender,mobile,address,status)values('$name','$img','$gender','$mobile','$address','1')";
$obj->exe($sql);
?>
<script>
alert('INSERTION SUCESSFUL');
window.location.href='view_allstaffs.php?id=""';
</script>