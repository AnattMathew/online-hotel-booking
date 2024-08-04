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
 <br /><br /><h2 align="center" style="color:#036FC7;font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif;">TAXI RESERVATION</h2><br /><br />
  <form enctype="multipart/form-data" method="post" action="taxireservation.php">
          <div style="width:20%;">
       
          
          </div>
    <table border="0" align="center" >
 <tr>
    <td> DAY IN  </td>
    <td><input type="date" name="dayin" required="required" min="date();"><br /><br /></td>
    </tr><tr>
    <td> DAY OUT  </td>
    <td><input type="date" name="dayout" required="required" min="date();"><br /><br /></td>
 </tr><tr>
    <td colspan="2" align="center"><input type="submit" value="Save to Records" /> </td>
 </tr>
    
  </table>
 <input type="hidden" value="<?php echo $_REQUEST['id']; ?>" name="rid">
</div>
</form>
 
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