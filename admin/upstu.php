<?php
include("nav.php");
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

</style><div class="row">
<div class="col-lg-2"></div>
<div class="col-lg-5">
<form action="#" method="post">
<div class="form-group"><select class="form-control" name="dept"><option value="">select</option> 
<option value="Electrical Engg">Electrical Engg</option>
<option value="Mechanical Engg">Mechanical Engg</option>
<option value="Civil Engg">Civil Engg</option>
<option value="Electronics and Communication Engg">Electronics and Communication Engg</option>
<option value="Computer science Engg">Computer science Engg</option>
<option value="Information Technology">Information Technology</option>
<option value="Production Engg">Production Engg</option>
</select></div>
<input type="submit" name="submit" style="margin-left:200px;" />
</form></div></div>
<div class="container">
<table border="1">
<table class="table table-striped">
 <thead>

<?php
include("sess.php");
if(isset($_REQUEST['submit']))
{
  $str=mysql_query("select * from form where dept='$_REQUEST[dept]'");
  echo"
<tr>
<th>Name</th>
<th>University Roll NO</th>
<th>Class Roll No</th>
<th>Total Marks</th>
<th>Marks Obtained</th>
<th>Upgrade</th>
</tr>
";
?>
</thead>
<form action="upstu2.php" method="post"> 
<?php
$no=1;
while($row=mysql_fetch_array($str))
{ 
echo"
<tr>
<td><a href='upstu1.php?a=$row[sno]'>$row[name]</a></td>
<td>$row[urollno]</td>
<td>$row[crollno]</td>
<td>100</td>";
$ssttrr=mysql_query("select * from 1yrcseresult where urollno='$row[urollno]'");
$rrooww=mysql_fetch_array($ssttrr);
$a1=$rrooww['maths1int'];
$a2=$rrooww['maths1ext'];
$a3=$rrooww['enggphyint'];
$a4=$rrooww['enggphyext'];
$a5=$rrooww['beeeint'];
$a6=$rrooww['beeeext'];
$a7=$rrooww['hvpeint'];
$a8=$rrooww['hvpeext'];
$a9=$rrooww['engint'];
$a10=$rrooww['engext'];
$a11=$rrooww['workshopoint'];
$a12=$rrooww['workshopext'];
$a13=$rrooww['maths2int'];
$a14=$rrooww['maths2ext'];
$a15=$rrooww['engchemint'];
$a16=$rrooww['enggchemext'];
$a17=$rrooww['evsint'];
$a18=$rrooww['evsext'];
$a19=$rrooww['emeint'];
$a20=$rrooww['emeext'];
$a21=$rrooww['fcpitint'];
$a22=$rrooww['fcpitext'];
$a23=$rrooww['edint'];
$a24=$rrooww['edext'];
$total=$a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8+$a9+$a10+$a11+$a12+$a13+$a14+$a15+$a16+$a17+$a18+$a19+$a20+$a21+$a22+$a23+$a24;
echo "<td>$total</td>
<td><input type='checkbox' value='a' name='upgrade$no'/></td>
<input type='hidden' value='$row[name]' name='name$no'>
<input type='hidden' value='$row[urollno]' name='urollno$no'>
</tr>
";
$no++;
}
//header("location:upstu1.php");
?>
</table></table>

<input type="hidden"  value="<?php echo $sub1; ?>" name="sub1" />
<input type="submit" style="margin-left:900px" /></form>
<?php
}
?>
</div>
</body></html>


<!--echo"
<tr>
<th>Name</th>
<th>Father's Name</th>
<th>Mother's Name</th>
<th>GENDER</th>
<th>Department</th>
<th>Phone No</th>
<th>University Roll NO</th>
<th>Class Roll No</th>
<th>Address</th>
<th>D.O.B</th>
<th>Email</th>
<th>Admission Date</th>
<th>Admission type</th>
<th>Father's income</th>
<th>Father's Qualification</th>
<th>Father's Occupation</th>
<th>Mother's income(p.a.)</th>
<th>Mother's Qualification</th>
<th>Mother's Occupation</th>
<th>Height</th>
<th>Blood group</th>
<th>Weight</th>
<th>Any Disease</th>
</tr>
";



echo"
<tr>
<td>$row[name]</td>
<td>$row[fatname]</td>
<td>$row[motname]</td>
<td>$row[gender]</td>
<td>$row[dept]</td>
<td>$row[phno]</td>
<td>$row[urollno]</td>
<td>$row[crollno]</td>
<td>$row[add]</td>
<td>$row[dob]</td>
<td>$row[email]</td>
<td>$row[admdate]</td>
<td>$row[admtype]</td>
<td>$row[fatinc]</td>
<td>$row[fatqual]</td>
<td>$row[fatoccup]</td>
<td>$row[motinc]</td>
<td>$row[motqual]</td>
<td>$row[motoccup]</td>
<td>$row[height]</td>
<td>$row[bloodg]</td>
<td>$row[weight]</td>
<td>$row[disease]</td>
</tr>";-->