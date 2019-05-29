<?php
include("config.php");
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
	<title>vie rc form</title>
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
                    <li><a href="lawyerhome.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">Home</a></li>
        <li><a href="viewcase.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">View<br> Case</a></li>
        <li><a href="changerc.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">Change <br>Request</a></li>
        <li><a href="viewrcform.php"style="background-color:whitesmoke; width: 200px; height: 125px; color: black">View Reg.<br>Certificate</a></li>
        <li><a href="newrc.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">RC DETAILS </a></li>
	<li><a href="index_1.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">Logout</a></li>
		<li><a href="#"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black"></a></li>
		</ul>
    </nav>
	
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			
		</div>
		<div id="main-content">
			<div class="wrap-content">
                            <center><img src="images/reg.PNG" style="width: 1000px; height: 150px;"/></center>
                            <br>   <br>
                            
                            <center><h2><u>VIEW VEHICLE REGISTER  CERTIFICATE</u></h2></center><br>
                <?php
				if($s==0)
				{
				echo "<h4><center>NO VEHICLE REGISTER  CERTIFICATE</center><h5>";
				}
				else
				{
				?>

                <center>
                    <table style="border:1px solid rgba(0,0,0,1.00); align-content:center;width:1000px">
                <tr style="border:1px solid rgba(0,0,0,1.00);">
                    <th style="border:1px solid rgba(0,0,0,1.00);">NAME</th>
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
                
                </table></center>
			<center> <img src="images/seal.PNG" style="width: 1020px; height: 100px;"/></center>
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