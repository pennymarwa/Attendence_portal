<?php
include("stunav.php");
?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css" />
</head>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<body>
<style>
body{
	background-color:#F0F0FF;
	}

</style>

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-7"><h3 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">RESULT OF STUDENT IS -</h3></div></div><hr />
<div class="row"><div class="col-xs-8"></div><div class="col-lg-3"><h4>Total Marks=100</h4></div></div>
<div class="container">
<table border="1">

<table class="table table-striped">
 <thead>
 
</thead>
<?php
include("sess.php");
//echo "select * from 1yrcseresult where urollno='$_SESSION[urollno]'";
//echo $_SESSION['dept'];
if($_SESSION['dept']=="Computer science Engg")
{
	$dt="cse";
	$tbl="1yr".$dt."result";
	//echo $tbl;
}
$str=mysql_query("select * from $tbl");
$row=mysql_fetch_array($str);
$name=$row['name'];
$maths1int=$row['maths1int'];
$enggphyint=$row['enggphyint'];
$beeeint=$row['beeeint'];
$hvpeint=$row['hvpeint'];
$engint=$row['engint'];
$workshopint=$row['workshopoint'];
$maths2int=$row['maths2int'];
$enggchemint=$row['enggchemint'];
$evsint=$row['evsint'];
$emeint=$row['emeint'];
$fcpitint=$row['fcpitint'];
$edint=$row['edint'];
$maths1ext=$row['maths1ext'];
$enggphyext=$row['enggphyext'];
$beeeext=$row['beeeext'];
$hvpeext=$row['hvpeext'];
$engext=$row['engext'];
$workshopext=$row['workshopext'];
$maths2ext=$row['maths2ext'];
$enggchemext=$row['enggchemext'];
$evsext=$row['evsext'];
$emeext=$row['emeext'];
$fcpitext=$row['fcpitext'];
$edext=$row['edext'];

//echo $row['name'];
//echo $row['urollno'];
?></table>
<div class="container">
<div class="row">
<div class="col-lg-3"><h4>Name:</h4></div>
<div class="col-lg-3"><?php echo $row['name']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3"><h4>ID</h4></div>
<div class="col-lg-3"><?php echo $row['urollno']; ?></div>
</div><br /><br /><br />

<div class="row">
<div class="col-lg-3"><h4 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">NAME OF SUBJECT</h4></div>
<div class="col-lg-3"><h4 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">INTERNAL MARKS</h4></div>
<div class="col-lg-3"><h4 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">EXTERNAL MARKS</h4></div>
</div><br /><br />
<?php
if($dt=="cse")
{
?>

<div class="row">
<div class="col-lg-3">Maths1</div>
<div class="col-lg-3"><?php echo $maths1int; ?></div>

<div class="col-lg-3"><?php echo $maths1ext; ?></div>
</div><br />
<div class="row">
<div class="col-lg-3">enggphy</div>
<div class="col-lg-3"><?php echo $enggphyint; ?></div>

<div class="col-lg-3"><?php echo $enggphyext; ?></div>
</div><br />
<div class="row">
<div class="col-lg-3">beee</div>
<div class="col-lg-3"><?php echo $beeeint; ?></div>

<div class="col-lg-3"><?php echo $beeeext; ?></div>
</div><br />
<div class="row">
<div class="col-lg-3">hvpe</div>
<div class="col-lg-3"><?php echo $hvpeint; ?></div>

<div class="col-lg-3"><?php echo $hvpeext; ?></div>
</div><br />
<div class="row">
<div class="col-lg-3">eng</div>
<div class="col-lg-3"><?php echo $engint; ?></div>

<div class="col-lg-3"><?php echo $engext; ?></div>
</div><br />
<div class="row">
<div class="col-lg-3">workshop</div>
<div class="col-lg-3"><?php echo $workshopint; ?></div>

<div class="col-lg-3"><?php echo $workshopext; ?></div>
</div><br />
<?php
}
else
{
?>
<div class="row">
<div class="col-lg-3">maths2</div>
<div class="col-lg-3"><?php echo $maths2int; ?></div>

<div class="col-lg-3"><?php echo $maths2ext; ?></div>
</div><br />
<div class="row">
<div class="col-lg-3">enggchem</div>
<div class="col-lg-3"><?php echo $enggchemint; ?></div>

<div class="col-lg-3"><?php echo $enggchemext; ?></div>
</div><br />
<div class="row">
<div class="col-lg-3">evs</div>
<div class="col-lg-3"><?php echo $evsint; ?></div>

<div class="col-lg-3"><?php echo $evsext; ?></div>
</div><br />
<div class="row">
<div class="col-lg-3">eme</div>
<div class="col-lg-3"><?php echo $emeint; ?></div>

<div class="col-lg-3"><?php echo $emeext; ?></div>
</div><br />


<div class="row">
<div class="col-lg-3">fcpit</div>
<div class="col-lg-3"><?php echo $fcpitint; ?></div>

<div class="col-lg-3"><?php echo $fcpitext; ?></div></div><br />

<div class="row">
<div class="col-lg-3">ed </div>
<div class="col-lg-3"><?php echo $edint; ?></div>

<div class="col-lg-3"><?php echo $edext; ?></div></div><br />
<?php
}

?><br />

<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
</body></html>




<!--<?php
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
echo"
<tr>
<th>Nmae</th>
<th>ID</th>
<th>maths1 Internal</th>
<th>enggphy Internal</th>
<th>beee Internal</th>
<th>hvpe Internal</th>
<th>eng Internal</th>
<th>workshop Internal</thd>
<th>maths2 Internal</th>
<th>enggchem Internal</th>
<th>evs Internal</th>
<th>eme Internal</th>
<th>fcpit Internal</th>
<th>ed Internal</th>
<th>maths1 External</th>
<th>enggphy External</th>
<th>beee External</th>
<th>hvpe External</th>
<th>eng External</th>
<th>workshop External</thd>
<th>maths2 External</th>
<th>enggchem External</th>
<th>evs External</th>
<th>eme External</th>
<th>fcpit External</th>
<th>ed External</th>
</tr>
";?>
</thead>
include("sess.php");
$str=mysql_query("select * from 1yrcseresult where urollno=$_SESSION[urollno]");
$row=mysql_fetch_array($str);
$maths1int=$row['maths1int'];
$enggphyint=$row['enggphyint'];
$beeeint=$row['beeeint'];
$hvpeint=$row['hvpeint'];
$engint=$row['engint'];
$workshopint=$row['workshopint'];
$maths2int=$row['maths2int'];
$enggchemint=$row['enggchemint'];
$evsint=$row['evsint'];
$emeint=$row['emeint'];
$fcpitint=$row['fcpitint'];
$edint=$row['edint'];
$maths1ext=$row['maths1ext'];
$enggphyext=$row['enggphyext'];
$beeeext=$row['beeeext'];
$hvpeext=$row['hvpeext'];
$engext=$row['engext'];
$workshopext=$row['workshopext'];
$maths2ext=$row['maths2ext'];
$enggchemext=$row['enggchemext'];
$evsext=$row['evsext'];
$emeext=$row['emeext'];
$fcpitext=$row['fcpitext'];
$edext=$row['edext'];
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
<td>$maths1int</td>
<td>$enggphyint</td>
<td>$beeeintint</td>
<td>$hvpeint</td>
<td>$engint</td>
<td>$workshopint</td>
<td>$maths2int</td>
<td>$enggchemint</td>
<td>$evsint</td>
<td>$emeint</td>
<td>$fcpitint</td>
<td>$edintext</td>
<td>$maths1ext</td>
<td>$enggphyext</td>
<td>$beeeext</td>
<td>$hvpeext</td>
<td>$engext</td>
<td>$workshopext</td>
<td>$maths2ext</td>
<td>$enggchemext</td>
<td>$evsext</td>
<td>$emeext</td>
<td>$fcpitext</td>
<td>$edext</td>
</tr>";
</table></div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
</body></html>

-->