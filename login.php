<?php
session_start();
include("config.php");
if(isset($_POST['submit']))
{
	$uname=$_POST['uname'];
	$_SESSION['user']=$uname;
	$pass=$_POST['pass'];
	$q=mysql_query("select username,password,type from login where username='$uname' and password='$pass'");
	list($username,$password,$type)=mysql_fetch_row($q);
	$n=mysql_num_rows($q);
	if($n!=0)
	{
		if($type==0)
		{
			header("location:adminhome.php");
		}
		else if($type==1)
		{
			header("location:courthome.php");
		}
		else if($type==2)
		{
			header("location:lawyerhome.php");
		}
		else if($type==3)
		{
			header("location:policehome.php");
		}
		else 
		{
			header("location:userhome.php");
		}
	}
	else
	{
		echo "<script>alert('Display a message  incorrect username or password')</script>";
	}
	
}
?>
<!DOCTYPE html>
<html lang="en"> 
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>logins</title>
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
     
body{
    background-image: url("images/log.jpg");
}
 
table, td tr {
    
  border: 6px solid black;
  border-color: brown;
   max-width: 1000px;
   max-height:800px;
   background-color: white;
   background-image: url("images/bg.png");
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
		<ul class="clearfix">  <li><a href="#"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black"></a></li>
                   <li><a href="#"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black"></a></li>
                   			<li><a href="index_1.php"style="background-color:whitesmoke; color: black">Home</a></li>
                        <li><a href="users.php"style="background-color:whitesmoke; color: black">Sign Up</a></li>
			<li><a href="login.php"style="background-color:whitesmoke; color: black">LogIn</a></li>
			<li><a href="about.php"style="background-color:whitesmoke; color: black">About Us</a></li>
			 <li><a href="#"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black"></a></li>
                   <li><a href="#"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black"></a></li>
                   		
    </nav>
	
<!--////////////////////////////////////Container-->
<br><br><br><br><br>


                <form method="post">
                    <center><table>
                            
                         <tr><td>&nbsp;</td><td>&nbsp;</td></tr> 
                        
                         <tr><td>
                                
                                 <h1><B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>LOGIN</u> </B></h1></td></tr>
                         
                      <tr><td>&nbsp;</td><td>&nbsp;</td></tr>       
                  <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                  <tr><td>&nbsp;&nbsp;<B>USER NAME </B>&nbsp;</td><td><input type="text" name="uname"  style="border:1px solid rgba(0,0,0,1.00);width: 170px; height: 30px;" required >&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
                <tr><td>&nbsp;</td></tr>
                <tr><td>&nbsp;&nbsp;<B>PASSWORD</B>&nbsp;</td><td><input type="password" name="pass" style="border:1px solid rgba(0,0,0,1.00);width: 170px; height: 30px;" required ></td></tr>
               
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td colspan="2"><center><input type="submit" name="submit" value="LOG IN" style="border:3px solid rgba(0,0,0,1.00); width:80px; height:40px; color: darkblue;">
               
<input type="reset"  value="CLEAR" style="border:3px solid rgba(0,0,0,1.00); width:80px; height:40px"></td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr> </table></center>
                </form>
			

<!--////////////////////////////////////Footer-->

	<!-- js -->
	<script src="js/classie.js"></script>
	<script src="js/demo.js"></script>
	
</div>
</body></html>