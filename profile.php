<?php
//echo $user;
$line ='';
$f = fopen('javamember.txt','r');
$cursor = -1;
fseek($f, $cursor, SEEK_END);
$char = fgetc($f);

//trim trailing newline charaters in the file
while ($char === "\n" || $char === "\r"){
    fseek($f, $cursor--, SEEK_END);
    $char = fgetc($f);
}

//read until the next line of the file begins or the first neline char
while($char !== false && $char !== "\n" && $char !== "\r") {
    //prepand the new chahracter
    $line = $char . $line;
    fseek($f, $cursor--, SEEK_END);
    $char = fgetc($f);
}
$user = explode(',', $line);
?>

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
    <h1 style="padding-left: 200px; padding-top: 30px;">JavaJam Coffee House = Member Profile</h1></div>
<main>
<div class="container" style="background-color:lightsalmon;">
    
    <h2> Hi <?php echo $user[0]?>, Welcome to JavaJam Coffee House!</h2>
    <div class="row p-3 border border-dark">
    <div class="col-5">
        Name:
    </div>

    <div class="col-7">
        <?php echo $user[0] ?>
    </div>
    </div>

    <div class="row p-3 border border-dark">
    <div class="col-5">
        Email:
    </div>

    <div class="col-7">
        <?php echo $user[1] ?>
    </div>
    </div>

</div>
</main>

    <footer class="container text-center font-italic" style="background-color: navajowhite;">       
        <p><small><i>
            Copyright &copy; 2021 JavaJam Coffee House <br>
            <a href="jobs.html">yourfirstname@yourlastname.com</a>
        </i></small></p>
    </footer>

</body>
</html>