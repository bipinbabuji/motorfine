<?php
include("config.php");
session_start();
$user1=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en"> 
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>user home</title>
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
body{background-image: url("images/image1.jpg");
}</style>
</head>
<body>
<div class="wrap-body">
	<!--///////////////////////////////////////Top-->
	
<div class="wrap-body">
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
         <li><a href="userhome.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">Home</a></li>
        <li><a href="viewcase.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">View<br> Case</a></li>
        <li><a href="viewinsurance.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">View<br> Insurance</a></li>
        <li><a href="viewrcform.php"style="background-color:whitesmoke; width: 200px; height: 125px; color: black">View Reg.<br>Certificate</a></li>
        <li><a href="newrc.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">NEW RC <br>DETAILS </a></li>
        <li><a href="send_feed.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">SEND <br> Feedback</a></li>
       <li><a href="changerc.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">Change <br>Request</a></li>
        <li><a href="index_1.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">Logout</a></li>
			</ul>
    </nav>
	
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div>
			<ul>
                            <li><br><center><h1 aligin="center">YOUR VEHICLE NUMBER IS</h1><br> <h1><b><marquee><?php echo $user1?></marquee></b></h1></center></li>
                        </center>	
                
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
            <br>
            <br>
            <br>
            <center><h2>WELCOME TO MOTO FINE HANDLER,<br><br></h2></center><br>
                <br>
                <br>
                
			</div>
		</div> 
	</div>
</section>

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
	
</div>
</body></html>