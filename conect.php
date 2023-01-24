<?php
$conn=  new mysqli("localhost","root","","employee");
if($conn)
    echo"connection";
else    
    echo $conn->error;
?>