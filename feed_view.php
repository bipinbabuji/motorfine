<?php
include("config.php");
$q=mysql_query("select * from feedback");
$s=mysql_num_rows($q);
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zItalyFood | Free Restaurant Html5 Templates</title>
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
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
</head>
<body>
<div class="wrap-body">
	<!--///////////////////////////////////////Top-->
	<div class="top">
		<div class="zerogrid">
			<ul class="number f-left">
				<li class="mail"><p>ContacUst@Gmail.com</p></li>
				<li class="phone"><p>08 88888 88888</p></li>
			</ul>
			<ul class="top-social f-right">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
	<!--////////////////////////////////////Header-->
	<header>
		<div class="zerogrid">
			<!--<center><div class="logo"><img src="images/logo.png"></div></center>-->
		</div>
	</header>
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
			 <li><a href="#" style="background-color:whitesmoke; width: 200px; height: 125px; color: black"></a></li>
			<li><a href="adminhome.php" style="background-color:whitesmoke;  color: black">HOME</a></li>
                        <li><a href="user_approve.php" style="background-color:whitesmoke; color: black; width: 200px; height: 125px;">APPROVAL <br> OPTIONS</a></li>
                        <li><a href="add_police.php" style="background-color:whitesmoke; color: black; width: 200px; height: 125px;">ADD <br> STATIONS</a></li>
			<li><a href="user_req.php" style="background-color:whitesmoke; color: black; width: 200px; height: 125px;">Update RC REQUESTS</a></li>
			<li><a href="feed_view.php" style="background-color:whitesmoke; color: black; width: 200px; height: 125px;">USER <br> FEEDBACK</a></li>
			<li><a href="index_1.php" style="background-color:whitesmoke; color: black">Log Out</a></li>
			<li><a href="#" style="background-color:whitesmoke; width: 200px; height: 125px; color: black"></a></li>
		</ul>		</ul>
    </nav>
	
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="adminhome.php">Home</a></li>
				
                
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
				<center><h2>FEEDBACK  MESSAGE  FROM  USER</h2></center><br>
                <?php
				if($s==0)
				{
				echo "<h4><center>No user  feedbacks found</center><h5>";
				}
				else
				{
				?>
                <center><table style="border:1px solid rgba(0,0,0,1.00); align-content:center;width:800px">
                <tr style="border:1px solid rgba(0,0,0,1.00);">
                    <th style="border:1px solid rgba(0,0,0,1.00);">NAME</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">FEEDBACK MESSAGE</th></tr>
                <?php
				
				while($n=mysql_fetch_array($q))
				{
					echo "<tr style='border:1px solid rgba(0,0,0,1.00);' align='center'>"
                                    . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[1]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[2]</td>"
                                                . "</tr>";
				}
				}
				?>
                </table></center>
			</div>
		</div> 
	</div>
</section>

<!--////////////////////////////////////Footer-->


	<!-- js -->
	<script src="js/classie.js"></script>
	<script src="js/demo.js"></script>
	
</div>
</body></html>