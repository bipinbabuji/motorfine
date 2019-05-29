<?php
include("config.php");
$q=mysql_query("select * from rcform where status='0'");
$s=mysql_num_rows($q);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>application form </title>
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
                    <li>&nbsp;</li>
			<li><a href="adminhome.php" style="background-color:whitesmoke; color: black">Home</a></li>
                        <li><a href="approve.php" style="background-color:whitesmoke; color: black">Approval</a></li>
			<li><a href="add_police.php" style="background-color:whitesmoke; color: black; width: 200px; height: 125px;">Add Police Station</a></li>
			<li><a href="user_req.php" style="background-color:whitesmoke; color:black; width: 200px; height: 125px;">Update RC DETAILS</a></li>
			<li><a href="feed_view.php" style="background-color:whitesmoke; color: black">Feedback</a></li>
			<li><a href="index_1.php" style="background-color:whitesmoke; color: black">Log Out</a></li>
			<li><a href="#"></a></li>
			
		</ul>
    </nav>
	
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="adminhome.php">Home</a></li>
                                <li><a style="color: yellow;" href="user_approve.php">VERIFY USER REGISTER</a></li>
                <li><a style="color: yellow;" href="lawyer_approve.php">VERIFY VEHICLE REGISTER FORM</a></li>
                
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
                             <center> <h1><u>VERIFY VEHICLE REGISTER CERTIFICATE FORM</u></h1></center> <br> <br>
                
                            <center><img src="images/reg.PNG" style="width: 1190px; height: 150px;"/></center>
                            <br>
                           <?php
				if($s==0)
				{
				echo "<h4><center>NO NEW VECHICLE REGISTER CERTIFICATE FORM </center><h5>";
				}
				else
				{
				?>

                <center><table style="border:1px solid rgba(0,0,0,1.00); align-content:center;">
                <tr style="border:1px solid rgba(0,0,0,1.00);">
                    
                    <th style="border:1px solid rgba(0,0,0,1.00);color: blue">OWNER NAME</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);color: blue">CHASSIS NUMBER</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);color: blue">ENGINE NUMBER</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);color: blue">MOTOR VEHICLE</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);color: blue">VEHICLE TYPE</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);color: blue">MANU-FACTURE</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);color: blue">BODY COLOR</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);color: blue">SEATS</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);color: blue">FUEL</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);color: blue">ADDRESS</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);color: blue">PHONE</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);color: blue">EMAIL</th>
                    <th rowspan="2" style="border:1px solid rgba(0,0,0,1.00);color: blue">
                      <a href="go.html">VIEW DOCUMENT</a><br> 
                        <img src="images/vrc.PNG" alt="download" width="800" height="100"/>
                        </th>
                        <th style="border:1px solid rgba(0,0,0,1.00);color: blue">OPTIONS</th>
                    </tr>
                    <?php
				
				while($n=mysql_fetch_array($q))
				{
					echo "<tr style='border:1px solid rgba(0,0,0,1.00);'align='center'>"
                                                . "<th style='border:1px solid rgba(0,0,0,1.00);'>$n[0] </th>" 
                                                . "<th style='border:1px solid rgba(0,0,0,1.00);'>$n[1]</th>"
                                                . "<th style='border:1px solid rgba(0,0,0,1.00);'>$n[2]</th>"
                                                . "<th style='border:1px solid rgba(0,0,0,1.00);'>$n[3]</th>"
                                                . "<th style='border:1px solid rgba(0,0,0,1.00);'>$n[4]</th>"
                                                . "<th style='border:1px solid rgba(0,0,0,1.00);'>$n[5]</th>"
                                                . "<th style='border:1px solid rgba(0,0,0,1.00);'>$n[6]</th>"
                                                . "<th style='border:1px solid rgba(0,0,0,1.00);'>$n[7]</th>"
                                                . "<th style='border:1px solid rgba(0,0,0,1.00);'>$n[8]</th>"
                                                . "<th style='border:1px solid rgba(0,0,0,1.00);'>$n[9]</th>"
                                                . "<th style='border:1px solid rgba(0,0,0,1.00);'>$n[10]</hd>"
                                                . "<th style='border:1px solid rgba(0,0,0,1.00);'>$n[11]</th>"
                                                . "<th style='border:1px solid rgba(0,0,0,1.00);'>"
                                                . "<a href='approve2.php?no=$n[12]'>Approve </a>"
                                                . "</BR></BR><a href='reject2.php?no=$n[12]'>Reject</a></td></tr>";
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
</body></html>