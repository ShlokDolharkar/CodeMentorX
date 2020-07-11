<?php 
include("connection.php");

	if(isset($_POST['sign_up'])){
		$user_type=htmlentities(mysqli_real_escape_string($con,$_POST['user_type']));
		$name=htmlentities(mysqli_real_escape_string($con,$_POST['user_name']));
		$pass=htmlentities(mysqli_real_escape_string($con,$_POST['user_pass']));
		$email=htmlentities(mysqli_real_escape_string($con,$_POST['user_email']));
		if($name == '' ){
			echo "<script>alert('Name not found')</script>";
		}
		if(strlen($pass)< 8){
			echo "<script>alert('Mini 8 char req')</script>";
		}
		//if teacher
		if($user_type=="teacher"){
			$check_email ="select * from teacher_user where user_email='$email'";
			$run_email=mysqli_query($con,$check_email);

			$check = mysqli_num_rows($run_email);
			if($check==1){
				echo "<script>alert('Email alredy exist,plz try again!')</script>";

				echo "<script>window.open('signup.php', '_self')</script>";
			}

			$profile_pic="images/profilePhoto.jpg";

			$insert = "insert into teacher_user(user_name,user_pass,user_email,user_profile_photo) values('$name','$pass','$email','$profile_pic') ";
			$query = mysqli_query($con,$insert);

			if($query){

				echo "<script>alert('Congratulation $name, urs account has been created! ')</script>";

				echo "<script>window.open('signin.php', '_self')</script>";

		}
		else{
			echo "<script>alert('Failed try again !!!!')</script>";

			echo "<script>window.open('signup.php', '_self')</script>";
		}

		}
		else {
			$check_email ="select * from student_user where user_email='$email'";
			$run_email=mysqli_query($con,$check_email);

			$check = mysqli_num_rows($run_email);
			if($check==1){
				echo "<script>alert('Email alredy exist,plz try again!')</script>";

				echo "<script>window.open('signup.php', '_self')</script>";
			}

			$profile_pic="images/profilePhoto.jpg";

			$insert = "insert into student_user(user_name,user_pass,user_email,user_profile_photo) values('$name','$pass','$email','$profile_pic') ";
			$query = mysqli_query($con,$insert);

			if($query){

				echo "<script>alert('Congratulation $name, your account has been created! ')</script>";

				echo "<script>window.open('signin.php', '_self')</script>";

			}
			else{
				echo "<script>alert('Failed try again!')</script>";

				echo "<script>window.open('signup.php', '_self')</script>";
			}
		}
		
	}

 ?>