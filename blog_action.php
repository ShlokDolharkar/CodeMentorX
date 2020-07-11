<?php include("include/header.php"); ?>
<head>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
	<style>
		* {
		  box-sizing: border-box;
		}

		#myInput {
		  background-position: 10px 10px;
		  background-repeat: no-repeat;
		  width: 100%;
		  font-size: 16px;
		  padding: 12px 20px 12px 40px;
		  border: 5px solid grey;
		  margin-bottom: 12px;
		}

		#myTable {
		  border-collapse: collapse;
		  width: 100%;
		  border: 1px solid #ddd;
		  font-size: 18px;
		}

		#myTable th, #myTable td {
		  text-align: left;
		  padding: 12px;
		}

		#myTable tr {
		  border-bottom: 1px solid #ddd;
		}

		#myTable tr.header, #myTable tr:hover {
		  background-color: #f1f1f1;
		}
</style>
</head>
<body>
<?php include("include/navbar.php"); ?>





    <div class="wrapper" style="width: 1111px; margin: 0 auto; font-size: 22px;">
        <div class="container-fluid">
		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for blog title.." title="Type in a name">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Blogs Details</h2>
                        <a href="upload_blog.php" class="btn pull-right">Add New Blog</a>
                    </div>
                    <?php
                    // Include config file
                    include('include/connection.php');
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM blog";
                    if($result = mysqli_query($connect, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped' id='myTable'>";
                                echo "<thead>";
                                    echo "<tr>";                                      
                                        echo "<th>#</th>";
                                        echo "<th>Blog Title</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";                                       
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['blog_title'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='view_blog.php?id=". $row['id'] ."' title='View Blog' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='update_blog.php?id=". $row['id'] ."' title='Update Blog' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='include/delete_blog.php?id=". $row['id'] ."' title='Delete Blog' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($connect);
                    ?>
                    <div class="page-header clearfix">
                        
                        
                    </div>
                </div>
            </div>        
        </div>
    </div>
</body>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</html>