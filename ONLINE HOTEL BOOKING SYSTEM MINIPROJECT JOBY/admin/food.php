<?php

    $db = mysqli_connect("localhost","root","","resort");


    $msg = "";
 if (isset($_POST['latest_upload'])) {
        $target = "images/".basename($_FILES['latest_image']['name']);

        $uname= mysqli_real_escape_string($db, $_POST['uname']);
        $category= mysqli_real_escape_string($db, $_POST['category']);
        $latest_image = $_FILES['latest_image']['name'];
        $rate = mysqli_real_escape_string($db, $_POST['rate']);
        $features=mysqli_real_escape_string($db, $_POST['features']);
        

        $sql = "INSERT INTO foods (name,category,photo,rate,features) VALUES ('$uname','$category','$latest_image', '$rate','$features')";
        mysqli_query($db, $sql);

        if (move_uploaded_file($_FILES['latest_image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }
    }


?>


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
						
						
		  
		  
		  
		 <form method="POST" action="addfood.php" enctype="multipart/form-data" >
          <div style="width:20%;">
       
         <input class="form-control"  type="file" name="latest_image">
          </div>
    <table border="1" align="center" >
 <tr>
    <td> Name  </td>
    <td><input type="text" name="name" required="required"></td>
    <td> Category  </td>
    <td><select name="category">
    <option selected="selected" disabled="disabled">Category</option>
    <option>Chinese Noodles</option>
    <option>Barbeque</option>
    <option>Kerala Meals</option>
    <option>Thandoori Chicken</option>
    <option>...</option>
    <option>...</option>
    </select></td>
 </tr>
  <tr>
    <td> Rate </td>
    <td><input type="number" name="rate" required="required"></td>
  
 </tr>
 <tr>
    <td> Features </td>
    <td colspan="3"><textarea name="features" required="required" style="width:38.45em;" rows="6"></textarea></td>
    
 </tr>
    
  </table>
  <input type="submit" name="latest_upload" value="Submit">
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