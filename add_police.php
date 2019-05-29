<?php
include("config.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$adrs=$_POST['adrs'];
	$phone=$_POST['phno'];
    $email=$_POST['email'];
	$charge=$_POST['incharge'];
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$q=mysql_query("insert into policestation(ps_name,ps_adrs,phone,email,incharge,uname,password)values('$name','$adrs','$phone','$email','$charge','$uname','$pass')");
	$s=mysql_query("insert into login(username,password,type)values('$uname','$pass','3')");
	if($q)
	{
		echo "<script>alert('Police Station added successfully')</script>";
	}
	else
	{
		echo mysql_error();
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>add police</title>
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
	
    <script src="js/policereg.js"></script>
     <style>
table, td tr {
    
  border: 2px solid black;
  border-color: brown;
   max-width: 700px;
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
		
		<div id="main-content">
			<div class="wrap-content">
           
                            <br>
				<center><h2>ADD POLICESTATION</h2></center><br>
              
                 <form method="post" id="formid">
                <center><table>
                         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                         <tr><td>&nbsp;&nbsp;POLICE STATION NAME</td><td><input type="text" name="name" style="border:1px solid rgba(0,0,0,1.00); width:170px; height:30px;" id="name" required="">&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
                 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>&nbsp;&nbsp;STATION ADDRESS</td><td><textarea rows="5" cols="20" name="adrs" style="border:1px solid rgba(0,0,0,1.00); width:170px; height:30px;"  required=""></textarea></td></tr>
                 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>&nbsp;&nbsp;PHONE NO:</td><td><input type="number" name="phno" style="border:1px solid rgba(0,0,0,1.00); width:170px; height:30px;" id="phno"  required=""></td></tr>
                 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>&nbsp;&nbsp;EMAIL</td><td><input type="email" name="email" style="border:1px solid rgba(0,0,0,1.00); width:170px; height:30px;" id="email" required=""></td></tr>
                 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>&nbsp;&nbsp;IN CHARGE</td><td><input type="text" name="incharge"  style="border:1px solid rgba(0,0,0,1.00); width:170px; height:30px;" id="incharge" required=""></td></tr>
                 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>&nbsp;&nbsp;USER NAME</td><td><input type="text" name="uname"  style="border:1px solid rgba(0,0,0,1.00);width:170px; height:30px;"  required="" ></td></tr>
                 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>&nbsp;&nbsp;PASSWORD</td><td><input type="password" name="pass" style="border:1px solid rgba(0,0,0,1.00);width:170px; height:30px;" required="" ></td></tr>
                 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>&nbsp;&nbsp;RETYPE PASSWORD</td><td><input type="password" name="rpass" style="border:1px solid rgba(0,0,0,1.00);width:170px; height:30px;"  id="rpass"></td></tr>
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
<footer class="zerogrid">
	
	<div class="copyright">
		<div class="wrapper">
                    <h1 align="right"> motofinehandler.com</h1>
			
		</div>
	</div>
</footer>

<!--////////////////////////////////////Footer-->


	<!-- js -->
	<script src="js/classie.js"></script>
	<script src="js/demo.js"></script>
	
</div>
</body></html>