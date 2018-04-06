<?php	
include("sess.php");
$salut=$_REQUEST['salut'];
$marrital=$_REQUEST['marrital'];
$firstname=$_REQUEST['firstname'];
$fatname=$_REQUEST['fatname'];
$middname=$_REQUEST['middname'];
$dob=$_REQUEST['dob'];
$lname=$_REQUEST['lname'];
$gender=$_REQUEST['gender'];
$phno=$_REQUEST['phno'];
$add=$_REQUEST['add'];
$email=$_REQUEST['email'];
$joindate=$_REQUEST['joindate'];
$tenth=$_REQUEST['tenth'];
$twelth=$_REQUEST['twelth'];
$tenthschool=$_REQUEST['tenthschool'];
$twelthschool=$_REQUEST['twelthschool'];
$yeartenth=$_REQUEST['yeartenth'];
$yeartwelth=$_REQUEST['yeartwelth'];
$subjects=$_REQUEST['subjects'];
$dept=$_REQUEST['dept'];
$course=$_REQUEST['course'];
$yr=$_REQUEST['yr'];
$aggr=$_REQUEST['aggr'];

$dept=$_REQUEST['pgdept'];
$course=$_REQUEST['pgcourse'];
$yr=$_REQUEST['pgyr'];
$aggr=$_REQUEST['pgaggr'];

$otherdegree=$_REQUEST['otherdegree'];
$univ=$_REQUEST['univ'];
$arstudy=$_REQUEST['arstudy'];
$inst=$_REQUEST['inst'];
$title=$_REQUEST['title'];
$addstu=$_REQUEST['addstu'];
$locstu=$_REQUEST['locstu'];

$occup=$_REQUEST['occup'];
$arwork=$_REQUEST['arwork'];
$company=$_REQUEST['company'];
$poscomp=$_REQUEST['poscomp'];
$addcomp=$_REQUEST['addcomp'];
$loc=$_REQUEST['loc'];

$str=mysql_query("insert into facform values('','$salut','$marrital','$firstname','$fatname','$middname','$dob','$lname','$gender','$phno','$add','$email','$joindate','$tenth','$twelth','$tenthschool','$twelthschool','$yeartenth','$yeartwelth','$subjects','$dept','$course','$yr','$aggr','$pgdept','$pgcourse','$pgyr','$pgaggr','$otherdegree','$univ','$arstudy','$inst','$title','$addstu','$locstu','$occup','$arwork','$company','$poscomp','$addcomp','$loc')");

echo "insert into facform values('','$salut','$marrital','$firstname','$fatname','$middname','$dob','$lname','$gender','$phno','$add','$email','$joindate','$tenth','$twelth','$tenthschool','$twelthschool','$yeartenth','$yeartwelth','$subjects','$dept','$course','$yr','$aggr','$pgdept','$pgcourse','$pgyr','$pgaggr','$otherdegree','$univ','$arstudy','$inst','$title','$addstu','$locstu','$occup','$arwork','$company','$poscomp','$addcomp','$loc')";


//mysql_query("insert into  values('','$name','$urollno','0','0','0','0','0','0','0','0','0','0','0','0','0') ");
header("location:facformdisplay.php");
?>
