<?php
    include('conection.php');
?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap.min.css"/>
</head>
</html>
<?php
    $select="select * from student";
    $result=$conn->query($select);
//print_r($result);
    echo"<div class='row container text-right'>";
        echo"<div class='col-12 text-right '>";
                echo"<a href='loginpage.php' class='btn bg-dark text-white'>Add</a>";
        echo"</div>";
    echo"</div>";
    echo"<div class='container bg-info text-white mt-3 w-50'>";
        echo"<table class='table'>";
                 echo"<tr class='bg-warning'><th>id</th><th>userName</th><th>password</th><th>action</th></tr>";
                 foreach($result as $row)
                {
                    echo"<tr>";
                         echo"<td> $row[id] </td>";
                         echo"<td> $row[username] </td>";
                        echo"<td> $row[password] </td>";
                        echo"<td><a href='login_delete.php?id=$row[id]' class='btn bg-danger m-2 text-dark'>Delete</a><a href='login_Update.php?id=$row[id]'class='btn bg-warning text-dark'>Edit</a></td>";
                     echo"</tr>";
                }
                echo"</table>";
  echo"</div>";
    ?>