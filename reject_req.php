<?php
include("config.php");
$no1=$_REQUEST['no'];
$id1=$_REQUEST['id'];
$q=mysql_query("update requests set status='2' where id='$id1'");
if($q)
header("location:user_req.php");
else
mysql_error();
?>