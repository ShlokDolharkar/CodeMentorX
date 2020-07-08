<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codementor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$blog_Content = trim($_POST["blog_content"]);
$blog_Title = trim($_POST["blog_title"]);
// ':blog_Content' == $blog_Content;

$sql = "INSERT INTO blog (blog_title,blog_text)
VALUES ('$blog_Title','$blog_Content')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
	//header('location : blog.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Record successfull</title>
</head>
<body>
	<a href="blog_action.php">View All</a>
</body>
</html>