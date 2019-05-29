<?php
include("config.php");
$q=mysql_query("select * from changerc where status='1'");
$s=mysql_num_rows($q);
?>
<!DOCTYPE html>

<html lang="en"> 
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Change Rc Data</title>
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
table, td tr {
    
  border: 2px solid black;
  border-color: brown;
   max-width: 1000px;
   background-color: white;
    
}
body{background-image: url("images/log.jpg");
}
form{
    
    background-image: url("images/user.jpg");
}
         </style>
</head>
<body>
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
        <li><a href="viewinsurance.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">View <br>Insurance</a></li>
        <li><a href="viewrcform.php"style="background-color:whitesmoke; width: 200px; height: 125px; color: black">View Reg.<br>Certificate</a></li>
        <li><a href="newrc.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">NEW RC <br>DETAILS </a></li>
        <li><a href="send_feed.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">SEND <br> Feedback</a></li>
       <li><a href="changerc.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">Change <br>Request</a></li>
        <li><a href="index_1.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">Logout</a></li>
			</ul>    </nav>
	
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
				</div>
		<div id="main-content">
			<div class="wrap-content">
                            <center><img src="images/renew.PNG" style="width: 1000px; height: 100px;"/></center>
                            <br>   <br>
                            <center><h1><U>VIEW  NEW  RC  DETAILS </U></h1></center> <br>
                <?php
				if($s==0)
				{
				echo "<h4><center> NO USER REQUEST FOUND</center><h5>";
				}
				else
				{
				?>
                <center>
                    <table style="border:1px solid rgba(0,0,0,1.00); align-content:center;width:2360px; text-align:center">
                <tr style="border:1px solid rgba(0,0,0,1.00);">
                    <th style="border:1px solid rgba(0,0,0,1.00);">Vehicle No</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">Seller name</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">Buyer name</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">District</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">State</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">House No</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">Address</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">Phone No</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">Email</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);"></th></tr>
                <?php
				
				while($n=mysql_fetch_array($q))
				{
                                    echo "<tr style='border:1px solid rgba(0,0,0,1.00);' align='center'>"
                                    . "<th style='border:1px solid rgba(0,0,0,1.00);'>$n[5]</th>"
                                                . "<th style='border:1px solid rgba(0,0,0,1.00);'>$n[6]</th>"
                                                . "<th style='border:1px solid rgba(0,0,0,1.00);'>$n[0]</th>"
                                                . "<th style='border:1px solid rgba(0,0,0,1.00);'>$n[1]</th>"
                                                . "<th style='border:1px solid rgba(0,0,0,1.00);'>$n[2]</th>"
                                                . "<th style='border:1px solid rgba(0,0,0,1.00);'>$n[3]</th>"
                                                . "<th style='border:1px solid rgba(0,0,0,1.00);'>$n[7]</th>"
                                                . "<th style='border:1px solid rgba(0,0,0,1.00);'>$n[8]</th>"
                                                . "<th style='border:1px solid rgba(0,0,0,1.00);'>$n[9]</th>"
                                                . "<th style='border:1px solid rgba(0,0,0,1.00);'>"
                                                ;
                                }
				}
				?>
                </table></center>
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
</body></html><strong></strong>