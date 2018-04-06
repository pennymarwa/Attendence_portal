
<?php
include("nav.php");
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
$admdate=$_REQUEST['joindate'];
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
<script src="ajax_post.js"></script>
<body>
<form class="form-horizontal" action="facformdb.php" method="post">
<style>
body{
	background-color:#F0F0FF;
	}

</style>
<input type="hidden" value="<?php echo $salut; ?>" name="salut" />
<input type="hidden" value="<?php echo $marrital; ?>" name="marrital" />
<input type="hidden" value="<?php echo $firstname; ?>" name="firstname" />
<input type="hidden" value="<?php echo $fatname; ?>" name="fatname" />
<input type="hidden" value="<?php echo $middname; ?>" name="middname" />
<input type="hidden" value="<?php echo $dob ; ?>" name="dob" />
<input type="hidden" value="<?php echo $lname; ?>" name="lname" />
<input type="hidden" value="<?php echo $gender; ?>" name="gender" />
<input type="hidden" value="<?php echo $phno; ?>" name="phno" />
<input type="hidden" value="<?php echo $add ; ?>" name="add" />
<input type="hidden" value="<?php echo $email ; ?>" name="email" />
<input type="hidden" value="<?php echo $joindate ; ?>" name="joindate" />


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
<div class="col-lg-7"><h3 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">COLLEGE INFO -</h3></div></div><hr /><br>

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="dept">Department</label>
</div>
<div class="col-lg-3">
<div class="form-group"><select class="form-control" name="dept"><option value="">select</
<option value="Electrical Engg">Electrical Engg</option>
<option value="Mechanical Engg">Mechanical Engg</option>
<option value="Civil Engg">Civil Engg</option>
<option value="Electronics and Communication Engg">Electronics and Communication Engg</option>
<option value="Computer science Engg">Computer science Engg</option>
<option value="Information Technology">Information Technology</option>
<option value="Production Engg">Production Engg</option>
</select>
</div></div>

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="course">Course</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="course" placeholder="Enter course choosen" name="course"> </div></div><br /><br />

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="yr">Year of passing out</label></div> <div class="col-sm-3"> <input type="date" class="form-control" id="yr" placeholder="Enter Year of passing out" name="yr"> </div>

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="aggr">Aggregate %age obtained</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="aggr" placeholder="Enter Aggregate %age obtained" name="aggr"> </div> </div><br /><br />


<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-7"><h3 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">POST GRADUATION DETAILS -</h3></div></div><hr /><br>
<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="postgrad">Have you done post Graduation?</label><br /><br />
</div>
<div class="col-lg-3">
<div class="form-group"><select class="form-control" name="studying"  onblur="select_patientss(this.value)"> 
<option value="yes">Yes</option>
<option value="no">No</option>
</select></div></div></div>

<div id="tableds">

</div>





<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="otherdegree">Any other degree</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="otherdegree" placeholder="Enter any other specific degree" name="otherdegree"> </div></div><br><br>


<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-7"><h3 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">STUDY DETAILS -</h3></div></div><hr /><br>


<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="studying">Are you studying?</label><br /><br />
</div>
<div class="col-lg-3">
<div class="form-group"><select class="form-control" name="studying"  onblur="select_patients(this.value)"> 
<option value="yes">Yes</option>
<option value="no">No</option>
</select>
</div>
</div>
</div>
<div class="row">
<div id="tabled">

</div>
</div>




<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-7"><h3 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">WORK DETAILS -</h3></div></div><hr /><br>
<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="working">Any previous work experience?</label><br /><br />
</div>
<div class="col-lg-3">
<div class="form-group"><select class="form-control" name="working" onBlur="select_patient(this.value)"> 
<option value="yes">Yes</option>
<option value="no">No</option>
</select>
</div>
</div>
</div>
<div class="row">
<div id="table">

</div>
</div>


<div class="form-group"> <div class="col-sm-offset-3 col-sm-8"> <button type="submit" class="btn btn-default">Submit</button> </div> </div></form>
</body>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
</form>