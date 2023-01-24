<?php
include('conect.php');
?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap.min.css"/>
</head>
</html>

<?php
$select="select * from employe";
$result=$conn->query($select);
    echo"<div class='row'>";
        echo"<div class='col-12 text-right'>";
        echo"<a href='employe.php' class='btn bg-dark text-white >Add</a>";
        echo"</div>";
    echo"</div>";

    echo"<div class='container bg-info text-dark>";
    echo"<table class='table'>";
        echo"<tr><th>Name</th><th>Basic salary</th></tr>";
        foreach($result as $row)
        {
            echo"<tr>";
                 echo"<td> $row[name] </td>";
                 echo"<td> $row[salary] </td>";
            
             echo"</tr>";
        }
        echo"</table>";
echo"</div>";
?>
