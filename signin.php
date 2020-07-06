<!DOCTYPE html>
<html>
<head>
	<title>Login to your account</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|courgette|Pacifico:400,700">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
</head>
<body>
	<div class="signin-form">
		<form action="" method="post">
			<div class="form-header">
				<h2>Sign In</h2>
				<p>login to CodementorX </p>
			</div>
			<div><input type="radio" name="user_type" value="teacher">Teacher
			<input type="radio" name="user_type" value="student">Student
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" placeholder="someone@site.com" autocomplete="off" class="form-group" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" placeholder="Enter Password" autocomplete="off" class="form-group" required>
			</div>
			<div class="small">Forgot password?
			<a href="forgot_pass.php">Click Here</a>
			</div>
			<br>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign in</button>
			</div>
			<?php 
			include("include/signin_user.php");
			 ?>
		</form>
		<div class="text-center small"> Dont have account?
		<a href="signup.php">Create One</a>
		</div>
	</div>

</body>
</html>