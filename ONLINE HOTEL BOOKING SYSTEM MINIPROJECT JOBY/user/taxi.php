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
 <h2 align="center" style="color:#036FC7;font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif;">TRANSPORTATION</h2>
 <table align="left">
 
    <?php
		  $sql="select * from taxi where status='1'";
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
<td rowspan="4" ><img src="../uploads/<?php echo $r[3];?>" width="220" height="175" alt="image"/></td></tr>
<tr>
<td style="font-weight:bold;"><?php echo $r[1]; ?> &nbsp;&nbsp; 
<a href="booktaxi.php?id=<?php echo $r[0]; ?>" style="color:#FCFCFC;background-color:#00F8F4;">Book Now</a></td></tr>
<tr><td>&nbsp;&nbsp;Category : <?php echo $r[2]; ?></td></tr>
<tr><td>&nbsp;&nbsp;Rate/ Day : <?php echo $r[4]; ?></td></tr>


<?php
			}
		  ?>
          </table>
          <?php
		  }
		  ?>
          
          
           <table align="right">
 
    <?php
		  $sql="select * from carreservation where username='$un' and status='1'";
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
<br /><br /><td>Vechile ID : <?php echo $r[1]; ?> &nbsp;&nbsp;</td></tr>
<tr><td>Indate : <?php echo $r[3]; ?></td></tr>
<tr><td>Outdate : <?php echo $r[4]; ?></td></tr>
<tr><td>Status : <?php echo $r[5]; ?><br /><br /></td></tr>
<tr><td><a href="cancelcarbooking.php?id=<?php echo $r[0]; ?>" style="background-color:#3EC0F8;">Cancel Reservation</a></td></tr>
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