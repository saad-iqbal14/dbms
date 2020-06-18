<!DOCTYPE html>
<html>
<head>
	<title>User login</title>

	<style>
.container {
  position: relative;
  margin-top: 35px;
}

.center {
  position: absolute;
  left: 0;
  top: 25%;
  width: 100%;
  text-align: center;
  font-size: 18px;
  padding-right: 350px;
  padding-left: 350px;

}

img {  
 opacity: 0.3;
}

</style>




 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="container">
  
  <img class="img-fluid" src="p1.jpg" alt="Chania" width="auto" height="345"> 

  <div class="center">

  	<form action="userloginphpcode.php" method="post" class="center was-validated">

 <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>

  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" required> I agree on above data.
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </label>
  </div>
  <button type="submit"  name="submit" class="btn btn-primary">Login</button>
  <div style="text-align: center;" class="p-3">
      <a href="r2.php" class="text-primary"> Click here to Signup</a>
      </div>
</form>

  </div>
</div>


</body>
</html>