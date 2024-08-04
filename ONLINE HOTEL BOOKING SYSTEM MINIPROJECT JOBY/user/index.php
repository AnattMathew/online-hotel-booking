
<!DOCTYPE html>
<html>
<head>
<title>BEACH RESORT</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trip  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300,100,500,700,600,900' rel='stylesheet' type='text/css'>
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
<!--script-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
	<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script>
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
		</script>
</head>
<body>
<!---->
<div class="banner">
	 <div class="container">
		 <div class="header">
			 <div class="logo wow fadeInLeft" data-wow-delay="0.5s">
			 <a href="index.php"><img src="#" alt=""/></a>
			 </div>
			 <div class="top-menu">
				 <span class="menu"> </span>
				 <ul>
					 <li ><a href="index.php" style="font-weight:bold;">HOME</a></li>
					 <li><a href="rooms.php" style="font-weight:bold;">ROOMS</a></li>
					 <li><a href="reservation.php" style="font-weight:bold;">RESERVATION</a></li>
					 <li><a href="gallery.php" style="font-weight:bold;">GALLERY</a></li>
					 <li><a href="taxi.php" style="font-weight:bold;">TAXI</a></li>
					 <li><a href="../logout.php" style="font-weight:bold;">LOGOUT</a></li>
				 </ul>
			 </div>
			 <div class="clearfix"> </div>
			 </div>
			 <!-- script-for-menu -->
		 <script>
					$("span.menu").click(function(){
						$(".top-menu ul").slideToggle("slow" , function(){
						});
					});
		 </script>
		 		 <div id="home" class="banner-text wow fadeInUp" data-wow-delay="0.5s">
                 <h1 style="font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;font-style:inherit;font-weight:bold;">BEACH VIEW RESORT</h1>
			 <h1><span>GOA</span></h1>
			 <h2>Celebrate the most Memorable Holidays in Your Life with us in GOA</h2>
		 </div>
	</div>
</div>
<!----><!----><!----><!----><!----><!----><!----><!--map--><!--/map-->
<!---->
<div class="footer">
	 <div class="container">
		 <div class="ftr-logo">
			 <a class="wow bounceIn" data-wow-delay="0.5s" href="index.php"><img src="#" alt=""/></a>
		 </div>
		 

	 </div>
</div>
<!---->
<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!---->
 </body>
 </html>
