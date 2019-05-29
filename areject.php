<?php
include("config.php");
$id1=$_REQUEST['id'];
$q=mysql_query("update appointment set status='2' where id='$id1'");
if($q)
header("location:view_appoint.php");
?>