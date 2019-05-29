<?php
include("config.php");
if(isset($_POST['submit']))
{
        $district=$_POST['dist'];
        $state=$_POST['state'];
        $houseno=$_POST['hsno'];
	$name=$_POST['name'];
	$adrs=$_POST['adrs'];
	$phone=$_POST['phno'];
	$email=$_POST['email'];
	$type=$_POST['type'];
	$veh_no=$_POST['num'];
	$veh_no = str_replace(' ', '', $veh_no);
	$pass=$_POST['pass'];
	$rpass=$_POST['rpass'];
	
	$s=mysql_query("select * from users where veh_no='$veh_no'");
	$n=mysql_num_rows($s);
	if($n==0)
	{
            $q=mysql_query("INSERT INTO `moto_fine_handler`.`users` (`district`,`state`,`houseno`, `name`, `address`, `phone`, `email`, `type`, `veh_no`, `password`, `status`)"
                    . " VALUES ( '$district','$state','$houseno', '$name', '$adrs', '$phone', '$email', '$type', '$veh_no', '$pass', '0')");

	if($q)
	{
		echo "<script>alert('Registration Success, your VEHICLE NUMBER will be your USERNAME')</script>";
	}
    else
    echo mysql_error();
	}
	else
	{
		echo "<script>alert('vehicle already registered')</script>";
	}
	}
	
?>

<!DOCTYPE html>
<html lang="en"> 
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>user registering</title>
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
   max-width: 700px;
   background-color: white;
    
}
body{background-image: url("images/users.jpg");
}
form{
    
    background-image: url("images/uss.jpg");
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
		<ul >
                    <li><a href="#"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black"></a></li>
                   <li><a href="#"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black"></a></li>
                   <li><a href="index_1.php"style="background-color:whitesmoke; color: black">Home</a></li>
                    <li><a href="users.php"style="background-color:whitesmoke; color: black">Sign Up</a></li>
			<li><a href="login.php"style="background-color:whitesmoke; color: black">LogIn</a></li>
			<li><a href="about.php"style="background-color:whitesmoke; color: black">About Us</a></li>
			<li><a href="#"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black"></a></li>
                   <li><a href="#"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black"></a></li>
                   	
		</ul>
    </nav>
	
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				
				<li><a href="users.php" style="color:yellow;">USER REGISTER</a></li>
                                <li><a href="rcform.php" style="color:yellow;">VEHICLE REGISTER CERTIFICATE FORM</a></li>
			
                        </ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
                            <center><h2><U style="color:blue;">USER REGISTRATION</u></h2></center><br>
                <form method="post" id="formid">
                <center><table  >
                  <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                  <tr><td>&nbsp;&nbsp;NAME</td><td><input type="text" name="name" style="border:1px solid rgba(0,0,0,1.00);" required="" >&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
                  <tr><td>&nbsp;&nbsp;ADDRESS</td><td><input type="text" name="adrs" style="border:1px solid rgba(0,0,0,1.00);" required="" ></td></tr>
                  <tr><td>&nbsp;&nbsp;HOUSE NO:</td><td><input type="text" name="hsno" style="border:1px solid rgba(0,0,0,1.00);" required=""></td></tr>
                  <tr><td>&nbsp;&nbsp;DISTRICT</td><td><input type="text" name="dist" style="border:1px solid rgba(0,0,0,1.00);" required="" ></td></tr>
                  <tr><td>&nbsp;&nbsp;STATE</td><td><input type="text" name="state" style="border:1px solid rgba(0,0,0,1.00);" required=""  ></td></tr>
                  <tr><td>&nbsp;&nbsp;PHONE NO:</td><td><input type="number" name="phno"  style="border:1px solid rgba(0,0,0,1.00);" required=""  ></td></tr>
                  <tr><td>&nbsp;&nbsp;EMAIL ID</td><td><input type="email" name="email"  style="border:1px solid rgba(0,0,0,1.00);" required=""  ></td></tr>
                  <tr><td>&nbsp;&nbsp;VEHICLE TYPE</td><td><select name="type" style="border:1px solid rgba(0,0,0,1.00); width: 170px; height: 20px;">
                <option>SELECT</option>
                <option>2-Wheeler</option>
                <option>3-Wheeler</option>
                <option>4-Wheeler(light)</option>
                <option>4-wheeler(heavy)</option>
                </select></td></tr>
                  <tr><td>&nbsp;&nbsp;VEHICLE NO:</td><td><input type="text" name="num"  style="border:1px solid rgba(0,0,0,1.00);" placeholder="KL25G4849"  required=""  ></td></tr>
                  <tr><td>&nbsp;&nbsp;PASSWORD</td><td><input type="password" name="pass" id="pass" style="border:1px solid rgba(0,0,0,1.00);"  required=""  ></td></tr>
                  <tr><td>&nbsp;&nbsp;RETYPE PASSWORD</td><td><input type="password" name="rpass" style="border:1px solid rgba(0,0,0,1.00);"  required=""  ></td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>&nbsp;&nbsp; <input type="checkbox" value="" required=""><label>
                              <b>  I Accept to the Terms & Conditions</b></label></td><td>
                
                <tr><td colspan="2"><center><input type="submit" name="submit" value="Register" style="border:1px solid rgba(0,0,0,1.00); width:80px; height:40px" onClick="return clickMe()">
               
                <input type="reset"  value="Clear" style="border:1px solid rgba(0,0,0,1.00); width:80px; height:40px"></td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                    </table></center>
                </form>
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