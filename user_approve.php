<?php
include("config.php");
$q=mysql_query("select * from users where status='0'");
$s=mysql_num_rows($q);
?>
<!DOCTYPE html>
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>user approval</title>
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
   max-width: 1050px;
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
                     <li><a href="#" style="background-color:whitesmoke; width: 200px; height: 125px; color: black"></a></li>
			<li><a href="adminhome.php" style="background-color:whitesmoke;  color: black">HOME</a></li>
                        <li><a href="user_approve.php" style="background-color:whitesmoke; color: black; width: 200px; height: 125px;">APPROVAL <br> OPTIONS</a></li>
                        <li><a href="add_police.php" style="background-color:whitesmoke; color: black; width: 200px; height: 125px;">ADD <br> STATIONS</a></li>
			<li><a href="user_req.php" style="background-color:whitesmoke; color: black; width: 200px; height: 125px;">Update RC DETAILS</a></li>
			<li><a href="feed_view.php" style="background-color:whitesmoke; color: black; width: 200px; height: 125px;">USER <br> FEEDBACK</a></li>
			<li><a href="index_1.php" style="background-color:whitesmoke; color: black">Log Out</a></li>
			<li><a href="#" style="background-color:whitesmoke; width: 200px; height: 125px; color: black"></a></li>
		</ul>
                        </nav>
	
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="adminhome.php">Home</a></li>
				<li><a style="color: yellow;" href="user_approve.php">VERIFY USER REGISTER</a></li>
                                <li><a style="color: yellow;"href="lawyer_approve.php">VERIFY CERTIFICATE FORM</a></li>
                                <
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
                            <center> <h1><u>VERIFY USER REGISTER FORM</u></h1></center> <br> <br>
                            <center><img src="images/reg.PNG" style="width: 1050px; height: 150px;"/></center><br>
                            <?php
				if($s==0)
				{
				echo "<h4><center>NO NEW USER FOUND.</center><h5>";
				}
				else
				{
				?>
                <center><table style="border:1px solid rgba(0,0,0,1.00); align-content:center;width:1100px">
                <tr style="border:1px solid rgba(0,0,0,1.00);">
                    <th style="border:1px solid rgba(0,0,0,1.00);color: blue">NAME</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);color: blue">ADDRESS</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);color: blue">HOUSE NO:</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);color: blue">DISTRICT</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);color: blue">STATE</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);color: blue">PHONE</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);color: blue">EMAIL</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);color: blue">VEHICLE_TYPE</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);color: blue">VEHICLE_NO</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);color: blue">OPTIONS</th>
                 
                </tr>
                <?php
				
				while($n=mysql_fetch_array($q))
				{
					echo "<tr style='border:1px solid rgba(0,0,0,1.00);' align='center'>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[3]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[4]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[2]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[0]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[1]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[5]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[6]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[7]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[8]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>"
                                                . "<a href='approve1.php?no=$n[8]'><b>Accept</b></a>"
                                                . "</BR></BR><a href='reject1.php?no=$n[8]'>Reject</a></td></tr>";
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