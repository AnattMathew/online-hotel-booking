<?php
include("db.php");
$obj=new db();
session_start();
extract($_POST);
$sql="insert into register(fname,lname,username,mobile,country,pin,address,gender,status)values('$firstname','$lastname','$email','$tel','$state','$postcode','$address','$gender','1')";
$obj->exe($sql);
$sql1="insert into login(username,mobile,password,usertype,status)values('$email','$tel','$password','User','1')";
$obj->exe($sql1);
?>
<script>
alert('INSERTION SUCESSFUL');
window.location.href='login.php';
</script>