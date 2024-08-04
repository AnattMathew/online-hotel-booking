<?php
session_start();
include("../db.php");
$obj=new db();
if(isset($_SESSION["un"]))
{
	$un=$_SESSION["un"];
	include('header.php');
?>

<!-- single -->
 <h2 align="center" style="color:#036FC7;font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif;">RESERVATIONS </h2>
 <table align="center">
 
    <?php
		  $sql="select * from reservation where username='$un' and status='1'";
		  $res=$obj->exe($sql);
		  $no=mysqli_num_rows($res);
		  if($no==0)
		  {
			  echo "&quot;No records here!!&quot;";
		  }
		  else
		  {
		
			while($r=mysqli_fetch_array($res))
			{
		  ?>
          	
             <tr>
<td rowspan="6" ></td></tr>
<tr>
<br /><br /><td>Room ID : <?php echo $r[1]; ?> &nbsp;&nbsp;</td></tr>
<tr><td>Indate : <?php echo $r[3]; ?></td></tr>
<tr><td>Outdate : <?php echo $r[4]; ?></td></tr>
<tr><td>Status : <?php echo $r[5]; ?><br /><br /></td></tr>
<tr><td><a href="cancelbooking.php?id=<?php echo $r[0]; ?>" style="background-color:#3EC0F8;">Cancel Reservation</a></td></tr>
<?php
			}
		  ?>
          </table>
          <?php
		  }
		  ?>

 
 </body>
 </html>
 <?php
}
else
{
	?>
    <script>
alert('Please Login');
window.location.href='../index.php';
</script>
    <?php
	
}
?>