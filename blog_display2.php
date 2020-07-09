<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: center;
  width: 80%;
  padding-left: 230px;
}





/* Add a card effect for articles */
.card {
  margin-left: 0px;
  margin-right: 0px;
   background-color: bisque;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
</style>
</head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/blog.css">
    </head>

    <body>
        <div class="row" style="margin-top: 50px; margin-right: 0;">
            <div class="col-sm-4">
                <div class="row"> 
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">         
                        <div>
                            <img src="logo.jpg" alt="LOGO">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">  </div>
            <div class="col-sm-4">
                <div class="row"> 
                    <div class="col-sm-4"> 
                        <div>
                            <button>Ask</button>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="dropdown">
                            <button class="dropbtn">Dropdown</button>
                            <div class="dropdown-content">
                            <a href="#">Logout</a>
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
<div class="row">
  <div class="leftcolumn">
    
      
      <?php

      $conn = mysqli_connect("localhost", "root", "", "codementor");
      // Check connection
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT id, blog_title, blog_text FROM blog";
      $result = $conn->query($sql);
      if ($result->num_rows > 0)
      {
        while($row = $result->fetch_assoc()){
          echo '<div class="card">';
           echo '<h2>'.$row['blog_title'].'</h2>';
           echo '<p>'.$row['blog_text'].'</p>';
                // echo '<p>'.$row['blog_title'].'</p>';   
                // echo '<p>'.$row['blog_text'].'</p>';                
                               
            echo '</div>'; 
        }
      }
      ?>
    
    </div>
    
</div>




</body>
</html>
