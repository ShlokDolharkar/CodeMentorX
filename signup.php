<!DOCTYPE html>
<html>
<head>
	<title>Create New account</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|courgette|Pacifico:400,700">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
</head>
<body>
	<div class="signup-form">
		<form action="" method="post">
			<div class="form-header">
				<h2>Sign Up</h2>
				<p>Fill Form</p>
			</div>
			<div>
				<script type="text/javascript">
                    function myFunction() {
                    var chkYes = document.getElementById("chkYes");
                    var dvPassport = document.getElementById("dvPassport");
                    dvPassport.style.display = chkYes.checked ? "block" : "none";
                    }
                </script>

				<input type="radio" id="chkYes" onclick="myFunction()"  name="user_type" value="teacher">Teacher
			<input type="radio" id="chkNo" onclick="myFunction()" name="user_type" value="student" checked>Student
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user_name" placeholder="Example: Shlok" autocomplete="off" class="form-group" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="user_pass" placeholder="Enter Password" autocomplete="off" class="form-group" required>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="user_email" placeholder="someone@site.com" autocomplete="off" class="form-group" required>
			</div>
			<div class="form-group">
				<label>Profile Picture</label>
                     <input type="file" name="image" id="image" required />
                </div> 

            <div class="form-group">
				<label>Enter Your Best Friend Name</label>
				<input type="text" name="forgotten_answer" placeholder="Naresh" autocomplete="off" class="form-group" required>
			</div>

			<div id="dvPassport" class="container" style="display: none">
        <h1>Choose Skills</h1>
        <div class="buttonC">
            <!-- <a href="index2.html" class="btn">C</a>
            <a href="#" class="btn">C++</a>
            <a href="#" class="btn">JAVA</a>
            <a href="#" class="btn">PYTHON</a>
            <a href="#" class="btn">CURL</a> -->
            
              <input type="checkbox" name="lang2" value="C++">
              <label for="C++"> C++</label><br>
              <input type="checkbox" name="lang3" value="Java" >
              <label for="Java"> Java</label><br>
              <input type="checkbox" name="lang5" value="PYTHON">
              <label for="PYTHON"> Python</label><br><br>
              
        </div>
    </div>
			<div class="form-group">
				<label class="checkbox-inline">
					<input type="checkbox" required>
					I accept the <a href="#">Terms of Use</a></label>
			</div>
			
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
			</div>

			
			<?php 
			include("include/signup_user.php");
			 ?>
		</form>

		<div class="text-center small"> Alredy have an account
		<a href="signin.php">Click here</a>
		</div>
	</div>

</body>
</html>



<script>  
 $(document).ready(function(){  
      $('#sign_up').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  