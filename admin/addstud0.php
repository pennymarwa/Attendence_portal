<?php
include("nav.php");
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

//$admdate=$_REQUEST['admdate'];
//$admtype=$_REQUEST['admtype'];
?>
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="ajax_exp.js"></script>
<script src="ajax_std.js"></script>
<body>
<form class="form-horizontal" action="addstud1.php" method="post">
<style>
body{
	background-color:#F0F0FF;
	}

</style>

<input type="hidden" value="<?php echo $name; ?>" name="name" />
<input type="hidden" value="<?php echo $fatname; ?>" name="fatname" />
<input type="hidden" value="<?php echo $motname; ?>" name="motname" />
<input type="hidden" value="<?php echo $gender; ?>" name="gender" />
<input type="hidden" value="<?php echo $dept ; ?>" name="dept" />
<input type="hidden" value="<?php echo $phno; ?>" name="phno" />
<input type="hidden" value="<?php echo $urollno ; ?>" name="urollno" />
<input type="hidden" value="<?php echo $crollno ; ?>" name="crollno" />
<input type="hidden" value="<?php echo $add ; ?>" name="add" />
<input type="hidden" value="<?php echo $dob ; ?>" name="dob" />
<input type="hidden" value="<?php echo $email ; ?>" name="email" />


<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-7"><h3 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">SCHOOLING -</h3></div></div><hr />
<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-4"><h4 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">10th Details-</h4></div>
<div class="col-lg-1"></div>
<div class="col-lg-4"><h4 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">12th Details-</h4></div></div><hr><br>

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="tenth">%age in 10th</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="tenth" placeholder="Enter Aggregate %age obtained in 10th" name="tenth"> </div>

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="twelth">%age in 12th</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="twelth" placeholder="Enter Aggregate %age obtained in 12th" name="twelth"> </div> </div><br /><br />

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="tenthschool">Name of school(10th)</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="tenthschool" placeholder="Enter Name of school(10th)" name="tenthschool"> </div>

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="twelthschool">Name of school(12th)</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="twelthschool" placeholder="Enter Name of school(12th)" name="twelthschool"> </div></div><br><br>

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="yeartenth">Year of passing out(10th)</label></div> <div class="col-sm-3"> <input type="date" class="form-control" id="yeartenth" placeholder="Enter Year of passing out(10th)" name="yeartenth"> </div> 

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="yeartwelth">Year of passing out(12th)</label></div> <div class="col-sm-3"> <input type="date" class="form-control" id="yeartwelth" placeholder="Enter Year of passing out(12th)" name="yeartwelth"> </div> </div><br /><br />


<div class="row">
<div class="col-lg-1"></div><div class="col-sm-4"> </div> 

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="subjects">Subjects choosen</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="subjects" placeholder="Enter Subjects choosen" name="subjects"> </div> </div><br /><br />




<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-7">
<h3 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">RANKING-</h3></div></div><br /><br />

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="jeeroll">JEE Main Roll no</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="jeeroll" placeholder="Enter jee roll no)" name="jeeroll"> </div> 

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="jeerank">JEE Main Rank</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="jeerank" placeholder="Enter JEE Main Rank" name="jeerank"> </div> </div><br /><br />



<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="jeetotal">JEE Main total marks obtained</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="jeetotal" placeholder="Enter JEE Main total marks obtained" name="jeetotal"> </div> </div><br /><br />






<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-7">
<h3 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">ADMISSION DETAILS-</h3></div></div><br /><br />

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="admdate">Admission Date</label></div> <div class="col-sm-3"> <input type="date" class="form-control" id="admdate" placeholder="Enter date of admission(dd/mm/yy)" name="admdate"> </div>


<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="totalfee">Total Fees</label></div> <div class="col-sm-3"> <input type="number" class="form-control" id="totalfee" placeholder="Enter Total Fees" name="totalfee"> </div> </div><br /><br />


<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label>Category</label>
</div>
<div class="col-lg-3">
<div class="form-group"><select class="form-control" name="category"><option value="">select</option> 
<option value="General">General</option>
<option value="SC/ST">SC/ST</option>
<option value="OBC">OBC</option>
<option value="Others">Others</option>
</select>
</div></div>

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label>Admission type</label>
</div>
<div class="col-lg-3">
<div class="form-group"><select class="form-control" name="admtype"><option value="">select</option> 
<option value="Full fees">Full fees</option>
<option value="Fee waiver">Fee waiver</option>
<option value="Scholarship">Scholarship</option>
<option value="SC/ST">SC/ST</option>
</select>
</div></div></div>






<div class="row">
<div class="col-lg-8">
</div>
<div class="col-lg-4">
<input type="submit" class="btn" value="next" /></div></div>
</form></body></html>