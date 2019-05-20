<?php
include("config.php");
$s=mysql_query("select * from feedback");
?>


<!DOCTYPE HTML>
<!--
	Autonomy by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Autonomy by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
       
	</head>
	<body>

		<!-- Header -->
		<div id="header">
			<div class="container">
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Easy Banking Services</a></h1>
				</div>
				
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="adminhome.php">Homepage</a></li>
						<li><a href="add_bank.php">Banks</a></li>
                        <!--<li><a href="users.php">Users</a></li>-->
                        <li class="active"><a href="feed_view.php">Feedback</a></li>
						<li><a href="index.php">Logout</a></li>
                        
					</ul>
				</nav>

			</div>
		</div>
		<!-- Header -->

		<div id="banner">&nbsp;</div>

			<div id="featured">
			<div class="container">
				<div class="row">
					<div class="12u" >
					<center><h2>Bank details</h2></center>
				  <form method="post" id="formid">
                <center><table border="1" style="margin-left:270px;">
                <tr><td>Bank name</td><td><input type="text" name="name" id="name"></td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>Bank address</td><td><textarea name="adrs" id="adrs" rows="5" cols="21"></textarea></td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>Phone</td><td><input type="number" name="phone" id="phone"></td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>Email</td><td><input type="text" name="mail" id="mail"></td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>Bank type</td><td><select name="type" id="type" style="width:175px">
                <option>-select-</option>
                <option>Co operative</option>
                <option>Nationalized</option>
                <option>Private</option>
                </select></td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>Upload emblem</td><td><input type="file" name="img" id="img"></td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr><td height="39">Location</td>
       <td><input id="address" name="address"  placeholder="Enter location" class='teee' type="text"/></td></tr>
      </tr><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                         <tr><td></td><td><div id="map_rashid" style="width:450px; height:450px"></div></td><td width="26">
            <div class='mapaddress'><div id="formattedAddress0"></div><div id="formattedAddress1"></div>
              <div id="formattedAddress2"></div><div id="formattedAddress3"></div>
              <div id="formattedAddress4"></div><div id="formattedAddress5"></div>
              </div> </div></td></tr>
          <input id="latitude" name="latitude" type="hidden"/><br/>
          <input id="longitude" name="longitude" type="hidden"/>
          <tr><td>&nbsp;</td><td>&nbsp;</td></tr>

                <tr><td>Username</td><td><input type="text" name="uname" id="uname"></td></tr>
                 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>Password</td><td><input type="password" name="pass" id="pass"></td></tr>
                            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td colspan="2"><center><input type="submit" name="sub" id="sub" value="Signup" style="background-color:rgba(20,138,187,1.00); height:40px; width:70px" onClick="return validate();"></center></td></tr>    
                </table> </center>
                </form>
               
			
                
               
			
					</div>		
				</div>
			</div>
		</div>
        

		<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
			</div>
		</div>

	</body>
</html>