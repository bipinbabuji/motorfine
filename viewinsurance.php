<?php
include("config.php");
$query=mysql_query("select * from insurance");
$sql=mysql_num_rows($query);
$q=mysql_query("select * from rcform where status='1'");
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
	<title>view insurance</title>
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
   max-width: 8000px;
   max-height: 700PX;
   background-color: scrollbar;
    
}
body{background-image: url("images/rc.jpg");
}
form{
    
    background-image: url("images/user.jpg");
}

</style>
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
		<div class="crumbs">
			
		</div>
		<div id="main-content">
			<div class="wrap-content">
                            
                            <center><h2><u> RENEWAL VEHICLE INSURANCE DETAILS. </u></h2></center><br>
                                                   
                <?php
				if($sql==0)
				{
				echo "<h4><center><b>YOUR VEHICLE INSURANCE IS EXPIRED</b></center><h5>";
				}
				else
				{
				?>

                <center>
                    <table style="border:1px solid rgba(0,0,0,1.00); align-content:center;width:1000px">
                <tr style="border:1px solid rgba(0,0,0,1.00);">
                    <th style="border:1px solid rgba(0,0,0,1.00);">INSURANCE COMPANY</th>
                     <th style="border:1px solid rgba(0,0,0,1.00);"> POLICY NO:</th>
                            <th style="border:1px solid rgba(0,0,0,1.00);">VEHICLE No:</th>
                     <th style="border:1px solid rgba(0,0,0,1.00);">EXPIRATION DATE</th>
                      <th style="border:1px solid rgba(0,0,0,1.00);">CURRENT ADDRESS</th>
                      
                        <th style="border:1px solid rgba(0,0,0,1.00);">ADDRESS</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">RENEWAL AMOUNT</th>
                    </tr>
                <?php
				
				while($n=mysql_fetch_array($query))
				{
					echo "<tr style='border:1px solid rgba(0,0,0,1.00);'align='center'>"
                                    . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[2]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[3]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[1]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[4]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[5]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[6]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[7]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>"
                                                . "</td></tr>";
                                        
				}
				}
				?>
                
                </table></center> <?php
				if($s==0)
				{
				echo "<h4><center>NO VEHICLE REGISTER  CERTIFICATE</center><h5>";
				}
				else
				{
				?>

                <center>
                    <br> <br>
                    <table style="border:1px solid rgba(0,0,0,1.00); align-content:center;width:1000px">
                <tr style="border:1px solid rgba(0,0,0,1.00);">
                    <th rowspan="2" style="border:1px solid rgba(0,0,0,1.00);"><br>VEHICLE DETAILS</th>
                    
                    <th style="border:1px solid rgba(0,0,0,1.00);">INSURED'S NAME</th>
                     <th style="border:1px solid rgba(0,0,0,1.00);">CHASSIS NO</th>
                            <th style="border:1px solid rgba(0,0,0,1.00);">ENGINE NO</th>
                     <th style="border:1px solid rgba(0,0,0,1.00);">MOTOR VEHICLE</th>
                      <th style="border:1px solid rgba(0,0,0,1.00);">TYPE OF VEHICLE</th>
                     <th style="border:1px solid rgba(0,0,0,1.00);">MANUFACTURE DATE</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">COLOR OF BODY</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">SEATS</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">FUEL</th>
                     <th style="border:1px solid rgba(0,0,0,1.00);">ADDRESS</th>
                     <th style="border:1px solid rgba(0,0,0,1.00);"></th>
                </tr>
                <?php
				
				while($n=mysql_fetch_array($q))
				{
					echo "<tr style='border:1px solid rgba(0,0,0,1.00);'align='center'>"
                                    . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[0]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[1]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[2]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[3]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[4]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[5]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[6]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[7]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[8]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[9]</td>"
  
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>"
                                                . "</td></tr>";
                                        
				}
				}
				?>
                
                    </table><center><br>
                        <H5><i>Limitations as to use:
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The policy use of vehicle for any purpose other than a) Hire or Reward b) Carriage of good (other than samples or personal luggage)
                     c) Organized racing d) Pace making e) Speeding testing f) Reliability Trial g) Use in connection with Motor Trade.</p>
                             </H5></center><center>
                    <h6>Driver:
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Any person including the insured, Provided that a person driving holds
                    an effective driving license at the time of accident
                    and is not disqualified from holding or obtaining 
                    such a license. Provided also that the person holding an effective Learner's license may 
                    also drive the vehicle and that such a person satisfies the requirements of 
                    Rule 3 of the Central Motor Vehicle Rules,1989.</i></h6></center>
			<center> <img src="images/seal.PNG" style="width: 1020px; height: 100px;"/></center>
			</div>
		</div> 
	</div>
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