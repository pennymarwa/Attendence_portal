<?php
include("sess.php");
$sub1=$_REQUEST['sub1'];
error_reporting(0);/*
$subj=$_REQUEST['subj'];*/
$no=1;
while($no<=50)
{
	${"name$no"}=$_REQUEST[name.$no];
	${"urollno$no"}=$_REQUEST[urollno.$no];
	${"attend$no"}=$_REQUEST[attend.$no];
	//echo ${"name$no"};
	//echo ${"urollno$no"};
	//echo ${"attend$no"};
	$dept=$_REQUEST['yr']."cse";
	
$str=mysql_query("select * from $dept where name='${"name$no"}' and urollno='${"urollno$no"}'");
echo "select * from $dept where name='${"name$no"}' , urollno='${"urollno$no"}'and email='${"email$no"}'";
echo "<br>";
$row=mysql_fetch_array($str);
$a=$row[$sub1];
echo $a;
if(${"attend$no"}!="")
{
	$a++;
	//echo $a;
}
mysql_query("update $dept set $sub1='$a' where name='${"name$no"}' and urollno='${"urollno$no"}'");
//echo "<br>";
//echo "update 1yrcse set $sub1='$a' where name='${"name$no"}' and urollno='${"urollno$no"}'";
$no++;
}
header("location:attend4.php?sub1=$sub1&dept=$dept");
?>