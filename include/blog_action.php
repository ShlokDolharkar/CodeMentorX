<?php

	include("connection.php");
	//$con -> connection variable

    $blog_Text=htmlentities(mysqli_real_escape_string($con,$_POST['blog_text']));

    $query = "INSERT INTO blog (blog_text) VALUES('$blog_Text')";

    $query=mysqli_query($con, $query);

   if($query){

			echo "<script>alert('Blog Posted!!')</script>";

			echo "<script>window.open('../FirstPage.php', '_self')</script>";

		}
		else{
			echo "<script>alert('Failed try again!')</script>";

			echo "<script>window.open('../FirstPage.php', '_self')</script>";
		}
?>