<?php 
	
	include("connection.php");

	session_start();

	$message='';

	if(isset($_SESSION['user_id']))
	{
		header('location:chat.php');
	}
		if(isset($_POST['sign_in'])){
			$user_type=htmlentities(mysqli_real_escape_string($con,$_POST['user_type']));
			$pass=htmlentities(mysqli_real_escape_string($con,$_POST['password']));
			$email=htmlentities(mysqli_real_escape_string($con,$_POST['email']));
			//if teacher
			if($user_type=="teacher"){
				$select_user="select * from teacher_user where user_email='$email' AND user_pass='$pass'";
				$_SESSION['user_type'] = "teacher";

				$query= mysqli_query($con,$select_user);
				$check_user= mysqli_num_rows($query);
				if($check_user==1){
					$_SESSION['user_email']=$email;
					$update_msg=mysqli_query($con,"UPDATE teacher_user SET user_status='ONLINE' WHERE user_email='$email'");
					$user= $_SESSION['user_email'];
					$get_user="select * from teacher_user where user_email='$user'";
					$run_user = mysqli_query($con, $get_user);
					$row= mysqli_fetch_array($run_user);
					$_SESSION['user_name'] = $row['user_name'];
					$_SESSION['user_id'] = $row['user_id'];
					$user_name= $row['user_name'];

					//login_details table contain is_type as boolean value or enum u can say which represents
					//if the user is online or offline
					$sub_query = "
					        INSERT INTO login_details 
					        (user_id) 
					        VALUES ('".$row['user_id']."')
					        ";
					if(mysqli_query($con, $sub_query))
					{
						$last_id = mysqli_insert_id($con);
						$_SESSION['login_details_id'] = $last_id;
					}

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
					$_SESSION['user_type'] = "student";

				$query= mysqli_query($con,$select_user);
				$check_user= mysqli_num_rows($query);
				if($check_user==1){
					$_SESSION['user_email']=$email;
					$update_msg=mysqli_query($con,"UPDATE student_user SET user_status='ONLINE' WHERE user_email='$email'");
					$user= $_SESSION['user_email'];
					$get_user="select * from student_user where user_email='$user'";
					$run_user = mysqli_query($con, $get_user);
					$row= mysqli_fetch_array($run_user);
					$_SESSION['user_name'] = $row['user_name'];
					$_SESSION['user_id'] = $row['user_id'];
					$user_name= $row['user_name'];

					//login_details table contain is_type as boolean value or enum u can say which represents
					//if the user is online or offline
					$sub_query = "
					        INSERT INTO login_details 
					        (user_id) 
					        VALUES ('".$row['user_id']."')
					        ";
					if(mysqli_query($con, $sub_query))
					{
						$last_id = mysqli_insert_id($con);
						$_SESSION['login_details_id'] = $last_id;
					}

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