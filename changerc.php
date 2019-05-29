<?php
include("config.php");
session_start();
$user1=$_SESSION['user'];


if(isset($_POST['submit']))
{
    $buyer=$_POST['bname'];
    $dist=$_POST['dist'];
    $state=$_POST['state'];
    $hsno=$_POST['hsno'];
    $veh_no=$_POST['num'];
	$veh_no = str_replace(' ', '', $veh_no);
	$name=$_POST['name'];
	$adrs=$_POST['adrs'];
	$phone=$_POST['phno'];
	$email=$_POST['email'];
	$q=mysql_query("INSERT INTO `moto_fine_handler`.`changerc` (`buyer`, `district`, `state`, `houseno`, `id`, `veh_no`, `name`, `address`, `phone`, `email`, `status`) "
                . "VALUES ('$buyer', '$dist', '$state', '$hsno', NULL, '$veh_no', '$name', '$adrs', '$phone', '$email','1')");
	
	if($q)
	{
		echo "<script>alert('SUCESSFULLY CHANGE YOUR RC DETAILS')</script>";
	}
    else
    echo mysql_error();
	}


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
	<title>Change Rc</title>
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
	
    <script src="js/userregistration.js"></script>
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
    
    background-image: url("images/rc.jpg");
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
			<ul>
				
                                <li><a href="changerc.php">Change R.C Requests</a></li>
                <li><a href="insure.php">Insurance renewal</a></li>
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
                            <center><h2><u>REQUEST TO CHANGE R.C DATA</u></h2></center><br>
                <?php
				$q=mysql_query("select * from users where veh_no='$user1'");
			while($n=mysql_fetch_array($q))
				{
					?>
                            <form method="post"  id="formid">
               
                <center><table>
                              <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>&nbsp;&nbsp;Seller name</td><td><input type="text" name="name" readonly="" id="name"style="border:1px solid rgba(0,0,0,1.00);" value="<?php echo $n[3] ?>" >&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td>&nbsp;&nbsp;vehicle No</td><td><input type="text" name="num" readonly="" id="name"style="border:1px solid rgba(0,0,0,1.00);" value="<?php echo $n[8] ?>" ></td></tr>
<tr><td>&nbsp;&nbsp;Buyer name</td><td><input type="text" name="bname" id="name"style="border:1px solid rgba(0,0,0,1.00);" value="<?php echo $n[3] ?>" ></td></tr>
 <tr><td>&nbsp;&nbsp;Address</td><td><input type="text" name="adrs" style="border:1px solid rgba(0,0,0,1.00);" id="adrs" value="<?php echo $n[4] ?>"</td></tr>
 <tr><td>&nbsp;&nbsp;House No</td><td><input type="text" name="hsno" id="name"style="border:1px solid rgba(0,0,0,1.00);" value="<?php echo $n[2] ?>" ></td></tr>
 <tr><td>&nbsp;&nbsp;District</td><td><input type="text" name="dist" id="name"style="border:1px solid rgba(0,0,0,1.00);" value="<?php echo $n[0] ?>" ></td></tr>
 <tr><td>&nbsp;&nbsp;state</td><td><input type="text"name="state" style="border:1px solid rgba(0,0,0,1.00);" id="adrs" value="<?php echo $n[1] ?>"</td></tr>
 <tr><td>&nbsp;&nbsp;Phone no</td><td><input type="number" name="phno" id="phno" style="border:1px solid rgba(0,0,0,1.00);" value="<?php echo $n[5]?>"></td></tr>
 <tr><td>&nbsp;&nbsp;Email</td><td><input type="email" name="email" id="phno" style="border:1px solid rgba(0,0,0,1.00);" value="<?php echo $n[6]?>"></td></tr>

                
                
               
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td colspan="2"><center><input type="submit" name="submit" value="Register" style="border:1px solid rgba(0,0,0,1.00); width:80px; height:40px" onClick="return clickMe()"></center></td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                    </table></center>
                    </form>
				
                <?php
                }
				
				?>
                </table></center>
			</div>
		</div> 
	</div>
</section>
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