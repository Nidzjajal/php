<?php
$conn= new mysqli("localhost","root","","kbpccs");

if($conn)
    echo"connected";
else
    echo $conn->error;


?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap.min.css"/>
        <style>
            body
            {
                background:linear-gradient(lightyellow,skyblue);
            }
            
        </style>
</head>
</html>