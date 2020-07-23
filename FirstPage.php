<?php

include("include/connection.php");

session_start();

if(!isset($_SESSION['user_id']))
{
    header("location:signin.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/home.css">
        
    </head>

    <body>
        <div class="row" style="margin-top: 50px; margin-right: 0;">
            <div class="col-sm-4">
                <div class="row"> 
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">         
                        <div>
                            <h1>Welcome</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">  </div>
            <div class="col-sm-4">
                <div class="row"> 
                    <div class="col-sm-4"> 
                        <div>
                            <form action="chat.php">
                            
                            <button class="button"> CHAT </button>
                            
                            </form>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    <div class="col-sm-4"> 
                        <div>
                            <button onclick="window.location.href='signup.php';" type="button">Blog</button>
                            <p id="demo"></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="dropdown">
                            <button class="dropbtn">Dropdown</button>
                            <div class="dropdown-content">
                            <a href="logout.php">Logout</a>
                            <a href="#">Profile</a>
                            <a href="#">Contact</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

        <div class="container">
   <br />
   
   <h3 align="center">Chat Application </a></h3><br />
   <br />


   
   <div class="table-responsive">
    <h4 align="center">Online User</h4>
    <h4 align="center"> USER TYPE <?php echo $_SESSION['user_type']; ?></h4>
    <p align="right">Hi  <?php echo $_SESSION['user_name'];  ?></p>
    <h2><?php date_default_timezone_set("Asia/Kolkata");  echo "The time is :".date("h:i:s")?></h2>
    <div id="user_details"></div>


    
   </div>
   
  </div>

        
    </body>
</html>


