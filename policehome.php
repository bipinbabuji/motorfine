<?php
include("config.php");
session_start();
$user1=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en"> 
    <style>
        body{color: white;}
        </style>
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>police station</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slide.css">
	<link rel="stylesheet" href="css/menu.css">
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<style>
body{background-image: url("images/user.jpg");
}</style>
</head>
<body>
<div class="wrap-body">
	<!--///////////////////////////////////////Top-->
	<div class="site-title">
		<div class="zerogrid">
			<div class="row">
				<h2 class="t-center">Moto Fine Handler</h2>
			</div>
		</div>
	</div>
    <!--//////////////////////////////////////Menu-->
    <a href="#" class="nav-toggle">Toggle Navigation</a>
    <nav class="cmn-tile-nav">
		<ul class="clearfix">
			 <li>&nbsp;</li>
			<li>&nbsp;</li>
			<li><a href="policehome.php" style="background-color:whitesmoke; color: black">Home</a></li>
			<li><a href="addcase.php" style="background-color:whitesmoke; color: black">Add cases</a></li>
			<li><a href="pnotif.php" style="background-color:whitesmoke; color: black">Notifications</a></li>
                        <li><a href="index_1.php" style="background-color:whitesmoke; color: black">Logout</a></li>
			 <li>&nbsp;</li>
			<li>&nbsp;</li>
                    
			
		</ul>
    </nav>
	<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				
				<div id="main-content">
			<div class="wrap-content">
           
				<center><h2>SUB INSPECTOR :  <?php echo $user1?></h2></center><br>
             	</div>
		</div> 
                
			</ul>
		</div>
		
	</div>
</section>
	<div class="zerogrid">
		<div class="callbacks_container">
			<ul class="rslides" id="slider4">
				<li>
                                    <img src="images/poooo.jpg" alt=""/>
                                    
				</li>
				<li>
                                    <img src="images/pol.jpg" alt=""/>
					
					
				</li>
				<li>
                                    <img src="images/banner3.jpg" alt=""/>
                                    
									</li>
			</ul>
		</div>
	</div>
<!--////////////////////////////////////Container-->


<!--////////////////////////////////////Footer-->
<footer class="zerogrid">
	
	<div class="copyright">
		<div class="wrapper">
                    <h1 align="right"> motofinehandler.com</h1>
			
		</div>
	</div>
</footer>


	<!-- js -->
	<script src="js/classie.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script>
	$(function () {
	  // Slideshow 4
	  $("#slider4").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 20,
		namespace: "callbacks",
		before: function () {
		  $('.events').append("<li>before event fired.</li>");
		},
		after: function () {
		  $('.events').append("<li>after event fired.</li>");
		}
	  });
	});
	</script>
</div>
</body></html>