<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
        <style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="blog.css">
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

        <!-- display all blogs code goes here -->

        <form action="blog_action.php" method="POST">
            <fieldset>
                <!-- <div class="col-40">
                    <textarea id="blog_text" name="blog_text" placeholder="Write something.."></textarea>
                </div> -->
             <input type="submit" value="Save" style="margin-left: 1195px;">
            </fieldset>
        </form>

        <table>
<tr>
<th>Id</th>
<th>blog_title</th>
<th>blog_text</th>
</tr>

        <?php
$conn = mysqli_connect("localhost", "root", "", "codementor");
        
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, blog_title, blog_text FROM blog";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["blog_title"] . "</td><td>"
. $row["blog_text"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
    </body>
</html>