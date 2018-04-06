<?php
ob_start();
session_start();
include("connect.php");
$name=$_REQUEST['name'];
$s_type=$_REQUEST['s_name'];
$service=$_REQUEST['service'];
$contact=$_REQUEST['contact'];
echo $name."<br>";
echo $s_type."<br>";
echo $service."<br>";
echo $contact."<br>";
//mysql_query("insert into employee(v_id,name,type,service,phone)values('$_SESSION[login]','$name','$s_type','$service','$contact')");
//header("location:menu.php?a=add_emp");

?>