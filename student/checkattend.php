<?php
include("stunav.php");
?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
<style>
body
{
	background-color:#F0F0FF;
}
</style>
<br /><br />
<div class="container">
<table border="1">

<table class="table table-striped">
 <thead>
<?php
echo"
<tr>
<th>Nmae</th>
<th>ID</th>
<th>maths1</th>
<th>enggphy</th>
<th>beee</th>
<th>hvpe</th>
<th>eng</th>
<th>workshop</thd>
<th>maths2</th>
<th>enggchem</th>
<th>evs</th>
<th>eme</th>
<th>fcpit</th>
<th>ed</th>
</tr>
";?>
</thead>
<?php
include("sess.php");
$str=mysql_query("select * from 1yrcse where urollno=$_SESSION[urollno]");
$row=mysql_fetch_array($str);
$maths1=$row['maths1'];
$enggphy=$row['enggphy'];
$beee=$row['beee'];
$hvpe=$row['hvpe'];
$eng=$row['eng'];
$workshop=$row['workshop'];
$maths2=$row['maths2'];
$enggchem=$row['enggchem'];
$evs=$row['evs'];
$eme=$row['eme'];
$fcpit=$row['fcpit'];
$ed=$row['ed'];
/*if($sub=="Mathematics 1")
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
*/

echo"
<tr>
<td>$row[name]</td>
<td>$row[urollno]</td>
<td>$maths1</td>
<td>$enggphy</td>
<td>$beee</td>
<td>$hvpe</td>
<td>$eng</td>
<td>$workshop</td>
<td>$maths2</td>
<td>$enggchem</td>
<td>$evs</td>
<td>$eme</td>
<td>$fcpit</td>
<td>$ed</td>
</tr>";
?>
</table></div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
</body></html>