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
 <h2 align="center" style="color:#036FC7;font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif;">ROOMS</h2>
 <table align="center">
 
    <?php
		  $sql="select * from rooms where status='1'";
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
<td rowspan="6" ><img src="../uploads/<?php echo $r[3];?>" width="220" height="175" alt="image"/></td></tr>
<tr>
<td style="font-weight:bold;"><?php echo $r[1]; ?> &nbsp;&nbsp; 
<a href="bookroom.php?id=<?php echo $r[0]; ?>" style="color:#FCFCFC;background-color:#00F8F4;">Book Now</a></td></tr>
<tr><td>Category : <?php echo $r[2]; ?></td></tr>
<tr><td>Rate/ Day : <?php echo $r[4]; ?></td></tr>
<tr><td rowspan="1">Features : <?php echo $r[6]; ?></td><br ></tr>

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