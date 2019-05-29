<?php
include("config.php");
$id=$_REQUEST['no'];
$q=mysql_query("delete from users where veh_no='$id'");
if($q)
{
	header("location:approve.php");
}
else
echo mysql_error();
?>