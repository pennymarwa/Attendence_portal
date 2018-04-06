<?php
include("sess.php");
session_start();
$urollno=$_REQUEST['urollno'];
$email=$_REQUEST['email'];
$str=mysql_query("select * from form where urollno='$urollno' and email='$email'");
$row=mysql_fetch_array($str);
if($urollno==$row['urollno'] && $email==$row['email'])
{
	$_SESSION['urollno']=$urollno;
	$_SESSION['dept']=$row['dept'];
	//echo "hello";
	//echo $_SESSION['urollno'];
header("location:stunav.php");
}
else
{
	//echo "yes";
	header("location:loginstu.php");
	}
?>