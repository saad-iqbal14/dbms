<?php
session_start();
include'links.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>View Event</title>
	<style type="text/css">
		
		input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid red;
}
	</style>
</head>
<body>
	<nav class="navbar navbar-fixed-top navbar-toggleable-sm navbar-inverse bg-primarry mb-3" style="background-image: linear-gradient(90deg, rgba(74,9,27,1) 0%, rgba(99,58,57,1) 16%, rgba(96,199,194,1) 64%, rgba(241,118,118,1) 100%);">
   
    <div class="flex-row d-flex">
      <a class="navbar-brand mb-1 " style="color: white;" href="userProfile.php"><b>Yolo</b></a>
    </div> 
  </nav>

	<div class="container">
  <div class="jumbotron text-center">
    <h1>Book Your Ticket Now!</h1> 
        
</div>
</div>

<div class="container-fluid">
  <div class="row">

  	<div class="col-sm-1" style="">
    </div>

    <div class="col-sm-5" style="margin-left: 0px; margin-top: 80px;">
    	<br><br><br><br>

		<div class="cardd shadow" style="width:500px">
		  <img class="card-img-top" src="p1.jpg" alt="Card image">
		  <div class="card-body">
		    <h4 class="card-title">Islambad</h4>
		    <br>
		    <b><i>Artist: </i></b><span>Gul Panra</span>
		    <br>
		    <b><i>Venue: </i></b><span>F9 Park</span><br>
		    <b><i>Timings: </i></b><span>00:09 Pm</span><br>
		     <b><i>Date: </i></b><span>21-01-2021</span><br>
		  </div>
		</div>
    </div>

    

    <div class="col-sm-6" style=""><h3 style="text-align: center;"><b><i>Fill The Form</i></b></h3>
    	<br>
		   <div class="alert alert-warning alert-dismissible fade show " style="margin-left: 100px; margin-right: 100px; margin-top: 10px;">
		    <button type="button" class="close" data-dismiss="alert">&times;</button>
		    <strong>Alert!</strong> Once you book your ticket you can not cancel it.
		   </div>

<form action="bookTicketcode.php" method="post" style="margin-right: 50px;">

		  <label for="fname">First Name</label>
		  <input type="text" id="fname" name="fname" autocomplete="off" required>

		  <label for="lname">last Name</label>
		  <input type="text" id="lname" name="lname" autocomplete="off"  required>

		  <label for="contact">Contact</label>
		  <input type="text" id="contact" name="contact" autocomplete="off" required>

		  <label for="type">Type</label>
		  <input type="text" id="type" name="type" autocomplete="off" placeholder="Gold/Silver/Nornal" required>

		  <label>Cash Via</label>
		  <br>
		  <div class="custom-control custom-radio custom-control-inline">
		    <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
		    <label class="custom-control-label" for="customRadio">Visa Card</label>
		  </div>

		  <div class="custom-control custom-radio custom-control-inline">
		    <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
		    <label class="custom-control-label" for="customRadio2">On the Spot</label>
		  </div>
		  <br><br>

		 <div class="form-group form-check">
	      <label class="form-check-label">
	        <input class="form-check-input" type="checkbox" name="remember" required> I agree on Above Information.
	        <div class="valid-feedback">Valid.</div>
	        <div class="invalid-feedback">Check this checkbox to continue.</div>
	      </label>
	    </div>
		<button class="btn btn-success" type="submit" name="submit" style="margin-left: 40%; margin-top: 15px;">Book Ticket</button>
 

</form>
<a href="tyBooking.php" class="btn btn-danger">view</a>




    </div>

  </div>
</div>
<br><br><br>

</body>
</html>