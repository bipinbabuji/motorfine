<?php
include("config.php");
session_start();
$user1=$_SESSION['user'];
$q=mysql_query("select * from case_details where veh_no='$user1' and payment='0'");
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
	<title>cases</title>
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
    
  border: 5px solid black;
  border-color: brown;
   max-width: 8000px;
   max-height: 700PX;
   background-color: scrollbar;
    
}
body{background-image: url("images/case.jpg");
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
        <ul>
         <li><a href="userhome.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">Home</a></li>
        <li><a href="viewcase.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">View<br> Case</a></li>
        <li><a href="viewinsurance.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">View Insurance</a></li>
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
		
		<div id="main-content">
			<div class="wrap-content">
                            <center>
                            <table boder="1px">
                                <tr><td>&nbsp;AMOUNT</td>
                                    <td>&nbsp;&nbsp;FINE </td>
                                    
                                </tr>
                                <tr>  <td>400 Rs</td>
                                    <td>Rules of road regulation violations </td>
                                  
                                </tr><tr> <td>500Rs</td>
                                    <td>Over speeding </td>
                                   
                                </tr><tr><td>10000Rs</td>
                                    <td>Drunken driving </td>
                                    
                                </tr>
                                <tr> <td>5000RS</td>
                                    <td>Illegal racing</td>
                                   
                                </tr>
                                <tr>    <td>1000RS</td>
                                    <td>Overloading of Two Wheelers</td>
                                
                                </tr>
                                <tr> <td>200RS</td>
                                    <td>Helmets </td>
                                   
                                </tr><tr><td>100RS</td>
                                    <td>Seat belt </td>
                                    
                                </tr>
                            </table>
                                </center>
                            <br>
				<center><h2>VIEW CASE DETAILS</h2></center><br>
                <?php
				if($s==0)
				{
				echo "<h4><center>no cases found</center><h5>";
				}
				else
				{
				?>
                <center><table style="border:1px solid rgba(0,0,0,1.00); align-content:center;width:1000px">
                <tr style="border:1px solid rgba(0,0,0,1.00);">
                                        
                    <th style="border:1px solid rgba(0,0,0,1.00);">DISTRICT</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">FINE DATE</th>
                     <th style="border:1px solid rgba(0,0,0,1.00);">LOCATION</th>
                     <th style="border:1px solid rgba(0,0,0,1.00);">POLICE STATION</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">FINE AMOUNTS</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">TOTAL AMOUNT</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">LAST DATE TO PAY</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);"></th></tr>
                <?php
				
				while($n=mysql_fetch_array($q))
				{
					echo "<tr style='border:1px solid rgba(0,0,0,1.00);' align='center'>"
                                   . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[0]</td>" 
                                   . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[2]</td>" 
                                   . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[1]</td>"
                                        . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[9]</td>" 
                                   ."<td style='border:1px solid rgba(0,0,0,1.00);'>$n[5]</td>"
                                    . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[6]</td>"
                                    . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[7]</td>"
                                    . "<td style='border:1px solid rgba(0,0,0,1.00);'>"
                                    . "<a href='pay.php?id=$n[0]&&rate=$n[3] && amount=$n[6]'>Pay here"
                                                . "/<a href='https://razorpay.com/'>Online</a> </a></td></tr>";

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
		<div class="wrapper">  <br><br><br><br><br><br>  <br><br><br><br><br><br>
                    <h1 align="right"> motofinehandler.com</h1>
			
		</div>
	</div>
</footer>

	<!-- js -->
	<script src="js/classie.js"></script>
	<script src="js/demo.js"></script>
	
</div>
</body></html>