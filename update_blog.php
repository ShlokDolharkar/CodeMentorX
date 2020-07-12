<?php include("include/header.php"); 

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
				
				include('include/navbar.php')
?>
	
		<div class = "blog_only">
		<form action="include/update_blog_action.php?id=<?php echo $row['id'] ?>" method="POST">
			<textarea cols="100" rows="2" style="resize: none;" name="blog_title" required><?php echo $row["blog_title"] ?></textarea>
			<br><br>
			<div id="editor" class="editorClass" style="width: 90%;margin-left: 80px;">
				<textarea cols="20" rows="5" style="resize: none;" name="blog_text" required><?php echo $row["blog_text"] ?></textarea>
			</div>
			<br><br>
			<button style="margin-left: 150px;font-size: 20px;" name="submit">Update</button>
		</form>
		</div>
					<script>
                        CKEDITOR.replace( 'blog_text' );        
						CKEDITOR.resize( '100%', '350', true )
						//CKEDITOR.config.height = '100%';   // CSS unit (percent).
						CKEDITOR.config.resize_enabled = false; 
					</script>

</body>
</html>