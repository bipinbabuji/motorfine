<?php
include("config.php");
$no1=$_REQUEST['no'];
$id1=$_REQUEST['id'];
$q=mysql_query("select name,address,phone,email from requests where veh_no='$no1' and id='$id1'");
list($n,$a,$p,$e)=mysql_fetch_row($q);
$s=mysql_query("update users set name='$n',address='$a',phone='$p',email='$e' where veh_no='$no1'");
$m=mysql_query("update requests set status='1' where id='$id1'");
if($m)
header("location:user_req.php");
else
echo mysql_error();
?>