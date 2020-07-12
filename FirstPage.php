<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">
		
        <link rel="stylesheet" href="css/navbar.css">
		<link rel="stylesheet" href="css/blog.css">
    </head>

    <body>

<!-- MBI Staffing Navbar -->
<div class="example3">
  <nav class="navbar navbar-primary navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="images/logo.jpg" alt="Logo">
        </a>
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
</div>


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