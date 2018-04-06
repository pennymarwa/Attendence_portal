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
	${"upgrade$no"}=$_REQUEST[upgrade.$no];
	//echo ${"name$no"};
	//echo ${"urollno$no"};
	//echo ${"attend$no"};
//	
//$str=mysql_query("select * from 1yrcse where name='${"name$no"}' and urollno='${"urollno$no"}'");
//echo "select * from 1yrcseresult where name='${"name$no"}' , urollno='${"urollno$no"}'and email='${"email$no"}'";
//echo "<br>";
//$row=mysql_fetch_array($str);
//$a=$row[$sub1];
//echo $a;
if(${"upgrade$no"}!="")
{
	mysql_query("INSERT INTO `2yrcse`(`sno`, `name`, `urollno`, `maths3`, `dsa`, `dcld`, `ca`, `oops`, `ds`, `cn`, `java`, `map`, `os`) VALUES ('','${"name$no"}','${"urollno$no"}','','','','','','','','','','')");
	echo "INSERT INTO `2yrcse`(`sno`, `name`, `urollno`, `maths3`, `dsa`, `dcld`, `ca`, `oops`, `ds`, `cn`, `java`, `map`, `os`) VALUES ('','${"name$no"}','${"urollno$no"}','','','','','','','','','')";
mysql_query("INSERT INTO `2yrcseresult`(`sno`, `name`, `urollno`, `maths3int`, `maths3ext`, `dsaint`, `dsaext`, `dcldint`, `dcldext`, `caint`, `caext`, `oopsint`, `oopsext`, `dsint`, `dsext`, `cnint`, `cnext`, `javaint`, `javaext`, `mapint`, `mapext`, `osint`, `osext`) VALUES ('','${"name$no"}','${"urollno$no"}','','','','','','','','','','','','','','','','','','','','')");
echo "INSERT INTO `2yrcseresult`(`sno`, `name`, `urollno`, `maths3int`, `maths3ext`, `dsaint`, `dsaext`, `dcldint`, `dcldext`, `caint`, `caext`, `oopsint`, `oopsext`, `dsint`, `dsext`, `cnint`, `cnext`, `javaint`, `javaext`, `mapint`, `mapext`, `osint`, `osext`) VALUES ('','${"name$no"}','${"urollno$no"}','','','','','','','','','','','','','','','','','','','','')";

	//$a++;
	//echo $a;
}
//echo "<br>";
//echo "update 1yrcse set $sub1='$a' where name='${"name$no"}' and urollno='${"urollno$no"}'";
$no++;
}
//header("location:attend4.php?sub1=$sub1");
?>