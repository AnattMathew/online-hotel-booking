<?php
session_start();
include("../db.php");
$obj=new db();
if(isset($_SESSION["un"]))
{
	$un=$_SESSION["un"];
include('header.php');
?>


<div class="gallery" id="gallery">
		<h3 align="center" style="color:#81A314;">Photo Gallery</h3><br /><br /><br />
		
		<div class="w3agile_gallery_grids">
			
			
			<style type="text/css">
*{margin:0;padding:0;}
body
{
	background:#fff;
}

img:hover
{
	 box-shadow: 20px 20px 20px #dcdcdc;
	-moz-transform: scale(0.8);
	-moz-transition-duration: 0.6s;
	-webkit-transition-duration: 0.6s;
	-webkit-transform: scale(0.8);
	
	-ms-transform: scale(0.8);
	-ms-transition-duration: 0.6s;
	
}
#header
{
	width:100%;
	height:50px;
	background:#00a2d1;
	font-family:"Lucida Handwriting";
	font-family:Verdana, Geneva, sans-serif;
	text-align:center;
	font-size:35px;
	font-weight:bolder;
	color:#f9f9f9;
}
#body
{
	margin:0 auto;
	text-align:center;
}
</style>



<div id="body">
<?php
$folder_path = '../gallery/'; //image's folder path

$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

$folder = opendir($folder_path);
 
if($num_files > 0)
{
	while(false !== ($file = readdir($folder))) 
	{
		$file_path = $folder_path.$file;
		$extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
		if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') 
		{
			?>
            <a href="<?php echo $file_path; ?>"><img id="img1" name="img1" src="<?php echo $file_path; ?>" style="width:15em; height:15em;"/></a>
            <?php
		}
	}
}
else
{
	echo "the folder was empty !";
}
closedir($folder);
?>


		   <div class="clearfix"> </div>
		</div>
		<script type="text/javascript" src="js/smoothbox.jquery2.js"></script>
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












