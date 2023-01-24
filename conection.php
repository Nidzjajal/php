<?php
$conn=new mysqli ("localhost","root","","kbpccs");

if($conn)
    echo "connection";
else   
    echo"error";
?>