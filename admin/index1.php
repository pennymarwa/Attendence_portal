<?php
session_start();
include("sess.php");
$id=$_REQUEST['id'];
$pass=$_REQUEST['pass'];
//echo "select * from index where id='$id' and pass='$pass'";
$str=mysql_query("SELECT * FROM `index` WHERE `id`='$id' and `pass`='$pass'");
$row=mysql_fetch_array($str);
if($id==$row['id'] && $pass==$row['pass'])
{
	//echo "yes";
	$_SESSION['abc']=$id;
	echo $_SESSION['abc'];
	header("location:nav.php");
}
else
{
	//echo "no";
	header("location:index.php?a=not correct");
}

?>