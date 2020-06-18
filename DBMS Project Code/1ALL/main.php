<!DOCTYPE html>
<html lang="en">
<head>
	<title>bootstrap</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>

</head>

<body data-spy="scroll" data-target="#navbarResponsive">

<!----	start home section --->
<div id="">

<!----	start navigation --->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">YOLO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#About">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Admin</a>
          <a class="dropdown-item" href="#">User</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!----	end navigation --->	
</div>



<div id="demo" class="carousel slide" data-ride="carousel"  >
  <ul class="carousel-indicators">
    <li data-target="#Islamabad" data-slide-to="0" class="active"></li>
    <li data-target="#Karachi" data-slide-to="1"></li>
    <li data-target="#Lahore" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="p1.jpg" alt="Islamabad" width="1100" height="500">
      <div class="carousel-caption" style=" ">
        <h1>Islamabad</h1>
        <p>We had such a great time in ISB!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="p2.jpg" alt="Karachi" width="1100" height="500">
      <div class="carousel-caption" style="">
        <h1>Karachi</h1>
        <p>Thank you, Karachites!</p>
      </div>   
    </div>
    <div class="carousel-item" >
      <img src="p3.jpg" alt="Lahore" width="1100" height="500">
      <div class="carousel-caption" style="">
        <h1>Lahore</h1>
        <p>We love the Big Parties!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!----	end home section --->


<!----	start about section --->

<div class="container-fluid">
	<h1 class="text-center text-capitalize pt-5">about us</h1>
	<hr class="w-25 mx-auto" >
</div>

<!--start portfolio card-->

<div class="row mb-5" style="padding-left: 200px; padding-right: 200px; padding-top: 50px;">

  <div class="card-deck">
  <div class="card" >
    <img class="card-img-top" src="hay3.jpeg" alt="Card image cap " class="fluid">
    <div class="card-body">
      <h5 class="card-title" style="padding-top: 27px">Hayyan khan</h5>
      <p class="card-text">My banda hayyan</p>
       <a href="#" class="btn btn-primary stretched-link" >See Profile</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="sarah.jfif" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title" style="padding-top: 10px">Sarah khan</h5>
      <p class="card-text">My bnda hayyan</p>
       <a href="#" class="btn btn-primary stretched-link" >See Profile</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="sad3.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Saad Iqbal</h5>
      <p class="card-text">Saad ki behn sarah.</p>
       <a href="#" class="btn btn-primary stretched-link" >See Profile</a>
    </div>
  </div>

  </div>
</div>
	

<!--end portfolio card-->

<!----	end about section --->



<!----	start contact section --->

<section class="bg-primary">
	<article>
		<div class="py-5 text-center text-white">
			<h3 class="diaplay-4 ">+92 3364066363</h3>
			<p>if you wnat to best service call us now!</p>
			<button class="btn btn-warning ">Contact Now</button>
		</div>
	</article>
</section>

<section>
<!----	end contact section --->



<!----	start gallery section --->
<div class="container-fluid">
	<h1 class="text-center text-capitalize pt-5">gallery</h1>
	<hr class="w-25 mx-auto" >
</div>

<div class="row" style="padding-right: 200px; padding-left: 200px;">
	<div class="col-lg-4 col-md-2  col-12 mb-4">
		<img src="p1.jpg" class="img-fluid">
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

<!----	end gallery section --->

<!----	start register section --->
<section class="bg-primary">
	<article>
		<div class="py-5 text-center text-white">
			<h3 class="diaplay-4 text-capitalize">want to join</h3>
			<p>Be a part of our family now!</p>
			<button class="btn btn-warning" data-toggle="modal" data-target="#myModal" >Join now</button>
		</div>

<!-------pop up box start-------->
		<div class="container">

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sign Up</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
			<form action="/action_page.php">
				  <div class="form-group">
				    <label for="email">Email address:</label>
				    <input type="email" class="form-control" placeholder="Enter email" id="email">
				  </div>
				  <div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" placeholder="Enter password" id="pwd">
				  </div>

				  
				  <div class="form-group form-check">
				    <label class="form-check-label">
				      <input class="form-check-input" type="checkbox"> Remember me
				    </label>
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<!-------pop up box end-------->

	</article>
</section>
<!----	end register section --->

<!----	start contact us section --->



<div class="container-fluid ">
	<h1 class="text-center text-capitalize pt-5">contact us</h1>
	<hr class="w-25 mx-auto" >
</div>

<div class="w-50 mx-auto" >
	<form action="/action_page.php" class="mb-5">
		  <div class="form-group">
		    <label for="email">Your Name</label>
		    <input type="text" class="form-control" placeholder="Enter name" id="email">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Email</label>
		    <input type="email" class="form-control" placeholder="Enter email" id="pwd">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Mobile Number</label>
		    <input type="number" class="form-control" placeholder="Enter Mobile Number" id="pwd">
		  </div>

		  	<div class="form-group">
				  	<label>Textarea</label>
				  	<textarea class="form-control"></textarea>
				  </div>

		  <div class="form-group form-check">
		    <label class="form-check-label">
		      <input class="form-check-input" type="checkbox"> Remember me
		    </label>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!----	end contact us section --->

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
<!----	start footer section --->

<!----	end footer section --->

</body>
</html>