<?php
include("config.php");
session_start();
$user1=$_SESSION['user'];
$id1=$_REQUEST['id'];
$amount=$_REQUEST['amount'];
if(isset($_POST['submit']))
{
	$num=$_POST['num'];
	$amount=$_POST['amt'];
	$type=$_POST['type'];
	$ccv=$_POST['ccv'];
        $cardno=$_POST['cardno'];
	
	$q=mysql_query("insert into payment(veh_no,amount,type,ccv,cardno)values('$num','$amount','$type','$ccv','$cardno')");
	$s=mysql_query("update case_details set payment='1' where veh_no='$num'");
	
	if($q)
	{
		echo "<script>alert('payment success')</script>";
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
	<title>payements</title>
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
		
var num=document.getElementById("num").value;
if(num=="")
{
alert("Please Enter the Vehicle no");
return false;
}
var dist=document.getElementById('formid').elements;
var dst=dist["type"].value;
if(dst=="Select")
{
alert("Please Select Your Cardtype");
return false;
}
var un=document.getElementById("ccv").value;
if(un=="")
{
alert("Please Enter CCV");
return false;
}
var p=document.getElementById("cardno").value;
var len=p.length;
if(p=="")
{
alert("Please Enter Your Cardno");
return false;
}
else if(len<16||len>16)
{
	alert("invalid card number");
	return false;
}
return true;	
}
</script>
   
    <style>
table, td tr {
    
  border: 5px solid black;
  border-color: brown;
   max-width: 8000px;
   max-height: 700PX;
   background-color: scrollbar;
    
}</style>
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
		
        <li><a href="userhome.php"style="background-color:whitesmoke;width: 250px; height: 125px;  color: black">Home</a></li>
	<li><a href="viewcase.php"style="background-color:whitesmoke;width: 250px; height: 125px;  color: black">View <br> Cases</a></li>
        <li><a href="changerc.php"style="background-color:whitesmoke;width: 220px; height: 125px;  color: black">Change <br> Request</a></li>
        <li><a href="viewrcform.php"style="background-color:whitesmoke; width: 220px; height: 125px; color: black">View Reg.<br>Certificate</a></li>
        <li><a href="send_feed.php"style="background-color:whitesmoke;width: 250px; height: 125px;  color: black">Feedback</a></li>
        <li><a href="index_1.php"style="background-color:whitesmoke;width: 250px; height: 125px;  color: black">Logout</a></li>
	<li><a href="#"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black"></a></li>
				
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
				<center><h2>ONLINE PAYMENT</h2></center><br>
                
                 <form method="post" id="formid">
                <center><table>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>&nbsp;&nbsp;Vehicle NO:</td><td><input type="text" name="num" style="border:1px solid rgba(0,0,0,1.00);" id="num" value="<?php echo $user1 ?>" readonly>&nbsp;&nbsp;</td></tr>
                <tr><td>&nbsp;&nbsp;Amount</td><td><input type="text" name="amt" style="border:1px solid rgba(0,0,0,1.00);" id="amt" value="<?php echo $amount ?>" > </td></tr>
                <tr><td>&nbsp;&nbsp;Card type</td><td><select name="type" style="border:1px solid rgba(0,0,0,1.00); width:170px; height:20px " id="type">
                <option>Select</option>
                <option>Credit card</option>
                <option>Debit card</option></select></td></tr>
                  <tr><td>&nbsp;&nbsp;CVV</td><td><input type="password" name="ccv"  style="border:1px solid rgba(0,0,0,1.00);" id="ccv"></td></tr>
                <tr><td>&nbsp;&nbsp;Card no</td><td><input type="password" name="cardno"  style="border:1px solid rgba(0,0,0,1.00);" id="cardno"></td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td colspan="2"><center><input type="submit" name="submit" value="Pay" style="border:1px solid rgba(0,0,0,1.00); width:80px; height:40px" onClick="return clickMe()"></center></td></tr>
                
                    <tr><td>&nbsp;</td><td>&nbsp;</td></tr></table></center>
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