<?php include("include/header.php"); ?>
<head>
<style>
* {
  box-sizing: border-box;
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
   background-color: whitesmoke;;
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

<body>
	<?php include("include/navbar.php"); ?>
<div class="row"  style="margin: 0px;">
  <div class="leftcolumn">
 
      <?php 
		  include("include/connection.php");
		  $sql = "SELECT id, blog_title, blog_text FROM blog";
		  $result = $connect->query($sql);
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

<br> <br>


</body>
</html>
