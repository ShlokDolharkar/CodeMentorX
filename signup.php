<!DOCTYPE html>
<html>
<head>
	<title>Create New account</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|courgette|Pacifico:400,700">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
</head>
<body>
	<div class="signup-form">
		<form action="" method="post">
			<div class="form-header">
				<h2>Sign Up</h2>
				<p>Fill Form</p>
			</div>
			<div><input type="radio" name="user_type" value="teacher">Teacher
			<input type="radio" name="user_type" value="student">Student
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user_name" placeholder="Example: Shlok" autocomplete="off" class="form-group" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="user_pass" placeholder="Enter Password" autocomplete="off" class="form-group" required>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="user_email" placeholder="someone@site.com" autocomplete="off" class="form-group" required>
			</div>
			<div class="form-group">
				<label class="checkbox-inline">
					<input type="checkbox" required>
					I accept the <a href="#">Terms of Use</a></label>
			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
			</div>
			<?php 
			include("include/signup_user.php");
			 ?>
		</form>
		<div class="text-center small"> Alredy have an account
		<a href="signin.php">Click here</a>
		</div>
	</div>

</body>
</html>