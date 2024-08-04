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
 <form id="signup" action="loginpro.php" method="post" enctype="multipart/form-data">
<br />
<h1>Login</h1>
<br />
  <fieldset>


   <ol>
    <li>
     <label for="email"><font color="black">Email *</font></label>
     <input type="email" id="email" name="email" placeholder="e.g. swapnil@example.com" title="Please enter a valid email" required />
     <p class="validation01">
      <span class="invalid">Please enter a valid email address e.g. swapnil@example.com</span>
      <span class="valid">Your email address is now valid</span>
     </p>
    </li>
   </ol>


   <ol>
    <li>
     <label for="password"><font color="black">Password *</font></label>
     <input id="password" name="password" type="password" required />

    </li>
   </ol>
  </fieldset>
  <div style="text-align:center;">
  <input type="submit" value="Login" style="color:#FFFFFF;background-color:#00B737;"/>
 <br /><br /><a href="register.php" style="font-weight:bold;color:#027015; background-color:#FFFFFF;">Register Here</a></div>
 </form>


   <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<?php include('footer.php');?>
