<?php
include("../db.php");
$obj=new db();
session_start();
extract($_POST);
$img=$_FILES["img"]["name"];
copy($_FILES["img"]["tmp_name"],"../gallery/".$img);
$sql="insert into gallery(name,image,content,status)values('$name','$img','$description','1')";
$obj->exe($sql);
?>
<script>
alert('INSERTION SUCESSFUL');
window.location.href='gallery.php?id=""';
</script>