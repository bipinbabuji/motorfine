<?php
include("config.php");
if(isset($_POST['submit']))
{  
    $ownern=$_POST['owner'];
    $offence=$_POST['fdate'];     
    $location=$_POST['plaze'];
	$num=$_POST['num'];
	$type=$_POST['type'];
	$amt=$_POST['amt'];
        $date=$_POST['ldate'];
	$police=$_POST['pname'];

       $_SESSION['amount']=$amt;
       $q=mysql_query("INSERT INTO `moto_fine_handler`.`case_details` (`owner`, `location`, `ofdate`, `id`, `veh_no`, `type`, `amount`, `last_date`, `payment`, `ps_name`) "
 . "VALUES ('$ownern', '$location', '$offence', NULL, '$num', '$type', '$amt', '$date', '0', '$police')");
       
   
	if($q)
	{
		echo "<script>alert('Case Added successfully and send sms to User')</script>";
	}
	else
	{
		echo mysql_error();
	}
}
?>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Add cases</title>
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
	  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/policereg.js"></script>
    <script type="text/javascript">
        
function changeValue(){
    var option=document.getElementById('type').value;

    if(option=="Rules of road regulation violation"){
            document.getElementById('amt').value="500";
    }
        else if(option=="Driving without license"){
            document.getElementById('amt').value="5000";
        }
		 else if(option=="Over speeding"){
            document.getElementById('amt').value="1000";
        }
		 else if(option=="Drunken driving"){
            document.getElementById('amt').value="10000";
        }
		 else if(option=="Illegal racing"){
            document.getElementById('amt').value="2000";
        }
		 else if(option=="Overloading of Two Wheelers"){
            document.getElementById('amt').value="500";
        }
		 else if(option=="Helmets"){
            document.getElementById('amt').value="10000";
        }else if(option=="Seat belt"){
            document.getElementById('amt').value="100";
        }
}
function clickMe()
{
	
var num=document.getElementById("num").value;
if(num=="")
{
alert("Please Enter the vehicle no:");
return false;
}
var sel=document.getElementById('formid').elements;
var dst=$('#amt').val();
if(dst=="" || dst == 0)
{
alert("Please Select case type");
return false;
}
var d=document.getElementById("date").value;
if(d=="")
{
alert("Please Enter the last date");
return false;
}
}
</script>
    <style>
table, td tr {
    
  border: 2px solid black;
  border-color: brown;
   max-width: 700px;
   background-color: white;
    
}

body{background-image: url("images/report.jpg");
}
form{
    
    background-image: url("images/report.jpg");
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
                     <li>&nbsp;</li>
			<li>&nbsp;</li>
			<li><a href="policehome.php" style="background-color:whitesmoke; color: black">Home</a></li>
			<li><a href="addcase.php" style="background-color:whitesmoke; color: black">Add cases</a></li>
			<li><a href="pnotif.php" style="background-color:whitesmoke; color: black">Notifications</a></li>
                        <li><a href="index_1.php" style="background-color:whitesmoke; color: black">Logout</a></li>
			 <li>&nbsp;</li>
			<li>&nbsp;</li>
                    
			
		</ul>
    </nav>
	
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		
		<div id="main-content">
			<div class="wrap-content">
            		<center><h2>CHARGE FINE</h2></center><br>
                
                 <form method="post" id="formid">
                <center><table>
                         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr><td>&nbsp;&nbsp;District</td><td><input type="text" name="owner" style="border:1px solid rgba(0,0,0,1.00); width: 170px; height: 30px"  required="">&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
                         <tr><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;&nbsp;Location</td><td><input type="text" name="plaze" style="border:1px solid rgba(0,0,0,1.00); width: 170px; height: 30px" required=""></td></tr>
                         <tr><td>&nbsp;</td><td>&nbsp;</td></tr> <tr><td>&nbsp;&nbsp;Fine Date</td><td><input type="datetime-local" name="fdate" style="border:1px solid rgba(0,0,0,1.00); width: 170px; height: 30px" required=""></td></tr>
                 <tr><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;&nbsp;Police station</td><td><input type="text" name="pname" style="border:1px solid rgba(0,0,0,1.00);width: 170px; height: 30px" required=""></td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;&nbsp;Vehicle no</td><td><input type="text" name="num" style="border:1px solid rgba(0,0,0,1.00);width: 170px; height: 30px" id="num" required=""></td></tr>
               <tr><td>&nbsp;</td><td>&nbsp;</td></tr>  <tr><td>&nbsp;&nbsp;Case type:</td>
                   <td>
                        <label><input type="checkbox" name="rules_of_road_regulation_violation" value="400">Rules of road regulation violation</label>
                        <label><input type="checkbox" name="driving_without_license" value="25000">Driving without license</label>
                        <label><input type="checkbox" name="over_speeding" value="500">Over speeding</label>
                        <label><input type="checkbox" name="drunken_driving" value="10000">Drunken driving</label>
                        <label><input type="checkbox" name="illegal_racing" value="5000">Illegal racing</label>
                        <label><input type="checkbox" name="overloading_of_two_wheelers" value="1000">Overloading of Two Wheelers</label>
                        <label><input type="checkbox" name="helmets" value="200">Helmets</label>
                        <label><input type="checkbox" name="seat_belt" value="100">Seat belt</label>
                   </td>
               </tr>
              <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   <tr><td>&nbsp;&nbsp;Fine amount</td>
                  <td><input type="number" name="amt" style="border:1px solid rgba(0,0,0,1.00); width: 170px; height: 30px" id="amt"  readonly></td></tr>
                 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>  <tr><td>&nbsp;&nbsp;Last date to pay</td><td><input type="Date" name="ldate"  style="border:1px solid rgba(0,0,0,1.00); width:170px; height:30px" id="date"></td></tr>
                 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>  <tr><td>&nbsp;&nbsp;Phone No:</td><td><a href="https://control.textlocal.in/send/"> SEND SMS</a></td></tr>
              
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
               <tr><td colspan="2"><center><input type="submit" name="submit" value="DONE"  style="border:1px solid rgba(0,0,0,1.00); width:80px; height:40px" onClick="return clickMe()"></center></td></tr>
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

<style>
    table label{
        display: block;
    }
</style>
<!--////////////////////////////////////Footer-->


	<!-- js -->
      
	<script src="js/classie.js"></script>
	<script src="js/demo.js"></script>
        
        <script>
            $('input:checkbox').change(function ()
            {

                  var total = 0;
                  $('input:checkbox:checked').each(function(){
                   total += isNaN(parseInt($(this).val())) ? 0 : parseInt($(this).val());
                  });   

                  $("#amt").val(total);

            });
        </script>
	
</div>
</body></html>