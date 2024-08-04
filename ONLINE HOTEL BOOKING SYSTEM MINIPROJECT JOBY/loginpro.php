<?php
session_start();
include("db.php");
$obj=new db();
$un=$_POST["email"];
$pw=$_POST["password"];
$sql="select * from login where username='$un' and password='$pw' and status=1";
$res=$obj->exe($sql);
$no=mysqli_num_rows($res);
if($no==1)
{
	$r=mysqli_fetch_array($res);
	if($r[2]=='Admin')
	{
		$_SESSION["un"]=$un;
		header("location:admin/index.php");
	}
	else if($r[2]=='User')
	{	
		$_SESSION["un"]=$un;
		header("location:user/index.php");	
	}
	
}
else
{
	?>
    <script>
		alert("login failed");
		window.location="index.php";
    </script>
    <?php
}
?>