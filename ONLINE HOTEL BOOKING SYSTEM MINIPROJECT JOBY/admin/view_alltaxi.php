<?php
session_start();
include("../db.php");
$obj=new db();
if(isset($_SESSION["un"]))
{
	$un=$_SESSION["un"];
?>
<?php include('header.php')?>
<script type="text/javascript">
function changeSID()
{
oForm       = eval(document.getElementById("frmForm"));
iCustomerId = document.getElementById("sort").value;
url         = "view_alltaxi.php?id=" +iCustomerId;
document.location = url;
}

</script>
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
      <!-- ####################################################################################################### -->
      <div id="homepage" class="clear">
        <!-- ###### -->
        <?php include('leftmenusmall.php')?>
        <!-- ###### -->
        <div id="viewstaff">
          <h2>TAXI</h2>

          <label>Sort:&nbsp;&nbsp;</label>
             <select id="sort" name="sort" onchange="javascript:changeSID();">
              <option selected value="0">Category  </option>
    			<option value="name">Name </option>
                <option value="id">ID </option>
                <option value="category">Category </option>
                </select>
     
                <a href="taxi.php" style="margin-left:30em;
                color:#FFFFFF;
                background:#0266D0;
                border-style:outset;
                border-width:6px;">ADD NEW TAXI</a>
                <?php
		
if ($_REQUEST['id'] == "")
{
	?><br /><br />
          <table border="1" align="center" >
  <tr>
    <th>&nbsp;ID No &nbsp; </th>
    <th>&nbsp;Name &nbsp; </th>
    <th>&nbsp;Image &nbsp; </th>
    <th>&nbsp;Category &nbsp; </th>
    <th>&nbsp;Rate &nbsp; </th>
    <th>&nbsp;Operations &nbsp; </th>
    
    
  </tr><?php
$id = $_REQUEST['id'];
 $sql="select * from taxi where status='1'";
$res=$obj->exe($sql);
 $no=mysqli_num_rows($res);
  
while($r=mysqli_fetch_array($res)){
	?><tr>
    <td>&nbsp;<?php echo $r[0];?>&nbsp;</td>
    <td>&nbsp;<?php echo $r[1];?>&nbsp;</td>
    <td>&nbsp;<img src="../uploads/<?php echo $r[3]; ?>" width="100" height="80" />&nbsp;</td>
    <td>&nbsp;<?php echo $r[2];?>&nbsp;</td>
    <td>&nbsp;<?php echo $r[4];?>&nbsp;</td>
<td><a href="delete_taxi.php?idno=<?php echo $r[0];?>">
    <img src="../uploads/delete_button.jpg" width="80"/></a></td>
    </tr>
    <?php  }
  ?>
  </table>
<?php
}
else
{?><br /><br />
<table border="1" align="center" >
  <tr>
        <th>&nbsp;ID No &nbsp; </th>
    <th>&nbsp;Name &nbsp; </th>
    <th>&nbsp;Image &nbsp; </th>
    <th>&nbsp;Category &nbsp; </th>
    <th>&nbsp;Rate &nbsp; </th>
    <th>&nbsp;Operations &nbsp; </th>
  </tr>
  <?php
$id = $_REQUEST['id'];
 $sql="select * from taxi where status='1'order by $id";
 $res=$obj->exe($sql);
  $no=mysqli_num_rows($res);
  
while($r=mysqli_fetch_array($res)){
	?><tr>
        <td>&nbsp;<?php echo $r[0];?>&nbsp;</td>
    <td>&nbsp;<?php echo $r[1];?>&nbsp;</td>
    <td>&nbsp;<img src="../uploads/<?php echo $r[3]; ?>" width="100" height="80" />&nbsp;</td>
    <td>&nbsp;<?php echo $r[2];?>&nbsp;</td>
    <td>&nbsp;<?php echo $r[4];?>&nbsp;</td>
<td><a href="delete_taxi.php?idno=<?php echo $r[0];?>">
    <img src="../uploads/delete_button.jpg" width="80"/></a></td>
    </tr>
    <?php  }
}
		 
  ?>

  </table></div>

      </div>
    </div>
  </div>
</div>

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