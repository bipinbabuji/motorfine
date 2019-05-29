<?php
include("config.php");
session_start();
$user1=$_SESSION['user'];
$q=mysql_query("select * from rcform where status='1'");
$s=mysql_num_rows($q);

if(isset($_POST['submit']))
{
    $company=$_POST['ins'];
	$num=$_POST['num'];
	$com=$_POST['comno'];
	$date=$_POST['date'];
	$adrs=$_POST['adrs'];
	$amount=$_POST['renew'];
	$type=$_POST['type'];
	$ccv=$_POST['ccv'];
    $cardno=$_POST['cardno'];
    $cdate=$_POST['cdate'];
	
    
    $q=mysql_query("INSERT INTO `moto_fine_handler`.`insurance` (`id`, `veh_no`, `company`, `number`, `exp_date`, `cdate`, `address`, `amount`, `type`, `ccv`, `cardno`) 
            VALUES (NULL, '$num', '$company', '$com', '$date', '$cdate', '$adrs', '$amount', '$type', '$ccv', '$cardno')");
   
    
	
	if($q)
	{
		echo "<script>alert('renewed,insurance certificate will be posted on your address soon')</script>";
		
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
	<title>insurance</title>
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
        
 function changeValue(){
    var option=document.getElementById('type').value;

    if(option=="United India Insurance Company"){
            document.getElementById('amt').value="127634";
    }
        else if(option=="ICICI Lombard General Insurance Co. Ltd"){
            document.getElementById('amt').value="323456";
        }
		 else if(option=="THE NEW INDIA ASSURANCE CO LTD"){
            document.getElementById('amt').value="5987126";
        }
		 else if(option=="New India Assurance Portal Office ( Vehicle Insurance)"){
            document.getElementById('amt').value="1763452";
        }
}

    function clickMe()
    {
		
var num=document.getElementById("num").value;
if(num=="")
{
alert("Please Enter the Vehicle no");
return false;
}
var com=document.getElementById("com").value;
if(com=="")
{
alert("Please Enter the Insurance company");
return false;
}
var ins=document.getElementById("ins").value;
if(ins=="")
{
alert("Please Enter the insurance number");
return false;
}



var date=document.getElementById("date").value;
if(date=="")
{
alert("Please Enter Expiration date");
return false;
}
var address=document.getElementById("adrs").value;
if(address=="")
{
alert("Please Enter Your Address");
return false;
}
else if(address!=""&&!(/^[a-zA-Z0-9\s,'-]*$/.test(address)))
{
	alert("No Special characters allow");
	return false;
}
var amt=document.getElementById("amt").value;
if(amt=="")
{
alert("Please Enter the Renewal Amount");
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
body{background-image: url("images/car.webp");
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
		<div>
			
                            <center><img src="images/insurance.png" style="width: 2000px; height: 150px;"/></center>

                            <center><h2><U> RENEWAL VEHICLE INSURANCE</U></h2></center>
				               
		</div>
		<div id="main-content">
	
                 <form method="post" id="formid">
                <center><table>
                        <tr><td>&nbsp;&nbsp;Insurance company</td><td><select name="ins" id="type" onchange="changeValue();" style="border:1px solid rgba(0,0,0,1.00);width: 170px; height: 20px;">
                <option>Select company</option>
                  <option>United India Insurance Company</option>
                 <option>ICICI Lombard General Insurance Co. Ltd</option>
                 <option>THE NEW INDIA ASSURANCE CO LTD</option>
                <option>New India Assurance Portal Office ( Vehicle Insurance)</option>
               
                  </select></td></tr>
                <tr><td>&nbsp;&nbsp;Policy NO:</td><td><input type="number" name="comno" style="border:1px solid rgba(0,0,0,1.00);width: 170px; height: 20px;" id="amt" readonly>&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
                   <tr><td>&nbsp;&nbsp;Vehicle No:</td><td><input type="text" name="num" style="border:1px solid rgba(0,0,0,1.00);width: 170px; height: 20px;" id="num" value="<?php echo $user1 ?>" readonly></td></tr>
                 <tr><td>&nbsp;&nbsp;Expiration date</td><td><input type="date" name="date" style="border:1px solid rgba(0,0,0,1.00);width: 170px; height: 20px;" id="date"></td></tr>
                 <tr><td>&nbsp;&nbsp;Address</td><td><input type="text" name="adrs" style="border:1px solid rgba(0,0,0,1.00);width: 170px; height: 20px;" id="date"></td></tr>
                 <tr><td>&nbsp;&nbsp;Current date</td><td><input type="date" name="cdate" style="border:1px solid rgba(0,0,0,1.00);width: 170px; height: 20px;" id="date"></td></tr>
                 
                  <tr><td>&nbsp;&nbsp;Phone No:</td><td><a href="https://control.textlocal.in/send/"> SEND SMS</a></td></tr>
                <tr><td>&nbsp;&nbsp;Renewal Amount</td><td><input type="number" name="renew" style="border:1px solid rgba(0,0,0,1.00);width: 170px; height: 20px;" id="amt"></td></tr>
                <tr><td>&nbsp;&nbsp;Card type</td><td><select name="type" style="border:1px solid rgba(0,0,0,1.00);width: 170px; height: 20px;" id="type">
                <option>Select</option>
                <option>Credit card</option>
                <option>Debit card</option></select></td></tr>
                
               
                 <tr><td>&nbsp;&nbsp;Cvv</td><td><input type="password" name="ccv"  style="border:1px solid rgba(0,0,0,1.00);width: 170px; height: 20px;" id="ccv"></td></tr>
                
                 <tr><td>&nbsp;&nbsp;Card no</td><td><input type="password" name="cardno"  style="border:1px solid rgba(0,0,0,1.00);width: 170px; height: 20px;" id="cardno"></td></tr>
                <tr><td colspan="2"><center><input type="submit" name="submit" value="Renew Insurance" style="border:1px solid rgba(0,0,0,1.00); width:200px; height:40px" onClick="return clickMe()"></center></td></tr>
             
                    </table></center>
                </form>
                
                <?php
				if($s==0)
				{
				echo "<h4><center>NO VEHICLE REGISTER  CERTIFICATE</center><h5>";
				}
				else
				{
				?>

                <center>
                    <table style="border:1px solid rgba(0,0,0,1.00); align-content:center;width:1000px">
                <tr style="border:1px solid rgba(0,0,0,1.00);">
                    <th style="border:1px solid rgba(0,0,0,1.00);">INSURED'S NAME</th>
                     <th style="border:1px solid rgba(0,0,0,1.00);">CHASSIS NO</th>
                            <th style="border:1px solid rgba(0,0,0,1.00);">ENGINE NO</th>
                     <th style="border:1px solid rgba(0,0,0,1.00);">MOTOR VEHICLE</th>
                      <th style="border:1px solid rgba(0,0,0,1.00);">TYPE OF VEHICLE</th>
                     <th style="border:1px solid rgba(0,0,0,1.00);">MANUFACTURE DATE</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">COLOR OF BODY</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">SEATS</th>
                    <th style="border:1px solid rgba(0,0,0,1.00);">FUEL</th>
                     <th style="border:1px solid rgba(0,0,0,1.00);">ADDRESS</th>
                     <th style="border:1px solid rgba(0,0,0,1.00);"></th>
                </tr>
                <?php
				
				while($n=mysql_fetch_array($q))
				{
					echo "<tr style='border:1px solid rgba(0,0,0,1.00);'align='center'>"
                                    . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[0]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[1]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[2]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[3]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[4]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[5]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[6]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[7]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[8]</td>"
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>$n[9]</td>"
  
                                                . "<td style='border:1px solid rgba(0,0,0,1.00);'>"
                                                . "</td></tr>";
                                        
				}
				}
				?>
                
                    </table><center>
                        <H5><i>Limitations as to use:
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The policy use of vehicle for any purpose other than a) Hire or Reward b) Carriage of good (other than samples or personal luggage)
                     c) Organized racing d) Pace making e) Speeding testing f) Reliability Trial g) Use in connection with Motor Trade.</p>
                             </H5></center><center>
                    <h6>Driver:
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Any person including the insured, Provided that a person driving holds
                    an effective driving license at the time of accident
                    and is not disqualified from holding or obtaining 
                    such a license. Provided also that the person holding an effective Learner's license may 
                    also drive the vehicle and that such a person satisfies the requirements of 
                    Rule 3 of the Central Motor Vehicle Rules,1989.</i></h6></center>
			<center> <img src="images/seal.PNG" style="width: 1020px; height: 100px;"/></center>
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