<?php
$uName = $email = $password = $rpassword = "";

    $uName = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $rpassword = $_POST["rpassword"];


$fakeDB = fopen('javamember.txt','a');
$user = $uName. ','.$email.','.$password.','.$rpassword."\n";
fwrite($fakeDB, $user);
fclose($fakeDB);
//header("Location: profile.php?action=login_success");

?>