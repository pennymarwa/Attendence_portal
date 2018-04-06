<head>
<script type="text/javascript" src="ajax_std.js"></script>
</head>
<?php
$x=$_REQUEST['x'];
if($x=="yes")
{
?>


<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="univ">University</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="univ" placeholder="Enter University" name="univ"> </div>

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="arstudy">Area of study</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="arstudy" placeholder="Enter Area of study" name="arstudy"> </div> </div><br />

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="inst">Institute</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="inst" placeholder="Enter Institute" name="inst"> </div>

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="title">Title or programme of study</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="title" placeholder="Enter Title or programme of study" name="title"> </div> </div><br />

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="addstu">Address</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="addstu" placeholder="Enter Address" name="addstu"> </div>

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="locstu">Location</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="locstu" placeholder="Enter Location" name="locstu"> </div> </div><br />

<?php

}
else
{
}
?>