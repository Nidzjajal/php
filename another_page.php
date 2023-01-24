<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap.min.css"/>
        
</head>
</html>
<?php

echo"<table class='table container text-white bg-dark'";
echo"<tr><th class='colspan='2' text-center'>Information<th></tr>";
echo"<tr><th>username</th><td>".$_SESSION['username']."</td></tr>";

echo"<tr><th>gender</th><td>".$_SESSION['gender']."</td></tr>";

echo"<tr><th>course</th><td>".$_SESSION['course']."</td></tr>";

echo"<tr><th>city</th><td>".$_SESSION['city']."</td></tr>";

echo"<tr><th>phone</th><td>".$_SESSION['mobile']."</td></tr>";


echo"</table>";
?>