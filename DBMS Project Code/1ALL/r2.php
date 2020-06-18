<!DOCTYPE html>
<html>
<head>
	<title>User Regestration form</title>
	<?php
	include 'links.php';
	?>
<style>
.container {
  position: relative;
  margin-top: 35px;
}

.center {
  position: absolute;
  left: 0;
  top: 5%;
  width: 100%;
  text-align: center;
  font-size: 18px;
  padding-right: 350px;
  padding-left: 350px;
  margin-bottom: 100px;
  margin-top: 40px;

}

img {  
 opacity: 0.3;
}

</style>

</head>
<body>

	<div class="container">
  
  <img class="img-fluid" src="p2.jpg" alt="Chania" width="auto" height="345"> 

  <div class="center">

  	<form action="regestratitonphpcode.php" method="POST" class="center was-validated">

	    <div class="form-group">
	      <label for="username">Username:</label>
	      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
	      <div class="valid-feedback">Valid.</div>
	      <div class="invalid-feedback">Please fill out this field.</div>
	    </div>

	    

	    

	    <div class="form-group">
	      <label for="password">Password:</label>
	      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
	      <div class="valid-feedback">Valid.</div>
	      <div class="invalid-feedback">Please fill out this field.</div>
	    </div>

	    <div class="form-group form-check">
	      <label class="form-check-label">
	        <input class="form-check-input" type="checkbox" name="remember" required> I agree on Above Information.
	        <div class="valid-feedback">Valid.</div>
	        <div class="invalid-feedback">Check this checkbox to continue.</div>
	      </label>

	      <span>  ( Have account)</span><a href="login.php" class="text-primary"> Login</a>
	    </div>

	    <button style="text-align: center; margin-bottom: 150px;" type="submit" name="submit" class="btn btn-primary">Create Account</button>

	    


  </form>

  </div>
</div>

</body>
</html>