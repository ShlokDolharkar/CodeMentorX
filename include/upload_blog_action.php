<?php
include("./connection.php");

$blog_Content = trim($_POST["blog_text"]);
$blog_Title = trim($_POST["blog_title"]);
// ':blog_Content' == $blog_Content;

$sql = "INSERT INTO blog (blog_title,blog_text)
VALUES ('$blog_Title','$blog_Content')";

if ($connect->query($sql) === TRUE) {
  echo "<script type='text/javascript'>alert('$blog_Title has been created successfully');</script>";
  echo "<script>window.open('../blog_action.php?user_name=$user_name','_self')</script>";
	//header('location : blog.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$connect->close();
?>