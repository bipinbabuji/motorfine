<?php
include("config.php");
$id=$_REQUEST['no'];
$v=mysql_query("select password from rcform where reg_no='$id'");
list($pass)=mysql_fetch_row($v);
$q=mysql_query("update rcform set status='1' where reg_no='$id'");
$s=mysql_query("insert into login(username,password,type)values('$id','$pass','2')");
if($q)
{
	header("location:approve.php");
}
else
echo mysql_error();
?>