<?php
    include('conn.php');
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
                echo"<a href='student.php' class='btn bg-dark text-white'>Add</a>";
        echo"</div>";
    echo"</div>";
    echo"<div class='container bg-info text-white mt-3 w-50'>";
        echo"<table class='table'>";
                 echo"<tr class='bg-warning'><th>Name</th><th>PHP</th><th>OS</th><th>vbnet</th><th>ooad</th></tr>";
                 foreach($result as $row)
                {
                    echo"<tr>";
                         echo"<td> $row[name] </td>";
                         echo"<td> $row[php] </td>";
                        echo"<td> $row[os] </td>";
                        echo"<td> $row[vbnet] </td>";
                        echo"<td> $row[ooad] </td>";
                     echo"</tr>";
                }
                echo"</table>";
  echo"</div>";
    ?>