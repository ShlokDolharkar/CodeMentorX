<?php 
	session_start();
	include("connection.php");
		if(isset($_POST['sign_in'])){
			$user_type=htmlentities(mysqli_real_escape_string($con,$_POST['user_type']));
			$pass=htmlentities(mysqli_real_escape_string($con,$_POST['password']));
			$email=htmlentities(mysqli_real_escape_string($con,$_POST['email']));
			//if teacher
			if($user_type=="teacher"){
				$select_user="select * from teacher_user where user_email='$email' AND user_pass='$pass'";

				$query= mysqli_query($con,$select_user);
				$check_user= mysqli_num_rows($query);
				if($check_user==1){
					$_SESSION['user_email']=$email;
					$update_msg=mysqli_query($con,"UPDATE teacher_user SET user_status='ONLINE' WHERE user_email='$email'");
					$user= $_SESSION['user_email'];
					$get_user="select * from teacher_user where user_email='$user'";
					$run_user = mysqli_query($con, $get_user);
					$row= mysqli_fetch_array($run_user);
					$user_name= $row['user_name'];

					 echo "<script>window.open('FirstPage.php?user_name=$user_name','_self')</script>";
				}
				else {
					echo"
					<div class='alert alert-danger'>
						<strong>Check your email and password</strong>
					</div>
					";
				}
			}
			else{
					$select_user="select * from student_user where user_email='$email' AND user_pass='$pass'";

					$query= mysqli_query($con,$select_user);
					$check_user= mysqli_num_rows($query);
					if($check_user==1){
						$_SESSION['user_email']=$email;
						$update_msg=mysqli_query($con,"UPDATE student_user SET user_status='ONLINE' WHERE user_email='$email'");
						$user= $_SESSION['user_email'];
						$get_user="select * from student_user where user_email='$user'";
						$run_user = mysqli_query($con, $get_user);
						$row= mysqli_fetch_array($run_user);
						$user_name= $row['user_name'];

						 echo "<script>window.open('FirstPage.php?user_name=$user_name','_self')</script>";
					}
					else {
						echo"
						<div class='alert alert-danger'>
							<strong>Check your email and password</strong>
						</div>
						";
					}

			}
			
		}
 ?>