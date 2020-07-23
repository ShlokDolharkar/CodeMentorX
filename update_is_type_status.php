<?php

//update_is_type_status.php

include('include/connection.php');

session_start();

$query = "
UPDATE login_details 
SET is_type = '".$_POST["is_type"]."' 
WHERE login_details_id = '".$_SESSION["login_details_id"]."'
";

$result = mysqli_query($con, $query);

?>