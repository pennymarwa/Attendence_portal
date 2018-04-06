<?php
include("sess.php");
$name=$_REQUEST['name'];
$fatname=$_REQUEST['fatname'];
$motname=$_REQUEST['motname'];
$gender=$_REQUEST['gender'];
$dept=$_REQUEST['dept'];
$phno=$_REQUEST['phno'];
$urollno=$_REQUEST['urollno'];
$crollno=$_REQUEST['crollno'];
$add=$_REQUEST['add'];
$dob=$_REQUEST['dob'];
$email=$_REQUEST['email'];

$tenth=$_REQUEST['tenth'];
$twelth=$_REQUEST['twelth'];
$tenthschool=$_REQUEST['tenthschool'];
$twelthschool=$_REQUEST['twelthschool'];
$yeartenth=$_REQUEST['yeartenth'];
$yeartwelth=$_REQUEST['yeartwelth'];
$subjects=$_REQUEST['subjects'];
$jeeroll=$_REQUEST['jeeroll'];
$jeerank=$_REQUEST['jeerank'];
$jeetotal=$_REQUEST['jeetotal'];
$admdate=$_REQUEST['admdate'];
$totalfee=$_REQUEST['totalfee'];
$category=$_REQUEST['category'];
$admtype=$_REQUEST['admtype'];

$fatinc=$_REQUEST['fatinc'];
$motinc=$_REQUEST['motinc'];
$fatqual=$_REQUEST['fatqual'];
$motqual=$_REQUEST['motqual'];
$fatoccup=$_REQUEST['fatoccup'];
$motoccup=$_REQUEST['motoccup'];
$fatphno=$_REQUEST['fatphno'];
$motphno=$_REQUEST['motphno'];
$fatemail=$_REQUEST['fatemail'];
$motemail=$_REQUEST['motemail'];

$height=$_REQUEST['height'];
$bloodg=$_REQUEST['bloodg'];
$weight=$_REQUEST['weight'];
$disease=$_REQUEST['disease'];
$str=mysql_query("insert into form values('','$name','$fatname','$motname','$gender','$dept','$phno','$urollno','$crollno','$add','$dob','$email','$tenth','$twelth','$tenthschool','$twelthschool','$yeartenth','$yeartwelth','$subjects','$jeeroll','$jeerank','$jeetotal','$admdate','$totalfee','$category','$admtype','$fatinc','$motinc','$fatqual','$motqual','$fatoccup','$motoccup','$fatphno','$motphno','$fatemail','$motemail','$height','$bloodg','$weight','$disease')");

$str1=mysql_query("insert into 1yrcse values('','$name','$urollno','','','','','','','','','','','','')");

$str2=mysql_query("insert into 1yrcseresult values('','$name','$urollno','','','','','','','','','','','','','','','','','','','','','','','','')");

echo "insert into form values('','$name','$fatname','$motname','$gender','$dept','$phno','$urollno','$crollno','$add','$dob','$email','$tenth','$twelth','$tenthschool','$twelthschool','$yeartenth','$yeartwelth','$subjects','$jeeroll','$jeerank','$jeetotal','$admdate','$totalfee','$category','$admtype','$fatinc','$motinc','$fatqual','$motqual','$fatoccup','$motoccup','$fatphno','$motphno','$fatemail','$motemail','$height','$bloodg','$weight','$disease')";

header("location:displayform.php");
?>
