<?php
include("config.php");
session_start();
$user1=$_SESSION['user'];
$s=mysql_query("select name from users where veh_no='$user1'");
list($name)=mysql_fetch_row($s);

if(isset($_POST['submit']))
{
	$num=$_POST['num'];
	$msg=$_POST['msg'];
	
	
	$q=mysql_query("insert into feedback(name,feedback)values('$name','$msg')");
	
	
	if($q)
	{
		echo "<script>alert('Message send')</script>";
	}
	else
	{
		echo mysql_error();
	}
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
	<title>zItalyFood | Free Restaurant Html5 Templates</title>
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
	    <script type="text/javascript">
    function clickMe()
    {
		
var msg=document.getElementById("msg").value;
if(msg=="")
{
alert("Please Enter the Message");
return false;
}

return true;	
}
</script>
   
    
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
				<li><a href="userhome.php">Home</a></li>
				
                
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
            <br>
            <br>
            <br>
				<center><h2>FEEDBACK</h2></center><br>
                <br>
                <br>
                 <form method="post" id="formid">
                <center><table width=400px>
                <tr><td>Vehicle no</td><td><input type="text" name="num" style="border:1px solid rgba(0,0,0,1.00);" id="num" value="<?php echo $user1 ?>" readonly></td></tr>
               
                  <tr><td>Message</td><td><textarea rows="5" cols="25" name="msg"  style="border:1px solid rgba(0,0,0,1.00);" id="msg"></textarea></td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td colspan="2"><center><input type="submit" name="submit" value="Send" style="border:1px solid rgba(0,0,0,1.00); width:80px; height:40px" onClick="return clickMe()"></center></td></tr>
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