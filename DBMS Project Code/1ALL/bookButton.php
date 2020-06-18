<!DOCTYPE html>
<html>
<head>
	<title></title>

<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">	
</head>
<body>

	
		<div class="py-3 text-center text-white">
			
		</div>
	<!-------pop up box start-------->
		<div class="container">

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Enter Your Data </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
			<form action="/action_page.php">


				  <div class="form-group">
				    <label for="un">Username</label>
				    <input type="text" class="form-control" placeholder="Enter your Username" id="un" required>
				  </div>
				  <div class="form-group">
				    <label for="email">Email address</label>
				    <input type="email" class="form-control" placeholder="Enter email" id="email" required>
				  </div>
				  <div class="form-group">
				    <label for="contact">Contact</label>
				    <input type="text" class="form-control" placeholder="Enter your Contact" id="contact" required>
				  </div>
				  <div class="form-group form-check">
				    <label class="form-check-label">
				      <input class="form-check-input" type="checkbox" required> Are you sure!
				    </label>
				  </div>
				  <button type="submit" class="btn btn-primary">Book Ticket</button>
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

</body>
</html>

