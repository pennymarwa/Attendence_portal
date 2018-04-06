<?php
include("sess.php");
$sub1=$_REQUEST['sub1'];
error_reporting(0);
$no=1;
while($no<=5)
{
	//echo $sub1;
	$ext=$sub1."ext";
	$int=$sub1."int";
	echo $ext;
	echo $int;
	${"name$no"}=$_REQUEST[name.$no];
	//echo ${"name$no"};
${"urollno$no"}=$_REQUEST[urollno.$no];
${"internal$no"}=$_REQUEST[internal.$no];
//echo ${"internal$no"};
${"external$no"}=$_REQUEST[external.$no];

	$dept=$_REQUEST['dept'];
	//$str=mysql_query("select * from $dept where name='${"name$no"}' and urollno='${"urollno$no"}'");
//echo "select * from $dept where name='${"name$no"}' , urollno='${"urollno$no"}'and email='${"email$no"}'";
//echo "<br>";
//$row=mysql_fetch_array($str);
//$a=$row[$sub1];
//echo $a;
//if(${"attend$no"}!="")
//{
	//$a++;
	//echo $a;
//}
mysql_query("update $dept set $ext='${"external$no"}', $int='${"internal$no"}' where name='${"name$no"}'");
echo "<br>"."update $dept set $ext='${"external$no"}', $int='${"internal$no"}' where name='${"name$no"}'"."<br>";
$no++;
}
header("location:sturesult4.php?sub1=$sub1&dept=$dept");
?>


<!--	//echo ${"name$no"};
	//echo ${"urollno$no"};
	//echo ${"attend$no"};
	
//$str=mysql_query("select * from 1yrcse where name='${"name$no"}' and urollno='${"urollno$no"}'");
//echo "select * from 1yrcse where name='${"name$no"}' , urollno='${"urollno$no"}'and email='${"email$no"}'";
//echo "<br>";
//$row=mysql_fetch_array($str);
//$a=$row[$sub1];
//echo $a;
//if(${"attend$no"}!="")
//{
//	$a++;
//	//echo $a;
//}
//mysql_query("update 1yrcse set $sub1='$a' where name='${"name$no"}' and urollno='${"urollno$no"}'");
////echo "<br>";
////echo "update 1yrcse set $sub1='$a' where name='${"name$no"}' and urollno='${"urollno$no"}'";
//$no++;-->

