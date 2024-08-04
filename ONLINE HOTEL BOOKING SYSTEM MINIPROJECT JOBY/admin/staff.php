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
          <h2>Add New Staff</h2>
          <br /><br />
          <form enctype="multipart/form-data" method="post" action="addstaff.php">
          <div style="width:20%;">
       
          <input type="file" name="img" required="required">
          </div>
    <table border="1" align="center" >
 <tr>
    <td> Name  </td>
    <td><input type="text" name="name" required="required"></td>
    <td> Gender  </td>
    <td><select name="gender" style="width:15em;">
    <option selected="selected" disabled="disabled" >Gender</option>
    <option>Male</option>
    <option>Female</option>
    <option>3rd Gender</option>
    </select></td>
 </tr>
  <tr>
    <td> Mobile </td>
    <td><input type="number" min="0000000000" max="9999999999" name="mobile" required="required"></td>
  
    <td> Address </td>
    <td colspan="3"><textarea name="address" required="required" rows="4" style="width:14.7em;"></textarea></td>
    
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