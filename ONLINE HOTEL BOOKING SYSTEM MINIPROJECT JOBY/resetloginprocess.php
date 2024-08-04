<?php session_start();
session_destroy();
include("db.php");
$obj=new db();
session_start();
extract($_POST);
$con=mysqli_connect("localhost","root","","resort");
 $sql="select* from login where  username='$username'";

if($obj->exe($sql))
{
$sql="update login set password='$password' where  username='$username'";
if($obj->exe($sql)){

?>
<script>
alert('PASSWORD UPDATED SUCCESSFULLY LOGIN AGAIN');
window.location.href='index.php';
</script>
<?php 
}

?>
}
else{
	?>
    <script>
	alert('Incorrect Username ');
	window.location.href='resetpassword.php';		
    </script>
    
    <?php
}


?>
