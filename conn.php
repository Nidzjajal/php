<?php
$conn=new mysqli ("localhost","root","","exam");

if($conn)
    echo "connection";
else  
    echo $conn->error;
?>