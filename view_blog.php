<?php include("include/header.php"); ?>
<?php
				// Check existence of id parameter before processing further
				if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
					// Include config file
					require_once "include/connection.php";
					
					// Prepare a select statement
					$sql = "SELECT * FROM blog WHERE id = ?";
					
					if($stmt = mysqli_prepare($connect, $sql)){
						// Bind variables to the prepared statement as parameters
						mysqli_stmt_bind_param($stmt, "i", $param_id);
						
						// Set parameters
						$param_id = trim($_GET["id"]);
						
						// Attempt to execute the prepared statement
						if(mysqli_stmt_execute($stmt)){
							$result = mysqli_stmt_get_result($stmt);
					
							if(mysqli_num_rows($result) == 1){
								/* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
								$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
								
								// Retrieve individual field value
								$name = $row["blog_title"];
								$address = $row["blog_text"];
								
							} else{
								// URL doesn't contain valid id parameter. Redirect to error page
								header("location: error.php");
								exit();
							}
							
						} else{
							echo "Oops! Something went wrong. Please try again later.";
						}
					}
					 
					// Close statement
					mysqli_stmt_close($stmt);
					
					// Close connection
					mysqli_close($connect);
				} else{
					// URL doesn't contain id parameter. Redirect to error page
					header("location: error.php");
					exit();
				}
				?>
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
		  if ($result->num_rows > 0)
		  {
			  echo '<div class="card">';
			   echo '<h2>'.$row["blog_title"].'</h2>';
			   echo '<p>'.$row["blog_text"].'</p>';
					// echo '<p>'.$row['blog_title'].'</p>';   
					// echo '<p>'.$row['blog_text'].'</p>';                
								   
				echo '</div>'; 
		
		  }
        ?>
    
    </div>
    
</div>

<br><br>

</body>
</html>
