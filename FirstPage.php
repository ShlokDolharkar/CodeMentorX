
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
                            <button>Chat</button>
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

        <form method="POST" action="include/blog_action.php">
            <fieldset>
                <div class="col-75">
                    <textarea id="blog_text" name="blog_text" placeholder="Write something.."></textarea>
                </div>
             <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">SAVE</button>
            </fieldset>
            
        </form>
    </body>
</html>