<?php
include("config.php");
$id=$_REQUEST['no'];
$v=mysql_query("select password from users where veh_no='$id'");
list($pass)=mysql_fetch_row($v);
$q=mysql_query("update users set status='1' where veh_no='$id'");
$s=mysql_query("insert into login(username,password,type)values('$id','$pass','4')");
if($q)
{
	header("location:approve.php");
}
else
echo mysql_error();
?>