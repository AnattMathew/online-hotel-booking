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
          <h2>Add New Taxi</h2>
          <br /><br />
          <form enctype="multipart/form-data" method="post" action="addtaxi.php">
          <div style="width:20%;">
       
          
          </div>
    <table border="1" align="center" >
 <tr>
    <td> Name  </td>
    <td><input type="text" name="name" required="required"></td>
    <td> Category  </td>
    <td><select name="category" style="width:15em;">
    <option selected="selected" disabled="disabled" >Category</option>
    <option>2 wheeler</option>
    <option>Mini</option>
    <option>Sedan</option>
    <option>SUV</option>
    </select></td>
 </tr>
  <tr>
    <td> Rate/Day </td>
    <td><input type="number" name="rate" required="required"></td>
  
    <td> Photo </td>
    <td><input type="file" name="img" required="required" style="width:14.7em;"></td>
    
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