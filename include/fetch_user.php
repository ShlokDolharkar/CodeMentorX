<?php

//fetch_user.php

include('connection.php');



session_start();

// $query = "
// SELECT * FROM teacher_user 
// WHERE user_id != '".$_SESSION['user_id']."'  
// ";


	# code...
	// $_SESSION['lang']="Cpp='yes'";







 
 
if($_SESSION['user_type']=="student"){	
	$query = "SELECT a.user_name, a.user_email,a.user_id ,b.teacher_id ,b.Cpp, b.Java, b.Python FROM teacher_user a, teacher_skill b WHERE a.user_id = b.teacher_id ";

// AND ".$_SESSION['lang']." ";


$result = mysqli_query($con, $query);


 
//$result = mysqli_fetch_array($statement);



$output = '
<table class="table table-bordered table-striped">
 <tr>
  <td>Username</td>
  <td>C++</td>
  <td>Java</td>
  <td>Python</td>
  <td>Status</td>
  <td>Action</td>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
	$status = '';
	 $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
	 $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
	 $user_last_activity = fetch_user_last_activity($row['user_id'], $con);
	if($user_last_activity > $current_timestamp)
	{
		$status = '<span class="label label-success">Online</span>';
	}
	else
	{
		$status = '<span class="label label-danger">Offline</span>';
	}

 $output .= '

 <tr>
  <td>'.$row['user_name'].' '.count_unseen_message($row['user_id'], $_SESSION['user_id'], $con).'</td>
  <td><font color="blue">'.$row['Cpp'].'</font></td>
  <td>'.$row['Java'].'</td>
  <td><font color="red">'.$row['Python'].'</font></td>
  <td>'.$status.'</td>
  <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row['user_id'].'" data-tousername="'.$row['user_name'].'">Start Chat</button></td>
 </tr>
 ';
}
}
else
{
	$query = "SELECT user_id, user_name, user_email FROM student_user";
	$result = mysqli_query($con, $query);
	$output = '
	<table class="table table-bordered table-striped">
	 <tr>
	  <td>User Id</td>
	  <td>Username</td>
	  <td>Email</td>
	  <td>Status</td>
  		<td>Action</td>
	 </tr>
	';
	while($row = mysqli_fetch_array($result))
		{
			$status = '';
			 $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
			 $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
			 $user_last_activity = fetch_user_last_activity($row['user_id'], $con);
			if($user_last_activity > $current_timestamp)
			{
				$status = '<span class="label label-success">Online</span>';
			}
			else
			{
				$status = '<span class="label label-danger">Offline</span>';
			}

		 $output .= '

		 <tr>
		  <td>'.$row['user_id'].'</td>
		  <td>'.$row['user_name'].' '.count_unseen_message($row['user_id'], $_SESSION['user_id'], $con).' '.fetch_is_type_status($row['user_id'], $con).'</td>
		  <td>'.$row['user_email'].'</td>
		  <td>'.$status.'</td>
		  <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row['user_id'].'" data-tousername="'.$row['user_name'].'">Start Chat</button></td>
		 </tr>
		 ';
		}

}

$output .= '</table>';

echo $output;


?>


