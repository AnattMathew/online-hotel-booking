<?php
session_start();
if(isset($_SESSION["un"]))
{
	$un=$_SESSION["un"];
?>
<?php include('header.php')?>
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
      <!-- ####################################################################################################### -->
      <div id="homepage" class="clear">
        <!-- ###### -->
        <?php include('leftmenusmall.php')?>
        <!-- ###### -->
        <div id="viewstaff">
          <h2>Add New Room</h2>
          <br /><br />
          <form enctype="multipart/form-data" method="post" action="addroom.php">
          <div style="width:20%;">
       
          <input type="file" name="img" required="required">
          </div>
    <table border="1" align="center" >
 <tr>
    <td> Name  </td>
    <td><input type="text" name="name" required="required"></td>
    <td> Category  </td>
    <td><select name="category">
    <option selected="selected" disabled="disabled">Category</option>
    <option>Auditorium</option>
    <option>Conference Hall</option>
    <option>Deluxe</option>
    <option>Luxary</option>
    <option>A/C</option>
    <option>Regular</option>
    </select></td>
 </tr>
  <tr>
    <td> Rate/day </td>
    <td><input type="number" name="rate" required="required"></td>
    <td> Status  </td>
    <td><select name="status" style="width:9.2em;">
    <option selected="selected" disabled="disabled">status</option>
    <option>Booked</option>
    <option>Avaliable</option>  
    </select></td>
 </tr>
 <tr>
    <td> Features </td>
    <td colspan="3"><textarea name="features" required="required" style="width:38.45em;" rows="6"></textarea></td>
    
 </tr>
    
  </table>
  <input type="submit" value="Save to Records" />
</div>
</form>
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