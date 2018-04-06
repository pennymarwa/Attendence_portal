<?php
include("facnav.php");
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

<table border="1">

<table class="table table-striped">
 <thead>
<?php
include("sess.php");
$str=mysql_query("select* from facform ");
echo"
<tr>
<th>Salutation</th>
<th>Maritial Status</th>
<th>First Name</th>
<th>Father/Husband's Name</th>
<th>Middle Name</th>
<th>D.O.B</th>
<th>Last Name</th>
<th>Gender</th>
<th>Phone No</th>
<th>Address</th>
<th>Email</th>
<th>Joining Date</th>
<th>%age in 10th</th>
<th>%age in 12th</th>
<th>Name of school(10th)</th>
<th>Name of school(12th)</th>
<th>Year of passing out(10th)</th>
<th>Year of passing out(12th)</th>
<th>Subjects choosen</th>
<th>Department</th>
<th>Course</th>
<th>Year of passing out</th>
<th>Aggregate %age obtained</th>
<th>Departmenin pgt</th>
<th>Course in pg</th>
<th>Year of passing out in pg</th>
<th>Aggregate %age obtained in pg</th>
<th>Any other degree</th>

<th>University</th>
<td>Area of study</td>
<td>Institute</td>
<td>Title or programme of study</td>
<td>Address</td>
<td>Location</td>

<th>Occupation</th>
<th>Area of work</th>
<th>Company</th>
<th>Position in company</th>
<th>Address</th>
<th>Location</th>
</tr>
";?>
</thead>
<?php
while($row=mysql_fetch_array($str))
{ 
echo"
<tr>
<td>$row[salut]</td>
<td>$row[marrital]</td>
<td>$row[firstname]</td>
<td>$row[fatname]</td>
<td>$row[middname]</td>
<td>$row[dob]</td>
<td>$row[lname]</td>
<td>$row[gender]</td>
<td>$row[phno]</td>
<td>$row[add]</td>
<td>$row[email]</td>
<td>$row[joindate]</td>
<td>$row[tenth]</td>
<td>$row[twelth]</td>
<td>$row[tenthschool]</td>
<td>$row[twelthschool]</td>
<td>$row[yeartenth]</td>
<td>$row[yeartwelth]</td>
<td>$row[subjects]</td>
<td>$row[dept]</td>
<td>$row[course]</td>
<td>$row[yr]</td>
<td>$row[aggr]</td>

<td>$row[pgdept]</td>
<td>$row[pgcourse]</td>
<td>$row[pgyr]</td>
<td>$row[pgaggr]</td>
<td>$row[otherdegree]</td>

<td>$row[univ]</td>
<td>$row[arstudy]</td>
<td>$row[inst]</td>
<td>$row[title]</td>
<td>$row[addstu]</td>
<td>$row[locstu]</td>

<td>$row[occup]</td>
<td>$row[arwork]</td>
<td>$row[company]</td>
<td>$row[poscomp]</td>
<td>$row[addcomp]</td>
<td>$row[loc]</td>
</tr>";
}
?>
</table></table>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
</body></html>