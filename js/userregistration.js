function clickMe()
{
var name=document.getElementById("name").value;
if(name=="")
{
alert("Please Enter Your Name");
return false;
}
else if(name!=""&&!(/^[a-zA-Z\s]*$/.test(name)))
{
	alert("Letters and Space Only");
	return false;
}

/*var place=document.getElementById("place").value;
if(place=="")
{
alert("Please Enter Your Place");
return false;
}
else if(place!=""&&!(/^[a-zA-Z\s]*$/.test(place)))
{
	alert("Letters and Space Only");
	return false;
}*/
/*var gender=document.getElementById('formid').elements;
var gend=gender["gen"].value;
if(gend=="")
{
alert("Please Select Your Gender");
return false;
}*/
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
var dist=document.getElementById('formid').elements;
var dst=dist["type"].value;
if(dst=="Select")
{
alert("Please Select Your vehicletype");
return false;
}
var contact=document.getElementById("phno").value;
if(contact=="")
{
alert("Please Enter Your Contact Number");
return false;
}
else if(contact!=""&&!(/^\d{10}$/.test(contact)))
{
	alert("Enter 10 digit number");
	return false;
}

var mail=document.getElementById("email").value;
if(mail=="")
{
alert("Please Enter Your E-mail Id");
return false;
}
else if(mail!=""&&!(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(mail)))
{
	alert("Enter Correct Email Format");
	return false;
}
var u=document.getElementById("num").value;
if(u=="")
{
alert("Please Enter Your vehicle number");
return false;
}
var p=document.getElementById("pass").value;
if(p=="")
{
alert("Please Enter Password");
return false;
}
var con=document.getElementById("rpass").value;
if(con=="")
{
alert("Please Re-Enter Your Password");
return false;
}	
if(p != con)
{
	alert("Passwords do not match");
	return false;
}
	
	
return true;	
}