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

<form class="form-horizontal" action="adddb.php" method="post">
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
<input type="hidden" value="<?php echo $tenth ; ?>" name="tenth" />
<input type="hidden" value="<?php echo $twelth ; ?>" name="twelth" />
<input type="hidden" value="<?php echo $tenthschool ; ?>" name="tenthschool" />
<input type="hidden" value="<?php echo $twelthschool ; ?>" name="twelthschool" />
<input type="hidden" value="<?php echo $yeartenth ; ?>" name="yeartenth" />
<input type="hidden" value="<?php echo $yeartwelth ; ?>" name="yeartwelth" />
<input type="hidden" value="<?php echo $subjects ; ?>" name="subjects" />
<input type="hidden" value="<?php echo $jeeroll ; ?>" name="jeeroll" />
<input type="hidden" value="<?php echo $jeerank ; ?>" name="jeerank" />
<input type="hidden" value="<?php echo $jeetotal ; ?>" name="jeetotal" />
<input type="hidden" value="<?php echo $admdate ; ?>" name="admdate" />
<input type="hidden" value="<?php echo $totalfee ; ?>" name="totalfee" />
<input type="hidden" value="<?php echo $category ; ?>" name="category" />
<input type="hidden" value="<?php echo $admtype ; ?>" name="admtype" />



<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-7"><h3 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">DETAILED INFORMATION -</h3></div></div><hr />

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-4"><h4 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">Father's Details-</h4></div>
<div class="col-lg-1"></div>
<div class="col-lg-4"><h4 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">Mother's Details-</h4></div></div><hr><br>

<div class="row"><div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="fatinc">Father's income(p.a.)</label> </div><div class="col-sm-3"> <input type="number" class="form-control" id="fatinc" placeholder="Enter father's income" name="fatinc"> </div>

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="motinc">Mother's income(p.a.)</label></div> <div class="col-sm-3"> <input type="number" class="form-control" id="motinc" placeholder="Enter Mother's income" name="motinc"> </div> </div><br />

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="fattqual">Father's Qualification</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="fatqual" placeholder="Enter father's qualification" name="fatqual"> </div>
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="motqual">Mother's Qualification</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="motqual" placeholder="Enter mother's qualification" name="motqual"> </div></div><br /><br />


<div class="row"><div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="fatoccup">Father's Occupation</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="fatoccup" placeholder="Enter father's name" name="fatoccup"> </div>


<div class="col-lg-1"></div>
<div class="col-lg-1"><label for="motoccup">Mother's Occupation</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="motoccup" placeholder="Enter mother's name" name="motoccup"> </div> </div><br />

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="fatphno">Father's ph no</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="fatphno" placeholder="Enter Father's ph no" name="fatphno"> </div> 

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="motphno">Mother's phno</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="motphno" placeholder="Enter Mother's phno" name="motphno"> </div></div><br /><br />



<div class="row"><div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="fatemail">Father's email</label> </div><div class="col-sm-3"> <input type="text" class="form-control" id="fatemail" placeholder="Enter father's email" name="fatemail"> </div>


<div class="col-lg-1"></div>
<div class="col-lg-1"><label for="motemail">Mother's email</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="motemail" placeholder="Enter mother's name" name="motemail"> </div> </div><br />



<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-7"><h3 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">MEDICAL HISTORY-</h3></div></div><hr />

<div class="row"><div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="height">Height</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="height" placeholder="Enter height" name="height"> </div> 


<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="bloodg">Blood group</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="bloodg" placeholder="Enter blood group" name="bloodg"> </div> </div><br />

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="weight">Weight</label> </div><div class="col-sm-3"> <input type="text" class="form-control" id="weight" placeholder="Enter weight" name="weight"> </div>

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="disease">Any Disease</label> </div><div class="col-sm-3"> <input type="text" class="form-control" id="disease" placeholder="Enter any disease" name="disease"> </div> </div><br />

   
<div class="form-group"> <div class="col-sm-offset-3 col-sm-8"> <button type="submit" class="btn btn-default">Submit</button> </div> </div> </div></form>
</body>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
</form>


















