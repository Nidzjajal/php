<?php
$conn=new mysqli ("localhost","root","","kbpccs");

if($conn)
    echo "connection";
else   
    echo"error";
?>

<html>
    <head>
        <link rel="stylesheet" href="bootstrap.min.css"/>
</head>