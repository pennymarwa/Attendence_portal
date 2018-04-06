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

</style>

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-7"><h3 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">DETAILS OF THE STUDENT ARE -</h3></div></div><hr />

<table border="1">

<table class="table table-striped">
 <thead>
<?php
include("sess.php");
$str=mysql_query("select* from form where sno=$_REQUEST[a]");
while($row=mysql_fetch_array($str))
{ 
?>
</table>
<div class="container">
<div class="row">
<div class="col-lg-3">Name:</div>
<div class="col-lg-3"><?php echo $row['name']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Father's Name</div>
<div class="col-lg-3"><?php echo $row['fatname']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Mother's Name</div>
<div class="col-lg-3"><?php echo $row['motname']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Gender</div>
<div class="col-lg-3"><?php echo $row['gender']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Department</div>
<div class="col-lg-3"><?php echo $row['dept']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Phone No</div>
<div class="col-lg-3"><?php echo $row['phno']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">University Roll NO</div>
<div class="col-lg-3"><?php echo $row['urollno']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Class Roll No</div>
<div class="col-lg-3"><?php echo $row['crollno']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Address</div>
<div class="col-lg-3"><?php echo $row['add']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">D.O.B</div>
<div class="col-lg-3"><?php echo $row['dob']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Email</div>
<div class="col-lg-3"><?php echo $row['email']; ?> </div>
</div>


<div class="row">
<div class="col-lg-3">%age in 10th</div>
<div class="col-lg-3"><?php echo $row['tenth']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">%age in 12th</div>
<div class="col-lg-3"><?php echo $row['twelth']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Name of school(10th)</div>
<div class="col-lg-3"><?php echo $row['tenthschool']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Name of school(12th)</div>
<div class="col-lg-3"><?php echo $row['twelthschool']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Year of passing out(10th)</div>
<div class="col-lg-3"><?php echo $row['yeartenth']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Year of passing out(12th)</div>
<div class="col-lg-3"><?php echo $row['yeartwelth']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Subjects choosen</div>
<div class="col-lg-3"><?php echo $row['subjects']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">JEE Main Roll no</div>
<div class="col-lg-3"><?php echo $row['jeeroll']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">JEE Main Rank</div>
<div class="col-lg-3"><?php echo $row['jeerank']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">JEE Main total marks obtained</div>
<div class="col-lg-3"><?php echo $row['jeetotal']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Admission Date</div>
<div class="col-lg-3"><?php echo $row['admdate']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Total Fees</div>
<div class="col-lg-3"><?php echo $row['totalfee']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Category</div>
<div class="col-lg-3"><?php echo $row['category']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Admission type</div>
<div class="col-lg-3"><?php echo $row['admtype']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Father's income(p.a.)
</div>
<div class="col-lg-3"><?php echo $row['fatinc']; ?> </div>

</div>
<div class="row">
<div class="col-lg-3">Mother's income(p.a.)</div>
<div class="col-lg-3"><?php echo $row['motinc']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Father's Qualification</div>
<div class="col-lg-3"><?php echo $row['fatqual']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Mother's Qualification</div>
<div class="col-lg-3"><?php echo $row['motqual']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Father's Occupation</div>
<div class="col-lg-3"><?php echo $row['fatoccup']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Mother's Occupation</div>
<div class="col-lg-3"><?php echo $row['motoccup']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Father's ph no</div>
<div class="col-lg-3"><?php echo $row['fatphno']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Mother's phno</div>
<div class="col-lg-3"><?php echo $row['motphno']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Father's email</div>
<div class="col-lg-3"><?php echo $row['fatemail']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Mother's email</div>
<div class="col-lg-3"><?php echo $row['motemail']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Height:</div>
<div class="col-lg-3"><?php echo $row['height']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Blood</div>
<div class="col-lg-3"><?php echo $row['bloodg']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Weight</div>
<div class="col-lg-3"><?php echo $row['weight']; ?> </div>
</div>
<div class="row">
<div class="col-lg-3">Any Disease</div>
<div class="col-lg-3"><?php echo $row['disease']; ?> </div>
</div>
</div>

<?php
}
?>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
</body></html>