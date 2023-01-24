<?php
include("emp_show.php");
?>


<?php
    $select="select * from employe";
    $result=$conn->query($select);
    
    echo"<table class ='table container bg-info'>";
    echo"<tr class='bg-primary  text-white'><th>id</th><th>Name</th><th>Password</th><th>Email</th><th>Mobile Number</th><th>Action</th></tr>";
    foreach ($result as $r)
    {
        echo"<tr> ";
        echo"<td>$r[id]</td>";
        echo"<td>$r[name]</td>";
        echo"<td>$r[password]</td>";
        echo"<td>$r[email]</td>";
        echo"<td>$r[mobile]</td>";
        echo"<td><a href='emp_delete.php?id=$r[id]' class='btn bg-danger m-2 text-dark'>Delete</a><a href='emp_Update.php?id=$r[id]'class='btn bg-warning text-dark'>Edit</a></td>";
        echo"</tr>";
    }
    echo"</table>";
    
?>