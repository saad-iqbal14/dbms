<?php

include'links.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style=""> 

<nav class="navbar navbar-fixed-top navbar-toggleable-sm navbar-inverse bg-primarry mb-3" style="background-image: linear-gradient( to right,lightblue, lightgreen);">
   
    <div class="flex-row d-flex">
      <a class="navbar-brand mb-1" href="adminProfile.php"><b>Yolo</b></a>
    </div> 
  </nav>

	<!--bookings -->  
<div style="margin: 0px;">

<section id="fun" stylee="background-image: linear-gradient(to bottom right, lightblue, white)">

  <div class="container">
  <div class="jumbotron text-center">
    <h1>Events</h1>
  <p>Shows Added!</p>     
        
</div>

	<div style="text-align: center; padding: 0px; color: white;">
	
	</div>


<div id="carouselExampleControls" class="carousel slide position" data-ride="carousel">

<div class="carousel-inner" style="margin-left: 25%;">


    <div class=" carousel-item active">
    <div class="container " style="box-shadow: 50px 50px;">
    <div class="card" style="width:500px; ">
    <img class=" card-img-top" src="p1.jpg" alt="1" style="width:100%">
    <div class="carousel-caption" style="margin-bottom: 200px;">
        <h1>F9 Park Islamabad</h1>
        <p>Enjoy with us!</p>
      </div>
    <div class="card-body">
      <h4 class="card-title">Gul Panra</h4>
      <p class="card-text">500 Pkr</p>
      <?php
      include 'bookButton.php';
      ?>
    </div>
    </div>
    <br>
    </div>
    </div>


    <div class=" carousel-item ">
    <div class="container " style="box-shadow: 50px 50px;">
    <div class="card" style="width:500px; ">
    <img class=" card-img-top" src="p1.jpg" alt="1" style="width:100%">
    <div class="carousel-caption" style="margin-bottom: 200px;">
        <h1>Main Qoort Peshawr</h1>
        <p>Enjoy with us!</p>
      </div>
    <div class="card-body">
      <h4 class="card-title">Aima baig</h4>
      <p class="card-text">500 Pkr</p>
      <?php
      include 'bookButton.php';
      ?>
    </div>
    </div>
    <br>
    </div>
    </div>

     <div class=" carousel-item ">
    <div class="container " style="box-shadow: 50px 50px;">
    <div class="card" style="width:500px; ">
    <img class=" card-img-top" src="p1.jpg" alt="1" style="width:100%">
    <div class="carousel-caption" style="margin-bottom: 200px;">
        <h1>Monal Lahore</h1>
        <p>Enjoy with us!</p>
      </div>
    <div class="card-body">
      <h4 class="card-title">Asim Azhar</h4>
      <p class="card-text">500 Pkr</p>
      <?php
      include 'bookButton.php';
      ?>
    </div>
    </div>
    <br>
    </div>
    </div>

    <div class=" carousel-item ">
    <div class="container " style="box-shadow: 50px 50px;">
    <div class="card" style="width:500px; ">
    <img class=" card-img-top" src="p1.jpg" alt="1" style="width:100%">
    <div class="carousel-caption" style="margin-bottom: 200px;">
        <h1>Seaview Park Karachi</h1>
        <p>Enjoy with us!</p>
      </div>
    <div class="card-body">
      <h4 class="card-title">Gul Panra</h4>
      <p class="card-text">500 Pkr</p>
      <?php
      include 'bookButton.php';
      ?>
    </div>
    </div>
    <br>
    </div>
    </div>


</div>
</div>

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style=" margin-top: 250px;">
    <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: blue; margin-top: 30px;"></span>
    <span class="sr-only" >Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" style=" margin-top: 250px;">
    <span class="carousel-control-next-icon" aria-hidden="true"  style="background-color: blue; margin-top: 30px;"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

</div>
<!--end bookings -->  

<button class="btn btn-Success p-3 " style="margin-left: 45%; margin-bottom: 5%; ;s">Add Show        +</button>

</body>
</html>