<?php
include("config.php");

$q=mysql_query("select * from case_details where payment='0' ");
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
			<li class="colour-1"><a href="#"></a></li>
			<li class="colour-2"><a href="#"></a></li>
			<li class="colour-3"><a href="courthome.php">Home</a></li>
			<li class="colour-4"><a href="payment.php">Payments</a></li>
			<li class="colour-5"><a href="index_1.php">Logout</a></li>
			<li class="colour-6"><a href="#"></a></li>
			<li class="colour-7"><a href="#"></a></li>
			<li class="colour-8"><a href="#"></a></li>
		</ul>
    </nav>
	
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="courthome.php">Home</a></li>
				
                
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
            <br>
            <br>
            <br>
				<center><h2>PENDING PAYMENTS</h2></center><br>
                <?php
				if($s==0)
				{
				echo "<h4><center>no pending payments </center><h5>";
				}
				else
				{
				?>
                <center><table style="border:1px solid rgba(0,0,0,1.00); align-content:center;width:800px">
                <tr style="border:1px solid rgba(0,0,0,1.00);">
                    <th style="border:1px solid rgba(0,0,0,1.00);">VEH_NO</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">CASE_TYPE</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">FINE AMOUNT</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">LAST DATE TO PAY</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);"></th></tr>
                <?php
				
				while($n=mysql_fetch_array($q))
				{
					echo "<tr style='border:1px solid rgba(0,0,0,1.00);' align='center'>"
                                    . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[4]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[5]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[6]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[7]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>"
                                                . "<a href='message.php?no=$n[1]&&id=$n[0]'>Send message</a>"
                                                . "</td></tr>";
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