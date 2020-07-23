<?php

include("connection.php");

session_start();

if(!isset($_SESSION['user_id']))
{
    header("location:signin.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Choose category</title>
</head>
<body>
	<form action="chat.php/include" method="post">
	<div class="table-responsive">
    <h4 align="center">Online User</h4>
    <h4 align="center"> USER TYPE <?php echo $_SESSION['user_type']; ?></h4>
    <p align="right">Hi  <?php echo $_SESSION['user_name'];  ?></p>
    <h2><?php date_default_timezone_set("Asia/Kolkata");  echo "The time is :".date("h:i:s")?></h2>
    <input type="radio" name="language" value="Cpp">
    <?php  $_SESSION['lang_name']="Cpp"; ?>
    <label for="Cpp"> C++ </label><br>
    <input type="radio" name="language" value="Java">
    <?php  $_SESSION['lang_name']="Java"; ?>
    <label for="Java"> Java </label><br>
    <input type="radio" name="language" value="Python">
    
    <label for="Python"> Python </label><br>
    <button type="submit" name="next"> NEXT</button>

    </form>


    
   </div>

</body>
</html>