<?php
include("nav.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<body>
<style>
body{
	background-color:#F0F0FF;
	}
table
{
	margin-top:100px;
}
</style>
<form method="post" action="attend3.php">
<div class="container">
<table class="table table-striped">
 <thead> 
 <tr> 
 <th>Student Name</th> 
 <th>University Roll NO</th>
  <th>Add Attendence</th>
  <th>Attendence</th>
  <th>Total</th>
   </tr> 
   </thead> 
    <tbody>
<?php
error_reporting(0);
include("sess.php");
$sub=$_REQUEST['sub'];
$sub1=$_REQUEST['sub1'];
if($sub=="Mathematics 1")
{
	$sub1="maths1";
}
if($sub=="Engg Physics")
{
	$sub1="enggphy";
}
if($sub=="BEEE")
{
	$sub1="beee";
}
if($sub=="HVPE")
{
	$sub1="hvpe";
}
if($sub=="Communicative English")
{
	$sub1="eng";
}
if($sub=="Workshop")
{
	$sub1="workshop";
}
if($sub=="Mathematics 2")
{
	$sub1="maths2";
}
if($sub=="Engg Chemistry")
{
	$sub1="enggchem";
}

if($sub=="Envirnoment Science")
{
	$sub1="evs";
}
if($sub=="EME")
{
	$sub1="eme";
}
if($sub=="FCPIT")
{
	$sub1="fcpit";
}
if($sub=="Engg Drawing")
{
	$sub1="ed";
}
if($sub=="Mathematics 3")
{
	$sub1="maths3";
}
if($sub=="Data Structure Analysis")
{
	$sub1="dsa";
}
if($sub=="Digital Circuits & Logic Designs")
{
	$sub1="dcld";
}
if($sub=="Computer Architecture")
{
	$sub1="ca";
}
if($sub=="OOPS")
{
	$sub1="oops";
}
if($sub=="Discrete structure")
{
	$sub1="ds";
}
if($sub=="Computer Networking")
{
	$sub1="cn";
}
if($sub=="JAVA")
{
	$sub1="java";
}
if($sub=="Microprocessor")
{
	$sub1="map";
}
if($sub=="Operating Systems")
{
	$sub1="os";
}


$no=1;
$dept=$_REQUEST['year']."cse";
$str=mysql_query("select * from $dept");
while($row=mysql_fetch_array($str))

{ 
$name=$row['name'];
$urollno=$row['urollno'];
$subj=$row[$sub1];
echo"<tr>
<td>$name</td>
<td>$urollno</td>
<td><input type='checkbox' value='a' name='attend$no'/></td>
<input type='hidden' value='$name' name='name$no'>
<input type='hidden' value='$urollno' name='urollno$no'>

<input type='hidden' value='$_REQUEST[year]' name='yr'>
<td>$subj</td></tr>
";
$no++;
}
?>
</tbody>
 </table>
</div>
<input type="hidden"  value="<?php echo $sub1; ?>" name="sub1" />
<input type="submit" style="margin-left:900px" /></form>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>