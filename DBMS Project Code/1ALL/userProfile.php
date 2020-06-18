<?PHP
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>

<style>
/*--

 

/*--overlay--*/
.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
}

.o1:hover .overlay {
  height: 100%;
}
.o2{
  display: block;
  width: 100%;
  height: auto;
}
.o1 {
  position: relative;
  width: 50%;
}

/*--end overlay--*/

.yolo {
  font-size: 80px;
  background: -webkit-radial-gradient(circle, rgba(34,193,195,1) 15%, rgba(196,195,191,1) 72%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

 
</style>

	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
function myFunction(){
  // alert ("adfasdfasd")
}
</script>

</head>
<body data-spy="scroll" data-target="#navbarResponsive" style=" height:100vw;">

 <!-- Navbar -->
<!--
<section>
  
	<ul class="topnav">
  <a class="navbar-brand" href="#">YOLO</a>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li class="right"><a href="#about">
  	 <img src="p1.jpg" class="w3-circle" style="height:24px;width:30px" alt="Avatar">
  </a></li>
</ul>
</section>   
-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-image: linear-gradient(90deg, rgba(74,9,27,1) 0%, rgba(99,58,57,1) 16%, rgba(96,199,194,1) 64%, rgba(241,118,118,1) 100%);; ">
  <a class="navbar-brand yolo" href="#">YOLO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#fun" onclick="myFunction()">Fun</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#query">Query</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#gallery">Gallery</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#login" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        	<img src="p1.jpg" class="w3-circle" style="height:24px;width:30px" alt="Avatar">
          
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class=" dropdown-item" href="" data-target="#myModal" data-toggle="modal">Logout</a>
          <a class="dropdown-item" href="#">Settings</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

  </div>
</nav>

<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#fun" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Fun</a>
  <a href="#gallery" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Gallery</a>
  <a href="#query" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Query</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
</div>

  <!--End Navbar --> 

  <!-- start Logout -->

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-info" id="myModalLabel">Logout</h4>
                              <?php
                          include 'bookButton.php';
                          ?>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
        </div>
        <div class="modal-body text-warning">
          Are you sure you want to logout?.
        </div>
        <div class="modal-footer">
          <a href="m2.php"  class="btn btn-secondary"  >Yes</a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>

  <!-- end Logout -->

  <!--profile -->

  <section style="background-color: lightgreyy;">

  <div class="alert alert-info alert-dismissible fade show " style="margin-left: 100px; margin-right: 100px; margin-top: 10px;">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Complete Profile!</strong> to complete it rn <a href="#" class="alert-link">click here</a>. Or you can do it later on by going to settings.
    </div>

	 <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center" style="margin-top: 50px;">My Profile</h4>
         <p class="w3-center"><img src="p1.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i> <?php echo $_SESSION['username']; ?> </p>
         <p><i class="fa fa-envelope fa-fw w3-margin-right w3-text-theme"></i> email</p>
         <p><i class="fa fa-phone fa-fw w3-margin-right w3-text-theme"></i> contact</p>
        </div>
      </div>
      <br>
 </section> 

  <!--End profile -->   


<!--bookings -->  
<section id="fun" style="background-image:linear-gradient(90deg, rgba(74,9,27,1) 0%, rgba(99,58,57,1) 16%, rgba(96,199,194,1) 64%, rgba(241,118,118,1) 100%); " style="">

	<div style="text-align: center; padding: 50px; color: white;">
	<h1>Fun</h1>
	<p>Book your ticket now!</p>
	</div>


<div id="carouselExampleControls" class="carousel slide position" data-ride="carousel">

<div class="carousel-inner" style="margin-top: 50px; margin-left: 180px;">


    <div class=" carousel-item active">
    <div class="container " style="box-shadow: 50px 50px;">
    <div class="card" style="width:800px; ">
    <img class=" card-img-top" src="p1.jpg" alt="1" style="width:100%">
    <div class="carousel-caption" style="margin-bottom: 200px; ">
        <h1>F9 Park Islamabad</h1>
        <p>Enjoy with us!</p>
      </div>
    <div class="card-body">
      <h4 class="card-title">Gul Panra</h4>
      <p class="card-text">500 Pkr</p>
      <a href="viewEvent.php"  class="btn btn-success" style="margin-left: 40%;" >View Event</a>
    </div>
    </div>
    <br>
    </div>
    </div>


   <div class=" carousel-item">
    <div class="container ">
    <div class="card" style="width:800px">
    <img class=" card-img-top" src="p1.jpg" alt="1" style="width:100%">
    <div class="carousel-caption" style="margin-bottom: 200px; ">
        <h1>Islamabad</h1>
        <p>We had such a great time in ISB!</p>
      </div>
    <div class="card-body">
      <h4 class="card-title">saad</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <?php
      include 'bookButton.php';
      ?>
    </div>
    </div>
    <br>
    </div>
    </div>

    <div class=" carousel-item">
    <div class="container ">
    <div class="card" style="width:800px">
    <img class=" card-img-top" src="p1.jpg" alt="1" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">dj</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <?php
      include 'bookButton.php';
      ?>
    </div>
    </div>
    <br>
    </div>
    </div>

    <div class="carousel-item">
    <div class="container ">
    <div class="card" style="width:800px">
    <img class=" card-img-top" src="p1.jpg" alt="1" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">nuts</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
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

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style=" margin-top: 600px;">
    <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: blue; margin-top: 600px;"></span>
    <span class="sr-only" >Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" style=" margin-top: 600px;">
    <span class="carousel-control-next-icon" aria-hidden="true"  style="background-color: blue; margin-top: 600px;"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
<!--end bookings -->  


<!----	start contact section --->
<section id="query" class="bgprimary" style="background-image: linear-gradient(white, pink,white);
">
	<article style="">
		<div class="container-fluid">
			<h1 class="text-center text-capitalize pt-5">Any Query?</h1>
			<hr class="w-25 mx-auto" >
		</div>
<!----  start contact button --->
		<div class="py-5 text-center text-black">
			<h3 class="diaplay-4 ">+92 3364066363</h3>
			<p>if you wnat the best service call us now!</p>
			<button class="btn btn-warning ">Contact Now</button>
<!----  end contact button --->

<!----  start feedback --->
<br class="py-3">
<br>
<br>
			<h4><b class="text-capitalize " >Add your Feedback!</b></h4>
      <br>
			<div class="container">
			  <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Add</button>
			  <div id="demo" class="collapse">

			  <div class="w-50 mx-auto" >

	<form action="addFeedback.php" method="post" class="mb-5">
		  <div class="form-group">

		    <label for="name">Your Name</label>
		    <input type="text" name="name" class="form-control" placeholder="Enter name" id="name" required>
		  </div>

		  		<div class="form-group">
				  	<label>Textarea</label>
				  	<textarea type="textarea" name="textarea" id="textarea" class="form-control" placeholder="Enter your Feedback." required></textarea>
			    </div>

		  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

<!----  end feedback --->


			  </div>
		    </div>

		</div>
	</article>
</section>
<!----	end contact section --->


<!--Gallery -->


<div id="gallery" class="container-fluid">
	<h1 class="text-center text-capitalize pt-5">gallery</h1>
	<hr class="w-25 mx-auto" >
</div>


<div class="row" style="padding-right: 200px; padding-left: 200px;">

	<div class="col-lg-4 col-md-2  col-12 mb-4">
		<img src="p2.jpg" class="img-fluid">
	</div>
	<div class="col-lg-4 col-md-2  col-12 mb-4">
		<img src="p2.jpg" class="img-fluid">
	</div>
	<div class="col-lg-4 col-md-2  col-12 mb-4">
		<img src="p3.jpg" class="img-fluid">
	</div>
	<div class="col-lg-4 col-md-2  col-12 mb-4">
		<img src="p2.jpg" class="img-fluid">
	</div>
	<div class="col-lg-4 col-md-2  col-12 mb-4">
		<img src="p1.jpg" class="img-fluid">
	</div>
	<div class="col-lg-4 col-md-2  col-12 mb-4">
		<img src="p3.jpg" class="img-fluid">
	</div>
	<div class="col-lg-4 col-md-2  col-12 mb-4">
		<img src="p3.jpg" class="img-fluid">
	</div>
	<div class="col-lg-4 col-md-2  col-12 mb-4">
		<img src="p2.jpg" class="img-fluid">
	</div>
	<div class="col-lg-4 col-md-2  col-12 mb-4">
		<img src="p1.jpg" class="img-fluid">
	</div>


</div>

</section>
<!--Emd Gallery -->

<!----  start footer section --->
<footer>

  <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">Yolo.com</a></p>
  <p>You Live Only Once</p>
</footer>



	<p class="text-center bg-dark text-white">@cpoyright Yolo.com 2020</p>
</footer>


<!----	end footer section --->

</body>
</html>