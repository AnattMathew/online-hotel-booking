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
          <h2>Add New Gallery Content</h2>
          <br /><br />
          <form enctype="multipart/form-data" method="post" action="addgallery.php">
          <div style="width:20%;">
       
          
          </div>
    <table border="1" align="center" >
 <tr>
    <td> Name  </td>
    <td><input type="text" name="name" required="required"></td>
    <td> Image  </td>
    <td><input type="file" name="img" required="required"></td>
 </tr>
  <tr>
    
  
    <td> Description </td>
    <td colspan="3"><textarea name="description" required style="width:38em;" rows="6"></textarea></td>
    
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