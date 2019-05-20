<?php
include("config.php");
$id1=$_REQUEST['id'];
$m=mysql_query("update messages set status='1' where id='$id1'");
if($m)
header("Location:pnotif.php");
else
echo mysql_error();
?>