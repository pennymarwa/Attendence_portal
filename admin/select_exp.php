<head>
<script type="text/javascript" src="ajax_emp.js"></script>
</head>
<?php
$x=$_REQUEST['x'];
if($x=="yes")
{
?>


<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="occup">Occupation</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="occup" placeholder="Enter occup" name="occup"> </div>

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="arwork">Area of work</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="arwork" placeholder="Enter Area of work" name="arwork"> </div> </div><br />

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="company">Company</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="company" placeholder="Enter company" name="company"> </div>

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="poscomp">Position in company</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="poscomp" placeholder="Enter Position in company" name="poscomp"> </div> </div><br />

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="addcomp">Address</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="addcomp" placeholder="Enter Address" name="addcomp"> </div>

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="loc">Location</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="loc" placeholder="Enter Location" name="loc"> </div> </div><br />


<?php

}
else
{
}
?>