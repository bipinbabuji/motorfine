<?php
include("config.php");
if(isset($_POST['submit']))
{       $owner=$_POST['ownern'];
        $chassis=$_POST['chsno'];
        $engine=$_POST['engno'];
        $motor=$_POST['moto'];
        $tvehicle=$_POST['tveh'];
        $manufacture=$_POST['manu'];
        $color=$_POST['color'];
        $seat=$_POST['seat'];
	$fuel=$_POST['fuel'];
	$adrs=$_POST['adrs'];
	$phone=$_POST['phno'];
	$email=$_POST['email'];
	$reg_no=$_POST['num'];
	$reg_no = str_replace(' ', '', $reg_no);
	$pass=$_POST['pass'];
	$rpass=$_POST['rpass'];
	if($pass==$rpass)
	{
	$s=mysql_query("select * from rcform where reg_no='$reg_no'");
	$n=mysql_num_rows($s);
	if($n==0)
	{
           $q=mysql_query(" INSERT INTO `moto_fine_handler`.`rcform` (`owner`, `chassis`,`engine`, `motor`, `tvehicle`,`manufacture`, `color`,`seat`, `fuel`, `address`, `phone`, `email`, `reg_no`, `password`, `status`)"
                   . " VALUES (' $owner', '$chassis','$engine', '$motor', '$tvehicle',' $manufacture', '$color','$seat', '$fuel', '$adrs', '$phone', '$email', '$reg_no', '$pass', '0')");
	if($q)
	{
		echo "<script>alert('Vehicle Registration Certificate is Done.')</script>";
	}
    else
    echo mysql_error();
	}
	else
	{
		echo "<script>alert('Already registered')</script>";
	}
	}
	else
	{
		echo "<script>alert('Password mismatch')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en"> 
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>vehicle Reg. certificate</title>
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
	
    <script src="js/lawyerregistration.js"></script>
     <style>
table, td tr {
    
  border: 2px solid black;
  border-color: brown;
   max-width: 8000px;
   max-height: 700PX;
   background-color: scrollbar;
    
}
body{background-image: url("images/users.jpg");
}
form{
    
    background-image: url("images/use.jpg");
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
			<li><a href="#"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black"></a></li>
                   <li><a href="#"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black"></a></li>
                   				<li><a href="index.php"style="background-color:whitesmoke; color: black">Home</a></li>
			<li><a href="signup.php"style="background-color:whitesmoke; color: black">Sign Up</a></li>
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
                            <center><h2><U style="color:blue;">VEHICLE REGISTRATION APPLICATION FORM</u></h2></center><br>
                                <form method="post" id="formid" enctype="multipart/form-data" >
                                    <center><table>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr><td>&nbsp;&nbsp;OWNER NAME</td><td><input type="text" name="ownern" style="border:1px solid rgba(0,0,0,1.00);" required=""  ></td></tr>
                        <tr><td>&nbsp;&nbsp;CHASSIS NO</td><td><input type="text" name="chsno" placeholder="A10F019608"style="border:1px solid rgba(0,0,0,1.00);" required=""  >&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
                        <tr><td>&nbsp;&nbsp;ENGINE NO</td><td><input type="text" name="engno" placeholder="A10E023458" style="border:1px solid rgba(0,0,0,1.00);" required=""  ></td></tr>
                        <tr><td>&nbsp;&nbsp;MOTOR VEHICLE </td><td><select name="moto"  style="border:1px solid rgba(0,0,0,1.00);  width: 170px; height: 20px;" required=""  >
                      <option>Select</option>
                <option>A NEW VEHICLE</option>
                <option>EX-ARMY VEHICLE</option>
                <option>IMPORTED VEHICLE</option>
                      </td></tr>
                        <tr><td>&nbsp;&nbsp;TYPE OF VEHICLE</td>
                            <td><select name="tveh" style="border:1px solid rgba(0,0,0,1.00); width: 170px; height: 20px;" >
                <option>SELECT</option>
                <option>2-Wheeler</option>
                <option>3-Wheeler</option>
                <option>4-Wheeler(light)</option>
                <option>4-wheeler(heavy)</option>
                                </select></td></tr>
               
                        
                 <tr><td>&nbsp;&nbsp;MANUFACTURE DATE</td><td><input type="date" name="manu" style="border:1px solid rgba(0,0,0,1.00); width: 170px; height: 20px;" ></td></tr>
                 <tr><td>&nbsp;&nbsp;COLOR OF BODY</td><td><input type="text" name="color" style="border:1px solid rgba(0,0,0,1.00); width: 170px; height: 20px;" ></td></tr>
                 <tr><td>&nbsp;&nbsp;SEATS</td><td><input type="number" name="seat" style="border:1px solid rgba(0,0,0,1.00); width: 170px; height: 20px;" >
                <tr><td>&nbsp;&nbsp;FUEL </td><td>
                        <select name="fuel"  style="border:1px solid rgba(0,0,0,1.00); width: 170px; height: 20px;" >
                  <option>Select</option>
                  <option>PETROL</option>
                  <option>DIESEL </option>
                         </select></td></tr>
                <tr><td>&nbsp;&nbsp;ADDRESS</td><td><textarea rows="5" cols="10" name="adrs" style="border:1px solid rgba(0,0,0,1.00);  width: 170px; height: 20px;" id="adrs"></textarea></td></tr>
                <tr><td>&nbsp;&nbsp;PHONE NO:</td><td><input type="number" name="phno" style="border:1px solid rgba(0,0,0,1.00); width: 170px; height: 20px;" id="phno"></td></tr>
                <tr><td>&nbsp;&nbsp;Email</td><td><input type="text" name="email" style="border:1px solid rgba(0,0,0,1.00); width: 170px; height: 20px;" id="email"></td></tr>
                <tr><td>&nbsp;&nbsp;USER ID</td><td><input type="text" name="num"  style="border:1px solid rgba(0,0,0,1.00); width: 170px; height: 20px;" id="num"></td></tr>
               <form action="upload.php" method="post" >
                   <tr><td>&nbsp;&nbsp;DOCUMENTS:</td><td> <input type="file" name="fileToUpload" id="fileToUpload" required=""></td></tr>
<tr><td>&nbsp;&nbsp;</td><td> <input type="submit" value="Upload Documents" name="submit"></td></tr>
</form>
                
                <tr><td>&nbsp;&nbsp;PASSWORD</td><td><input type="password" name="pass" style="border:1px solid rgba(0,0,0,1.00); width: 170px; height: 20px;" id="pass"></td></tr>
                <tr><td>&nbsp;&nbsp;RETYPE PASSWORD</td><td><input type="password" name="rpass" style="border:1px solid rgba(0,0,0,1.00); width: 170px; height: 20px;" id="rpass"></td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>&nbsp;&nbsp; <input type="checkbox" value="" required=""><label>
                              <b>  I Accept to the Terms & Conditions</b></label></td><td>
                
               <tr><td colspan="2"><center><input type="submit" name="submit" value="Register" style="border:1px solid rgba(0,0,0,1.00); background-color: white;  width:80px; height:40px" onClick="return clickMe()">
               
                <input type="reset"  value="Clear" style="border:1px solid rgba(0,0,0,1.00); background-color: white; width:80px; height:40px"></td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>  </table></center>
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


	<!-- js -->
	<script src="js/classie.js"></script>
	<script src="js/demo.js"></script>
	
</div>
</body></html>