<?php include('header.php'); ?>
<link rel="stylesheet" href="form.css" type="text/css"/>
<script type="text/javascript" src="form.js"></script>
<script type="text/javascript">
		H5F.listen(window,"load",function () {
			H5F.setup(document.getElementById("signup"));
		},false);
	</script>
</head>
<body>
 <form action="resetloginprocess.php" method="post" enctype="multipart/form-data" id="signup">
  <fieldset style="background-color:#A6A5A5;">
   
   <ol>
    <li>
     <label for="usernamename">Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> 
     <input type="text" id="username" name="username" placeholder="User name" required /><br /><br />
    
        
     <label>New Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> 
     <input type="password" id="password" name="password" placeholder="password" required /><br /><br />
   
  </fieldset>
  <input type="submit" value="Reset Password"  align="left" style="margin-left:12em;"/> 
  </li>
   </ol>
 </form>

   
   <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
