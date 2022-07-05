<!DOCTYPE html>
<html lang ="en">

<head>
    <title>JavaJam Coffee House</title>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<!-- Remove[<link rel="stylesheet" href="javajam.css">]-->    

</head>


<body>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
 
    <div class="container" style="background-color: navajowhite; height: 110px;"><img src="javajamlogo.jpg" alt="This is the logo of JavaJam" align="left" width="140" height="110">
    <h1 style="padding-left: 200px; padding-top: 30px;">JavaJam Coffee House</h1></div>

<div class="container" style="background-color:lightsalmon;">
    
    <div class="form-row">
    <div class="col-1">
    <nav class="navbar"> 
        <ul class="navbar-nav mr-auto"> 
            <li class="nav-item active"><a class="nav-link" href="index.html">Home</a> </li>
            <li><a class="nav-link" href="menu.html">Menu</a>  </li>
            <li><a class="nav-link" href="music.html">Music</a> </li>
            <li><a class="nav-link" href="jobs.html">Jobs</a></li>
            <li><a class="nav-link" href="signUp.php">Sign Up</a></li>
            <li><a class="nav-link" href="profile.php">Profile</a></li>

        </ul>
    </nav>
    </div>
    

    <div class="col">
    <main><br>
        <img src="windingroad.jpg" alt="winding road through the woods" align="right" width="400" height="250">
        <h1>Sign Up as JavaJam Member</h1>

        <p>
        Please fill in this form to create an account. Required information is marked with an asterisk (*).
        </p>

        <form class="col-md-5" action="processSignUp.php" method ="post" >
            <div class="form-group">
            <label for="mName">*Name: </label> <br>
            <input type="text" class="form-control col-sm-4" id="mName" name="name" required="required"> <br>
            </div>

            <div class="form-group">
            <label for="myEmail">*E-mail: </label> <br>
            <input type="email" class="form-control col-sm-4" id="mEmail" name="email" required="required"> <br>
            </div>

            <div class="form-group">
            <label for="password">*Password:</label>
            <input class="form-control col-sm-4" id="password" name="password" type="password" required>
            </div>

            <div class="form-group">
            <label for="rpassword">*Repeat Password:</label>
            <input class="form-control col-sm-4" id="rpassword" name="rpassword" type="password" required>
            </div>
        </form>
    
    <a href="profile.php" class="btn btn-primary" type="button" >Sign up</a>

    </div>


</div>

    <footer class="container text-center font-italic" style="background-color: navajowhite;">       
        <p><small><i>
            Copyright &copy; 2021 JavaJam Coffee House <br>
            <a href="jobs.html">yourfirstname@yourlastname.com</a>
        </i></small></p>
    </footer>

</body>
</html>